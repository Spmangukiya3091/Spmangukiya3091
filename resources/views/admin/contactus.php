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
          <li class="breadcrumb-item active">Contact Us</li>
        </ol>
        <div class="card mb-4">
          <div class="row card-body">
            <div class="card-header col-12">
              <i class="fas fa-table mr-1"></i>
              Contact Us
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>message</th>
                  </tr>
                </thead>
                <?php
                  if ( isset( $_SESSION[ 'admin_email' ] ) && $_SESSION[ 'admin_email' ] != '' ) {
                    $sql = "SELECT * FROM contact_us";
                    $rs  = mysqli_query( $conn , $sql );
                    $num = mysqli_num_rows( $rs );
                      if ( $num > 0 ) {
                        while($row=mysqli_fetch_assoc($rs)) {   
                          ?>
                            <tr>
                              <td><?php echo $row['id']?></td>
                              <td><?php echo $row['name']?></td>
                              <td><?php echo $row['email']?></td>
                              <td><?php echo $row['message']?></td>
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

