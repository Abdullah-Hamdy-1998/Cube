<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Traits\SaveImageTrait;
use App\Http\Requests\StoreItemRequest;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    use SaveImageTrait;

    public function index()
    {
        $items = Item::all();
        return view('pages.items.index', ['items' => $items]);
    }

    public function create()
    {
        return view('pages.items.create');
    }

    public function store(StoreItemRequest $request)
    {
        if ($request->hasFile('image')) {
            $request->merge(['avatar' => $this->saveImage($request, 'images/avatars')]);
        }
        Item::create($request->all());
        return redirect()->route('items.index');
    }

    public function show(Item $item)
    {
        return view('pages.items.show', ['item' => $item]);
    }

    public function edit(Item $item)
    {
        return view('pages.items.edit', ['item' => $item]);
    }

    public function update(Request $request, Item $item)
    {
        if ($request->hasFile('image')) {
            if ($item->avatar != "item-default.png")
                Storage::disk('avatars')->delete($item->avatar);
            $request->merge(['avatar' => $this->saveImage($request, 'images/avatars')]);
        }
        $item->update($request->all());
        return redirect()->route('items.index');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }
}
