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


	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
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
				 <a href="#" class="btn  btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms"> <div class="search-container">
					<input type="text" placeholder="Rechercher..." id="searchInput">
					<button type="submit"><i class="fa fa-search"></i></button>
				  </div></a>   
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="index.html" class="page-scroll">Home</a></li>
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
	<!-- Navigation -->

	<!-- /////////////////////////////////////////Header -->
		
	
	<!-- /////////////////////////////////////////Content -->
		<!-- ////////////Content Box 01 -->
		<section id="" class="box-content box-style text-center">
			
			<div class="container" style="margin-top: 0px">
				<!--  <div class="row heading wow fadeInDown">
					<div class="col-lg-12">
						<h2>Our <strong>Activities</strong></h2>
					  <hr>
					  <div class="clearfix"></div>
					  <p>Vous pouvez réserver dès maintenant l'expérience touristique que vous souhaitez en profiter </p>
					</div>
				</div>  -->
				<div class="categories">
				  <ul class="cat">
					<li>
						<ol class="type list-inline">
							<!--<li>
								<a href="#" data-filter="*">
								<div class="box-item">
								<img src="./images/all.svg" style="justify-content: center; display: flex; margin: 0px 0px 15px 10px; padding-top: 10px;"><span> All
								</span>
							</div>
							  </a>
							</li>
						-->
            <li> 
              <a href="#" class="category-filter" data-category="all">
              <div class="box-item">
              <img src="{{ asset("web/images/selectAll.png")}}" style="justify-content: center; display: flex; margin: 0px 0px 15px 0px;"><span> All categories
              </span>
              </div>
              </a>
            </li>            
							<li> 
								<a href="#" class="category-filter" data-category="tour">
								<div class="box-item">
								<img src="{{ asset("web/images/tour.png")}}" style="justify-content: center; display: flex; margin: 0px 0px 15px 0px;"><span> guided tours
								</span>
								</div>
								</a>
							</li>
							<li>
								<a href="#" class="category-filter" data-category="quad">
								<div class="box-item">
								<img src="{{ asset("web/images/quad.png")}}" style="justify-content: center; display: flex; margin: 0px 0px 15px 10px;"><span> Motorbikes</span>
								</div>
								</a>
							</li>
							<li>
								<a href="#" class="category-filter" data-category="Watersports">
								<div class="box-item">
								<img src="{{ asset("web/images/jet-ski.png")}}" style="justify-content: center; display: flex; margin: 0px 0px 15px 10px;"><span>Watersports
									</span>
								</div>
								</a>
							</li>
							<li>
								<a href="#" class="category-filter" data-category="AirSports">
								<div class="box-item">
								<img src="{{ asset("web/images/AirBallon.png")}}" style="justify-content: center; display: flex; margin: 0px 0px 15px 5px;"><span>Hot air ballon</span>
								</div>
								</a>								
							</li>
							<li>
								<a href="#" class="category-filter" data-category="tir">
								<div class="box-item">
								<img src="{{ asset("web/images/cible.png")}}" style="justify-content: center; display: flex; margin: 0px 0px 15px 5px;"><span>Paintball</span>
								</div>
					    </a>
							</li>
						</ol>
					</li>
				  </ul>
				  <div class="clearfix"></div>
				</div>
				

				<section class="packages" id="packages">
					<div class="box-container">
						<div class="box" data-category="tour">
							<div id="house-picture-slider" class="splide house-photos-slider">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ asset("web/images/15.jpg")}}">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ asset("web/images/11.jpg")}}">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ asset("web/images/12.jpg")}}">
                                    </li>
                                </ul>
                            </div>
                        </div>
                                <div class="Favoris">
									<i class="fas fa-heart"></i>
								</div>

              
							<div class="content">
								<h5><i class="fas fa-map-marker-alt"></i>maldives</h5>
								<p>Asie</p>
								<div class="stars">
									<p>3.7 </p>
									<i class="fas fa-star"></i>
								</div>
							
								<div class="price"> $90.00 </div>
								
							</div>
						</div>
						<div class="box">
							<img src="{{ asset("web/images/01.jpg")}}" alt="">
							<div class="Favoris">
									<i class="fas fa-heart"></i>

								</div>
							<div class="content">
								<h5><i class="fas fa-map-marker-alt"></i>Paris</h5>
								<p>France</p>
								<div class="stars">
									<p>4.2</p>
									<i class="fas fa-star"></i>
								</div>
						
								<div class="price"> $60.00 </div>
								
							</div>
						</div>
						<div class="box">
							<img src="{{ asset("web/images/13.jpg")}}" alt="">
							<div class="Favoris">
									<i class="fas fa-heart"></i>
								</div>
							<div class="content">
								<h5><i class="fas fa-map-marker-alt"></i>Dubai</h5>
								<p>UAE</p>
							<div class="stars">
								<p>4.7</p>
									<i class="fas fa-star"></i>
								</div>								<div class="price"> $170.00 </div>
								
							</div>
						</div>

						<div class="box">
							<img src="{{ asset("web/images/12.jpg")}}" alt="">
							<div class="Favoris">
									<i class="fas fa-heart"></i>
								</div>
							<div class="content">
								<h5><i class="fas fa-map-marker-alt"></i>maldives</h5>
								<p>Asie</p>
								<div class="stars">
									<p>3.9</p>
									<i class="fas fa-star"></i>
								</div>
								<div class="price"> $90.00 </div>
								
							</div>
						</div>

						<div class="box">
							<img src="{{ asset("web/images/12.jpg")}}" alt="">
							<div class="Favoris">
									<i class="fas fa-heart"></i>
								</div>
							<div class="Favoris">
									<i class="fas fa-heart"></i>
								</div>
							<div class="content">
								<h5><i class="fas fa-map-marker-alt"></i>maldives</h5>
								<p>Asie</p>
								<div class="stars">
									<p>4.3</p>
									<i class="fas fa-star"></i>
								</div>
								<div class="price"> $100.00 </div>
								
							</div>
						</div>

						<div class="box">
							<img src="{{ asset("web/images/07.jpg")}}" alt="">
							<div class="Favoris">
									<i class="fas fa-heart"></i>
								</div>
							<div class="content">
								<h5><i class="fas fa-map-marker-alt"></i>Sapa</h5>
								<p>Colombie</p>
							<div class="stars">
								  <p>4.7</p>
									<i class="fas fa-star"></i>
								</div>
								<div class="price"> $50.00 </div>
								
							</div>
						</div>

						<div class="box">
							<img src="{{ asset("web/images/08.jpg")}}" alt="">
							<div class="Favoris">
									<i class="fas fa-heart"></i>
								</div>
							<div class="content">
								<h5><i class="fas fa-map-marker-alt"></i>Irelande</h5>
								<p>Europe</p>
							<div class="stars">
									<i class="fas fa-star"></i>
								</div>
								<div class="price"> $130.00 </div>
								
							</div>
						</div>

						<div class="box">
							<img src="{{ asset("web/images/07.jpg")}}" alt="">
							<div class="Favoris">
									<i class="fas fa-heart"></i>
								</div>
							<div class="content">
								<h5><i class="fas fa-map-marker-alt"></i>Suisse</h5>
								<p>Europe</p>
								<div class="stars">
									<p>4.9</p>
									<i class="fas fa-star"></i>
								</div>
								<div class="price"> $100.00 </div>
								
							</div>
						</div>

						<div class="box">
							<img src="{{ asset("web/images/05.jpg")}}" alt="">
							<div class="Favoris">
									<i class="fas fa-heart"></i>
								</div>
							<div class="content">
								<h5><i class="fas fa-map-marker-alt"></i>Dubai</h5>
								<p>UAE</p>
								<div class="stars">
									<p>4.2</p>
									<i class="fas fa-star"></i>
								</div>
								<div class="price"> $150.00 </div>
								
							</div>
						</div>

						<div class="box">
							<img src="{{ asset("web/images/05.jpg")}}" alt="">
							<div class="Favoris">
									<i class="fas fa-heart"></i>
								</div>
							<div class="content">
								<h5><i class="fas fa-map-marker-alt"></i>Dubai</h5>
								<p>UAE</p>
								<div class="stars">
									<p>4.5</p>
									<i class="fas fa-star"></i>
								</div>
								<div class="price"> $150.00 </div>
							
							</div>
						</div>

						
						 
				         @foreach ($Activity as $Activity)
						<div class="box" data-category="{{ $Activity->Categorie }}" >
							<div id="house-picture-slider" class="splide house-photos-slider">
								<div class="splide__track">
									<ul class="splide__list">
										<li class="splide__slide">
											<img src="{{Storage::url($Activity->image)}}"  onclick="window.location.href='{{ route('prez', [$Activity->id]) }}';">
										</li>
										<li class="splide__slide">
											<img src="{{Storage::url($Activity->image2)}}"  onclick="window.location.href='{{ route('prez', [$Activity->id]) }}';">
										</li>
										<li class="splide__slide">
											<img src="{{Storage::url($Activity->image3)}}"  onclick="window.location.href='{{ route('prez', [$Activity->id]) }}';">
										</li>
									</ul>
								</div>
							</div>
							
							<div class="Favoris" data-id="{{ $Activity->id }}">
								<a href="{{ route('Profile.addToFavoris', ['id' => $Activity->id]) }}" class="add-to-favorites">
									<i class="fas fa-heart"></i>
								</a>
							</div>
							
						
							<div class="content"  onclick="window.location.href='{{ route('prez', [$Activity->id]) }}';">
								<h5><i class="fas fa-map-marker-alt"></i>{{ $Activity->titre }}</h5>
								<p>{{ $Activity->{'sous-titre'} }}</p>
								<div class="stars">
									<p>4.5</p>
									<i class="fas fa-star"></i>
								</div>
								<div class="price"> ${{$Activity->prix}} </div>
								
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
		<div id="footer" style="margin-top: 50px;">
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
<script>
$(document).ready(function() {
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    
    $('.add-to-favorites').click(function(event) {
        event.preventDefault(); // Empêche le comportement par défaut du lien
        
        var activityId = $(this).parent().data('id');
        
        // Envoyer une requête AJAX au serveur pour ajouter l'activité aux favoris
        $.ajax({
            url: '/Profile/AddToFavoris/' + activityId,
            method: 'POST',
            data: { _token: csrfToken },
            success: function(response) {
                // Réagir à la réponse du serveur si nécessaire
                console.log('Activité ajoutée aux favoris :', response);
            },
            error: function(error) {
                // Gérer les erreurs si besoin
                console.error('Erreur lors de l\'ajout aux favoris :', error);
            }
        });
    });
});
</script>

<script>
	<script>
$(document).ready(function () {
    $('#searchInput').on('input', function () {
        var searchText = $(this).val().toLowerCase();

        // Parcourez les éléments .box et montrez ou masquez-les en fonction de la recherche par nom d'activité
        $('.box').each(function () {
            var activityName = $(this).find('.content h5').text().toLowerCase();
            
            if (activityName.includes(searchText)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});
</script>

	</script>



</body>
</html>