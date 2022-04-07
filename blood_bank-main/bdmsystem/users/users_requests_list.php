<?php 
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
        <div class="form-group col-md-12" >
            <h3 class='reg'><i class="fa fa-tint text-danger fa-fw" aria-hidden="true"></i>Blood Donation<i class="fa fa-tint text-danger fa-fw" aria-hidden="true"></i></h3>
        </div>
        <!-- <div class="form-group  col-md-3">
            <input class="form-control" id="search" type="text" name="Sreach" placeholder="Sreach ">
        </div> -->
    </div>
    <table class="table table-bordered table-responsive" id="dataTable">
        <thead>
            <tr>
                <th>Sr.No.</th>
                <th>Unique Id</th>
                <th>Patient Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Blood Group</th>
                <th>Organization</th>
                <th>Request Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql    = "SELECT * from requests_users 
                    join blood_group on requests_users.blood_group_id=blood_group.id 
                    join userdata on requests_users.organization_id=userdata.id ORDER BY status,date_created DESC";
        $rs     = mysqli_query($conn,$sql);
        $num    = mysqli_num_rows($rs);
        $count  = 0;
        if ( $num > 0 ){
            while( $row = mysqli_fetch_assoc($rs) ){ 
                ?>
                <tr>
                    <td><?php echo ++$count?></td>
                    <td><?php echo $row['ref_code']?></td>
                    <td><?php echo $row['patient']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['age']?></td>
                    <td><?php echo $row['blood_group']?></td>
                    <td><?php echo $row['organization']?></td>
                    <td><?php echo $row['date_created'] ?></td>
                    <td>
                        <?php 
                            if( $row['status'] == 0 ){
                                echo "<span class='badge badge-primary'>Pending</span>";
                            } else{
                                echo "<span class='badge badge-success'>Approved</span>";
                            }
                        ?>   
                    </td>
                </tr>
                <?php 
                }
        } 
        ?>
        </tbody>
    </table>
</div>
<?php include "footer.php"?>
