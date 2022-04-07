<?php 
  include "session.php";
  include "header.php";
  include "conn.php";
  include "slider.php";   
?>
<div id="layoutSidenav_content">
  <main>
    <?php 
      if( isset( $_GET[ 'isDelet' ] ) && $_GET[ 'isDelet' ] == 1) {
        ?>  
          <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Donor Data Is Deleted.
          </div>
        <?php
      } 
      if ( isset( $_GET[ 'isupdate' ] ) && $_GET[ 'isupdate' ] == 1) {
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
        <li class="breadcrumb-item active">Admin</li>
      </ol>
      <div class="card mb-4">
        <div class="card-header">
          <i class="fas fa-table mr-1"></i>
          Admin Login
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Email</th>
                  <th>Password</th>
                  <!-- <th>Action</th>-->
                </tr>
              </thead>
                <?php
                  if ( isset( $_SESSION[ 'admin_email' ] ) && $_SESSION[ 'admin_email' ] != '') {
                    $sql   = "SELECT * FROM admin_login";
                    $rs    = mysqli_query( $conn , $sql );
                    $num   = mysqli_num_rows( $rs );
                    if ( $num > 0 ) {
                      while( $row = mysqli_fetch_assoc( $rs ) ) {   
                        ?>
                        <tr>
                          <td><?php echo $row[ 'id' ]?></td>
                          <td><?php echo $row[ 'email' ]?></td>
                          <td><?php echo $row[ 'password' ]; ?></td>
                     <!-- <td class="text-center">
                            <button class="btn btn-sm btn-outline-primary edit_donor mybtn-action" type="button">Edit</button>
                            <a href="manage_admin_data.php?id1=<?php echo $row['id']?> " onclick='return checkdelete()'>
                            <button class="btn btn-sm btn-outline-danger delete_donor" type="button">Delete</button></a>
                          </td> -->
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