<?php namespace App\Http\Controllers;

class ItemController extends Controller {

    public function Item() {
        return view('item');
    }

    public function create() {
        return view('new_item');
    }

    public function edit() {
        return view('edit_item');
    }

    public function allItems() {
        return view('view_all_items');
    }

}