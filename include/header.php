<div class="container-fluid bg-light d-none d-lg-block">
	<div class="containerFull">

		<div class="row align-items-center top-bar">
			<div class="col-lg-3 col-md-12 text-center text-lg-start">
				<a href="" class="navbar-brand m-0 p-0">
					<h1 class="text-primary m-0"><img src="images/logo.png" alt=""></h1>
				</a>
			</div>
			<div class="col-lg-9 col-md-12 text-end">
				<div class="h-100 d-inline-flex align-items-center me-4">
					<i class="fa fa-map-marker-alt text_primary me-2"></i>
					<p class="m-0">123 Street, New York, USA</p>
				</div>
				<div class="h-100 d-inline-flex align-items-center me-4">
					<i class="far fa-envelope-open text_primary me-2"></i>
					<p class="m-0">info@example.com</p>
				</div>
				<div class="h-100 d-inline-flex align-items-center">
					<a class="btn btn-sm-square bg-white text_primary me-1" href=""><i
							class="fab text_primary fa-facebook-f"></i></a>
					<a class="btn btn-sm-square bg-white text_primary me-1" href=""><i
							class="fab text_primary fa-twitter"></i></a>
					<a class="btn btn-sm-square bg-white text_primary me-1" href=""><i
							class="fab text_primary fa-linkedin-in"></i></a>
					<a class="btn btn-sm-square bg-white text_primary me-0" href=""><i
							class="fab text_primary fa-instagram"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-light stricky">
	<nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
		<a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
			<h1 class="text-primary m-0 header-logo"><img src="images/logo.png" alt=""></h1>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="fa fa-bars"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav me-auto">
			<a href="index.php" class="nav-item nav-link <?php echo ($page == 'home') ? 'active' : ''; ?>">Home</a>
				<a href="about-us.php" class="nav-item nav-link  <?php echo ($page == 'about') ? 'active' : ''; ?>">About Us</a>
				<a href="services.php" class="nav-item nav-link  <?php echo ($page == 'services') ? 'active' : ''; ?>">Our Services</a>
				<a href="gallery.php" class="nav-item nav-link  <?php echo ($page == 'gallery') ? 'active' : ''; ?>">Gallery</a>
				<!-- <div class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
					<div class="dropdown-menu fade-up m-0">
						<a href="booking.php" class="dropdown-item">Booking</a>
						<a href="team.php" class="dropdown-item">Technicians</a>
						<a href="testimonial.php" class="dropdown-item">Testimonial</a>
						<a href="404.php" class="dropdown-item">404 Page</a>
					</div>
				</div> -->
				<a href="contact-us.php" class="nav-item nav-link  <?php echo ($page == 'contact') ? 'active' : ''; ?>">Contact Us</a>
			</div>
			<div>
				<a href="tel:0123456789">
					<div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg_secondary d-flex align-items-center">
						<div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
							style="width: 45px; height: 45px;">
							<i class="fa fa-phone-alt text_primary"></i>
						</div>
						<div class="ms-3">
							<!-- <p class="mb-1 text-white">Emergency 24/7</p> -->
							<h5 class="m-0 text-secondary text-light">+012 345 6789</h5>
						</div>
					</div>
				</a>

			</div>

		</div>
	</nav>
</div>