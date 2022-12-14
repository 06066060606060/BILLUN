<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sites;
use App\Models\Emails;
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

    public function declareSite(Request $request)
    {
         $uri =$request->signal;
         $out = new \Symfony\Component\Console\Output\ConsoleOutput();   //logger in terminal
         $out->writeln($uri);
         // if uri contain @
            if(preg_match('/@/', $uri)){
                if (Emails::where('adresse', $uri)->doesntExist()) {
                    $sites = Emails::All();
                    $sites = new Emails();
                    $sites->adresse = $uri;
                    $sites->secure = 0;
                    $sites->utilisateur = 99;
                    $sites->save();
                  }
            }
            else{
                if (Sites::where('url', $uri)->doesntExist()) {
                    $sites = Sites::All();
                    $sites = new Sites();
                    $sites->url = $uri;
                    $sites->secure = 0;
                    $sites->utilisateur = 99;
                    $sites->save();
                  }
            }


       
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
     * r??cup??re l'uri depuis l'url donn??
     *
     * @param  String $url
     * l'url ?? contr??ler
     * @return String
     * l'uri si l'url donn?? est correct,
     * sinon l'url lui m??me
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
