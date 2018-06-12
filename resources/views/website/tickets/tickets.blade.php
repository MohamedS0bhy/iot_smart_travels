@extends('layouts.app')
@section('title')
 Contact Us
@endsection
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

</style>
@section('header')

@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="jumbotron">
      <h1 class="display-4 text-center">customer  {{ Auth::user()->name }}   tickets   </h1>
      <br>
  <div class="row">

<ul>
@foreach($tickets as $ticket)
<div class="col-sm-4" style="margin-bottom:30px;">
  <div class="w3-card-4">

  <header class="w3-container w3-light-grey">
    <h3>  Your ticket is ready now </h3>
  </header>

  <div class="w3-container">
    <p> ticket   {{  $ticket->id  }} </p>
    <hr>

    <p> this ticket was added by  {{ Auth::user()->name }} </p>
  </div>

  <a  href='/iot_smart_travels/public/users/{{$ticket->id}}/singleTicket' class="w3-button w3-block w3-dark-grey"> + details </a>

  </div>
</div>



  @endforeach



</ul>










  </div>






    </div>

  </div>

</div>



@endsection
