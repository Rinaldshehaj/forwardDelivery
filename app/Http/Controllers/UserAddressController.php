<?php

namespace App\Http\Controllers;

use App\User;
use App\UserAddress;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class UserAddressController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Http\RedirectResponse|View
     */
    public function create()
    {
        $user_address = Auth::user()->userAddress()->get()->toArray();
        if (!empty($user_address)) {
            return redirect()->route('profile');
        }
        return view('userAddress.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        $address = new UserAddress();
        $address->fill($request->all());
        $user->userAddress()->save($address);
        return redirect()->route('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $user_address = DB::table('user_addresses')
            ->select()
            ->where('id', '=', $id)->first();
        return \view('userAddress.edit', compact('user_address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user_address = UserAddress::find($id);
        $user_address->update($data);
        return \response()->view('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
