<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class CategoryController extends Controller
{
    public function addCategory()
    {
    	return view('back-end.admin.category.add-category');
    }

   public function image($request)
    {
    	$image = $request->file('image');
    	$slug = str_slug($request->name);

    	if(isset($image)){
    		$imageExtension = $image->getClientOriginalExtension();
    		$currentDate = Carbon::now()->toDateString();
    		$imageName = $slug.'_'.$currentDate.'_'.time().'.'.$imageExtension;
    		$thumbPath = 'assets/images/category/thumb/';

    		if(!file_exists($thumbPath)){
    			mkdir($thumbPath, 666, true);
    		}

    		Image::make($image)->resize(500,300)->save($thumbPath.$imageName);

    		$sliderPath = 'assets/images/category/slider/';
    		if(!file_exists($sliderPath)){
    			mkdir($sliderPath, 666, true);
    		}

    		Image::make($image)->resize(800,500)->save($sliderPath.$imageName);
    	}
    	else {
    		$imageName = 'category.jpg';
    	}
    	return $imageName;
    }

   

    public function storeCategory(Request $request)
    {
    	$request->validate([
    		'name' => 'required|min:3|max:20|regex:/(^([a-zA-z ]+)(\d+)?$)/u',
    		'image' => 'image|mimes:jpg,png,jpeg,gif',
    		'status' => 'required'
    	]);

    	$imageName = $this->image($request);

    	$category = new Category();
    	$category->name = $request->name;
    	$category->image = $imageName;
    	$category->status = $request->status;
    	$category->save();

    	return redirect()->back()->with('message', 'Category info saved successfully');
    }
}
