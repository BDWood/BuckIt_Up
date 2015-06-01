<?php 
namespace App\Http\Controllers;

use Auth;

class UserController extends Controller {

    public function create() {
        return view('create_account');
    }

    public function edit() {
        return view('edit_account');
    }

    public function login() {
        return view('login');
    }

    public function logout() {
        return view('logout');
    }

    public function view() {
        if (!auth::check()) {
            return redirect('login');
        } 
        return view('view_account');
    }

}