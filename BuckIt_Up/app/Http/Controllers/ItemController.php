<?php 
namespace App\Http\Controllers;
use App\Models\Item;
use Request;

class ItemController extends Controller {

    /**********************************************
        Returns The View ITEM page. 
    **********************************************/

    public function Item($id) {
        $item = new Item($id);
        return view('item', ['item' => $item]);
    }

    /**********************************************
        Doesn't do anything as of yet        
    **********************************************/    

    public function create() {
        return view('new_item');
    }

    /**********************************************
        Would post created Items
    **********************************************/

    public function postCreate() {
        $item = new Item();
        $item->name = Request::input('name');
        $item->description = Request::input('description');
        $item->save();
        return redirect('all_items');
    }

    /**********************************************
        Allows you to edit Items on the Edit Item
        Page
    **********************************************/

    public function edit($id) {
        $item = new Item($id);
        return view('item_edit', ['item' => $item]);
    }

    /**********************************************
        Submits the Changes made to Items
    **********************************************/

    public function postEdit($id) {
        $item = new Item($id);
        $item->name = Request::get('name');
        $item->description = Request::get('description');
        $item->save();
        return redirect('item/' . $id);
    }

    /**********************************************
        Allows for the deletion of items
    **********************************************/

    public function delete($id) {
        $item = new Item($id);
        $item->delete();
        return redirect('all_items');
    }

    /**********************************************
        Shows all of the Items on a single page
    **********************************************/

    public function allItems() {
        $items = Item::all();
        return view('all_items', ['items' => $items->getArray()]);
    }

}