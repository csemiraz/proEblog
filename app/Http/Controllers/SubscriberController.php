<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscriber(Request $request)
    {
    	$request->validate([
    		'email' => 'required|email|unique:subscribers',
    	]);

    	$subscriber = new Subscriber();

    	$subscriber->email = $request->email;
    	$subscriber->save();

    	Toastr::success('You have been added to subscriber list', 'Success');
    	return redirect()->back();
    }
}
