<!DOCTYPE html>
<html lang="en">
<head>
  <meta charA="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      {!!Html::style('website/css/bootstrap.min.css') !!}
      {!!Html::style('website/css/flexslider.css') !!}

      {!!Html::style('website/css/font-awesome.min.css') !!}

      {!!Html::style('website/css/mystyle.css') !!}
      {!!Html::style('website/css/w3.css') !!}
      {!!Html::script('website/js/jquery.min.js') !!}

{!! html::style('sweetalert2/sweetalert.css') !!}
{!! html::script('sweetalert2/sweetalert.js') !!}




 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <title>
Smart Travels
|
@yield('title')


    </title>
@yield('header')

    <style type="text/css" >
.navbar-brand
{
  margin-left:20px;
}

.left
{
  margin-left: 10px;
  width:100px;
}


    </style>
</head>
<body id="app-layout">

  <div class="header">
    <div class="container"> <a  class="navbar-brand" href="{{url('/')}}"><i class="fa fa-plane"></i> SMART TRAEVELS </a>
      <div class="menu"> <a class="toggleMenu" href="#"><img src="{{Request::root()}}/website/images/nav_icon.png" alt="" /> </a>
        <ul style="position:relative;" class="nav text-center" id="nav">

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  Reservation <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">

                <li  class="left" ><a href="{{url('/users/traveller')}}"> Booking</a></li>
                @if(!Auth::guest())
                <li  class="text-center" ><a href="{{url('/users/'.Auth::user()->id.'/userticket')}}"> My Tickets</a></li>
@endif


              </ul>
          </li>




          <li  ><a  style="width:150px;" href="{{url('contact')}}">Contact Us </a></li>
          <!-- Authentication Links -->
                     @if (Auth::guest())
                            <li><a href="{{ route( 'login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                    @if(Auth::user()->admin==1)
                    <li class="pull-left"> <a href="{{url('/adminpanel')}}"> <i class="fa fa-cog"></i> adminpanel </a> </li>
                    @endif
                    <li class="pull-left" >
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">

                               <i class="fa fa-power-off" aria-hidden="true"></i> Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>



                  </ul>
              </li>
          @endif
          <div class="clear"></div>
        </ul>

      </div>
    </div>
  </div>


@yield('content')







{!!Html::script('website/js/bootstrap.min.js') !!}
{!!Html::script('website/js/jquery.flexslider.js') !!}
{!!Html::script('website/js/responsive-nav.js') !!}

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">



$("#t_nationality").select2({
           placeholder: "Select a Name",
           allowClear: true
       });

       $("#t_from_city_select").select2({
                  placeholder: "Select a Name",
                  allowClear: true
              });
        $("#t_to_city_select").select2({
                         placeholder: "Select a Name",
                         allowClear: true
                     });


</script>





@yield('footer')
</body>
</html>
