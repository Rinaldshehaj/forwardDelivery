<?php

namespace App\Http\Controllers;

use App\Country;
use App\Shop;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $shops = Shop::all();
        return view('shop.index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        $countries = Country::all();
        return view('shop.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $shop = new Shop();
        $shop->shop_name = $request->input('shop_name');
        $shop->logo = $request->file('logo')->getClientOriginalName();
        $shop->link = Name();
        'https://' . $request->input('link');
        $imagePath = $request->file('logo');
        $imageName = $imagePath->getClientOriginalName();
        $path = $request->file('logo')->storeAs('/shop_logos', $imageName, 'public');
        $shop->logo_path = '/storage/' . $path;
        $shop->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('shop.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $shop = Shop::find($id);
        $shop->shop_name = $request->input('shop_name');
        $shop->link = 'https://' . $request->input('link');
        if ($request->file('logo')) {
            $shop->logo = $request->file('logo')->getClientOriginalName();
            $imagePath = $request->file('logo');
            $imageName = $imagePath->getClientOriginalName();
            $path = $request->file('logo')->storeAs('/shop_logos', $imageName, 'public');
            $shop->logo_path = '/storage/' . $path;
        }
        $shop->update();
        return response()->view('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
