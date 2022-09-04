<header class="tj-header">
	<!--Header Content Start-->
	<div class="container">
		<div class="row">
			<!--Toprow Content Start-->
			<div class="col-md-3 col-xs-12 col-sm-4">
				<!--Logo Start-->
				<div class="tj-logo">
					<h1><a href="index.php">Safe Cabs</a></h1>
				</div>
				<!--Logo End-->
			</div>
			<div class="col-md-3 col-xs-12 col-sm-4">
				<div class="info_box">
					<i class="fa fa-home"></i>
					<div class="info_text">
						<span class="info_title">Address</span>
						<span>Safe Cabs, Delhi, India</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-12 col-sm-4">
				<div class="info_box">
					<i class="fa fa-envelope"></i>
					<div class="info_text">
						<span class="info_title">Email Us</span>
						<span><a href="mailto:info@safecabs.com">info@safecabs.com</a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-12">
				<div class="phone_info">
					<div class="phone_icon">
						<i class="fas fa-phone-volume"></i>
					</div>
					<div class="phone_text">
						<span><a href="tel:1-234-000-2345">+91-1234567890</a></span>
					</div>
				</div>
			</div>
			<!--Toprow Content End-->
		</div>
	</div>
	<div class="tj-nav-row">
		<div class="container">
			<div class="row">
				<!--Nav Holder Start-->
				<div class="tj-nav-holder">
					<!--Menu Holder Start-->
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tj-navbar-collapse" aria-expanded="false">
								<span class="sr-only">Menu</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Navigation Content Start -->
						<div class="collapse navbar-collapse" id="tj-navbar-collapse">
							<ul class="nav navbar-nav">

								<?php if (user::isActive()) { ?>
									<li>
										<a href="user-account.php">My Account</a>
									</li>
								<?php } else { ?>
									<li>
										<a href="login.php">Login</a>
									</li>
									<li>
										<a href="register.php">Register</a>
									</li>

								<?php } ?>
							</ul>
						</div>
						<!-- Navigation Content Start -->
					</nav>
					<!--Menu Holder End-->
					<div class="book_btn">
						<a href="booking-form.php">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!--Nav Holder End-->
			</div>
		</div>
	</div>
</header>