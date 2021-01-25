<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\User;
use App\Client;

class AjaxController extends Controller
{
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cityStore(Request $request)
    {
        if ($request->ajax()) {
            if ($request->name) {
                $city = new City;
                $city->name =  $request->name;
                $city->save();

            return response()->json($city);
            }else{
                return response()->json([
                    'error' => 'the name text can not be empty',
                    'code' => 401
                ], 401);
            }
        }
    }

            /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function clientStore(Request $request)
    {
        if ($request->ajax()) {
            if ($request->name) {
                $client = new Client;
                $client->name =  $request->name;
                $client->city_id =  $request->city_id;
                $client->save();

            return response()->json($client);
            }else{
                return response()->json([
                    'error' => 'the name text can not be empty',
                    'code' => 401
                ], 401);
            }
        }
    }

}
