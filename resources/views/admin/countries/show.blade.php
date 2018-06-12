@extends('admin.layouts.layout')
@section('title')
 Countries || {{showCountries($singleCountry->id)}}
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
                <h2 class="box-title"style="text-align:center" >  {{showCountries($singleCountry->id)}} </h2>
              </div>
              <br>
            <br>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>

                    <tr>
                      <th>#</th>
                      <th>  City </th>
                      <th> Airport </th>
                      <th> Edit </th>
                      <th>Show details</th>
                    </tr>
                  </thead>
                  <tbody>


                                      @for($i=1; $i<=3884;$i++ )
                                        @if($cityShower [$i] ['country']==showCountries($singleCountry->id))

                  <tr>


                         <td> <a href='/iot_smart_travels/public/adminpanel/cities/{{$i}}/show'> {{$i}} </a> </td>
                        <td> <a href='/iot_smart_travels/public/adminpanel/cities/{{$i}}/show'>{{$cityShower[$i]['city']}} </a> </td>

                        <td>{{$cityShower[$i]['name']}}   </td>


                        <td> <a  class="btn btn-warning" href='/iot_smart_travels/public/adminpanel/cities/{{$i}}/show'> <i class="fa fa-pencil"></i> Edit </a> </td>

                           <td> <a  class="btn btn-primary" href='/iot_smart_travels/public/adminpanel/cities/{{$i}}/show'> <i class="fa fa-plus"></i>  More </a> </td>

                    </tr>
                    @endif

                  @endfor

                  </tbody>
                  <tfoot>
                    <tr>
                      <tr>
                        <th>#</th>
                        <th>  City </th>
                        <th> Airport </th>
                        <th> Edit </th>
                        <th>Show details</th>
                      </tr>
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
