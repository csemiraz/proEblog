<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('front-end.home.homeContent');
    }

    public function test() {
        return view('back-end.admin.home.dashboard');
    }


}
