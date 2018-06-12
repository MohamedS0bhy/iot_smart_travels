@extends('admin.layouts.layout')
@section('title')
 Adding travelers To Tickets||
 {{$traveler->name}}
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
                <h3 class="box-title"> traveler {{ $traveler->name }} </h3>
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

                      <td style="width:120px;"> traveler Name   </td>
                      <td> {{$traveler->name}} </td>

                    </tr>

                    <tr>

                      <td style="width:120px;"> traveler E_mail   </td>
                      <td> {{$traveler->email}} </td>

                    </tr>

                    <tr>

                      <td style="width:120px;"> traveler Ntionality   </td>
                      <td> {{showCountries($traveler->nationality)}} </td>

                    </tr>


                    <tr>

                      <td style="width:120px;"> City From  </td>
                      <td>{{$cityShower[$traveler->from_city]['city']}} </td>

                    </tr>

                    <tr>

                      <td style="width:120px;">  City to </td>
                      <td>{{$cityowower[$traveler->to_city]['city']}} </td>

                    </tr>
                    <br>
                    <tr>

                      <td style="width:120px;"> Phone Number    </td>
                      <td> {{$traveler->phone_number}} </td>

                    </tr>
                    <tr>

                      <td style="width:120px;"> Passport Number   </td>
                      <td> {{$traveler->passport_number}} </td>

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

          <div class="box-body">
            <div class="row">



            {!! Form::open(['url'=>'/adminpanel/addToTicket/', 'method'=>'get' ,'class'=>'form-horizontal' ,'files'=>'true' ]) !!}
            <div class="form-group{{ $errors->has('ticket') ? ' has-error' : '' }}" style="padding-bottom:20px">

        <br>
                     <div class="col-md-offset-1 col-md-6 ">

                           {!! Form::select('flight',[''],null,['class'=>'form-control','id'=>'subject' ]) !!}
                         @if ($errors->has('flight'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('flight') }}</strong>
                             </span>
                         @endif
                     </div>

                 </div>


                 <div class="form-group{{ $errors->has('ticket') ? ' has-error' : '' }}" style="padding-bottom:20px">

             <br>
                          <div class="col-md-offset-3 col-md-6">

                                {!! Form::select('ticket_status',[0=>'activates',1=>'De_Activated'],null,['class'=>'form-control','id'=>'subject' ]) !!}
                              @if ($errors->has('flight'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('flight') }}</strong>
                                  </span>
                              @endif
                          </div>

                      </div>
                      <div class="form-group{{ $errors->has('ticket') ? ' has-error' : '' }}" style="padding-bottom:20px">

                  <br>
                  <div class="col-md-offset-3 col-md-6">
                      <button type="submit" class="btn btn-warning">
                    Activate <i class="fa fa-plus"></i>
                      </button>
                  </div>


                           </div>





             {!! Form::close() !!}
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
