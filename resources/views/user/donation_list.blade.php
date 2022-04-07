@extends('layouts.main')

@section('main')

<?php
    include "header.php";
    include "conn.php";
?>
<!-- /breadcrumbs -->
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="index.php">Home</a> » <a href="services.php">Service</a> » <span class="breadcrumb_last" aria-current="page">Blood Donation List</span>
    </div>
</nav>
<!-- //breadcrumbs -->
<div class="container">
    <div class="form-row">
        <div class="form-group col-md-12" >
            <h3 class='reg'><i class="fa fa-tint text-danger fa-fw" aria-hidden="true"></i>Blood Donation<i class="fa fa-tint text-danger fa-fw" aria-hidden="true"></i></h3>
        </div><!--
        <div class="form-group  col-md-3">
            <input class="form-control" id="search" type="text" name="Sreach" placeholder="Sreach ">
        </div> -->
    </div>
    <table class="table table-bordered table-responsive" id="dataTable">
        <thead>
            <tr>
                <th>Sr.No.</th>
                <th>Donation Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Blood Group</th>
                <th>City</th>
                <th>Volume</th>
                <th>Donat Date</th>
                <th>Photos</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql    = "SELECT blood_inventory_data.*, blood_group.blood_group from blood_inventory_data join blood_group on blood_inventory_data.blood_group_id=blood_group.id";
            $rs     = mysqli_query($conn,$sql);
            $num    = mysqli_num_rows($rs);
            $count  = 0;
        if ( $num > 0 ){
            while( $row = mysqli_fetch_assoc($rs) ){
                ?>
                <tr>
                    <td><?php echo ++$count?></td>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['age']?></td>
                    <td><?php echo $row['blood_group']?></td>
                    <td><?php echo $row['city']?></td>
                    <td><?php echo $row['volume']?></td>
                    <td><?php echo $row['donat_date']?></td>
                    <td><?php
                        if (!$row['file']) {
                            ?>
                                <img src="../assets/images/13471.png" width="50" height="50">
                            <?php
                        } else {
                            ?>
                                <img src="../assets/images/<?php echo $row['file']?>" width="50" height="50">
                            <?php
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
            } ?>
        </tbody>
    </table>
</div>
@endsection
