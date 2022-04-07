<?php 
    $page = 'services';
    include "session.php";
    include "header.php";
    include "conn.php";
?>
<!-- /breadcrumbs -->
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="index.php">Home</a> » <a href="services.php">Service</a> » <span class="breadcrumb_last" aria-current="page">Donor list</span>
    </div>
</nav>
<!-- //breadcrumbs -->
<div class="container">
    <?php
    if (isset($_GET['isDelet']) && $_GET['isDelet']==1){
        ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Donor Data Is  Deleted...
        </div>
        <?php
    }
    if (isset($_GET['isUpdate']) && $_GET['isUpdate']==1){
        ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Donor Data Is  Update...
        </div>
        <?php
    }
    ?>
    <div class="form-row">
        <div class="form-group  col-md-12">
            <h3 class='reg'>Donors List</h3>
        </div><!-- 
        <div class="form-group  col-md-3">
            <input class="form-control" id="search" type="text" name="Sreach" placeholder="Sreach ">
        </div> -->
    </div>
    <table class="table table-bordered table-responsive" id="dataTable">
        <thead>
            <tr>
                <th>Sr.No.</th>
                <th>Donor Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Blood Group</th>
                <th>Contact Information</th>
                <th >Donat Date</th>
                <th>Photos</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if (isset($_SESSION['email']) && $_SESSION['email']!=''){
                $login=$_SESSION['email'];
                $sql="SELECT * FROM blood_group join blood_inventory_data on blood_group.id=blood_inventory_data.blood_group_id WHERE login='$login' ORDER BY donat_date DESC ";
                $rs=mysqli_query($conn,$sql);
                $num=mysqli_num_rows($rs);
                $counter=0;
                if ($num > 0){
                    while($row=mysqli_fetch_assoc($rs)){  
                    ?>
                    <tr>
                        <td><?php echo ++$counter ?></td>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['gender']?></td>
                        <td><?php echo $row['age']?></td>
                        <td><?php echo $row['blood_group']?></td>
                        <td>
                            <b>Email </b>: <?php echo $row['email']?><br>
                            <b>Mobile No </b>: <?php echo $row['phone']?><br>
                            <b>Address </b>: <?php echo $row['address']?><br>
                            <b>Zip Code </b>: <?php echo $row['zipcode']?><br>
                            <b>City </b>: <?php echo $row['city']?><br>
                        </td>
                        <td><?php echo $row['donat_date']?></td>
                        <td><?php
                            if (!$row['file']) 
                            {
                                ?><img src="../assets/images/13471.png" width="50" height="50"><?php
                            } else {
                                ?><img src="../assets/images/<?php echo $row['file']?>" width="50" height="50"><?php
                            }
                            ?>
                        </td>
                        <td class="text-center">
                            <a href="manage_donation.php?id=<?php echo $row['id']?> ">
                            <button class="btn btn-sm btn-outline-primary edit_donor" type="button"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                            <a href="donor_delete.php?id=<?php echo $row['id']?> " onclick='return checkdelete()'>
                            <button class="btn btn-sm btn-outline-danger delete_donor" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        </td>
                    </tr>
                    <?php
                    }
                }
            }
            ?>
        </tbody>
    </table>
</div>
<?php include"footer.php" ?>