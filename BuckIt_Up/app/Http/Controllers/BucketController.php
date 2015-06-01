<?php 
namespace App\Http\Controllers;

class BucketController extends Controller {

    public function Bucket() {
        return view('bucket');
    }

    public function create() {
        return view('new_bucket');
    }

    public function edit() {
        return view('edit_bucket');
    }

}