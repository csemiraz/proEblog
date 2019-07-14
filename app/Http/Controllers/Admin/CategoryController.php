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

    public function manageCategory()
    {
    	$categories = Category::latest()->get();
    	return view('back-end.admin.category.manage-category', ['categories'=>$categories]);
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('back-end.admin.category.edit-category', compact('category')); 
    }

   public function editImage($request)
    {
        $category = Category::find($request->category_id);

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
            $imageName = $category->image;
        }
        return $imageName;
    }

    public function updateCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:30',
            'image' => 'image|mimes:jpg,jpeg,png,gif',
            'status' => 'required'
        ]);

        $category = Category::find($request->category_id);
        $imageName = $this->editImage($request);

        $category->name = $request->name;

        if($category->image != $imageName && file_exists('assets/images/category/thumb/'.$category->image)){
            unlink('assets/images/category/thumb/'.$category->image);
        }
        if($category->image != $imageName && file_exists('assets/images/category/thumb/'.$category->image)){
            unlink('assets/images/category/slider/'.$category->image);
        }
        $category->image = $imageName;
        $category->status = $request->status;
        $category->save();

        return redirect()->route('manage-category')->with('message', 'Category info updated successfully');
    }

    public function publishCategory($id)
    {
        $category = Category::find($id);

        $category->status = 1;
        $category->save();

        return redirect()->back()->with('message', 'Category info published successfully');
    }

    public function unPublishCategory($id)
    {
        $category = Category::find($id);

        $category->status = 0;
        $category->save();

        return redirect()->back()->with('message', 'Category info unpublished successfully');
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);

        if(file_exists('assets/images/category/thumb/'.$category->image)){
            unlink('assets/images/category/thumb/'.$category->image);
        }
        if(file_exists('assets/images/category/slider/'.$category->image)){
            unlink('assets/images/category/slider/'.$category->image);
        }

        $category->delete();

        return redirect()->back()->with('message', 'Category info deleted successfully');
    }



}
