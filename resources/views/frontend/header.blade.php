<header class="header header nav-on-banner ">

        <div class="main-header">

			<div class="container-fluid">
				<div class="row">
					<div class="col-12">

						<nav class="navbar fixed-top navbar-expand-lg navbar-light bg">
						    <div class="container">

                                <button class="navbar-toggler white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                    <span ><i class="fas fa-bars primary"></i></span>
                                </button>

							    <a class="navbar-brand" href="#">
							    	<img src="frontAssets/img/logo/1.png" class=" nav-logo " alt="">
							    </a>

							    <div class="collapse navbar-collapse" id="navbarToggler">
								    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
								        <li class="nav-item">
								          <a class="nav-link activeH" href="#">Home</a>
								        </li>
								        <li class="nav-item">
								          <a class="nav-link" href="#gallery">Pricing</a>
								        </li>

								        <li class="nav-item">
								          <a class="nav-link" href="#gallery">Gallery</a>
								        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Accomodation</a>
                                          </li>
								    </ul>

                                    @if(Route::has('login'))
                                    @auth

                                        <a href="{{route('bookingStatus')}}"><button type="" class="btn btn-success p-2 ms-2">My Status</button></a>

                                        <a href="{{route('userLogout')}}"><button type="" class="btn btn-danger p-2 ms-2">Logout</button></a>

                                    @else

                                        <a href="{{route('signup')}}"><button type="" class="btn sign-btn white p-2 ms-2">Sign Up/Log In</button></a>

                                    @endauth
                                    @endif

                                </div>
						    </div>
						</nav>
					</div><!--col-12-->
				</div><!--row-->
			</div><!--container-->

		</div><!--main-header-->

</header>
