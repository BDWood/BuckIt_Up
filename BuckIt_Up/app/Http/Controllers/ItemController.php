<?php 
namespace App\Http\Controllers;
use App\Models\Item;
use Request;

class ItemController extends Controller {

    public function Item($id) {
        $item = new Item($id);
        return view('item');
    }

    public function create() {
        return view('new_item');
    }

    public function postCreate() {
        $item = new Item();
        $item->name = Request::input('name');
        $item->description = Request::input('description');
        $item->save();
        return redirect('User');
    }

    public function edit($id) {
        $item = new Item($id);
        return view('item_edit', ['item' => $item]);
    }

    public function postEdit($id) {
        $item = Item::get($id);
        $item->first_name = Request::get('first_name');
        $item->last_name = Request::get('last_name');
        $item->save();
        return redirect('users');
    }

    public function delete() {
        $item = new Item();
        $item->delete();
        return redirect('all_items');
    }

    public function allItems() {
        $items = Item::all();
        return view('all_items', ['items' => $items->getArray()]);
    }

}