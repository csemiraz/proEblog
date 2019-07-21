<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subscriber;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function manageSubscriber()
    {
    	$subscribers = Subscriber::all();
    	return view('back-end.admin.user.manage-subscriber', compact('subscribers'));
    }

    public function deleteSubscriber($id)
    {
    	$subscriber = Subscriber::find($id);

    	$subscriber->delete();

    	Toastr::success('Remove from subscriber list', 'Success');
    	return redirect()->back();
    }
}
