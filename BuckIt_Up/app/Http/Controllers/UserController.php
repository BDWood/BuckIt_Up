<?php 
namespace App\Http\Controllers;

use App\Models\User;

use Auth;

class UserController extends Controller {

    /**********************************************
        Uses Laravel's built in Registering 
        to create new users
    **********************************************/

    public function create() {
        return view('auth/register');
    }

    /**********************************************
        Posts the created user to the database 
        and encrypts their code with Laravel's 
        built in system
    **********************************************/

    public function postCreate() {
        return redirect('home') ;    
    }

    /**********************************************
        Allows for editing of Users
    **********************************************/

    public function edit($id) {
        $user = new User($id);
        return view('edit_user');
    }

    /**********************************************
        Saves the edits to the database. 
        CANNOT yet edit passwords.
    **********************************************/

    public function postEdit($id) {
        $user = new User($id);
        $user->first_name = Request::get('first_name');
        $user->last_name = Request::get('last_name');
        $user->email = Request::get('email');
        $user->username = Request::get('username');
        $user->save();
        return redirect('user');
    }

    /**********************************************
        Uses Laravel's built in login 
        functionality to get Users logged in
    **********************************************/

    public function login() {
        return view('auth/login');
    }

    /**********************************************
        Logs users out of our application with
        Laravel's built in system
    **********************************************/

    public function logout() {
        Auth::logout();
        return redirect('home');
    }

    /**********************************************
        Shows the User Profile page
    **********************************************/

    public function view() {
        if (!Auth::check()) {
            return redirect('auth/login');
        } 
        $user = Auth::user();
        return view('user', ['user' => $user]);
        
    }

}