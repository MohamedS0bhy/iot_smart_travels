@extends('admin.layouts.layout')
@section('title')
Airlines||
 {{$airlinesShower[$singleAirline->id]['Airline']}}
@endsection
@section('header')

@endsection
@section('content')
<div class="container">
@include('partials.success')

<!-- "IATA": "",
"ICAO": "DSO",
"Airline": "Dassault Falcon Service",
"Call sign": "DASSAULT",
"Country": "France", -->

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Airlines Dashboard </h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>

                    <tr>

                          <th>#</th>
                          <th>Airline</th>
                          <th>Owener's Nationality</th>
                        
                          <th>ICAO</th>
                          <th> status</th>



                    </tr>
                  </thead>
                  <tbody>




              @for($i=1; $i<=193;$i++)
              @if(showCountries($i)==$airlinesShower[$singleAirline->id]['Country'])

                    <tr>
                      <td> {{$singleAirline->id}} </td>
                      <td>{{$airlinesShower [$singleAirline->id] ['Airline']}}</td>
                      <td>

                      <a  href="/iot_smart_travels/public/adminpanel/countries/{{$i}}/show" >  {{$airlinesShower[$singleAirline->id]['Country']}} </a>


                      </td>

                      <td>{{$airlinesShower[$singleAirline->id] ['ICAO']}}</td>
                      <td>@if($singleAirline->airline_status==0) De-activated <a class="btn btn-success text-center" href="/iot_smart_travels/public/adminpanel/airlines/{{$singleAirline->id}}/active"><i class="fa fa-check"></i> Activate </a>
@else Activated <a  class="btn btn-danger" href='/iot_smart_travels/public/adminpanel/airlines/{{$singleAirline->id}}/drop'>De-Activate</a>
@endif
                      </td>

                    </tr>

                    @endif
                    @endfor
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Airline</th>
                      <th>Owener's Nationality</th>

                      <th>ICAO</th>
                      <th> status</th>
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
