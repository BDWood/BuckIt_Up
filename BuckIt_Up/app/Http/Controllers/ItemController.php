<?php 
namespace App\Http\Controllers;
use App\Models\Item;
use Request;

class ItemController extends Controller {

    public function Item($id) {
        $item = new Item($id);
        return view('item', ['item' => $item]);
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
        $item = new Item($id);
        $item->name = Request::get('name');
        $item->description = Request::get('description');
        $item->save();
        return redirect('item/' . $id);
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