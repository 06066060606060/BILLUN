<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sites;
use App\Models\Emails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GlobalController extends Controller
{

    public function index()
    {
        return view('index');
    }

    static function getUsers()
    {
        //retrive all users
        $users = User::all();
        return $users;
    }

    static function getSites()
    {
        //retrive all sites
        $sites = Sites::all()->sortByDesc('id');
        return $sites;
    }

    static function getEmails()
    {
        //retrive all sites
        $emails = Emails::all()->sortByDesc('id');
        return $emails;
    }

    //function to save the urls list from post request
    function bulksave(Request $request)
    {
      
        //get the list of urls from the post request
        $urls = $request->input('urls');
        $secure = $request->input('secure');
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
                    $site->save();
                }
            }
        }
        //redirect to the sites list
        return redirect()->back();
    }
    
}