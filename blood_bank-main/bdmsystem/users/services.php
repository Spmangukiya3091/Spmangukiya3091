<?php 
    $page = 'services';
    include "header.php";
    include "conn.php";
?>
<!-- /breadcrumbs -->
<nav id = "breadcrumbs" class = "breadcrumbs">
    <div class = "container page-wrapper">
        <a href = "index.php">Home</a> » <span class = "breadcrumb_last" aria-current = "page">Services</span>
    </div>
</nav>
<!-- //breadcrumbs -->
<!-- services block 2 -->
<div class = "w3l-services-block py-5" id = "classes">
    <div class = "container py-lg-5 py-md-5">
        <div class = "title-content text-left mb-lg-5 mt-4">
            <h6 class = "sub-title">What We Offer</h6>
            <h3 class = "hny-title">Our Services</h3>
            <p>Services Which Are Blood Bank providing To a Donor And A Petaint.</p>
        </div>
        <div class = "services-block_grids_bottom">
            <div class = "row">
                <div class = "col-lg-4 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
                    <div class = "service_grid_btm_left1">
                        <img src="../assets/images/g1.jpg"class = "img-fluid" />
                        <div class = "service_grid_btm_left2">
                            <h5 class = "reg">Available Blood</h5>
                            <p>Information Of avilable Blood In are Blood Bank.</p>
                            <div class = "read">
                                <a class = "btn mt-4" href = "available_blood.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
                    <div class = "service_grid_btm_left1">
                        <img src="../assets/images/download1.jpg"class = "img-fluid" style = " height : 230px ; "/>
                        <div class = "service_grid_btm_left2">
                            <h5 class = "reg">Blood Request</h5>
                            <p>You Can Request For Blood And We Will Get Your Request From Here.</p>
                            <div class = "read">
                                <a class = "btn mt-4" href = "users_requests.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
                    <div class = "service_grid_btm_left1">
                        <img src="../assets/images/download3.jpg"class = "img-fluid" />
                        <div class = "service_grid_btm_left2">
                            <h5 class = "reg">Request Status</h5>
                            <p>You Can Able To see Your Request Status That Your Request Approved Or Not.</p>
                            <div class = "read">
                                <a class = "btn mt-4" href = "users_requests_list.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
                    <div class = "service_grid_btm_left1">
                        <img src="../assets/images/g3.png"class = "img-fluid" />
                        <div class = "service_grid_btm_left2">
                            <h5 class = "reg">Blood Donation</h5>
                            <p>Here You Can Able To watch Are Blood Donor And Thems All Information.</p>
                            <div class = "read">
                                <a class = "btn mt-4" href = "donation_list.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
                    <div class = "service_grid_btm_left1">
                        <img src="../assets/images/download5.jpg"class = "img-fluid" style = " height : 230px ; "/>
                        <div class = "service_grid_btm_left2">
                            <h5 class = "reg">Handed Over Blood History</h5>
                            <p>You Can Able To see Here Are Blood Handover History.</p>
                            <div class = "read">
                                <a class = "btn mt-4" href = "hand_over_list.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
                    <div class = "service_grid_btm_left1">
                        <img src="../assets/images/download6.jpg"class = "img-fluid" style = " height : 230px ; " />
                        <div class = "service_grid_btm_left2">
                            <h5 class = "reg">Photo Gallery</h5>
                            <p>Are Blood Bank And Are Donation Camps Some Images in It.</p>
                            <div class = "read">
                                <a class = "btn mt-4" href = "photo_gallery.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // services block2 -->
<!-- features-4 -->
<section class = "features-4">
    <div class = "features4-block py-5">
        <div class = "container py-lg-5">
            <div class = "title-content text-left mb-lg-5 mt-4">
                <h6 class = "sub-title-1">Features</h6>
                <h3 class = "hny-title two">Some More Features</h3> 
            </div>
            <div class = "row features4-grids text-left">
                <div class = "col-lg-3 col-md-6 features4-grid">
                    <div class = "features4-grid-inn">
                        <span class = "fa fa-pencil-square-o icon-fea4" aria-hidden="true"></span>
                        <h5><a>Free Check up</a></h5>
                        <p>We Are Providing Facility Of Free Blood Check Up.</p>
                    </div>
                </div>
                <div class = "col-lg-3 col-md-6 features4-grid">
                    <div class = "features4-grid-inn">
                        <span class = "fa fa-umbrella icon-fea4" aria-hidden="true"></span>
                        <h5><a>Always Open</a></h5>
                        <p>24*7 Days U can Request For Blood.</p>
                    </div>
                </div>
                <div class = "col-lg-3 col-md-6 features4-grid third">
                    <div class = "features4-grid-inn">
                        <span class = "fa fa-cogs icon-fea4" aria-hidden="true"></span>
                        <h5><a>Serve with Smile</a></h5>
                        <p>We Are Fell Happy With Are Patient.</p>
                    </div>
                </div>
                <div class = "col-lg-3 col-md-6 features4-grid">
                    <div class = "features4-grid-inn">
                        <span class = "fa fa-spinner icon-fea4" aria-hidden="true"></span>
                        <h5><a>Work with Hearts</a></h5>
                        <p>Are Team Work With Heart.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features-4 -->
<section class = "w3l-specification-6">
    <div class = "specification-6-mian py-5">
        <div class = "container py-lg-5">
            <div class = "row story-6-grids text-left">
                <div class = "col-lg-5 story-gd">
                    <a href = "../assets/images/featured-image-1.jpg"><img src="../assets/images/featured-image-1.jpg" class = "img-fluid"></a>
                </div>
                <div class = "col-lg-7 story-gd pl-lg-4">
                    <div class = "title-content text-left mb-lg-5 mt-4">
                        <h6 class = "sub-title">For a New Life</h6>
                        <h3 class = "hny-title">We Care Humunity</h3>
                    </div>
                    <div class = "skill_info mt-lg-5 mt-4">
                        <div class = "stats_left">
                            <div class = "counter_grid">
                                <div class = "icon_info">
                                    <p class = "counter">
                                        <?php 
                                            $qry =mysqli_query($conn,"SELECT * FROM requests_users join userdata on requests_users.organization_id=userdata.id WHERE DATE(`date_created`) = CURDATE()");
                                            $res=mysqli_num_rows($qry);
                                            echo $res;
                                        ?>
                                    </p>
                                    <h4>Daily Request</h4>
                                    <p class = "counter-para">Daily Request Counter.</p>
                                </div>
                            </div>
                        </div>
                        <div class = "stats_left">
                            <div class = "counter_grid">
                                <div class = "icon_info">
                                    <p class = "counter">
                                        <?php 
                                            $qry =mysqli_query($conn,"SELECT * FROM requests_users join userdata on requests_users.organization_id=userdata.id ");
                                            $res=mysqli_num_rows($qry);
                                            echo $res;
                                        ?>
                                    </p>
                                    <h4>Total Request</h4>
                                    <p class = "counter-para">Total Request Counter.</p>
                                </div>
                            </div>
                        </div>
                        <div class = "stats_left">
                            <div class = "counter_grid">
                                <div class = "icon_info">
                                    <p class = "counter">
                                        <?php 
                                            $qry =mysqli_query($conn,"SELECT * FROM `blood_inventory_data` ");
                                            $res=mysqli_num_rows($qry);
                                            echo $res;
                                        ?>
                                    </p>
                                    <h4>Happy Clients</h4>
                                    <p class = "counter-para">Are Happy Patient.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php";?>