@extends('admin.layouts.layout')
@section('title')
Adding Flight
@endsection
@section('header')


<style media="screen">
.box-body .form-group
{
  display: inline;
}
.box-body .form-group label
{
  width: 30%
  margin-bottom:30px;
}
.box-body .form-group input,select
{
  /* width: 50% */
  max-width: 570px;
  height:40px;
  margin-bottom:30px;
}
i
{
    height:20px;
}
#f_airplane_select
{
    width: 590px;
  margin-left: -16px;
}

</style>

@endsection
@section('content')
<div class="container">
@include('partials.success')

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h1 class="box-title">Flights dashboard </h1>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-md-offset-1 col-md-9">
                          <!-- Horizontal Form -->
                          <div class="box box-info">
                            <div class="box-header with-border">
                              <h2 class="box-title">Adding new flights</h2>
                            </div>
                            <!-- /.box-header -->
                            {!! Form::open(['url'=>['adminpanel/flights'],'method'=>'POST' ,'files'=>'true' ])  !!}


                              <div class="box-body">
                                <div class="form-group">
                                  <label for="f_from_city_select" class="col-sm-2 control-label">from city </label>

        {!! Form::select('from_city',selectCities(),null,['class'=>'col-sm-9','id'=>'f_from_city_select' ]) !!}
                                      </div>

                                      <div class="form-group">
                                          <label for="f_to_city_select" class="col-sm-2 control-label">to city </label>

                     {!! Form::select('to_city',selectCities(),null,['class'=>'col-sm-9','id'=>'f_to_city_select' ]) !!}
                                        </div>

                                        <div class="form-group">

                                          <label for="airline"  class="col-sm-2 control-label">airline </label>

                                         {!! Form::select('airline',selectAirlines(),null,['class'=>'col-sm-10','id'=>'f_airline_select' ]) !!}
                                          </div>



                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">airplane  </label>

                                  <div class="col-sm-10">

                                {!! Form::select('airplane',selectAirplanes(),null,['class'=>'col-sm-10','id'=>'f_airplane_select' ]) !!}
                                  </div>
                                </div>


                                <div class="form-group">
                                  <label  class="col-sm-2 control-label" >check in date</label>

                                  <div class="input-group date">
                                    <div class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </div>
                                    <input name="check_in" type="date"  class="col-sm-10" id="datepicker">
                                  </div>
                                  <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-2 control-label" >check out date</label>

                                  <div class="input-group date">
                                    <div class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </div>
                                    <input name="check_out" type="date"  class="col-sm-10"id="datepicker">
                                  </div>
                                  <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-2 control-label"> Cost in dollars </label>

                                  <div class="input-group">
                                    <div class="input-group-addon">
                                      <i class="fa fa-dollar"></i>
                                    </div>
                                    <input name="cost" type="number"  class="col-sm-10">
                                  </div>
                                  <!-- /.input group -->
                                </div>








                              </div>
                              <!-- /.box-body -->
                              <div class="box-footer">

                                <a href="#" class="btn btn-default">Cancel</a>
                                <button type="submit" class="btn btn-info pull-right">Add flight</button>
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
