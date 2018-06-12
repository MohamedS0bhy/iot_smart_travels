@extends('admin.layouts.layout')
@section('title')
 Cities
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
                <h3 class="box-title"> Cities Dashboard </h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>

                    <tr>
                      <th>#</th>
                      <th> City </th>
                      <th> Country </th>
                      <th> Status </th>
                      <th> Action</th>
                      <th> Show Details </th>

                    </tr>
                  </thead>
                  <tbody>



@foreach($Acities as $city)

                    <tr>

                      <td> {{$city->id}}  </td>

                      <td>  <a   style="color:#46684a" href="{{url('/adminpanel/cities/'.$city->id.'/show')}}" > {{$cityShower[$city->id]['city']}} </a>  </td>
                      <td>
@foreach($countries as $country)
 @if($cityShower[$city->id]['country']==showCountries($country->id))
                        <a href="{{url('/adminpanel/countries/'.$country->id.'/show')}}">
 @endif
@endforeach


                        {{$cityShower[$city->id]['country']}}

                      </a> </td>
                      <td>@if($city->city_status==0)DeActivate
                          @else Active
                          @endif
                      </td>

      <td>
        @if($city->city_status==0)
      <a class="btn btn-success" href="{{url('/adminpanel/cities/'.$city->id.'/store')}}"> Activate <i class="fa fa-check" >  </i>    </a>
@else      <a class="btn btn-danger" href="{{url('/adminpanel/cities/'.$city->id.'/drop')}}"> DeActivate <i class="fa fa-minus" >  </i>    </a>
@endif
      </td>

                      <td>
                      <a class="btn  btn-primary" href="{{url('/adminpanel/cities/'.$city->id.'/show')}}">Show details </a>
                       </td>
                    </tr>
@endforeach

                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>  City </th>
                      <th> country </th>
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



              {!! Form::open(['url'=>'/adminpanel/cities/', 'method'=>'post' ,'class'=>'form-horizontal' ,'files'=>'true' ]) !!}
              <div class="form-group{{ $errors->has('country_add') ? ' has-error' : '' }}" style="padding-bottom:20px">

<br>
                       <div class="col-md-offset-1 col-md-6 ">

                             {!! Form::select('city_add',array_except(selectCities(),0),null,['class'=>'form-control','id'=>'subject' ]) !!}
                           @if ($errors->has('city_add'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('city_add') }}</strong>
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
