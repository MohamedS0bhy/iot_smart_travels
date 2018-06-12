@extends('admin.layouts.layout')
@section('title')
 Cities||
 {{$cityShower[$singleCity->id]['city']}}
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

                          <th style="width:50px;" >Attribute</th>

                                      <th>Value</th>





                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                      <td style="width:120px;"> Name of City  </td>
                      <td>{{$cityShower[$singleCity->id]['city']}} </td>

                    </tr>
                    <tr>

                      <td style="width:120px;"> Name of Country  </td>
                      <td>{{$cityShower[$singleCity->id]['country']}} </td>

                    </tr>

                    <tr>

                      <td style="width:120px;"> Name of Airport  </td>
                      <td>{{$cityShower[$singleCity->id]['name']}} </td>

                    </tr>
                    <tr>


                      <td style="width:120px;">  City Status  </td>
                      <td>@if($singleCity->city_status==0) De-activated <a class="btn btn-success" style="margin-left:530px" href="/iot_smart_travels/public/adminpanel/cities/{{$singleCity->id}}/active"><i class="fa fa-check"></i> Activate </a>
                  @else Activated <a  class="btn btn-danger"  style="margin-left:530px" href='/iot_smart_travels/public/adminpanel/cities/{{$singleCity->id}}/drop'>De-Activate</a>
                  @endif
                      </td>


                    </tr>
                    <tr>

                      <td style="width:120px;"> Name of state  </td>
                      <td>{{$cityShower[$singleCity->id]['state']}} </td>

                    </tr>
                    <tr>

                      <td style="width:120px;"> Time Zone  </td>
                      <td>{{$cityShower[$singleCity->id]['tz']}} </td>

                    </tr>

                    <tr>

<td style="width:120px"> Satalite View <i class="fa fa-eye"></i></td>
                      <td>
                        <div id="googleMap" style="width:92%;height:400px;"></div>

                        <script>
                        function myMap() {
                        var mapProp= {
                            center:new google.maps.LatLng({{$cityShower[$singleCity->id]['lat']}},{{$cityShower[$singleCity->id]['lon']}}),
                            zoom:5,
                        };
                        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                        }
                        </script>



                      </td>

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIF9QtCNtCm8cMH2onGsB5LHkLY8l-hJA&callback=myMap"></script>



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
