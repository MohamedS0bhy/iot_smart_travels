@extends('layouts.app')
@section('title')
 Rserve a tikcet
@endsection
@section('header')

<style media="screen">


</style>

@endsection
@section('content')
<br>

<div class="container">
    <div class="row">


        <div class="col-md-offset-3 col-md-7">




@include('partials.success')
            <div class="well well-sm">

  <h1 class="text-center"> Entering Travellers Data </h1>
<br>

            {!! Form::open(['url'=>'/users/traveller/','method'=>'post'] ) !!}
              @include('website.travellers.form')
            {!! Form::close() !!}


        </div>

    </div>
</div>
</div>
@endsection
@section('footer')



@endsection
