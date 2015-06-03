<?php 
namespace App\Http\Controllers;

use App\Models\User;

use Auth;

class UserController extends Controller {

    public function create() {
        return view('auth/register');
    }

    public function postCreate() {
        return redirect('home') ;    
    }

    public function edit($id) {
        $user = new User($id);
        return view('edit_user');
    }

    public function postEdit($id) {
        $user = new User($id);
        $user->first_name = Request::get('first_name');
        $user->last_name = Request::get('last_name');
        $user->email = Request::get('email');
        $user->username = Request::get('username');
        $user->save();
        return redirect('user');
    }

    public function login() {
        return view('auth/login');
    }

    public function logout() {
        Auth::logout();
        return redirect('home');
    }

    public function postLogin() {
        return redirect('home');
    }

    public function view($id) {
        $user = new User($id);
        if (!auth::check()) {
            return redirect('auth/login');
        } 
        return view('user', ['user' => $user]);
    }

    public function viewAll() {

    }

}