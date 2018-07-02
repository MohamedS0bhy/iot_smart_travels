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
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $flights=Flight::paginate(5);
      $cities=City::all();
      $airlines=Airline::all();
      $cityShower=cities_airports();
      $airlinesShower=airlines();
      return view('welcome',['flights'=>$flights,'cities'=>$cities,'airlines'=>$airlines,'cityShower'=>$cityShower,'airlinesShower'=>$airlinesShower]);
    }
    public function contact()
    {
      return view('website.contact.contact');
    }
public function store()
{
}



}
