<?php

namespace App\Http\Controllers;

use App\Address;
use App\Country;
use EasyPost\Shipment;
use Illuminate\Http\Request;
use Psy\Util\Json;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $countries = Country::all();
        return view('calculator.index', compact('countries'));
    }

    /**
     * @param Request $request
     * Calculate rates based on destinations
     * @author Rinald Shehaj
     */
    public function calculate(Request $request) {
        if($request->isXmlHttpRequest()) {
            $data = $request->all();
            $to_address = \EasyPost\Address::create(
                array(
                    "name"    => "",
                    "street1" => "",
                    "city"    => "",
                    "state"   => $data['toCountry'],
                    "country"   => $data['toCountry'],
                    "zip"     => "90277",
                    "phone"   => ""
                )
            );
            $from_address = \EasyPost\Address::create(
                array(
                    "company" => "",
                    "street1" => "",
                    "street2" => "",
                    "city"    => "",
                    "state"   => $data['fromCountry'],
                    "country"   => $data['fromCountry'],
                    "zip"     => "94105",
                    "phone"   => ""
                )
            );
            $parcel = \EasyPost\Parcel::create(
                array(
                    "length" => $data['length'],
                    "width" => $data['width'],
                    "height" => $data['height'],
                    "weight" => $data['weight']
                )
            );
            $shipment = \EasyPost\Shipment::create(
                array(
                    "to_address"   => $to_address,
                    "from_address" => $from_address,
                    "parcel"       => $parcel
                )
            );

            $shipment_id = $shipment->id;

            $rates_from_api = Shipment::retrieve($shipment_id);
            $rates_arr = $rates_from_api->get_rates()->rates;
            $rates = [];
            foreach ($rates_arr as $rate) {
                $rates[] = [
                    'carrier' => $rate->carrier,
                    'service' => $rate->service,
                    'rate' => $rate->rate,
                    'delivery_days' => $rate->delivery_days,
                ];
            }
        }
        return response()->json(compact('rates'));
    }
}
