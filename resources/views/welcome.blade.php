@extends('layouts.app')
@section('title')
Welcome To Smart Travels CompNY


@endsection
@section('header')

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<style media="screen">
		 .banner{ background: url("{{ Request::root().'/website/virgin-2721333_1920.jpg'}}") no-repeat center;}
.main
{

height:300px;
}
.content
{
	padding: 30px;
line-height: 200%;
}
.join
{
	font-size: 25px;
	width: inherit;
}
.flight
{
	height: 200px;
}

.table-users {
  border: 1px solid #327a81;
  border-radius: 10px;
  box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
  max-width: calc(100% - 2em);
  margin: 1em auto;
  overflow: hidden;
  width: 800px;
}

table {
  width: 100%;
}
table td, table th {
  color: #2b686e;
  padding: 10px;
}
table td {
  text-align: center;
  vertical-align: middle;
}
table td:last-child {
  font-size: 0.95em;
  line-height: 1.4;
  text-align: left;
}
table th {
  background-color: #daeff1;
  font-weight: 300;
}
table tr:nth-child(2n) {
  background-color: white;
}
table tr:nth-child(2n+1) {
  background-color: #edf7f8;
}

@media screen and (max-width: 700px) {
  table, tr, td {
    display: block;
  }

  td:first-child {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    width: 100px;
  }
  td:not(:first-child) {
    clear: both;
    margin-left: 100px;
    padding: 4px 20px 4px 90px;
    position: relative;
    text-align: left;
  }
  td:not(:first-child):before {
    color: #91ced4;
    content: '';
    display: block;
    left: 0;
    position: absolute;
  }
  td:nth-child(2):before {
    content: 'Name:';
  }
  td:nth-child(3):before {
    content: 'Email:';
  }
  td:nth-child(4):before {
    content: 'Phone:';
  }
  td:nth-child(5):before {
    content: 'Comments:';
  }

  tr {
    padding: 10px 0;
    position: relative;
  }
  tr:first-child {
    display: none;
  }

}


/* filtering   */
/* Filter FligthIDs */
#Fid {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
padding: 6px 10px 6px 20px;      /* padding: 12px 20px 12px 40px; /* Add some padding */ */ */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}
#Ffrom {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
  padding: 6px 10px 6px 20px;    /* padding: 12px 20px 12px 40px; /* Add some padding */ */
    border: 1px solid #ddd; /* Add a grey border */
     margin-bottom: 12px; /* Add some space below the input */
}
#Fto {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
  padding: 6px 10px 6px 20px;    /* padding: 12px 20px 12px 40px; /* Add some padding */ */
    border: 1px solid #ddd; /* Add a grey border */
     margin-bottom: 12px; /* Add some space below the input */
}

#Fairline {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
     padding: 6px 10px 6px 20px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
     margin-bottom: 12px; /* Add some space below the input */
}


