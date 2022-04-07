<!doctype html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../assets/images/blood-donation_istock.jpg" type="image/x-icon"/>
	<title>Blood Bank</title>
	<!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <style>
        /* active class */
        .nav-link.active {
           /* background: #ccc;
            border-radius: 100%;*/
            /*color: #d63447;*/
            text-decoration: none;
            border-bottom: 2px solid #fe346e;
        }
        /* Make the image fully responsive */
        .carousel-inner img {
        width:1100px;
        height: 400px;
        }
        /*hover dropdown */
        .dropdown:hover .dropdown-menu {
        display: block;
        }
    </style>
</head>
<body>
	<!--w3l-header-->
	<section class="w3l-top-header-content">
		<div class="hny-top-menu">
			<div class="container">
				<div class="row">
                    <div class="social-top col-lg-8 mt-lg-0 mt-sm-3">
                        <div class="top-bar-text">
                            <marquee><a class="bk-button" href="users_requests.php">REQUEST ONLINE </a> You can request  24 hours</marquee>
                        </div>
                    </div>
                    <div class="social-top col-lg-2 mt-lg-0 mt-sm-3">
                        <div class="top-bar-text">
                            <a class="bk-login" href="checkout.php">Money Donation</a>
                        </div>
                    </div>
					<div class="social-top col-lg-2 mt-lg-0 mt-sm-3">
						<div class="top-bar-text">
							<a class="bk-login" href="../hospital/login.php">AGENT lOGIN</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//top-header-content-->
	<!--w3l-header-->
	<header class="w3l-header-nav sticky" id="myHeader">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
			<div class="container">
				<a class="navbar-brand" href="{{ / }}"><span>Blood</span>Bank</a>
				<!-- if logo is image enable this
						<a class="navbar-brand" href="#index.php">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-lg-auto">
						<li class="nav-item ">
							<a class="nav-link <?php if($page == 'home'){echo 'active';} ?> " href="{{ / }}">Home</a>
						</li>
						<li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle <?php if($page == 'blood'){echo 'active';} ?>" data-toggle="dropdown">Blood</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="aboutblood.php">About Blood</a>
                                <a class="dropdown-item" href="donateblood.php">Way Donat Blood</a>
                                <a class="dropdown-item" href="donatedblooduse.php">How Donat Blood Is use</a>
                            </div>
                        </li>
						<li class="nav-item "><a class="nav-link <?php if($page == 'about'){echo 'active';} ?>" href="about.php">About</a></li>
						<li class="nav-item "><a class="nav-link <?php if($page == 'services'){echo 'active';} ?>" href="services.php">Services</a></li>
						<li class="nav-item "><a class="nav-link <?php if($page == 'contact'){echo 'active';} ?>" href="contact.php">Contact</a></li>
					</ul>
					<div class="call-support">
						<p>Call us for any question</p>
						<h5>121-345-64369</h5>
					</div>
				</div>
			</div>
		</nav>
		<!--//nav-->
	</header>
	<!-- //w3l-header -->
