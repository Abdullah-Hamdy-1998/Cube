<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Traits\SaveImageTrait;
use App\Http\Requests\StoreItemRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    use SaveImageTrait;


    public function index()
    {
        $this->authorize('read-data');

        $items = Item::all();
        return view('pages.items.index', ['items' => $items]);
    }

    public function create()
    {
        $this->authorize('write-data');
        return view('pages.items.create');
    }

    public function store(StoreItemRequest $request)
    {
        $this->authorize('write-data');
        if ($request->hasFile('image')) {
            $request->merge(['avatar' => $this->saveImage($request, 'images/avatars')]);
        }
        $item = Item::create($request->all());

        //Log the action
        $item->logs()->create(['user_id' => Auth::id(), 'action' => 'Create', 'data' => $item->name]);

        return redirect()->route('items.index');
    }

    public function show(Item $item)
    {
        $this->authorize('read-data');
        return view('pages.items.show', ['item' => $item]);
    }

    public function edit(Item $item)
    {
        $this->authorize('write-data');
        return view('pages.items.edit', ['item' => $item]);
    }

    public function update(Request $request, Item $item)
    {
        $this->authorize('write-data');
        if ($request->hasFile('image')) {
            if ($item->avatar != "item-default.png")
                Storage::disk('avatars')->delete($item->avatar);
            $request->merge(['avatar' => $this->saveImage($request, 'images/avatars')]);
        }
        $item->update($request->all());

        //Log the action
        $item->logs()->create(['user_id' => Auth::id(), 'action' => 'Update', 'data' => $item->name]);

        return redirect()->route('items.index');
    }

    public function destroy(Request $request)
    {
        $this->authorize('write-data');

        $item = Item::findOrFail($request->id);
        $item->delete();

        //Log the action
        $item->logs()->create(['user_id' => Auth::id(), 'action' => 'Delete', 'data' => $item->name]);
    }
}
