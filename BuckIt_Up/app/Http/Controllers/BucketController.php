<?php 
namespace App\Http\Controllers;

use Auth;

class BucketController extends Controller {

    public function Bucket() {
        return view('bucket');
    }

    public function create() {
        if (!auth::check()) {
            return redirect('login');
        }
        return view('new_bucket');
    }

    public function edit() {
        if (!auth::check()) {
            return redirect('login');
        }
        return view('edit_bucket');
    }

}