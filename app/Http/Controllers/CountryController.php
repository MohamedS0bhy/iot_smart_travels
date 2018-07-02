<?php

namespace App\Http\Controllers;

use App\Country;
use App\Airline;
use App\City;
use App\Ticket;
use App\Traveler;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        if(Auth::user()->admin==1){
            $countries=Country::all();
            return view('admin.countries.countries',['countries'=>$countries]);
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
      if(Auth::user()->admin){
         $countries=Country::all();
         return view('admin.countries.countries',['countries'=>$countries]);
      }
     return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,Country $country)
    {
    $add= $request->input('country_add');
    $countryAdd=Country::find($add);
    $countryAdd->fill(['country_status'=>1])->save();
    return redirect()->back()->with('success', 'you hav  just added a country ');
    }
    public function activate($id)
    {
      $countryAdd=Country::find($id);
      $countryAdd->fill(['country_status'=>1])->save();
      return redirect()->back()->with('success', 'you hav  just added a country ');
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id, Country $country,City $city)
    {
      $countries=$country->all();
      $singleCountry=$country->find($id);
      $nameOfSingleCountry=showCountries($id);
      $allCities=$city->all();
      $citiesOn=$city->where('city_status',1)->get();
      $citiesOff=$city->where('city_status',0)->get();
      $cityShower=cities_airports();
// search by cities number
// for ($i=1; $i<=3884;$i++  ) {
//   if($cityShower [$i] ['country']==showCountries($singleCountry->id)) {
//
//   echo  $citiesOf1Country=  $cityShower[$i]['city'].'<br/>';
//
//   }
// }

return view('admin.countries.show',compact('singleCountry','allCities','citiesOn','citiesOff','cityShower'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function drop( $id ,Country $country )
    {
      $countrydrop=$country->find($id);
      $countrydrop->fill(['country_status'=>0])->save();
      return  redirect()->back()->with('success', 'You have Dropped (de-activated)  Country ');
    }
}
