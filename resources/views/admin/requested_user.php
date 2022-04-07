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
        <li class="breadcrumb-item active">Requests user</li>
      </ol>
      <div class="card mb-4">
        <div class="row card-body">
          <div class="card-header col-12">
            <i class="fas fa-table mr-1"></i> Requests user Details
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Blood Group</th>
                    <th>Ref_code</th>
                    <th>patient</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>volume</th>
                    <th>physician_name</th>
                    <th>organization</th>
                    <th>date_created</th>
                    <th>status</th>
                </tr>
              </thead>
              <?php
                $sql    = "SELECT * FROM requests_users join blood_group on requests_users.blood_group_id=blood_group.id join userdata on requests_users.organization_id=userdata.id";
                $rs     = mysqli_query( $conn, $sql );
                $num    = mysqli_num_rows( $rs );
                $count  = 0;
                if ( $num > 0 ) {
                  while( $row = mysqli_fetch_assoc( $rs ) ) {   
                    ?>
                    <tr>
                      <td><?php echo ++$count?></td>
                      <td><?php echo $row['blood_group']?></td>
                      <td><?php echo $row['ref_code']?></td>
                      <td><?php echo $row['patient']?></td>
                      <td><?php echo $row['age']?></td>
                      <td><?php echo $row['gender']?></td>
                      <td><?php echo $row['volume']?></td>
                      <td><?php echo $row['physician_name']?></td>
                      <td><?php echo $row['organization']?></td>
                      <td><?php echo $row['date_created']?></td>
                      <td>
                        <?php
                        if( $row[ 'status' ] == 0 ) {
                            echo "<span class='badge badge-primary'> Pending    </span>";
                        } else {
                            echo "<span class='badge badge-success'>Approved</span>";
                        }
                        ?>
                      </td>
                    </tr>
                    <?php
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