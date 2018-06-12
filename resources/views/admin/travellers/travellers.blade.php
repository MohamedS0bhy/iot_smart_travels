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
                      <th> Status  </th>
                      <th> Edit </th>
                      <th> Show More </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($travellers as $traveller)
                    <tr>

                      <td> {{$traveller->id}}  </td>
                        <td> {{$traveller->name}}  </td>
                          <td> {{$traveller->email}}  </td>


                      <td> {{showCountries($traveller->nationality)}} </td>
                      <td> {{$cityShower[$traveller->from_city]['city']}}  </td>
                              <td> {{$cityShower[$traveller->to_city]['city']}}  </td>
                      <td>@if ($traveller->traveller_status==1)Activated @else De-activated  @endif  </td>

                      <td>
                      <a class="btn  btn-success" href="{{url('/adminpanel/travellers/'.$traveller->id.'/edit')}}"> Edit </a>
                       </td>
                      <td>
                      <a class="btn  btn-primary" href="{{url('/adminpanel/travellers/'.$traveller->id.'/showSingleTraveller')}}">Show more </a>
                       </td>
                    </tr>
@endforeach
                  </tbody>
                  <tfoot>

                  <tr>
                    <th>#</th>
                    <th>  Name </th>
                    <th> Email </th>
                    <th> Nationality  </th>
                    <th> Source   </th>
                    <th> Destination  </th>
                    <th> Status  </th>
                    <th> Edit </th>
                    <th> Show More </th>
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
