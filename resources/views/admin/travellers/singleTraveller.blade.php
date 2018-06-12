@extends('admin.layouts.layout')
@section('title')
 Travellers
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
        <h3 class="box-title"> Travellers Dashboard </h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>

            <tr>
              <th>#</th>
              <th>  Name </th>
              <th> Email </th>
              <th> Nationality  </th>
              <th> Source   </th>
              <th> Destination  </th>

            </tr>
          </thead>
          <tbody>

            <tr>
              <td> {{$traveller->id}}  </td>
              <td> {{$traveller->name}}  </td>
              <td> {{$traveller->email}}  </td>
              <td> {{showCountries($traveller->nationality)}} </td>
              <td> {{$cityShower[$traveller->from_city]['city']}}  </td>
              <td> {{$cityShower[$traveller->to_city]['city']}}  </td>
            </tr>

          </tbody>
          <tfoot>
          <tr>
            <th>#</th>
            <th>  Name </th>
            <th> Email </th>
            <th> Nationality  </th>
            <th> Source   </th>
            <th> Destination  </th>
          </tr>
          </tfoot>
        </table>
      </div>
      <div class="well well-sm">
      {!! Form::open(['url'=>'/adminpanel/addTraveller/'.$traveller->id.'/ToFlight/','method'=>'post'] ) !!}
      <div class="form-group{{ $errors->has('flight') ? ' has-error' : '' }}" style="padding-bottom:20px">

        <label for="flight" class="col-md-2"> Add Traveller To flight </label>

         <div class="col-md-offset-2 col-md-4" style="text_align:center">
            <select class="form-control" name="flight">
            @foreach($flights as $flight)
            <option value="{{$flight->id}}">Flight_ID {{$flight->id}}--From City: {{$cityShower[$flight->from_city]['city']}} To City  {{$cityShower[$flight->to_city]['city']}}</option>
            @endforeach
            </select>

         </div>

                 <div class="col-md-offset-2 col-md-2">
                   <button type="submit" class="btn btn-primary">
            Add
            </button>
             </div>
           </div>
      {!! Form::close() !!}
   </div>



      <!-- /.box-body -->
    </div>
    <!-- /.box -->


</div>
<!-- /.row -->
  </div>

        <!-- /.row -->
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
