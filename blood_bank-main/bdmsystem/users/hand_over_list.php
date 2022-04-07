<?php 
    include "header.php";
    include "conn.php";
?>
<!-- /breadcrumbs -->
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="index.php">Home</a> » <a href="services.php">Service</a> » <span class="breadcrumb_last" aria-current="page">Handed Over</span>
    </div>
</nav>
<!-- //breadcrumbs -->
<div class="container">
    <div class="form-row">
        <div class="form-group  col-md-12">
            <h3 class='reg'>Handed Over</h3>
        </div><!-- 
        <div class="form-group  col-md-3">
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
                <th>Volume</th>
                <th>Received By</th>
                <th>organization</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql    = "SELECT * from handed_over ORDER BY date DESC";
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
                            <td><?php echo $row['blood_group_id']?></td>
                            <td><?php echo $row['volume']?></td>
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