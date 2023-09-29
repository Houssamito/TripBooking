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

    <title>Location Villa à Kinshasa | Inzu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="../splide-2.4.12/dist/css/splide.min.css">
	
	<!-- Custom Fonts -->
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
     <!-- Custom CSS -->
     <link rel="stylesheet" href="{{ asset("web/css/style.css")}}">
     <link rel="stylesheet" href="{{ asset("web/css/main.css")}}">
    <link rel="stylesheet" href="{{ asset("web/font-awesome/css/style.css")}}">
	  <link rel="stylesheet" type="text/css" href="{{ asset("web/css/animate.min.css")}}">
</head>

<body>
    <!-- /////////////////////////////////////////Navigation -->
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
				<li><a href="index.html" class="page-scroll">Home</a></li>
				<li><a href="contact.html" class="page-scroll">Contact</a></li>
				
				<li><a href="contact.html" class="page-scroll" class="Reels">Reels</a></li>
				<button class="sign-in-button">
         <i class="fas fa-user"></i> Sign In
        </button>

    </div>
         

			  </ul>
			</div>
			<!-- /.navbar-collapse --> 
		</div>
		<!-- /.container-fluid --> 
	</nav>


    <section class="house-page">
        <div class="container" style="margin-top: 100px">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-section">
                        <div class="head">
                            <h5 class="my-4  house-title">{{ $activity->titre }}</h5>
                            <p class="house-sub-title">
                                <a href="./under_building.html">{{ $activity->{'sous-titre'} }} </a>
                            </p>
                        </div>

                        <div class="image-slider-wrapper">
                        <div id="house-picture-slider" class="splide house-photos-slider">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{Storage::url($activity->image)}}">
                                    </li>
                                    
                                    <li class="splide__slide">
                                        <img src="{{Storage::url($activity->image2)}}">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{Storage::url($activity->image3)}}">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="image-list">
                            <img src="{{Storage::url($activity->image)}}" alt="Image 2">
                            <img src="{{Storage::url($activity->image2)}}" alt="Image 2">
                            <img src="{{Storage::url($activity->image3)}}" alt="Image 3">
                        </div>
                        </div>

                        
                        <div class="house-infos my-5">
                            <div class="infos-block description">
                                <h5 class="title" style="color: black; margin-top:30px">Description</h5>
                                <span class="content text" style="margin-right: 100px">
                                    <p class="info-item">{{$activity->description}}</p>
                                
                                </span>
                                <hr>
                            </div>
                            <div class="infos-block house-informations">
                                <h5 class="title" style="color: black">Informations</h5>
                                <span class="content text">
                                  
                                   <ul class="infos-list">
                                        <li class="info-item">
                                            <span class="label">Nombre de places : 
                                            </span>
                                            <span>{{$activity->Nombre_places}} au maximum</span>
                                            
                                        </li>
                                        <li class="info-item">
                                            <span class="label">Date fixée: 
                                            </span>
                                            <span>{{$activity->Date}}</span>
                                        </li>
                                        <li class="info-item">
                                            <span class="label">Responsable du tour: 
                                            </span>
                                            <span>{{$activity->ResponsableAct}}</span>
                                        </li>
                                        
                                   </ul>
                                </span>
                                <hr>
                            </div>
                          <!--  <div class="infos-block rooms">
                                <h5 class="title" style="color: black">Détails</h5>
                                <span class="content text">
                                    <ul class="infos-list">
                                        <li class="info-item">
                                            <span class="label living-room-nb">
                                                <img src="{{ asset("web/assets/icons/Weekend.svg")}}" alt="" style="width: 25px;">
                                                Capacité : 
                                            </span>
                                            <span class="value">{{$activity->Nombre_places}}</span>
                                        </li>
                                        <li class="info-item bed-nb">
                                            <span class="label">
                                                <img src="{{ asset("web/assets/icons/Door.svg")}}" alt="" style="width: 25px;">
                                                Jours     : 
                                            </span>
                                            <span class="value">7</span>
                                        </li>
                                        <li class="info-item kitchen-nb">
                                            <span class="label">
                                                <img src="{{ asset("web/assets/icons/Spoon.svg")}}" alt="" style="width: 25px;">
                                                Hotels : 
                                            </span>
                                            <span class="value">5</span>
                                        </li>
                                        <li class="info-item bath-room-nb">
                                            <span class="label">
                                                <img src="{{ asset("web/assets/icons/Bathtub.svg")}}" alt="" style="width: 25px;">
                                                Cap/chambre  : 
                                            </span>
                                            <span class="value">5</span>
                                        </li>
                                        <li class="info-item bath-room-nb">
                                            <span class="label">
                                                <img src="{{ asset("web/assets/icons/toilet_paper.svg")}}" alt="" style="width: 20px;">
                                                Places à visiter : 
                                            </span>
                                            <span class="value">10</span>
                                        </li>
                                        <li class="info-item bath-room-nb">
                                            <span class="label">
                                                <img src="{{ asset("web/assets/icons/washing_machine.svg")}}" alt="" style="width: 25px;">
                                                Petit-déj : 
                                            </span>
                                            <span class="value">Inclus</span>
                                        </li>
                                        <li class="info-item garage-nb">
                                            <span class="label">
                                                <img src="{{ asset("web/assets/icons/Garage.svg")}}" alt="" style="width: 25px;">
                                                Places dispo : 
                                            </span>
                                            <span class="value">40</span>
                                        </li>
                                    </ul>
                                </span>
                                <hr>
                            </div>
                        -->
                            <div class="infos-block other_details">
                                <h5 class="title" style="color: black">Activités</h5>
                                <span class="content text">
                                <ul class="infos-list">
                                    <li class="info-item garden">
                                        <span class="">{{$activity->Activite1}}</span>
                                    </li>
                                    <li class="info-item fireplace">
                                        <span class="">{{$activity->Activite2}}</span>
                                    </li>
                                    <li class="info-item pool">
                                        <span class="">{{$activity->Activite3}}</span>
                                    </li>
                                    <li class="info-item near-water">
                                        <span class="">Beach soccer</span>
                                    </li>
                                </ul>
                                </span>
                            </div>

                            <div class="infos-block other_details">
                                <h5 class="title" style="color: black">Evaluation</h5>
                                <span class="content text">
                                    <div class="rating-group" style="margin-left: 50px">
                                    
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-1" value="1" type="radio">
                                        <label aria-label="2 stars" class="rating__label" for="rating-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-2" value="2" type="radio">
                                        <label aria-label="3 stars" class="rating__label" for="rating-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-3" value="3" type="radio" checked>
                                        <label aria-label="4 stars" class="rating__label" for="rating-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-4" value="4" type="radio">
                                        <label aria-label="5 stars" class="rating__label" for="rating-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-5" value="5" type="radio">
                                    </div>
                                </span>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 side-box-container">
                    <div id="side-box" class="side-box">
                        <div class="box price-box">
                            <p>Le prix de l'activité est de : </p>
                            <p class="house-price">{{$activity->prix}}€</p>
                        </div>
                        <div class="box location-box">
                            <h5 class="head my-3">Réservez dès maintenant</h5>
                            <div>
                                <form action="{{ route('prez.sendData', ['id' => $activity->id, 'prix' => $activity->prix]) }}" method="POST">
                                    @csrf
                                    <span class="input-box">
                                         <input type="date" placeholder="Date de tour" name="date">
                                    </span>
                                    <span class="input-box">
                                        <input type="number" placeholder="Nombre de personnes" name="numberOfPlaces">
                                        
                                   </span>
                                    
                                    <input type="submit" class="btn btn-blind full-w" value="Passer à la réservation" >
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="near-houses"class="infos-block my-5 px-lg-5">
            <h5 class="title" style="margin-left: 500px"> Vos recommandations</h5>
            <div id="house-slider" class="house-slider splide mt-5">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($randomActivities as $activity)
                        <li class="splide__slide house-item">
                            <a href="{{ route('prez', [$activity->id]) }}" class="link">
                                <div class="house-photos-slider splide">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide">
                                                <img src="{{Storage::url($activity->image)}}">
                                            </li>
                                            <!-- Ajoutez des balises <li> pour les autres images -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div>
                                        <h6 class="house-title">
                                            <span class="town">{{ $activity->titre }}</span>
                                            <span class="type">{{ $activity->Categorie }}</span>
                                        </h6>
                                        <span class="house-description">
                                            <p>{{ $activity->description }}</p>
                                            <span class="read-more">Lire la suite</span>
                                        </span>
                                    </div>
                                    <span id="price" class="price ml-auto">{{ $activity->prix }}$ </span>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
        </div>
    </section>

    <footer>
		<div id="footer">
			<div class="container">
				<p>Copyright @ TripBooking. Designed by <a href="https://www.devtitechnologie.com/">DevtiTechnologie</a></p>
			</div>
		</div>
	</footer>


    <script src="{{ asset("web/js/jquery.min.js")}}"></script>
    <script src="https://kit.fontawesome.com/47fc11e9b5.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="../splide-2.4.12/dist/js/splide.min.js"></script>
    <script src="{{ asset("web/js/carousel.js")}}"></script>
    <script src="{{ asset("web/js/main.js")}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
    var splide = new Splide('#house-picture-slider').mount();

    function highlightImage(index) {
        $('.image-list img').removeClass('active');
        $('.image-list img').eq(index).addClass('active');
    }

    splide.on('init', function() {
        highlightImage(splide.index);
    });

    splide.on('move', function() {
        highlightImage(splide.index);
    });
});
    </script>
    <script>
    $(document).ready(function() {
        var sideBox = $('#side-box');
        var sideBoxTop = sideBox.offset().top; // La position verticale de la boîte latérale
        var footerHeight = 360;
    
        $(window).scroll(function() {
            var windowHeight = $(window).height();
            var scrollPos = $(window).scrollTop(); // La position verticale de défilement
            var footerStart = $(document).height() - footerHeight - windowHeight;
            if (scrollPos >= sideBoxTop && scrollPos <= footerStart) {
                sideBox.addClass('fixed');
            } else {
                sideBox.removeClass('fixed');
            }
        });
    });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    var descriptions = document.querySelectorAll(".house-item .item-info .house-description p");

    descriptions.forEach(function(description) {
        if (description.scrollHeight > 100) {
            description.classList.add("expandable");
        }
    });
});
document.addEventListener("DOMContentLoaded", function() {
    var readMoreButtons = document.querySelectorAll(".house-description .read-more");

    readMoreButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var description = this.parentElement.querySelector("p");
            description.classList.toggle("expandable");
            this.textContent = description.classList.contains("expandable") ? "Lire la suite" : "Réduire";
        });
    });
});

    </script>
    </body>