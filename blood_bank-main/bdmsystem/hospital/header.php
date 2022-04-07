<?php include "session.php"?>
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
    <section class="w3l-top-header-content">
        <div class="hny-top-menu">
            <div class="container">
                <div class="row">
                    <div class="social-top col-lg-9 mt-lg-0 mt-sm-3">
                        <div class="top-bar-text">
                            <marquee><a class="bk-button" href="requests.php">REQUEST ONLINE </a> You can request  24 hours </marquee>
                        </div>
                    </div>
                    <div class="social-top col-lg-3 mt-lg-0 mt-sm-3">
                        <div class="top-bar-text">
                            <a class="dropdown-toggle" data-toggle="dropdown" style="margin: 0px;"><?php echo $_SESSION['email']; ?>
</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> <?php echo $_SESSION['email']; ?></a>

                                <a class="dropdown-item" href="manage_profile.php"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> Manage Account</a>

                                <a class="dropdown-item mybtn-action"  data-id='myManagePassword'><i class="fa fa-KEY fa-fw" aria-hidden="true"></i> Manage Password</a>


                                <a class="dropdown-item mybtn-action"  data-id='user'><i class="fa fa-user fa-fw" aria-hidden="true"></i> User Profile</a>

                                <a class="dropdown-item" href="Logout.php"><i class="fa fa-power-off fa-fw" aria-hidden="true">
                                </i> logout</a>

                                <a class="dropdown-item" href="registration.php"><i class="fa fa-power-off fa-fw" aria-hidden="true"></i>Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--w3l-header-->
<header class="w3l-header-nav sticky">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
        <div class="container">
            <a class="navbar-brand" href="index.php"><span>Blood</span>Bank</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
                <span class="fa icon-close fa-times"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item "><a class="nav-link <?php if ($page == 'home') {echo 'active';}?>" href="index.php">Home</a></li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle <?php if ($page == 'blood') {echo 'active';}?>" data-toggle="dropdown">Blood</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="aboutblood.php">About Blood</a>
                                <a class="dropdown-item" href="donateblood.php">Why Donate Blood</a>
                                <a class="dropdown-item" href="donatedblooduse.php">How Donated Blood Is used</a>
                            </div>
                        </li>
                        <li class="nav-item "><a class="nav-link <?php if ($page == 'about') {echo 'active';}?>" href="about.php">About</a></li>
                        <li class="nav-item "><a class="nav-link <?php if ($page == 'services') {echo 'active';}?>" href="services.php">Services</a></li>
                        <li class="nav-item "><a class="nav-link <?php if ($page == 'contact') {echo 'active';}?>" href="contact.php">Contact</a></li>
                    </ul>
                <div class="call-support">
                    <p>Call us for any question
                    <h5>+91 8511122566</h5></p>
                </div>
            </div>
        </div>
    </nav>
    <!--//nav-->
</header>
<?php include 'manage_password.php';?>
<?php include 'userdata.php';?>
