@extends('admin.layouts.layout')
@section('title')
Flight
@endsection
@section('header')


<style media="screen">

</style>

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
                      <th style="width:50px;" >Attribute</th>
                        <th>Value</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td style="width:120px;"> From City  </td>
                      <td>{{$cityShower[$singleFlight->from_city]['city']}} </td>
                    </tr>

                    <tr>

                      <td style="width:120px;"> To City </td>
                      <td>{{$cityShower[$singleFlight->to_city]['city']}} </td>

                    </tr>


                    <tr>


                      <td style="width:120px;">  Flight Status  </td>
                      <td>
                       Activated <a class="btn btn-danger" style="margin-left:530px;display:inline" href="/iot_smart_travels/public/adminpanel/flights/{{$singleFlight->id}}/drop"><i class="fa fa-check"></i> Delete </a>

                      </td>

                    </tr>

                    <td style="width:120px;">  Flight Status  </td>
                    <td>
                     Editable
                     <a class="btn btn-warning" style="margin-left:530px;display:inline;" href="/iot_smart_travels/public/adminpanel/flights/{{$singleFlight->id}}/edit"><i class="fa fa-pencil"></i> Edit </a>

                    </td>

                  </tr>


                    <tr>

<td style="width:120px"> Satalite View <i class="fa fa-eye"></i></td>
                      <td>

      <div id="map" style="width:95%;height:500px"></div>

      <script>

function  initMap()
{
// map Options

var options=
{
  zoom:1,
  center:{lat:42.3601,lng:-71.0589}

}

// new map
var map=new
google.maps.Map(document.getElementById('map'),options);

// add marker
//
// var marker =new google.maps.Marker(
//   {
//   position:{lat:42.3601,lng:-71.0589}  ,
//   map:map
//   });

// adding markers dynamically using function which is called add marker
addMarker({lat:{{$cityShower[$singleFlight->from_city]['lat']}},lng:{{$cityShower[$singleFlight->from_city]['lon']}}});
addMarker({lat:{{$cityShower[$singleFlight->to_city]['lat']}},lng:{{$cityShower[$singleFlight->to_city]['lon']}}});

function addMarker(coords)
{
  var marker =new google.maps.Marker(
    {
    position:coords ,
    map:map
    });

}





}



      </script>
                      </td>

                    </tr>

<tr>
  <td style="width:120px;">tickets_Num</td>
  <td> {{$singleFlight->tickets_Num}} </td>
</tr>
<tr>
  <td style="width:120px;">Cost in dollars </td>
  <td> {{$singleFlight->cost}} $ </td>
</tr>

<tr style="width:120px;">
  <td> Distance </td>
  <td> {{$singleFlight->distance}} </td>
</tr>

<tr style="width:120px;">
  <td> Duration </td>
  <td> {{$singleFlight->duration}} </td>
</tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th style="width:120px;">Attribute</th>
                      <th>Value</th>

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIF9QtCNtCm8cMH2onGsB5LHkLY8l-hJA&callback=initMap"></script>



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
