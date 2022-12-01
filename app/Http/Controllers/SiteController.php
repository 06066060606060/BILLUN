<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sites;
use App\Models\Settings;
use Illuminate\Support\Facades\Log;  //log to laravel.log

/**
 * classe SiteController
 * classe de gestion des sites
 */
class SiteController extends Controller
{

    /**
     * function controlUrl($request)
     * controle le statut de l'url
     *
     * @param  Request $request
     * la requette de l'appel
     *
     * @return Response
     */
    public function controlUrl(Request $request)
    {


        
        $uri = $this->getUri($request->url);
        return response()->json(["statut" => $this->getSatutFromUri($uri)]);
    }

    public function getSatutFromUri($uri)
    {
        $sites = Sites::where('url', $uri)->get();

        if(count($sites) > 0)
        {
            // $out = new \Symfony\Component\Console\Output\ConsoleOutput();   //logger in terminal
            // $out->writeln("match");
            return ($sites[0]->secure)?1:-1;
        }
        if(preg_match('/^(.*)\/$/', $uri, $matches))
        {
            $sites = Sites::where('url', $matches[1])->get();
        
            if(count($sites) > 0)
            {
                // $out = new \Symfony\Component\Console\Output\ConsoleOutput();   //logger in terminal
                // $out->writeln("secure");
                return ($sites[0]->secure)?1:-1;
            }
        }
        if(preg_match('/^(.*\/).+$/', $uri, $matches))
        {
            // $out = new \Symfony\Component\Console\Output\ConsoleOutput();   //logger in terminal
            // $out->writeln("match");
            return $this->getSatutFromUri($matches[1]);
        }
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();   //logger in terminal
            $out->writeln("no match");
        return 0;
    }

    /**
     * function getUri($url)
     * récupère l'uri depuis l'url donné
     *
     * @param  String $url
     * l'url à contrôler
     * @return String
     * l'uri si l'url donné est correct,
     * sinon l'url lui même
     */
    private function getUri($url)
    {
      if(preg_match('/^[a-zA-Z]*:\/\/(.*)$/', $url, $matches)){
        $uri = $matches[1];
      }
      else {
        $uri = $url;
      }

      return $uri;
    }
}
