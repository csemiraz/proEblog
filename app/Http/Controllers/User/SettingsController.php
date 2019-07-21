<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{
    public function index()
    {
    	$user_id = Auth::user()->id;
    	$user = User::find($user_id);

    	return view('back-end.user.profile.profile', compact('user'));
    }

     public function imageUpdate($request)
	    {
	    	$user = User::find($request->user_id);

	    	$image = $request->file('image');
	    	$slug = str_slug($request->name, '-');

	    	if(isset($image)) {
	    		$imageExtension = $image->getClientOriginalExtension();
	    		$currentDate = Carbon::now()->toDateString();
	    		$imageName = $slug.'_'.$currentDate.'.'.$imageExtension;

	    		$imagePath = 'assets/images/user/';
	    		if(!file_exists($imagePath)){
	    			mkdir($imagePath, 666, true);
	    		}

	    		Image::make($image)->resize(360,360)->save($imagePath.$imageName);
	    	}
	    	else{
	    		$imageName = $user->image;
	    	}
	    	return $imageName;
	    }

    public function updateProfile(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'about' => 'max:255',
    		'image' => 'image'
    	]);
    	$imageName = $this->imageUpdate($request);

    	$user = User::find($request->user_id);

    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->about = $request->about;

    	if(file_exists('assets/images/user/'.$user->image) && $user->image != $imageName){
    		unlink('assets/images/user/'.$user->image);
    	}

    	$user->image = $imageName;

    	$user->save();

    	Toastr::success('Profile info updated successfully', 'Success');
    	return redirect()->back();
    }

    public function changePassword(Request $request)
    {
    	$request->validate([
    		'old_password' => 'required',
    		'password' => 'required|confirmed|min:8|max:100'
    	]);

    	//db_password = $hashed_password
    	$db_password = Auth::user()->password;

    	if(Hash::check($request->old_password, $db_password)){
    		if(!Hash::check($request->password, $db_password)){
    			$user = User::find(Auth::user()->id);

    			$user->password = Hash::make($request->password);
    			$user->save();
    			Toastr::success('Password changed successfully', 'Success');
    			return redirect()->back();
    		}
    		else{
    			Toastr::info('New password can not be matched with old password', 'Info');
    			return redirect()->back();
    		}
    	}
    	else{
    		Toastr::warning('Current password is invalid', 'Warning');
    		return redirect()->back();
    	}

    }



}
