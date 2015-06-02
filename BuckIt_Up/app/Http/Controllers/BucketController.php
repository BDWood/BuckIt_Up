<?php 
namespace App\Http\Controllers;

use Auth;

class BucketController extends Controller {

    public function Bucket() {
        if (!auth::check()) {
            return redirect('auth/login');
        }
        return view('bucket');
    }

    public function create() {
        if (!auth::check()) {
            return redirect('auth/login');
        }
        return view('new_bucket');
    }

    public function edit() {
        if (!auth::check()) {
            return redirect('auth/login');
        }
        return view('edit_bucket');
    }

}