<?php

namespace App\Http\Controllers;

use App\Traveler;
use App\Airline;
use App\City;
use App\Country;
use App\Trip;
use App\Flight;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TravellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //return view('website.travellers.add');
    }
    public function showTravellers(Traveler $traveller)
    {
         $travellers= $traveller->all();

         $cityShower=cities_airports();

      return view('admin.travellers.travellers',['travellers'=>$travellers,'cityShower'=>$cityShower]);

    }
public function showSingleTraveller($id)
{

 $traveller=Traveler::find($id);

 $cityShower=cities_airports();
 $flights=Flight::where('from_city',$traveller->from_city)->where('to_city',$traveller->to_city)->get();

 return view('admin.travellers.singleTraveller',['traveller'=>$traveller,'cityShower'=>$cityShower,'flights'=>$flights]);
}

public function addTravellerToflight(Request $request, $id)
{

$traveller=Traveler::find($id);
$flight=Flight::find($request->flight);

$ticket=Ticket::create(
  [
    'flight'=>$request->flight,
    'ticket_status'=>1,
    'qr'=>rand(1445645656,844564565),
    'traveller'=>$id,
    'gate'=>rand(0,1),
    'user_id'=>$traveller->user_id
  ]);





return redirect('/adminpanel/travellers')->with('success','traveller had been added successfully');
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function show(Traveler $traveler)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function edit(Traveler $traveler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Traveler $traveler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Traveler $traveler)
    {
        //
    }
}
