<?php

namespace App\Http\Controllers;

use App\Coordinate;
use App\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TripController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new_trip');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $gpx = simplexml_load_file($request->roadtrip);

        $trip = Trip::create([
            'name' => $request->name,
            'user_id' => $user->id,
            'type' => $request->type,
        ]);

        foreach ($gpx->trk->trkseg->trkpt as $child) {
            $lon = (double) $child['lon'];
            $lat = (double) $child['lat'];
            $ele = (double) $child->ele;

            Coordinate::create([
                'lon' => $lon,
                'lat' => $lat,
                'ele' => $ele,
                'trip_id' => $trip->id,
            ]);
        }

        $user->trips()->save($trip);


        return redirect()->route('trips.create');
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
}
