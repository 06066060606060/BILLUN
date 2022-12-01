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

    
}