<?php 
    $page = 'services';
    include "session.php";
    include "header.php";
    include "conn.php";
?>
<!-- /breadcrumbs -->
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="index.php">Home</a> » <a href="services.php">Service</a> » <span class="breadcrumb_last" aria-current="page">Users Request</span>
    </div>
</nav>
<!-- //breadcrumbs -->
<div class="container">
    <div class="form-row">
        <div class="form-group  col-md-12">
            <h3 class='reg'><i class="fa fa-tint fa-fw" aria-hidden="true"></i>Blood Handed Over History<i class="fa fa-tint fa-fw" aria-hidden="true"></i></h3>
        </div>
        <!-- <div class="form-group  col-md-3">
          <input class="form-control" id="search" type="text" name="Sreach" placeholder="Sreach ">
        </div> -->
    </div>
    <table class="table table-bordered table-responsive" id="dataTable">
      <thead>
        <tr>
            <th>Sr.No.</th>
            <th>User Id</th>
            <th>Patient Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Blood Group</th>
            <th>Received By</th>
            <th>Organization</th>
            <th>Date-Time</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $email      = $_SESSION['email'];
        $sql        = "SELECT * FROM handed_over join userdata on handed_over.organization=userdata.organization    where email='$email' ORDER BY date DESC "; 
        $rs         = mysqli_query($conn,$sql);
        $num        = mysqli_num_rows($rs);
        $counter    = 0;
        if ($num > 0) {
            while( $row = mysqli_fetch_assoc($rs) ){   
                ?>
                <tr>
                    <td><?php echo ++$counter; ?></td>
                    <td><?php echo $row['ref_code']?></td>
                    <td><?php echo $row['patient']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['age']?></td>
                    <td><?php echo $row['blood_group_id']?></td>
                    <td><?php echo $row['recived_by'] ?></td>
                    <td><?php echo $row['organization'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>
<?php include"footer.php";?>
