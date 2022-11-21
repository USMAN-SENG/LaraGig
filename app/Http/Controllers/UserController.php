<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //register form
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     // store new users
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required|min:6',
            'email' => 'required|unique:users,email,except,id|email',
            'password' => 'required|confirmed|min:6',
        ]);

        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //create user
        $user = User::create($formFields);

        // after regiter , we automatically log in the user
        auth()->login($user);

        return redirect('/listings')->with('msg', 'You Are Login');
    }

    //logout the user
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/listings')->with('msg', 'You Are Logout');
    }

    //show login form to the user
    public function login(){

        return view('users.login');
    }

    //check login info  
    public function authenticate(Request $request){

        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/listings')->with('msg', 'You Are Login');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials '
        ])->onlyInput('email');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
