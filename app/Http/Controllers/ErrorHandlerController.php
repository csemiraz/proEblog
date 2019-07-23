<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorHandlerController extends Controller
{
    public function error404()
    {
    	return view('front-end.errors.404');
    }

    public function error405()
    {
    	return view('front-end.errors.405');
    }
}
