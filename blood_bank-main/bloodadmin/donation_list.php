<?php 
  include "session.php";
  include "header.php";
  include "conn.php";
  include "slider.php";  
?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Donation List</li>
        </ol>
        <div class="card mb-4">
            <div class="row card-body">
                <div class="card-header col-12">
                    <i class="fas fa-table mr-1"></i>
                    Donation Details
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Blood Group</th>
                                <th>City</th>
                                <th>Volume</th>
                            </tr>
                        </thead>
                        <?php
                            if ( isset( $_SESSION[ 'admin_email' ] ) && $_SESSION[ 'admin_email' ] != '' ) {
                                    $sql    = "SELECT * FROM `blood_group` JOIN blood_inventory_data ON blood_group.id=blood_inventory_data.blood_group_id" ;
                                    $rs     = mysqli_query( $conn , $sql );
                                    $num    = mysqli_num_rows( $rs );
                                    $count  = 0;
                                    if ( $num > 0 ) {
                                        while( $row = mysqli_fetch_assoc( $rs ) ) {   
                                            ?>
                                            <tr>
                                                <td><?php echo ++$count?></td>
                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['age']?></td>
                                                <td><?php echo $row['gender']?></td>
                                                <td><?php echo $row['blood_group']?></td>
                                                <td><?php echo $row['city']?></td>
                                                <td><?php echo $row['volume']?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </main>
<?php include "footer.php"; ?>

