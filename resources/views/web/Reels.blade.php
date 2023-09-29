@php
	use App\Models\Activity;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="https://www.Zerotheme.com">
	<meta name="csrf-token" content="{{ csrf_token() }}">

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
	
	 <nav id="menu" class="navbar navbar-default navbar-fixed-top" style="background-color: blue; width: 100%; height: 80px">
		<div class="container"> 
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			  <a class="navbar-brand" href="index.html"><i class="fa fa-flag-checkered fa-flip-horizontal"></i> TripBooking<strong></strong></a> 

			  
			</div>


			<!-- Collect the nav links, forms, and other content for toggling -->
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="{{route('MenuUtilisateur')}}" class="page-scroll">Home</a></li>
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
		<section id="" class="box-content box-style text-center">
			<div class="container" style="margin-top: 120px;">
				

				<section class="packages" id="packages">
					<div class="box-container">
						

						
						 
				         @foreach ($Reels as $Reel)
						<div class="box">
						<div class="video-container">
                        <video  id="myVideo" autoplay muted>
                             <source src="{{ Storage::url($Reel->video) }}" type="video/mp4">
							 
                          </video>
						  <i class="fa fa-play" style="font-size: 1.6em; cursor: pointer;" onclick="toggleFullScreen()"></i>
						</div>
						 
						
							
							<div class="Favoris" data-id="">
								
                                    <i class="fa fa-video" style="font-size: 0.9em;"></i>
									
								
							</div>
							
						
							<div class="content">
								<h5>{{ $Reel->titre }}</h5>
								
							</div>
						</div>
						@endforeach
					</div>
				</section>
			</div>
		</section>
		
	</div>
	
	<!-- /////////////////////////////////////////Footer -->
	<footer>
		<div id="footer">
			<div class="container">
				<p>Copyright @ TripBooking. Designed by <a href="https://www.devtitechnologie.com/">DevtiTechnologie</a></p>
			</div>
		</div>
	</footer>
	<!-- Footer -->
	
	<!-- Portfolio Modals --> 
<!-- Use the modals below to showcase details about your portfolio projects! --> 

<!-- Portfolio Modal 1 -->
	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="{{ asset("web/js/login.js")}}"></script>
<script type="text/javascript" src="js/jquery-2.1.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="{{ asset("web/js/bootstrap.min.js")}}"></script> 
<script type="text/javascript" src="{{ asset("web/js/SmoothScroll.js")}}"></script> 
<script type="text/javascript" src="{{ asset("web/js/wow.min.js")}}"></script> 
<script type="text/javascript" src="{{ asset("web/js/jquery.isotope.js")}}"></script> 
<script type="text/javascript" src="{{ asset("web/js/main.js")}}"></script>
<script type="text/javascript" src="{{ asset("web/js/scripts.js")}}"></script>
<script type="text/javascript" src="{{ asset("web/js/lightbox-plus-jquery.min.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script src="../splide-2.4.12/dist/js/splide.min.js"></script>
 <script src="{{ asset("web/js/carousel.js")}}"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Handle click events on category buttons/links
        $('.category-filter').on('click', function() {
            var selectedCategory = $(this).data('category');

            // Show only the boxes that match the selected category
            if (selectedCategory === 'all') {
                $('.box').show(); // Show all boxes if "all" is selected
            } else {
                $('.box').hide(); // Hide all boxes initially
                $('.box[data-category="' + selectedCategory + '"]').show(); // Show boxes with the selected category
            }
        });
    });
</script>
<script>
    // Attendre que le DOM soit prêt
    document.addEventListener("DOMContentLoaded", function() {
        // Sélectionner le bouton par sa classe CSS
        var signInButton = document.querySelector(".sign-in-button");

        // Ajouter un écouteur d'événement au clic
        signInButton.addEventListener("click", function() {
            // Effectuer la redirection vers une autre page
            window.location.href = "/LoginPage"; // Remplacez "chemin-de-la-page" par le chemin réel de la page
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>

<script>
    function toggleFullScreen() {
        var video = document.getElementById('myVideo');

        if (!document.fullscreenElement) {
            video.requestFullscreen().catch(err => {
                console.error(`Erreur lors du passage en mode plein écran : ${err.message}`);
            });
        } else {
            if (document.exitFullscreen) {
                document.exitFullscreen().catch(err => {
                    console.error(`Erreur lors de la sortie du mode plein écran : ${err.message}`);
                });
            }
        }
    }
</script> 
<script>
document.addEventListener('fullscreenchange', function() {
        if (document.fullscreenElement === videoContainer) {
            video.muted = false; // Activer le son en plein écran
        } else {
            video.muted = true; // Désactiver le son lorsque vous quittez le plein écran
        }
    });
	</script> 





</body>
</html>