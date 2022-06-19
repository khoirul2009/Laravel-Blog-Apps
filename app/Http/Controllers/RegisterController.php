<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index', [
            'title' => 'Sign Up',
            'active' => 'Sign Up'
        ]);
    }
    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|unique:users|max:255|email:dns',
            'name'  => 'required',
            'username' => 'required|min:5|max:255',
            'password'  => 'required|min:5|max:255',
            'confirmPassword'  => 'required|min:5|max:255|same:password'

        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        $request->session()->flash('success', 'User Success Created, You Can Login Now !');

        return redirect('/signin');
    }
}
