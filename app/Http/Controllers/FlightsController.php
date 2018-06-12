<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Ticket;
use App\Airline;
use App\Airplane;
use App\City;
use App\Country;
use App\Traveler;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

if(Auth::check()){
$flights=Flight::all();

$cities=City::all();

$airlines=Airline::all();
  $cityShower=cities_airports();

  return view('admin.flights.flights',['flights'=>$flights,'cities'=>$cities,'airlines'=>$airlines,'cityShower'=>$cityShower]);

}



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cities=City::all();
      $airlines=Airline::all();
      $cityShower=cities_airports();
      $airplanes=airplane::all();
    return view('admin.flights.add',['cities'=>$cities,'airlines','cityShower'=>$cityShower,'airplanes'=>$airplanes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$city_id=null ,$airline_id=null)
    {
      $cityShower=cities_airports();
      $from_city=$request->from_city;
      $to_city=$request->to_city;


      $point1 = array("lat" =>$cityShower[$from_city] ['lat'] , "long" =>$cityShower[$from_city] ['lon']); // Paris (France)
      $point2 = array("lat" => $cityShower[$to_city] ['lat'], "long" =>$cityShower[$from_city] ['lon']); // Mexico City (Mexico)

      $km = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long']); // Calculate distance in kilometres (default)
      $mi = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long'], 'mi'); // Calculate distance in miles
      $nmi = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long'], 'nmi'); // Calculate distance in nautical miles



$distance=$km;






 if(Auth::check()){
             $flight = flight::create([
             'check_in'=>$request->check_in,
             'check_out'=>$request->check_out,
             'from_city' => $request->from_city,
             'to_city' => $request->to_city,
             'airline' => $request->airline,
             'airplane' => $request->airplane,
             'cost' => $request->cost,
              'distance'=>$distance,
              'duration'=>$distance/265,
              'user_id' => Auth::user()->id,
              'tickets_Num'=>0,
            'flight_status'=>1
            ]);
if($flight){

   return redirect('/adminpanel/flights')
                 ->with('success' , 'flights is added successfully');
}

 return back()->withInput()->with('errors', 'Error adding  new flights');

 }





   }
    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
   public function show($id,Flight $flight)
   {
   $singleFlight=$flight->find($id);
   $cityShower=cities_airports();

   return view('admin.flights.show',['singleFlight'=>$singleFlight,'cityShower'=>$cityShower]);
   }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */

    public function edit(Flight $flight,$id)
     {

 $editFlight=$flight->find($id);
 $cities=City::all();
 $airlines=Airline::all();
 $cityShower=cities_airports();
 $airplanes=airplane::all();
 return view('admin.flights.edit',['editFlight'=>$editFlight,'cities'=>$cities,'airlines','cityShower'=>$cityShower,'airplanes'=>$airplanes]);

}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request,$id )
    {

      $cityShower=cities_airports();
      $from_city=$request->from_city;
      $to_city=$request->to_city;


      $point1 = array("lat" =>$cityShower[$from_city] ['lat'] , "long" =>$cityShower[$from_city] ['lon']); // Paris (France)
      $point2 = array("lat" => $cityShower[$to_city] ['lat'], "long" =>$cityShower[$from_city] ['lon']); // Mexico City (Mexico)

      $km = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long']); // Calculate distance in kilometres (default)
      $mi = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long'], 'mi'); // Calculate distance in miles
      $nmi = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long'], 'nmi'); // Calculate distance in nautical miles



  $distance=$km;






$flightUpdate=array(



"from_city" =>$request->from_city,
"to_city" => $request->to_city,
"airline" => $request->to_city,
"airplane" => $request->to_city,
"distance" =>$distance,
"check_in" => $request->check_in,
"check_out" =>$request->check_out,
"duration" =>$distance/265,
"cost" => $request->cost

     );



 flight::where('id',$id)->update($flightUpdate);
     return redirect('/adminpanel/flights')->with('info','Flight Was Updated Successfully!!');





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

 flight::where('id',$id)->delete();
 return redirect('/adminpanel/flights')
               ->with('success' , 'flight was  deleted successfully');



    }
}
