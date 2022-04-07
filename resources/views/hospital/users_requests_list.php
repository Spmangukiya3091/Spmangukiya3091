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
    <?php
    if (isset($_GET['isDelet']) && $_GET['isDelet']==1) 
    {?>
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Your Request Is Deleted...
        </div>
    <?php
    }
    if (isset($_GET['isSubmit']) && $_GET['isSubmit']==1) 
    {?>
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Your Request Is Submited...
        </div>
    <?php
    }
    if (isset($_GET['is']) && $_GET['is']==1) 
    {?>
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Your Request Is Submited...
        </div>
    <?php
    }
    ?>
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
                <th>User Id</th>
                <th>Referrence Code</th>
                <th>Patient Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Blood Group</th>
                <th>Request Date</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>  
        <?php
            $email  = $_SESSION['email'];
            $sql    = "SELECT requests_users.id,requests_users.ref_code,requests_users.patient,requests_users.gender,requests_users.age,requests_users.blood_group_id,requests_users.date_created,requests_users.status,blood_group.blood_group
                        FROM requests_users 
                        join blood_group on requests_users.blood_group_id=blood_group.id 
                        join userdata on requests_users.organization_id=userdata.id
                        where email='$email' ORDER BY date_created DESC"; 
            $rs=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($rs);
            $counter = 0;
            if ($num > 0){
                while($row=mysqli_fetch_assoc($rs)){   ?>
                    <tr>
                        <td><?php echo ++$counter; ?></td>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['ref_code']?></td>
                        <td><?php echo $row['patient']?></td>
                        <td><?php echo $row['gender']?></td>
                        <td><?php echo $row['age']?></td>
                        <td><?php echo $row['blood_group']?></td>
                        <td><?php echo $row['date_created'] ?></td>
                        <td><?php 
                            if($row['status']==0){
                                    echo "<span class='badge badge-primary'>Pending</span>";
                                }
                            else{
                                    echo "<span class='badge badge-success'>Approved</span>";
                                }
                            ?>   
                        </td>
                        <td class="text-center">
                            <?php 
                            if($row['status']==0){

                                $ref_code = $row['ref_code'];
                                $sql    = "SELECT * FROM  requests where ref_code = '$ref_code' ";
                                $res     = mysqli_query( $conn , $sql);
                                $num    = mysqli_num_rows( $res );
                                if ( $num > 0 ){
                                    while( $row = mysqli_fetch_assoc( $res ) ){   
                                        ?>
                                            <a href="users_requests_delete.php?id1=<?php echo $row['id']?> " onclick='return checkdelete()'>
                                            <button class="btn btn-sm btn-outline-danger delete_donor" type="button" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </a>
                                        <?php
                                    }
                                }
                                else{
                                    ?>
                                    <a href="requests.php?ref_code=<?php echo $row['ref_code']?>" onclick='return checksend1()'>
                                                <button class="btn btn-sm btn-outline-primary edit_donor" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button> 
                                    </a>
                                    <a href="users_requests_delete.php?id1=<?php echo $row['id']?> " onclick='return checkdelete()'>
                                            <button class="btn btn-sm btn-outline-danger delete_donor" type="button" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </a>
                                        <?php
                                }
                            } else{
                                echo "Alredy Send";
                            }
                            ?>
                        </td>
                    </tr>
                <?php }
            }?>
        </tbody> 
    </table>
</div>
<?php include "users_requests_delete.php";?>
<?php include"footer.php";?>