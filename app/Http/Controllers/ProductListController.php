<?php

namespace App\Http\Controllers;

use App\Models\ProductListModel;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class ProductListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductListModel::all();

        return Inertia::render('ProductList/Index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request);
        // $db = new ProductListModel;
        // $db->category = $request->category;
        // ProductListModel::create($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $db = new ProductListModel;
        // $db->category = $request->category;
        // $db->name = $request->name;
        // $db->description = $request->description;
        // $db->price = $request->price;
        // $db->stock = $request->stock;
        // $db->save();

        ProductListModel::create([
            'category' => Request::input('category'),
            'name' => Request::input('name'),
            'description' => Request::input('description'),
            'price' => Request::input('price'),
            'stock' => Request::input('stock'),
        ]);

        return Redirect::route('product-list.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductListModel::destroy($id);

        return Redirect::route('product-list.index');
    }
}
