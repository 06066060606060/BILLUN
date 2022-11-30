<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GlobalController extends Controller
{

    public function index()
    {
        return view('index');
    }


}