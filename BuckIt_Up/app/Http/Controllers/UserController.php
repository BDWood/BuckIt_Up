<?php 
namespace App\Http\Controllers;

use Auth;

class UserController extends Controller {

    public function create() {
        return view('auth/register');
    }

    public function postCreate() {
        return redirect('home') ;    
    }

    public function edit() {
        return view('edit_account');
    }

    public function login() {
        return view('auth/login');
    }

    public function logout() {
        return view('logout');
    }

    public function view() {
        if (!auth::check()) {
            return redirect('auth/login');
        } 
        return view('view_account');
    }

    public function viewAll() {

    }

}