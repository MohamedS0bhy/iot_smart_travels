@extends('admin.layouts.layout')
@section('title')
Adding Flight
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
                <h3 class="box-title">Flights dashboard </h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-md-offset-1 col-md-9">
                          <!-- Horizontal Form -->
                          <div class="box box-info">
                            <div class="box-header with-border">
                              <h3 class="box-title">Adding new flights</h3>
                            </div>
                            <!-- /.box-header -->


{!! Form::open(['url'=>['adminpanel/flights/update',$editFlight->id],'method'=>'PATCH' ,'files'=>'true' ])  !!}
                          <div class="box-body">
                                <div class="form-group">
                                  <label for="from_city" class="col-sm-2 control-label">from city </label>

        {!! Form::select('from_city',selectCities(),null,['class'=>'col-sm-10','id'=>'f_from_city_select' ,'value'=>'dsa' ]) !!}
                                      </div>

                                      <div class="form-group">
                                          <label for="to_city" class="col-sm-2 control-label">to city </label>
                     {!! Form::select('to_city',selectCities(),null,['class'=>'col-sm-10','id'=>'f_to_city_select' ]) !!}
                                        </div>
                                        <div class="form-group">
                                          <label for="airline"  name="airline" class="col-sm-2 control-label">airline </label>
                                         {!! Form::select('airline',selectAirlines(),null,['class'=>'col-sm-10','id'=>'f_airline_select' ]) !!}
                                          </div>



                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">airplane  </label>

                                  <div class="col-sm-10">
                                {!! Form::select('airplane',selectAirplanes(),null,['class'=>'col-sm-10','id'=>'f_airplane_select' ]) !!}
                                  </div>
                                </div>

<br><br>
                                <div class="form-group">
                                  <label  class="col-sm-2 control-label" >check in date</label>

                                  <div class="input-group date">
                                    <div class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </div>
                                    <input value="{{$editFlight->check_in}}" name="check_in" type="date"  class="col-sm-10" id="datepicker">
                                  </div>
                                  <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-2 control-label" >check out date</label>

                                  <div class="input-group date">
                                    <div class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </div>
                                    <input  value="{{$editFlight->check_out}}" name="check_out" type="date"  class="col-sm-10" id="datepicker">
                                  </div>
                                  <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-2 control-label"> Cost in dollars </label>

                                  <div class="input-group">
                                    <div class="input-group-addon">
                                      <i class="fa fa-dollar"></i>
                                    </div>
                                    <input name="cost"  value="{{$editFlight->cost}}" type="number"  class="col-sm-10">
                                  </div>
                                  <!-- /.input group -->
                                </div>








                              </div>
                              <!-- /.box-body -->
                              <div class="box-footer">
                                <button type="submit" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Edit flight</button>
                              </div>
                              <!-- /.box-footer -->
                            {!! Form::close() !!}
                          </div>
                          <!-- /.box -->
                          <!-- general form elements disabled -->

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

$("#f_from_city_select").select2({
                        placeholder: "Select a Name",
                        allowClear: true
                    });
$("#f_to_city_select").select2({
                               placeholder: "Select a Name",
                               allowClear: true
                           });


 $("#f_airline_select").select2({
                                      placeholder: "Select a Name",
                                     allowClear: true
                                  });
                                  $("#f_airplane_select").select2({
                                         placeholder: "Select a Name",
                                        allowClear: true
                                     });




                                     //Date picker
                                         $('#datepicker').datepicker({
                                           autoclose: true
                                         })



</script>


@endsection
