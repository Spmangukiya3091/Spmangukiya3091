<?php 
    $page = 'services';
    include "session.php";
    include "header.php";
    include "conn.php";
?>
<!-- /breadcrumbs -->
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="index.php">Home</a> » <a href="services.php">Service</a> » <span class="breadcrumb_last" aria-current="page">Request list</span>
    </div>
</nav>
<!-- //breadcrumbs -->
<div class="container">
    <?php
        if ( isset( $_GET[ 'isDelet' ] ) && $_GET[ 'isDelet' ] == 1) {
            ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Your Request Is Deleted...
            </div>
            <?php
        }
    ?>
    <div class="form-row">
        <div class="form-group  col-md-12">
            <h3 class='reg'>Organization Request </h3>
        </div><!-- 
        <div class="form-group  col-md-3">
            <input class="form-control" id="search" type="text" name="Sreach" placeholder="Sreach">
        </div> -->
    </div>
    <table class="table table-bordered table-responsive" id="dataTable">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Referrence Code</th>
                <th>Patient Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Blood Group</th>
                <th>Volume</th>
                <th>Request Date</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $login  = $_SESSION['email'];
            $sql    = "SELECT * FROM  requests where login='$login' ORDER BY status,date_created deSC";
            $rs     = mysqli_query( $conn , $sql );
            $num    = mysqli_num_rows( $rs );
            $count  = 0;
            if ( $num > 0 ){
                while( $row = mysqli_fetch_assoc( $rs ) ){
                   ?>
                    <tr>
                        <td><?php echo ++$count?></td>
                        <td><?php echo $row['ref_code']?></td>
                        <td><?php echo $row['patient']?></td>
                        <td><?php echo $row['gender']?></td>
                        <td><?php echo $row['age']?></td>
                        <td><?php echo $row['blood_group_id']?></td>
                        <td><?php echo $row['volume']?></td>
                        <td><?php echo $row['date_created'] ?></td>
                        <td>
                            <?php 
                            if( $row[ 'status' ] == 0){
                                    echo "<span class='badge badge-primary'>Pending</span>";
                            } else{
                                    echo "<span class='badge badge-success'>Approved</span>";
                            }
                            ?>   
                        </td>
                        <td class="text-center">
                            <?php 
                            if( $row[ 'status' ] == 0){
                                ?>
                                <a href="requests_delete.php?id=<?php echo $row['id']?> " onclick='return checkdelete()'>
                                    <button class="btn btn-sm btn-outline-danger delete_donor" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </a>
                                <?php
                            } else{
                                $ref_code = $row['ref_code'];
                                $sql    = "SELECT * FROM  handed_over where ref_code = '$ref_code' ";
                                $res     = mysqli_query( $conn , $sql);
                                $num    = mysqli_num_rows( $res );
                                if ( $num > 0 ){
                                    while( $row = mysqli_fetch_assoc( $res ) ){
                                        echo "Handed Over";
                                    }
                                } else{
                                    ?>
                                    <a href="hand_over.php?ref_code=<?php echo $row['ref_code']?> " onclick='return checkhand()'>
                                        <button class="btn btn-sm btn-outline-primary edit_donor " type="button"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button> 
                                    </a>
                                    <?php
                                }
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
<?php include"footer.php";?>