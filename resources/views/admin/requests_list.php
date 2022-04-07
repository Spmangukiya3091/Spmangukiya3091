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
          <li class="breadcrumb-item active">Request List</li>
      </ol>
      <?php 
      if( isset( $_GET[ 'isDelet' ] ) && $_GET[ 'isDelet' ] == 1 ){
        ?>  
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Blood Group Is Deleted.
        </div>
        <?php
      }
      if ( isset( $_GET[ 'isUpdate' ] ) && $_GET[ 'isUpdate' ] == 1 ){
        ?>  
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Update Success.
        </div>
        <?php
      } 
      if ( isset($_GET[ 'isUpdate' ] ) && $_GET[ 'isUpdate' ] == 3 ){
        ?>  
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Not enough</strong> Blood In The Inventory...
        </div>
        <?php
      }
      ?>
      <div class="card mb-4">
        <div class="row card-body">
          <div class="card-header col-12">
            <i class="fas fa-table mr-1"></i>Request List
          </div>
          <!-- <div class="card-header col-3">
              <input type="text" id="search" placeholder="search">
          </div> -->
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Ref_code</th>
                  <th >Patient Information</th>
                  <th>Volume</th>
                  <th>Organization</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
              if ( isset( $_SESSION[ 'admin_email' ] ) && $_SESSION[ 'admin_email' ] != '' ){
                $sql  = "SELECT * FROM requests ORDER BY date_created DESC";
                $rs   = mysqli_query( $conn , $sql );
                $num  = mysqli_num_rows( $rs );
                if ( $num > 0 ){
                  $id = 0;
                  while( $row = mysqli_fetch_assoc( $rs ) ){   
                  ?>
                  <tr>
                    <td><?php echo ++$id?></td>
                    <td><?php echo $row['ref_code']?></td>
                    <td>
                      <b>Patient</b>  :<?php echo $row['patient']?><br>
                      <b>Age</b>  :<?php echo $row['age']?><br>
                      <b>Gender</b> :<?php echo $row['gender']?><br>
                      <b>Phone</b>  :<?php echo $row['phone']?><br>
                      <b>Blood Group</b>  :<?php echo $row['blood_group_id']?><br>
                      <b>Physician Name</b> :<?php echo $row['physician_name']?>
                    </td>
                    <td><?php echo $row['volume']?></td>
                    <td><?php echo $row['organization']?></td>
                    <td><?php echo $row['date_created']?></td>
                    <td>
                      <?php 
                      if( $row[ 'status' ] == 0){
                        echo "<span class='badge badge-primary'> Pending </span>";
                      }
                      else{
                        echo "<span class='badge badge-success'>Approved</span>";
                      }
                      ?>
                    </td>
                    <td>
                      <a href="requests_update.php?status=<?php echo $row['status']?>&ref_code=<?php echo $row['ref_code']?>">
                        <button class="btn btn-sm btn-outline-primary edit_donor" type="button">
                          <i class="fa fa-edit" aria-hidden="true"></i>
                        </button>
                      </a>
                      <a href="requests_update.php?id1=<?php echo $row['id']?> " onclick='return checkdelete()'>
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
<?php include "footer.php";?>