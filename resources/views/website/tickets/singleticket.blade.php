@extends('layouts.app')
@section('title')
 Contact Us
@endsection
@section('header')
<style>

.row
{
  background-color: #fff;
  padding: 20px;
}
.content
{
  margin-left: 30px;
}


.userimg {
  border-radius: 50%;
  height: 60px;
  width: 60px;
}

.table-users {
  border: 1px solid #327a81;
  border-radius: 10px;
  box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
  max-width: calc(100% - 2em);
  margin: 1em auto;
  overflow: hidden;
  width: 800px;
}

table {
  width: 100%;
}
table td, table th {
  color: #2b686e;
  padding: 10px;
}
table td {
  text-align: center;
  vertical-align: middle;
}
table td:last-child {
  font-size: 0.95em;
  line-height: 1.4;
  text-align: left;
}
table th {
  background-color: #daeff1;
  font-weight: 300;
}
table tr:nth-child(2n) {
  background-color: white;
}
table tr:nth-child(2n+1) {
  background-color: #edf7f8;
}

@media screen and (max-width: 700px) {
  table, tr, td {
    display: block;
  }

  td:first-child {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    width: 100px;
  }
  td:not(:first-child) {
    clear: both;
    margin-left: 100px;
    padding: 4px 20px 4px 90px;
    position: relative;
    text-align: left;
  }
  td:not(:first-child):before {
    color: #91ced4;
    content: '';
    display: block;
    left: 0;
    position: absolute;
  }
  td:nth-child(2):before {
    content: 'Name:';
  }
  td:nth-child(3):before {
    content: 'Email:';
  }
  td:nth-child(4):before {
    content: 'Phone:';
  }
  td:nth-child(5):before {
    content: 'Comments:';
  }

  tr {
    padding: 10px 0;
    position: relative;
  }
  tr:first-child {
    display: none;
  }

}



</style>

@endsection
@section('content')
<div class="container">
  <div class="row">

      <div class="table-users">
         <div class="header text-center"> <h2>ticket  of  traveller {{  $traveller->name }}</h2> </div>

         <table cellspacing="0">
            <tr>

               <th>Name</th>
               <th> Nationality </th>
               <th> Departure  </th>
               <th>Distination</th>
               <th>Duration</th>
               <th>Price</th>
               <th> Qr </th>
               <th>gate</th>


            </tr>

            <tr>
              <!--  this first table data till adding   the functionality that the user can add  his own image  -->

               <td>{{$traveller->name}}</td>
               <td>{{showCountries( $traveller->nationality) }}</td>

                <td> {{$cityShower[$traveller->from_city]['city']}} </td>
                 <td> {{$cityShower[$traveller->to_city]['city']}} </td>
                 <td> {{$flight->duration}} Hours</td>
                 <td> {{$flight->cost}}  $ </td>
                  <td>  {!! DNS1D::getBarcodeHTML( $flight->qr , "C128C")!!} </td>

<td> {{$ticket->gate}}  </td>

      </td>

            </tr>

         </table>
<br>
         <tr>
           <div class="text-center">
             <a href="#" class="btn btn-warning btn-block " > Print  Ticket </a>
           </div>
         </tr>


      </div>
      <div class="col-sm-">

      </div>



  {{--
    <div class="jumbotron">
      <h1 class="display-4">Thank you for hiring us  </h1>
  <div class="row">
    <div class="col-sm-12">
      <h3> Name:  <span class="content">{{$traveller->name}}</span>  </h3>

    </div>
    <hr>
    <div class="col-sm-12">
      <h3>E-mail:  <span class="content">{{$traveller->email}}</span>  </h3>

    </div>
    <div class="col-sm-12">
      <h3>Phone Number:  <span class="content">{{$traveller->phone_number}}</span>  </h3>

    </div>
    <div class="col-sm-12">
      <h3>Passport Number : <span class="content">{{$traveller->passport_number}}</span>  </h3>
    </div>
    <div class="col-sm-12">
      <h3>Passport Number :<span class="content">{{$traveller->passport_number}}</span>  </h3>
    </div>


    <div class="col-sm-12">
      <h3>From City : <span class="content">{{$cityShower[$traveller->from_city]['city']}} </span>  </h3>
    </div>
    <div class="col-sm-12">
      <h3>To City : <span class="content">{{$cityShower[$traveller->to_city]['city']}} </span>  </h3>
    </div>
    <div class="col-sm-12">
   <h3> Airline : <span class="content">   {{$airlinesShower [$flight->airline] ['Airline']}} </span> </h3>
    </div>
    <div class="col-sm-12">
   <h3> Flight Duration: <span class="content"> {{$flight->duration}} Hours </span> </h3>
    </div>
    <div class="col-sm-12">
   <h3> Flight Cost: <span class="content"> {{$flight->cost}} Dollars  </span> </h3>
    </div>

    <div class="col-sm-12">
   <h3> Flight distance : <span class="content">  {{$flight->distance}} Kilometer </span> </h3>
    </div>
<div class="col-sm-12">
  <h3>
 <span>Qr {!! DNS1D::getBarcodeHTML( $flight->qr , "C128C")!!}</span>
</h3>

</div>


  </div>

--}}




    </div>

  </div>

</div>



@endsection
