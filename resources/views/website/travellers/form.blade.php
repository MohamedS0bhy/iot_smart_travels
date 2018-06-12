

@if(Isset($buser) && Isset($bflight) )

<div class="row">
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="padding-bottom:20px">

    <label for="name" class="col-md-offset-1 col-md-3"> Name of Traveller   </label>

        <div class="col-md-6">
        {{--

          {!! Form::text('name',null,['class'=>'form-control','value'=>$buser->name ,'placeholder'=>$buser->name]) !!}
--}}

<input type="text" name="name" class="form-control" value="{{$buser->name}}">

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

    </div>
    <br>




     <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}" style="padding-bottom:20px">

       <label for="nationality" class="col-md-offset-1 col-md-3"> Nationality   </label>




   <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}" style="padding-bottom:20px">
                        <div  class="col-md-6" style="text_align:center">

                              {!! Form::select('nationality',countries(),null,['class'=>'form-control','id'=>'t_nationality' ]) !!}
                            @if ($errors->has('nationality'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nationality') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>



                </div>


<br>
    <div class="form-group{{ $errors->has('from_city') ? ' has-error' : '' }}" style="padding-bottom:20px">

      <label for="from_city" class="col-md-offset-1 col-md-3"> From City   </label>




                  <div class="form-group{{ $errors->has('from_city') ? ' has-error' : '' }}" style="padding-bottom:20px">


                           <div class="col-md-6">

{{--

           {!! Form::select('from_city',selectCities(),null,['class'=>'form-control', 'value'=>$bflight->id ,'id'=>'t_from_city_select' ]) !!}
--}}
<select name="from_city" class="form-control" id="t_from_city_select">
                                                <option value="{{$bflight->from_city}}" selected>  {{$cityShower[$bflight->from_city]['city']}} </option>

                                            </select>

                               @if ($errors->has('from_city'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('from_city') }}</strong>
                                   </span>
                               @endif
                           </div>

                       </div>



                   </div>
<br>

                   <div class="form-group{{ $errors->has('to_city') ? ' has-error' : '' }}" style="padding-bottom:20px">

                     <label for="to_city" class="col-md-offset-1 col-md-3"> To City   </label>




               <div class="form-group{{ $errors->has('to_city') ? ' has-error' : '' }}" style="padding-bottom:20px">


                        <div class="col-md-6" >
{{--
                              {!! Form::select('to_city',array_except(selectCities(),0),null,['class'=>'form-control','id'=>'t_to_city_select' ]) !!}
--}}
                              <select name="to_city" class="form-control" id="t_to_city_select">
                              <option value="{{$bflight->to_city}}" selected>  {{$cityShower[$bflight->to_city]['city']}} </option>

                          </select>


                            @if ($errors->has('to_city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('to_city') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>



                </div>


<br>




    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="padding-bottom:20px">

      <label for="bu_name" class="col-md-offset-1 col-md-3"> Email Of Traveller   </label>

          <div class="col-md-6">
{{--
              {!! Form::text('email',null,['class'=>'form-control']) !!}
--}}
<input type="text" name="email" class="form-control"  value="{{$buser->email}}">
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>

      </div>
      <div class="clear-fix">
      </div>





<br>
      <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}" style="padding-bottom:20px">

        <label for="phone_number" class="col-md-offset-1 col-md-3"> Phone Number </label>

            <div class="col-md-6">
                {!! Form::text('phone_number',null,['class'=>'form-control']) !!}
                @if ($errors->has('phone_number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                @endif
            </div>

        </div>

<br>
        <div class="form-group{{ $errors->has('passport_number') ? ' has-error' : '' }}" style="padding-bottom:20px">

          <label for="bu_name" class="col-md-offset-1 col-md-3"> Passport  Number </label>

              <div class="col-md-6">
                  {!! Form::text('passport_number',null,['class'=>'form-control']) !!}
                  @if ($errors->has('passport_number'))
                      <span class="help-block">
                          <strong>{{ $errors->first('passport_number') }}</strong>
                      </span>
                  @endif
              </div>

          </div>

        <br>

<!-- hidden input  -->
<input type="hidden" name="user"  value="{{Auth::user()->id}}">



        <div class="form-group">
          <div class="col-md-offset-3 col-md-10">
            <button type="submit" class="btn btn-warning btn-flat"   style="width:300px;height:35px; margin-left:60px; " >
Send tickets reservation request
  </button>
         </div>
        </div>
      <br><br>
</div>
@else


{{--
if the user booking from the navbar where the flight not existing or even he didn't look at the available flights
  --}}


<div class="row">
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="padding-bottom:20px">

    <label for="name" class="col-md-offset-1 col-md-3"> Name of Traveller   </label>

        <div class="col-md-6">
            {!! Form::text('name',null,['class'=>'form-control']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

    </div>
    <br>




     <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}" style="padding-bottom:20px">

       <label for="nationality" class="col-md-offset-1 col-md-3"> Nationality   </label>




   <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}" style="padding-bottom:20px">
                        <div  class="col-md-6" style="text_align:center">

                              {!! Form::select('nationality',countries(),null,['class'=>'form-control','id'=>'t_nationality' ]) !!}
                            @if ($errors->has('nationality'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nationality') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>



                </div>


<br>
    <div class="form-group{{ $errors->has('from_city') ? ' has-error' : '' }}" style="padding-bottom:20px">

      <label for="from_city" class="col-md-offset-1 col-md-3"> From City   </label>




                  <div class="form-group{{ $errors->has('from_city') ? ' has-error' : '' }}" style="padding-bottom:20px">


                           <div class="col-md-6">

                                 {!! Form::select('from_city',selectCities(),null,['class'=>'form-control','id'=>'t_from_city_select' ]) !!}
                               @if ($errors->has('from_city'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('from_city') }}</strong>
                                   </span>
                               @endif
                           </div>

                       </div>



                   </div>
<br>

                   <div class="form-group{{ $errors->has('to_city') ? ' has-error' : '' }}" style="padding-bottom:20px">

                     <label for="to_city" class="col-md-offset-1 col-md-3"> To City   </label>




               <div class="form-group{{ $errors->has('to_city') ? ' has-error' : '' }}" style="padding-bottom:20px">


                        <div class="col-md-6" >

                              {!! Form::select('to_city',array_except(selectCities(),0),null,['class'=>'form-control','id'=>'t_to_city_select' ]) !!}
                            @if ($errors->has('to_city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('to_city') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>



                </div>


<br>




    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="padding-bottom:20px">

      <label for="bu_name" class="col-md-offset-1 col-md-3"> Email Of Traveller   </label>

          <div class="col-md-6">
              {!! Form::text('email',null,['class'=>'form-control']) !!}
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>

      </div>
      <div class="clear-fix">
      </div>





<br>
      <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}" style="padding-bottom:20px">

        <label for="phone_number" class="col-md-offset-1 col-md-3"> Phone Number </label>

            <div class="col-md-6">
                {!! Form::text('phone_number',null,['class'=>'form-control']) !!}
                @if ($errors->has('phone_number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                @endif
            </div>

        </div>

<br>
        <div class="form-group{{ $errors->has('passport_number') ? ' has-error' : '' }}" style="padding-bottom:20px">

          <label for="bu_name" class="col-md-offset-1 col-md-3"> Passport  Number </label>

              <div class="col-md-6">
                  {!! Form::text('passport_number',null,['class'=>'form-control']) !!}
                  @if ($errors->has('passport_number'))
                      <span class="help-block">
                          <strong>{{ $errors->first('passport_number') }}</strong>
                      </span>
                  @endif
              </div>

          </div>

        <br>

        <input type="hidden" name="user"  value="{{Auth::user()->id}}">



        <div class="form-group">
          <div class="col-md-offset-3 col-md-10">
            <button type="submit" class="btn btn-warning btn-flat"   style="width:300px;height:35px; margin-left:60px; " >
Send tickets reservation request
</button>


      </div>

        </div>

        <br><br>
</div>



@endif
