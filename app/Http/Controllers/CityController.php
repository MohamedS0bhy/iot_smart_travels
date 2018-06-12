<?php

namespace App\Http\Controllers;

use App\City;
use App\Airline;

use App\Country;
use App\Ticket;

use App\Traveler;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(City $city)
    {
      if(Auth::user()->admin==1){
      $cityShower=cities_airports();
          $Acities=$city->where('city_status',1)->get();

          $countries=Country::all();
          return view('admin.cities.cities',['Acities'=>$Acities,'cityShower'=>$cityShower,'countries'=>$countries]);

      }
     return view('auth.login');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {
      if(Auth::user()->admin==1){
          $cities_array=cities_airports();

         $Acities=City::where('city_status',1)->get();

          return view('admin.cities.cities',['Acities'=>$Acities]);

      }
     return view('auth.login');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request ,City $city)
     {

$add= $request->input('city_add');



         $cityAdd=City::find($add);

      $cityAdd->fill(['city_status'=>1])->save();


   return redirect()->back()->with('success', 'you hav  just activated  City ');

     }
public function activate($id)
{

           $cityAdd=City::find($id);

        $cityAdd->fill(['city_status'=>1])->save();


     return redirect()->back()->with('success', 'you hav  just activated  City ');

}

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show($id, City $city)
    {
      $singleCity=$city->find($id);

$cityShower=cities_airports();
return view('admin.cities.show',['singleCity'=>$singleCity,'cityShower'=>$cityShower]);
    }






    public function drop( $id ,City $city )
    {

    $citydrop=$city->find($id);

    $citydrop->fill(['city_status'=>0])->save();

    return  redirect()->back()->with('success', 'You have Dropped (de-activated)  Country ');






    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {



    }
}
