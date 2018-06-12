<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airline;
use App\City;
use App\Country;
use App\Traveler;
use App\Flight;
use App\Airplane;
use App\Ticket;
use App\User;
use Auth;
class UserTravellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      return view('website.travellers.add');
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

      $traveller =Traveler::create([
     'name' => $request->input('name'),
     'nationality' => $request->input('nationality'),
     'email' => $request->input('email'),
     'phone_number' => $request->input('phone_number'),
     'passport_number' => $request->input('passport_number'),
     'from_city' => $request->input('from_city'),
     'to_city' => $request->input('to_city'),
     'traveller_status'=>0,
     'user_id' => $request->input('user')
   ]);




   if($traveller){

   return redirect()->back()->with('success', 'you have registered at this flight your ticket reservation will be ready in hours');
   }
   else {
    return redirect()->back()->with('errors', 'error in reservation');
   }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function userGetTickets($id)
    {

    $travellers =Traveler::where('user_id',Auth::user()->id)->get();
    $tickets=Ticket::where('user_id',Auth::user()->id)->get();


    $airlinesShower=airlines();
    $airlines=Airline::all();
    $cityShower=cities_airports();

return view('website.tickets.tickets',['airlinesShower'=>$airlinesShower,'tickets'=>$tickets,'travellers'=>$travellers,'airline'=>$airlines,'cityShower'=>$cityShower]);

    }

public function userSingleTicket($id)
{

$ticket=Ticket::find($id);
//dd($ticket->toArray());
$traveller=Traveler::find($ticket->traveller);
$flight=Flight::find($ticket->flight);
$airlinesShower=airlines();
$airlines=Airline::all();
$cityShower=cities_airports();
 return view('website.tickets.singleticket',['ticket'=>$ticket,'traveller'=>$traveller,'flight'=>$flight,'cityShower'=>$cityShower,'airlinesShower'=>$airlinesShower]);


}


public function booknow($id)
{
  // $bflight :the flight that the user has choosen from the outer page
  $bflight=Flight::find($id);
   $buser=  Auth::user();
   $airlines=Airline::all();
   $cityShower=cities_airports();
  return view('website.travellers.add',['bflight'=>$bflight,'buser'=>$buser,'cityShower'=>$cityShower,'airlines'=>$airlines]);

}





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
        //
    }
}
