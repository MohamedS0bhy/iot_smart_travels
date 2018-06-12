@extends('layouts.app')
@section('title')
 Rserve a tikcet
@endsection
@section('header')

@endsection
@section('content')
<br>

<div class="container">
    <div class="row">
      <h1 class="text-center"> Editing Travellers Data </h1>
      <h2> Editing data of Traveller {{$traveller->name}}  </h2>

        <div class="col-sm-4 col-md-5">
<br>


@include('partials.success')
            <div class="well well-sm">

    {!! Form::model($traveller,['route'=>['adminpanel.travellers.update',$traveller->id],'method'=>'PATCH' ,'files'=>'true' ])  !!

              @include('website.travellers.form')
            {!! Form::close() !!}

        </div>

    </div>
</div>
</div>
@endsection
