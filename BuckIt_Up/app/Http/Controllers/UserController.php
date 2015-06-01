<?php 
namespace App\Http\Controllers;

use Auth;

class UserController extends Controller {

    public function create() {
        return view('reg_login');
    }

    public function postCreate() {
        return redirect('home');    
    }

    public function edit() {
        return view('edit_account');
    }

    public function login() {
        return view('reg_login');
    }

    public function logout() {
        return view('logout');
    }

    public function view() {
        if (!auth::check()) {
            return redirect('reg_login');
        } 
        return view('view_account');
    }

    public function viewAll() {

    }

}