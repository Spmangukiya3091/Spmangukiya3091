<?php 
    include "header.php";
    include "conn.php";
?>
<!-- /breadcrumbs -->
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="index.php">Home</a> » <a href="services.php">Service</a> » <span class="breadcrumb_last" aria-current="page">Available Blood</span>
    </div>
</nav>
<!-- //breadcrumbs -->
<!-- main container -->
<div class="w3l-contact-main">
    <div class="container py-md-5">
        <h1 class="reg">Available Blood per group in Liters</h1>
        <div class="row contact-info-left text-center">
            <?php 
                $blood_group = array( "A+" , "B+" , "O+" , "AB+" , "A-" , "B-" , "O-" , "AB-" );
                foreach( $blood_group as $v ){
                    $bg_inn[$v] = 0; 
                }
                $qry = mysqli_query($conn,"SELECT * FROM `total_blood`");
                while( $row = mysqli_fetch_assoc($qry) ){
                    $bg_inn[ $row[ 'blood_group' ] ] += $row[ 'volume' ];
                }
            ?>
            <?php foreach ( $blood_group as $v ): ?>
                <div class="col-lg-3 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
                    <div class="service_grid_btm_left1">
                        <div class="service_grid_btm_left2">
                            <h4>
                                <?php echo $v ?><i class="fa fa-tint text-danger" aria-hidden = "true"></i>
                            </h4>
                            <b>
                                <?php 
                                    echo ($bg_inn[$v]) / 1000 . " lt.";
                                ?>
                            </b>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include"footer.php" ?>