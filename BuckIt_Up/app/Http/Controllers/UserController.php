<?php namespace App\Http\Controllers;

class UserController extends Controller {

    public function create() {
        return view('Create_Account');
    }

    public function edit() {
        return view('Edit_bucket');
    }

    public function login() {
        return view('Login');
    }

    public function logout() {
        return view('Logout');
    }

    public function view() {
        return view('View_Account');
    }

}