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
        <li class="breadcrumb-item active">Hospital's</li>
      </ol>
      <?php 
      if (  isset($_GET[ 'isupdate' ] ) && $_GET[ 'isupdate'  ] ==  1 ) {
        ?>  
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Update Success.
        </div>
        <?php
      }
       ?>
      <div class="card mb-4">
      	<div class="row card-body">
        	<div class="card-header col-9">
          	<i class="fas fa-table mr-1"></i>
            	Hospital's Login Details
        	</div>
        	<div class="card-header col-3" style="text-align: right;">
            	<a href="registration.php" style="text-decoration: none; color: black;"><i class="fas fa-plus mr-1"></i>Add Hospital</a>
         	</div>
         </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Email</th>
                  <th>Name</th>
                  <th>Phone No.</th>
                  <th>Address</th>
                  <th>State</th>
                  <th>City</th>
                  <th>Zip Code</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
                if ( isset( $_SESSION[ 'admin_email' ] ) && $_SESSION[ 'admin_email' ] != '' ) {
                  $sql  = "SELECT * FROM userdata";
                  $rs   = mysqli_query( $conn , $sql );
                  $num  = mysqli_num_rows( $rs );
                  if ( $num > 0 ) {
                    while($row=mysqli_fetch_assoc($rs)) {   
                      ?>
                      <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['state']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['zipcode']; ?></td>
                        <td>
                          <?php if ($row['active'] == 1) {
                            ?>
                            <a href="manage_hospital_login.php?id=<?php echo $row['id']?>">
                              <button class="btn btn-sm btn-outline-primary eidt_donor" type="button">Active
                              </button>
                            </a>
                            <?php
                          } else{
                            ?>
                            <a href="manage_hospital_login.php?id=<?php echo $row['id']?>">
                              <button class="btn btn-sm btn-outline-danger delete_donor" type="button">Inactive
                              </button>
                            </a>
                            <?php
                          }
                          ?>
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

<?php include "footer.php"; ?>