#myTable {
  /*   border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
   font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
  padding: 12px; /*  Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}



	</style>
@endsection
@section('content')


@if(session()->has('success'))
<div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>
        {!! session()->get('success') !!}
    </strong>
</div>
@endif


<div class="banner text-center">
  <div class="container">
    <div class="banner-info">
      <h1>
Welcome To Smart Flights Reservation System
			</h1>
      <p>This is will help you to reserve your flight very easily and it also enable you to travel anywhere around the world   </p>

		 </div>
  </div>
</div>


<div class="main">
<div class="content_white">
  <h2>  Availabel Flights  </h2>

	<br>
	<div class="flight col-sm-offset-1  col-sm-10">

		<table id="myTable">
			<tr class="header">

									 <th>
										 <input type="text" id="Fid" onkeyup="FilterId()" placeholder="">
		 </th>
									 <th>
										 <input type="text" id="Ffrom" onkeyup="FilterFrom()" placeholder="">
		 </th>

									 <th>
										  <input type="text" id="Fto" onkeyup="FilterTo()" placeholder="">
									   </th>
									 <th>Duration</th>
									 <th>Distance</th>
									 <th>
									  <input type="text" id="Fairline" onkeyup="FilterAirline()" placeholder="">

									 </th>

									 <th>Check in  </th>

									 <th>Cost</th>
		<th> BOOKING </th>


		  </tr>
		  <tr class="header">

									 <th>FlightId </th>
									 <th>From  </th>
									 <th> To  </th>
									 <th>Duration</th>
									 <th>Distance</th>
									 <th>Airline</th>

									 <th>Check in  </th>

									 <th>Cost</th>
		<th> BOOKING </th>


		  </tr>


			@foreach($flights as $flight)
		  <tr>
				<td>  {{$flight->id}} </td>
				<td>  {{$cityShower[$flight->from_city]['city']}}  </td>
				 <td> {{$cityShower[$flight->to_city]['city']}}  </td>
					<td> {{$flight->duration}} Hours</td>
					 <td> {{$flight->distance}}  </td>
						<td> {{$airlinesShower [$flight->airline] ['Airline']}} </td>
					 <td> {{$flight->check_in}}  </td>
		  <td>  {{ $flight->cost }} dollars     </td>
		<td> <a  class="btn btn-primary" href="{{url('/users/'.$flight->id.'/booknow')}}"> BOOK NOW </a> </td>
		@endforeach

		</table>
<div class="text-center">
	{{$flights->appends(Request::except('page'))->render()}}
</div>


	  </div>
	 </div>
	</div>



{{--
<div class="main">
<div class="content_white">
  <h2>  Availabel Flights  </h2>

	<br>
	<div class="flight col-sm-offset-1  col-sm-10">
		<div class="table-users">

		<input type="text" id="Fname" onkeyup="FilterNames()" placeholder="Search for names..">

		<input type="text" id="Fcountry" onkeyup="FilterCountries()" placeholder="Search for Country ..">
	</div>
	</div>

	@foreach($flights as $flight)

<div class="flight col-sm-offset-1  col-sm-10">

	<div class="table-users">


		 <table id="myTable" cellspacing="0">
				<tr>

					 <th>FlightId </th>
					 <th>From  </th>
					 <th> To  </th>
					 <th>Duration</th>
					 <th>Distance</th>
					 <th>Airline</th>

					 <th>Check in  </th>

					 <th>Cost</th>

          <th>Booking</th>
				</tr>

				<tr>
					<!--  this first table data till adding   the functionality that the user can add  his own image  -->

					 <td>  {{$flight->id}} </td>
					 <td>  {{$cityShower[$flight->from_city]['city']}}  </td>

						<td> {{$cityShower[$flight->to_city]['city']}}  </td>

						 <td> {{$flight->duration}} Hours</td>
						  <td> {{$flight->distance}}  </td>
							 <td> {{$airlinesShower [$flight->airline] ['Airline']}} </td>

							<td> {{$flight->check_in}}  </td>

<td>  {{ $flight->cost }} dollars     </td>

<td><a  class="btn btn-primary" href="{{url('/users/'.$flight->id.'/booknow')}}">Book Now   </a> </td>

				</tr>

		 </table>

		  <div class="footer text-center">
			<h1><a class="btn btn-success btn-block" href="{{url('/users/'.$flight->id.'/booknow')}}">BOOK NOW  </a> </h1>	 </div>
	</div>
</div>

@endforeach



</div>
</div>


<div class="featured_content" id="feature">
  <div class="container">
    <div class="row text-center">
      <div class="col-mg-3 col-xs-3 feature_grid1"> <i class="fa fa-cog fa-3x"></i>
        <h3 class="m_1"><a href="services.html">Legimus graecis</a></h3>
        <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
        <a href="services.html" class="feature_btn">More</a> </div>
      <div class="col-mg-3 col-xs-3 feature_grid1"> <i class="fa fa-comments-o fa-3x"></i>
        <h3 class="m_1"><a href="services.html">Mazim minimum</a></h3>
        <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
        <a href="services.html" class="feature_btn">More</a> </div>
      <div class="col-md-3 col-xs-3 feature_grid1"> <i class="fa fa-globe fa-3x"></i>
        <h3 class="m_1"><a href="services.html">Modus altera</a></h3>
        <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
        <a href="services.html" class="feature_btn">More</a> </div>
      <div class="col-md-3 col-xs-3 feature_grid2"> <i class="fa fa-history fa-3x"></i>
        <h3 class="m_1"><a href="services.html">Melius eligendi</a></h3>
        <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
        <a href="services.html" class="feature_btn">More</a> </div>
    </div>
  </div>
</div>
<div class="about-info">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="block-heading-two">
          <h2><span>About Our Company</span></h2>
        </div>
        <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p>
        <br>
        <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <a class="banner_btn" href="about.html">Read More</a> </div>
      <div class="col-md-4">
        <div class="block-heading-two">
          <h3><span>Our Advantages</span></h3>
        </div>
        <div class="panel-group" id="accordion-alt3">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3"> <i class="fa fa-angle-right"></i> Quisque cursus metus vitae pharetra auctor</a> </h4>
            </div>
            <div id="collapseOne-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3"> <i class="fa fa-angle-right"></i> Duis autem vel eum iriure dolor in hendrerit</a> </h4>
            </div>
            <div id="collapseTwo-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3"> <i class="fa fa-angle-right"></i> Quisque cursus metus vitae pharetra auctor </a> </h4>
            </div>
            <div id="collapseThree-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3"> <i class="fa fa-angle-right"></i> Duis autem vel eum iriure dolor in hendrerit</a> </a> </h4>
            </div>
            <div id="collapseFour-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="highlight-info">
  <div class="overlay spacer">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-smile-o fa-5x"></i>
          <h4>120+ Happy Clients</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-check-square-o fa-5x"></i>
          <h4>600+ Projects Completed</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-trophy fa-5x"></i>
          <h4>25 Awards Won</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-map-marker fa-5x"></i>
          <h4>3 Offices</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="testimonial-area">
  <div class="testimonial-solid">
    <div class="container">
      <h2>Client Testimonials</h2>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="3" class=""> <a href="#"></a> </li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- John Doe -</strong></p>
          </div>
          <div class="item">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- Jane Doe -</strong></p>
          </div>
          <div class="item">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- John Smith -</strong></p>
          </div>
          <div class="item">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- Linda Smith -</strong></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
--}}


@endsection
@section('footer')
<script type="text/javascript">



function FilterId() {
  // Declare variables
  var fid, filter, table, tr, td, i ,fcountry ;
  fid = document.getElementById("Fid");

  filter = fid.value;
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }




}

function FilterFrom() {
var filter, table, tr, td, i ,Ffrom ;
	Ffrom=document.getElementById("Ffrom");
  filter = Ffrom.value;
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }

}

function FilterTo() {
var filter, table, tr, td, i ,Fto ;
	Fto=document.getElementById("Fto");
  filter = Fto.value;
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }

}
function FilterAirline() {
var filter, table, tr, td, i ,Fairline ;
	Fairline=document.getElementById("Fairline");
  filter = Fairline.value;
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      if (td.innerHTML.indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }

}





</script>
@endsection
