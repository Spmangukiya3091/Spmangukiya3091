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
        <li class="breadcrumb-item active">Blood Hand Over History</li>
      </ol>
      <div class="card mb-4">
        <div class="row card-body">
          <div class="card-header col-12">
            <i class="fas fa-table mr-1"></i>Blood Group Data
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Ref_Code</th>
                  <th>Patient</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Blood Group Id</th>
                  <th>volume</th>
                  <th>Recived_by</th>
                  <th>Physician</th>
                  <th>Phone</th>
                  <th>Date</th>
                  <th>Organization</th>
                </tr>
              </thead>
              <?php
                if ( isset( $_SESSION[ 'admin_email' ] ) && $_SESSION[ 'admin_email' ] != '' ){
                  $sql  = "SELECT * FROM `handed_over` ORDER BY `handed_over`.`id` DESC";
                  $rs   = mysqli_query($conn,$sql);
                  $num  = mysqli_num_rows($rs);
                  if ( $num > 0 ) {
                    while( $row = mysqli_fetch_assoc( $rs ) ) {   
                      ?>
                      <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['ref_code']?></td>
                        <td><?php echo $row['patient']?></td>
                        <td><?php echo $row['age']?></td>
                        <td><?php echo $row['gender']?></td>
                        <td><?php echo $row['blood_group_id']?></td>
                        <td><?php echo $row['volume']?></td>
                        <td><?php echo $row['recived_by']?></td>
                        <td><?php echo $row['physician']?></td>
                        <td><?php echo $row['phone']?></td>
                        <td><?php echo $row['date']?></td>
                        <td><?php echo $row['organization']?></td>
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