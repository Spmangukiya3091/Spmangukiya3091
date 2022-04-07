<?php 
  include "session.php";
  include "header.php";
  include "conn.php";
  include "slider.php";
?>
<div id="layoutSidenav_content">
  <main>
    <?php 
      if ( isset($_GET[ 'isDelet' ] ) && $_GET[ 'isDelet' ] == 1 ) {
        ?>  
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Blood Group Is Deleted.
        </div>
        <?php
      }
      if( isset($_GET[ 'isAdd' ] ) && $_GET[ 'isAdd' ] ==  1 ) {
        ?>  
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Blood Group Insered...
        </div>
        <?php
      } 
      if (  isset($_GET[ 'isupdate' ] ) && $_GET[ 'isupdate'  ] ==  1 ) {
        ?>  
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Update Success.
        </div>
        <?php
      }
      if (  isset($_GET[ 'isError' ] ) && $_GET[ 'isError'  ] ==  1 ) {
        ?>  
           <div class="alert alert-danger">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Danger!</strong> Blood Group Not  Insered...
           </div>
       <?php
      }
    ?> 
  <div class="container-fluid">
      <h1 class="mt-4"></h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Blood Group</li>
      </ol>
      <div class="card mb-4">
        <div class="row card-body">
          <div class="card-header col-9">
            <i class="fas fa-table mr-1"></i>Blood Group Data
          </div>
          <div class="card-header col-3" style="text-align: right;">
            <a href="addbloodgroup.php" style="text-decoration: none; color: black;"><i class="fas fa-plus mr-1"></i>Add Blood Group</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Blood Group</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
                if ( isset( $_SESSION[ 'admin_email' ] ) && $_SESSION[ 'admin_email' ] != '' ) {
                  $sql = "SELECT * FROM blood_group";
                  $rs  = mysqli_query( $conn , $sql );
                  $num = mysqli_num_rows( $rs );
                  if ( $num > 0 ) {
                    $id = 0;
                    while ( $row = mysqli_fetch_assoc( $rs ) ) {  
                    ?>
                      <tr>
                        <td><?php echo ++$id?></td>
                          <td><?php echo $row['blood_group']?></td>
                          <td>
                            <a href="manage_blood_group.php?id=<?php echo $row['id']?>">
                              <button class="btn btn-sm btn-outline-primary eidt_donor" type="button">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                              </button>
                            </a>
                            <a href="manage_blood_group.php?id1=<?php echo $row['id']?>" onclick='return checkdelete()'>
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
<?php include "footer.php"; ?>

