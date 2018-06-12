<?php

namespace App\Http\Controllers;

use App\Airline;
use App\City;
use App\Country;
use App\Ticket;
use App\Traveler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      if(Auth::user()->admin==1){
      $airlinesShower=airlines();



          $Aairlines=AirLine::where('airline_status',1)->get();

          $countries=Country::all();





          return view('admin.airlines.airlines',['Aairlines'=>$Aairlines,'airlinesShower'=>  $airlinesShower,'countries'=>$countries]);

      }
     return view('auth.login');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

 $add= $request->input('airline_add');


           $airlineAdd=Airline::find($add);

       $airlineAdd->fill(['airline_status'=>1])->save();

      return redirect()->back()->with('success', 'you hav  just added an airline ');


    }
public function activate($id)
{

             $airlineAdd=Airline::find($id);

         $airlineAdd->fill(['airline_status'=>1])->save();

        return redirect()->back()->with('success', 'you hav  just added an airline ');

}



    /**
     * Display the specified resource.
     *
     * @param  \App\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function show($id, Airline $airline,Country $country)
    {
      $singleAirline=$airline->find($id);
      $airlinesShower=airlines();
$country=$country->all();
// for ($i=1; $i <195 ; $i++) {
// if(showCountries($i)==$airlinesShower[$singleAirline->id]['Country'])
// {
// return  $i;
// }
//
// }

//
//   foreach($countries as $Scountry) {
//   if(showCountries(($Scountry->id)==$airlinesShower[$singleAirline->id]['Country'])){
//   dd("fgjeuihj");
//   }
//
// }
// dd();



return view('admin.airlines.show',['singleAirline'=>$singleAirline,'airlinesShower'=>$airlinesShower]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function edit(Airline $airline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airline $airline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function drop($id,AirLine $airline )
    {

      if(Auth::user()->admin==1){
      $airlinesShower=airlines();



          $Aairlines=AirLine::where('airline_status',1)->get();
          $countries=Country::all();



                  $airlinedrop=$airline->find($id);

                    $airlinedrop->fill(['airline_status'=>0])->save();







          return redirect()->back()->with('success', 'You have Dropped (de-activated)  Airline');

      }
     return view('auth.login');









    }
}
