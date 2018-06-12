<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
  {
        // $this->call(UsersTableSeeder::class);


        // for ($i=1; $i<=194; $i++) {
        //           App\Country::create([
        //               'country_status' =>0
        //           ]);
        //       }
        //


              //
              // for ($i=0; $i<=3883; $i++) {
              //           App\City::create([
              //               'city_status' => 0
              //           ]);
              //       }
              //




// for ($i=0; $i<=6164; $i++) {
//           App\Airline::create([
//               'airline_status' =>0
//           ]);
//       }
// 'flight_status',
// 'from_city',
// 'to_city',
// 'airplane',
// 'distance',
// 'cost'
for($i=0; $i<=550;$i++)
{
App\Flight::create([
    'flight_status'=>1,
    'from_city'=>rand(1,3885),
    'to_city'=>rand(1,3885),
    'airline'=>rand(1,6166),
    'airplane'=>rand(1,100),
    'distance'=>rand(1,50)*1000,
    'cost'=>rand(1,50)*1000,
    'duration'=>rand(1,12),
    'tickets_Num'=>rand(0,120)
]);
}



    }
}
