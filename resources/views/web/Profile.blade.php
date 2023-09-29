
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset("web/css/bootstrap.min.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
 <link rel="stylesheet" href="../splide-2.4.12/dist/css/splide.min.css">
    <link rel="stylesheet" href="{{ asset("web/css/style.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
    <title>Mon Projet HTML</title>
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
			  <li><a href="{{ route('MenuUtilisateur')}}" class="page-scroll">Home</a></li>
				<li><a href="{{ route('Contact')}}" class="page-scroll">Contact</a></li>
			
				<li><a href="{{ route('Reels')}}" class="page-scroll" class="Reels">Reels</a></li>
				<a class="sign-in-button" href="{{ route('Profile', ['id' => $User->id]) }}" >
         <i class="fas fa-user"></i> {{ Auth::User()->name }}  
				</a>

    </div>
         

			  </ul>
			</div>
			<!-- /.navbar-collapse --> 
		</div> 
		<!-- /.container-fluid --> 
	</nav>

	<section class="user-profile" style="margin-top: 80px;">
	<div class="colored-frame">
		<h2 style="font-size: 26px;">Informations personnelles :</h2>
		</div>
        <div class="container">
            <div class="row" style="margin-right: 170px;">
                <div class="col-md-6 col-md-offset-3">
                    @if (Auth::check())
                        <!--<h2 style="margin-left: -330px;">Votre profil</h2> -->
                        <form>
                            <div class="form-group">
                                <label for="name">Nom:</label>
                                <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="phone">Téléphone:</label>
                                <input type="text" class="form-control" id="phone" value="{{ Auth::user()->phone }}">
                            </div>
							<button type="submit" class="btn btn-primary">Confirmer</button>
                        </form>
                    @else
                        <p>Connectez-vous pour voir votre profil.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="packages" id="packages" style="margin-top: 50px;">
	<div class="colored-frame">
	<h2 style="margin-left: 85px; font-size: 26px;">Mes activités favorites :</h2>
	</div>
      <div class="box-container" style="margin-top: 20px; margin-left: 40px; margin-bottom: 30px;">
		  @foreach ($favoris as $Favoris)
						<div class="box" data-category="{{ $Favoris->Categorie }}">
							<div id="house-picture-slider" class="splide house-photos-slider">
								<div class="splide__track">
									<ul class="splide__list">
										<li class="splide__slide">
											<img src="{{Storage::url($Favoris->image)}}">
										</li>
										<li class="splide__slide">
											<img src="{{Storage::url($Favoris->image2)}}">
										</li>
										<li class="splide__slide">
											<img src="{{Storage::url($Favoris->image3)}}">
										</li>
									</ul>
								</div>
							</div>
							
							<div class="Favoris">
									<i class="fas fa-heart"></i>
								</div>
							<div class="content">
								<h5><i class="fas fa-map-marker-alt"></i>{{ $Favoris->titre }}</h5>
						
								<p>{{ $Favoris->{'sous-titre'} }}</p>
								<div class="stars">
									<p>4.5</p>
									<i class="fas fa-star"></i>
								</div>
								<div class="price"> ${{$Favoris->prix}} </div>
								<a href="{{ route('prez', [$Favoris->activity_id])}}" class="btn">book now</a>
							</div>
						</div>
						@endforeach 
    </div>
    </section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="{{ asset("web/js/login.js")}}"></script>
<script type="text/javascript" src="js/jquery-2.1.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="{{ asset("web/js/bootstrap.min.js")}}"></script>  
<script type="text/javascript" src="{{ asset("web/js/main.js")}}"></script>
<script type="text/javascript" src="{{ asset("web/js/scripts.js")}}"></script>
<script type="text/javascript" src="{{ asset("web/js/lightbox-plus-jquery.min.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script src="../splide-2.4.12/dist/js/splide.min.js"></script>
 <script src="{{ asset("web/js/carousel.js")}}"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>