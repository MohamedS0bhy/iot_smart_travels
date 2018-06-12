<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Airline;
use App\City;
use App\Country;
use App\Traveler;
use App\Flight;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addTravellers()
    {
    $travellers=Traveler::where('traveller_status',0)->get();
    $flights=Flight::all();
    $cityShower=cities_airports();
    return view('admin.tickets.addTravellers',compact('travellers','flights','cityShower'));
    }

    public function addSingleTraveller($id)
    {

    $traveller=Traveler::find($id);
    $flights=Flight::Where('from_city',$traveler->from_city)->where('to_city',$traveler->to_city)->get();
    $cityShower=cities_airports();
    if($flight)
    {
      return view('admin.tickets.addSingleTraveller',compact('traveller','flights','cityShower'));
    }


    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }








      // if(Auth::check()){
      //              $tiket = Ticket::create([
      //             'trip_number_id' => $request->input('name'),
      //             'trip_date_id' => $request->input('nationality'),
      //             'trip_time_id' => $request->input('email'),
      //             'price_id' => $request->input('phone_number'),
      //             'trip_duation_id' => $request->input('passport_number'),
      //             'qr' => $request->input('passport_number'),
      //             'traveler_id' => $request->input('a_id'),
      //             'airline_id' => $request->input('airline_id'),
      //             'from_city_id' => $request->input('from_city_id'),
      //             'to_city_id' => $request->input('to_city_id'),
      //             'user_id' => Auth::user()->id
      //
      //       ]);
      //          }






    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
