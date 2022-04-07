<?php 
  include "session.php";
  include "header.php";
  include "conn.php";
  include "slider.php";
?>
<div id="layoutSidenav_content">
  <main>
    <?php 
      if ( isset( $_GET[ 'isDelet' ] ) && $_GET[ 'isDelet' ] == 1 ) {
        ?>  
          <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Donor Data Is Deleted.
          </div>
        <?php
      }
      if ( isset( $_GET[ 'isupdate' ] ) && $_GET[ 'isupdate' ] == 1 ) {
        ?>  
          <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Update Success.
          </div>
        <?php
      }
    ?> 
    <div class="container-fluid">
      <h1 class="mt-4"></h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Donor Details</li>
      </ol>
      <div class="card mb-4">
        <div class="row card-body">
          <div class="card-header col-12">
            <i class="fas fa-table mr-1"></i>
            Donor Details
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
                  <th>Blood Infromation</th>
                  <th>Contact Information</th>
                  <th>Donate Date</th>
                  <th>Photo</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
                if ( isset( $_SESSION[ 'admin_email' ] ) && $_SESSION[ 'admin_email' ] != '' ) {    
                  $sql  = "SELECT * FROM `blood_group` JOIN blood_inventory_data ON blood_group.id=blood_inventory_data.blood_group_id ORDER BY `blood_inventory_data`.`id` DESC";
                  // $sql="SELECT * FROM blood_inventory_data";
                  $rs   = mysqli_query( $conn , $sql );
                  $num  = mysqli_num_rows( $rs );
                  if ( $num > 0 ) {
                    $id = 0;
                    while( $row = mysqli_fetch_assoc( $rs ) ) {   
                      ?>
                        <tr>
                          <td><?php echo ++$id?></td>
                          <td><?php echo $row['name']?></td>
                          <td><?php echo $row['age']?></td>
                          <td><?php echo $row['gender']?></td>
                          <td>
                            <b>Blood Group </b>: <?php echo $row['blood_group']?>
                            <b>Volume </b>: <?php echo $row['volume']?> ml.
                          </td>
                          <td>
                            <b>Email </b>:<?php echo $row['email']?><br>
                            <b>Mobile No </b>:<?php echo $row['phone']?><br>
                            <b>Address </b>:<?php echo $row['address']?><br>
                            <b>Zip Code </b>:<?php echo $row['zipcode']?><br>
                            <b>City </b>:<?php echo $row['city']?><br>
                          </td>
                          <td><?php echo $row['donat_date']?></td>
                          <td>
                            <?php if ($row['file']){
                              ?>
                              <a href="../bdmsystem/assets/images/<?php echo $row['file']?>"><img src="../bdmsystem/assets/images/<?php echo $row['file']?>" height='50' width='50'></a>
                              <?php                 
                              } else{
                                ?>
                                <a href="../bdmsystem/assets/images/13471.png"><img src="../bdmsystem/assets/images/13471.png" height='50' width='50'></a>
                                <?php
                            }
                            ?>
                          </td>
                          <td>
                            <a href="update_donor.php?id=<?php echo $row['id']?>">
                              <button class="btn btn-sm btn-outline-primary edit_donor" type="button">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                              </button>
                            </a>
                            <a href="update_donor.php?id1=<?php echo $row['id']?> " onclick='return checkdelete()'>
                              <button class="btn btn-sm btn-outline-danger delete_donor" type="button">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                              </button>
                            </a>
                          </td>
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

<?php include "footer.php";
?>

