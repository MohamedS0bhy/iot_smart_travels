@extends('admin.layouts.layout')
@section('title')
 Flights
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
                <h3 class="box-title"> Flights Dashboard </h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>

                    <tr>
                      <th>#</th>
                      <th> From  </th>
                      <th> To  </th>
                      <th> status  </th>
                      <th> Edit  </th>
                      <th> Show Details </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($flights as $flight)
                    <tr>

                      <td> {{$flight->id}}  </td>
                      <td> {{$cityShower[$flight->from_city]['city']}} </td>
                      <td> {{$cityShower[$flight->to_city]['city']}} </td>
                      <td>@if($flight->flight_status==1) Active
                      @else DeActivated
                      @endif
                      </td>
                      <td>
                        @if($flight->flight_status==0) <a class="btn btn-success" href="{{url('/adminpanel/countries/'.$flight->id.'/active')}}"> Activate <i class="fa fa-check" ></i></a>
                        @else<a class="btn btn-danger" href="{{url('/adminpanel/flights/'.$flight->id.'/drop')}}"> DeActivate <i class="fa fa-minus" ></i></a>
                        @endif
                      <td>
                      <a class="btn  btn-primary" href="{{url('/adminpanel/flights/'.$flight->id.'/show')}}">Show more </a>
                       </td>
                    </tr>
@endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th> From  </th>
                      <th> To  </th>
                      <th> status  </th>
                      <th> Edit  </th>
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
