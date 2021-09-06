<?php

namespace App\Http\Controllers;

use App\Address;
use App\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $realAddress = Auth::user()->userAddress();
        $address_details = $realAddress->get()->toArray()[0];
        if (empty($address_details)) {
            return redirect()->route('createAddress');
        }
        $addresses = Address::all();
        return view('profile.index', compact('addresses', 'address_details'));
    }
}
