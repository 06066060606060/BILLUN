<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sites;
use App\Models\Emails;
use App\Models\Settings;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GlobalController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function indexen()
    {
        return view('en');
    }

    //function to add +1 to settings table
    public function download()
    {
    
        $settings = Settings::where('id', 1);
        $settings->increment('request');

        return redirect()->back();
    }

    static function getUsers()
    {
        //retrive all users
        $users = User::where('id', '<', 99)->get();
        return $users;
    }

    static function getSites()
    {
        //retrive all sites
        if (backpack_user()->role == 'user') {
            $sites = Sites::where('utilisateur', backpack_user()->id)
                ->get()
                ->sortByDesc('id');
        } else {
            $sites = Sites::where('utilisateur', 99)->get();
        }

        return $sites;
    }

    static function version(){
        $filename = '../public/build/manifest.json';
        $ver = date ("d/m/y H:i", filemtime($filename) + 3600);
        $version = $ver;
        return $version;
    }





    static function getallSites()
    {
        $allsites = Sites::all()->sortByDesc('id');
        return $allsites;
    }

    static function getSitesecure()
    {
        //retrive all sites

        $sitesecure = Sites::where('secure', 1)->get();

        return $sitesecure;
    }

    static function getSitesinsecure()
    {
        //retrive all sites

        $sitesinsecure = Sites::where('secure', 0)->get();

        return $sitesinsecure;
    }

    static function getEmailsecure()
    {
        //retrive all sites

        $emailsecure = Emails::where('secure', 1)->get();

        return $emailsecure;
    }

    static function getEmailinsecure()
    {
        //retrive all sites

        $emailinsecure = Emails::where('secure', 0)->get();

        return $emailinsecure;
    }

    static function settings()
    {
        $settings = Settings::where('id', 1)->get();
        $settings = $settings[0]->request;
        return $settings;
    }

    static function getEmails()
    {
        //retrive all sites
        if (backpack_user()->role == 'user') {
            $emails = Emails::where('utilisateur', backpack_user()->id)
                ->get()
                ->sortByDesc('id');
        } else {
            $emails = Emails::all()->sortByDesc('id');
        }
        return $emails;
    }

    //function to save the urls list from post request
    function bulksave(Request $request)
    {
        //get the list of urls from the post request
        $urls = $request->input('urls');
        //remove https:// and http:// from the urls
        $urls = str_replace('https://', '', $urls);
        $urls = str_replace('http://', '', $urls);
        //remove www. from the urls
        $urls = str_replace('www.', '', $urls);
        $secure = $request->input('secure');
        $utilisateur = backpack_user()->id;
        //split the list of urls into an array

        //loop through the array of urls
        foreach ($urls as $url) {
            //check if the url is not empty
            if (!empty($url)) {
                //check if the url is not already in the database
                if (Sites::where('url', $url)->doesntExist()) {
                    //save the url in the database
                    $site = new Sites();
                    $site->url = $url;
                    $site->secure = $secure;
                    $site->utilisateur = $utilisateur;
                    $site->save();
                }
            }
        }
        //redirect to the sites list
        return redirect()->back();
    }
    function bulksaveemail(Request $request)
    {
        //get the list of urls from the post request
        $emails = $request->input('mails');
        $secure = $request->input('secure');
        $utilisateur = backpack_user()->id;
        //split the list of emails into an array

        //loop through the array of emails
        foreach ($emails as $email) {
            //check if the email is not empty
            if (!empty($email)) {
                //check if the email is not already in the database
                if (Emails::where('adresse', $email)->doesntExist()) {
                    //save the email in the database
                    $site = new Emails();
                    $site->adresse = $email;
                    $site->secure = $secure;
                    $site->utilisateur = $utilisateur;
                    $site->save();
                }
            }
        }
        //redirect to the sites list
        return redirect()->back();
    }
}
