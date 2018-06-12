@extends('layouts.app')
@section('title')
 Contact Us
@endsection
@section('header')

@endsection
@section('content')
<br>

<div class="container">
    <div class="row">
      <h1 class="text-center"> Contact Us </h1>

        <div class="col-md-8">
<br>


@include('partials.success')
            <div class="well well-sm">


            {!! Form::open(['url'=>'/contact','method'=>'post'] ) !!}
                <div class="row">


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                               Name</label>
                            <input type="text" name="contact_name" class="form-control" id="name" placeholder="Enter name please" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                               E-Mail </label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email"  name="contact_email" class="form-control" id="email" placeholder="Enter E-mail please " required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_type">
                                Message Address    </label>
                            <select id="subject" name="contact_type" class="form-control" required="required">
                       <option value="0"> Like</option>
                       <option value="1"> Sugestion </option>
                        <option value="2"> Complain </option>
                        <option value="3">   Question  </option>
                                    </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                 message content </label>
                            <textarea name="contact_message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Please enter the cotent of your message right here"></textarea>
                        </div>
                    </div>



                    <div class="col-md-12">
                        <button type="submit" class="banner_btn pull-left" id="btnContactUs">
                           Send message </button>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-4">
            <form>
              <br><br>
              <br>
            <legend class="text-center"><i class="fa fa-globe"></i>      Our Office </legend>
            <address class="text-center">
                     <span style="margin-left:30px"><a href="www.facebook.com"><i class="fa  fa-facebook fa-2x "></i> </a>  </span>
                     <span style="margin-left:30px"><a href="www.twitter.com"><i class="fa fa-twitter fa-2x"></i></a>   </span>
                     <span  style="margin-left:30px"><a href="www.google.com"> <i class="fa fa-google-plus fa-2x"></i></a>  </span>
                      <span style="margin-left:30px"><a href="www.linkedin.com"> <i class="fa fa-linkedin fa-2x"></i></a>  </span>
            </address>
            <address class="text-center">
                <strong>  E-mail </strong><br>
                <a href="../../../abdelrahmangad95@gmail.com">iot-smart-travels@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div>

@endsection
