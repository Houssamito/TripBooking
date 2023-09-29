<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="https://www.Zerotheme.com">

    <title>My Travel | Zerotheme.com</title>

    <!-- Bootstrap Core CSS -->
	<link href="{{ asset("web/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="../css/lightbox.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
 <link rel="stylesheet" href="../splide-2.4.12/dist/css/splide.min.css">
    
	
	<!-- Custom Fonts -->
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
     <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset("web/css/style.css")}}">


    <link rel="stylesheet" href="{{ asset("web/font-awesome/css/style.css")}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
	  <link rel="stylesheet" type="text/css" href="{{ asset("web/css/animate.min.css")}}">
</head>
<body>
	<!-- /////////////////////////////////////////Navigation -->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top" style="background-color: blue; width: 100%; height: 80px;">
		<div class="container"> 
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			  <a class="navbar-brand" href="index.html"><i class="fa fa-flag-checkered fa-flip-horizontal"></i> TripBooking<strong></strong></a> 

			  
			</div>


			<!-- Collect the nav links, forms, and other content for toggling -->
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="{{ route('MenuUtilisateur')}}" class="page-scroll">Home</a></li>
				<li><a href="{{ route('Contact')}}" class="page-scroll">Contact</a></li>
				<li><a href="{{ route('Reels')}}" class="page-scroll" class="Reels">Reels</a></li>
				@auth
    <a class="sign-in-button" href="{{ route('Profile', ['id' => Auth::user()->id]) }}">
        <i class="fas fa-user"></i> {{ Auth::user()->name }}  
    </a>
@else
    <a class="sign-in-button" href="{{ route('login') }}">
        <i class="fas fa-user"></i> Sign In
    </a>
@endauth

    </div>
         

			  </ul>
			</div>
			<!-- /.navbar-collapse --> 
		</div>
		<!-- /.container-fluid --> 
	</nav>
	<!-- Header -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="sub-page">
		<div id="main-content">
			<article>
				<div class="container">
					<!-- <div class="row heading wow fadeInDown text-center">
						<div class="col-lg-12">
							<h2>Contact</h2>
						  <hr>
						  <div class="clearfix"></div>
						  <p>Contactez nous à partir de notre Email ou notre numéro professionnel</p>
						</div>
					</div>  -->
					<div class="row">
				
						<div class="col-md-4 box-item wow fadeInLeft">
							<h3 style="margin-top: 100px">Contact Info</h3>
							<br>
							<br>
							<br>
							<br>
							
							<p>Technopark Tangier office N° T214
                              <br>
							  Tangier, 90000</p>
							   <p>+212 066 010 4665 </p>
							<p></p>
						</div>
						<div class="col-md-8 wow fadeInRight">
							<h3 style="margin-left:300px; margin-bottom:50px">Contact Form</h3>
							<form id="ff" action="{{route('Messages.store')}}" method="post" enctype="multipart/form-data">
							@csrf
								<div class="">
									<div class="col-md-6">
										<div class="form-group">
										<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" value="{{ old('name', $User->name) }}" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" value="{{ old('name', $User->email) }}"/>
										</div>
									</div>
								</div>
								<div class="">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
										</div>
									</div>
								</div>
								<div class="">
									<div class="col-md-12 text-center">
										<div class="form-group">
											<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
											placeholder="Message"></textarea>
										</div>						
										<button type="submit" class="btn btn-default btn-lg page-scroll wow fadeInUp" name="submitcontact" id="submitcontact" style="margin-bottom: 20px">Submit</button>
									</div>
								</div>
							</form>
						</div>
						<div class='embed-container maps'>
						
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.9776656342983!2d-5.805697524867876!3d35.77592497255695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c7f580f56224f%3A0x10633cdbe9d95d5b!2sTechnopark!5e0!3m2!1sen!2sma!4v1694014969425!5m2!1sen!2sma" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
	
	<!-- /////////////////////////////////////////Footer -->
	<footer>
		<div id="footer">
			<div class="container">
				<p>Copyright © MyTravel. Designed by <a href="https://www.Zerotheme.com" target="_blank">Zerotheme</a></p>
			</div>
		</div>
	</footer>
	<!-- Footer -->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery-2.1.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/wow.min.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/main.js"></script>

<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>

</body>
</html>