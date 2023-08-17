<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function process (Request $request){
        $validated = $request->validate([
    
            "email" =>['required','email'] ,
            "password" => ['required'],
        ]);
        if(auth()->attempt($validated))
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'Welcome back !');  

    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect ('/')->with('message', 'Log out successful');

    }

    public function store(Request $request){
        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            "email" =>['required','email', Rule::unique('users', 'email')] ,
            "password" => ['required', 'min:8', 'max: 50'],
        ]);
        $valdiate['password']=bcrypt($validated['password']);

        $user = User::create($validated);
        auth()->login($user);   
       
    }

    public function login(){
        
            return view ('user.login');
       
    }

    public function register(){
        
        return view ('user.register');
   
}


    public function show($id){
    $data = array(
   

);

        return view ('user')
        ->with ('name', 'PinoyCoder')
        ->with ('age', 2)
        ;
    }

    public function index (){
        return 'Helollo';
    }
}
