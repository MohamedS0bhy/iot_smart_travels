@extends('admin.layouts.layout')
@section('title')
Airlines
@endsection
@section('header')

@endsection
@section('content')
<div class="container">
@include('partials.success')

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"> Airlines Dashboard </h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>

                    <tr>
                      <th>#</th>
                      <th>  Airline </th>
                      <th>  Owener's Nationality </th>
                      <th> Activation </th>
                      <th> Show Details </th>

                    </tr>
                  </thead>
                  <tbody>



@foreach($Aairlines as $airline)

                    <tr>

                      <td> {{$airline->id}}  </td>
                      <td>  <a   style="color:#46684a" href="{{url('/adminpanel/airlines/'.$airline->id.'/show')}}" > {{$airlinesShower[$airline->id]['Airline']}} </a>  </td>
                      <td>
@foreach($countries as $country)
 @if($airlinesShower[$airline->id]['Country']==showCountries($country->id))
                        <a href="{{url('/adminpanel/countries/'.$country->id.'/show')}}">
 @endif
@endforeach
{{$airlinesShower[$airline->id]['Country']}}



                      </a> </td>
                      <td> <a class="btn btn-danger" href="{{url('/adminpanel/airlines/'.$airline->id.'/drop')}}"> De-Activate <i class="fa fa-minus" >  </i>    </a>  </td>

                      <td>
                      <a class="btn  btn-primary" href="{{url('/adminpanel/airlines/'.$airline->id.'/show')}}">Show details </a>
                       </td>
                    </tr>
@endforeach

                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>  Airline </th>
                      <th>  Owener's Nationality </th>
                      <th> Activation </th>
                      <th> Show Details </th>

                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->


        </div>
        <!-- /.row -->
          </div>



<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <div class="box-body">
              <div class="row">



              {!! Form::open(['url'=>'/adminpanel/airlines/', 'method'=>'post' ,'class'=>'form-horizontal' ,'files'=>'true' ]) !!}
              <div class="form-group{{ $errors->has('airine_add') ? ' has-error' : '' }}" style="padding-bottom:20px">

<br>
                       <div class="col-md-offset-1 col-md-6 ">

                             {!! Form::select('airline_add',array_except(selectAirlines(),0),null,['class'=>'form-control','id'=>'subject' ]) !!}
                           @if ($errors->has('airline_add'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('airline_add') }}</strong>
                               </span>
                           @endif
                       </div>
                       <div class="col-md-offset-1 col-md-2">
                           <button type="submit" class="btn btn-warning">
                         Activate <i class="fa fa-plus"></i>
                           </button>
                       </div>
                   </div>


               {!! Form::close() !!}
               </div>
           </div>
      </div>
    </div>
  </div>
</section>

</div>
  </div>
@endsection




@section('footer')
{!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
{!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}



<script type="text/javascript">

$('#example2').DataTable({
      'paging'      : true,
      'lengthChang e': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });




</script>


@endsection
