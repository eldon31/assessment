<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        return view('item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code'      => 'required',
            'name'      => 'required',
            'category'  => 'required',
            'price'     => 'required',
            'stocks'    => 'required'
        ]);

        Item::create([
            'code'      => $request->code,
            'name'      => $request->name,
            'category'  => $request->category,
            'price'     => $request->price,
            'stocks'    => $request->stocks,
        ]);

        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('item.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'code'      => 'required',
            'name'      => 'required',
            'category'  => 'required',
            'price'     => 'required',
            'stocks'    => 'required'
        ]);

        $item->update([
            'code'      => $request->code,
            'name'      => $request->name,
            'category'  => $request->category,
            'price'     => $request->price,
            'stocks'    => $request->stocks,
        ]);

        return redirect()->route('item.index');
        // return redirect()->route('item.edit', $item);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
