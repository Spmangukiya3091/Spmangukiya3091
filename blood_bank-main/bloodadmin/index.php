<?php 
    include "session.php";
    include "conn.php";
    include "header.php";
    include "slider.php";
?>
<div id="layoutSidenav_content">
    <link href="css/style-starter.css" rel="stylesheet" />
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <div class="row contact-info-left text-center">
                <?php 
                    $blood_group    = array( "A+", "B+", "O+", "AB+", "A-", "B-", "O-", "AB-" );
                    foreach( $blood_group as $v ) {
                        $bg_inn[$v] = 0; 
                    }
                    $qry            = mysqli_query( $conn, "SELECT * FROM `blood_group` JOIN blood_inventory_data ON blood_group.id=blood_inventory_data.blood_group_id" );
                    while( $row = mysqli_fetch_assoc( $qry ) ) {
                        $bg_inn[ $row[ 'blood_group' ] ] += $row[ 'volume' ];
                    }
                ?>
                <?php foreach ( $blood_group as $v ): ?>
                    <div class="col-lg-3 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
                        <div class="service_grid_btm_left1">
                            <div class="service_grid_btm_left2">
                                <h4>
                                    <?php echo $v ?><i class="fa fa-tint text-danger fa-fw" aria-hidden="true"></i>
                                </h4>
                                <b>
                                    <?php 
                                        echo ( $bg_inn[ $v ] ) / 1000 . "lt.";
                                    ?>
                                </b>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="col-lg-3 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
                    <div class="service_grid_btm_left1">
                        <div class="service_grid_btm_left2">
                            <?php
                                $sql    = "SELECT * FROM requests WHERE status = '1' ";
                                $rs     = mysqli_query( $conn, $sql );
                                $num    = mysqli_num_rows( $rs );
                            ?>
                            <h6>
                                <i class="fa fa-check text-primary fa-fw"></i> Approved Request
                            </h6>
                            <b>
                                <?php echo $num ?>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
                    <div class="service_grid_btm_left1">
                        <div class="service_grid_btm_left2">
                            <?php
                                $sql    = "SELECT * FROM requests WHERE status = '0' ";
                                $rs     = mysqli_query( $conn, $sql );
                                $num    = mysqli_num_rows( $rs );
                            ?>
                            <h6>
                                <i class="fa fa-clock fa-fw text-primary"></i> Pending Request
                            </h6>
                            <b>
                                <?php echo $num ?>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
                    <div class="service_grid_btm_left1">
                        <div class="service_grid_btm_left2">
                            <?php
                                $sql    = "SELECT * FROM handed_over";
                                $rs     = mysqli_query( $conn, $sql );
                                $num    = mysqli_num_rows( $rs );
                            ?>
                            <h6>
                               <i class="fa fa-thumbs-up text-primary" aria-hidden="true"></i> Handed over Blood
                            </h6>
                            <b>
                                <?php echo $num ?>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
                    <div class="service_grid_btm_left1">
                        <div class="service_grid_btm_left2">
                            <?php
                                $sql    = "SELECT * FROM requests_users WHERE DATE(`date_created`) = CURDATE() ";
                                $rs     = mysqli_query( $conn, $sql );
                                $num    = mysqli_num_rows( $rs );
                            ?>
                            <h6>
                                <i class="fa fa-spinner fa-pulse text-primary fa-fw"></i> Request By User
                            </h6>
                            <b>
                                <?php echo $num ?>
                            </b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include "footer.php";?>