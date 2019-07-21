<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(Auth::check() && Auth::user()->role->id==1){
            $this->redirectTo=route('admin.dashboard');
        }
        elseif(Auth::check() && Auth::user()->role->id==2){
            $this->redirectTo=route('author.dashboard');
        }
        else{
            $this->redirectTo=route('user.dashboard');
        }
        
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:120', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'about' => ['min:8', 'max:255'],
            'image' => ['image']
        ]);
    }

    /* User image */

    public function image()
    {
        $request = request();
        $image = $request->file('image');
        $slug = str_slug($request->name);

        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = $slug.'-'.$currentDate.'-'.time().'.'.$imageExtension;

            $imagePath = 'assets/images/user/';
            if(!file_exists($imagePath)){
                mkdir($imagePath, 666, true);
            }

            Image::make($image)->resize(360,360)->save($imagePath.$imageName);
        }
        else{
            $imageName = 'user.png';
        }
        return $imageName;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $imageName = $this->image();

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'about' => $data['about'],
            'image' => $imageName,
        ]);
    }
}
