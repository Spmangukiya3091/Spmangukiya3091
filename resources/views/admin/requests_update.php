<?php
include "session.php";
include 'conn.php';
include "slider.php";
include "header.php";


if ( isset( $_GET[ 'ref_code' ] ) ) {   
    $ref_code       = $_GET[ 'ref_code' ];
    $q              = "SELECT * FROM requests WHERE ref_code = '$ref_code' ";
    $rs             = mysqli_query( $conn, $q );
    $res            = mysqli_fetch_row( $rs );
    $id             = $res[0];
    $ref_code       = $res[1];
    $patient        = $res[2];
    $age            = $res[4];
    $gender         = $res[3];
    $blood_group    = $res[5];
    $volume         = $res[6];
    $organization   = $res[8];
    $status         = $res[10];
}

if( isset( $_POST[ 'btnedit' ] ) ) {   
    $ref_code     = $_GET[ 'ref_code' ];
    $status       = $_POST[ 'status' ];
    $volume       = $_POST[ 'volume' ];
    $blood_group  = $_POST[ 'blood_group' ];
    $age          = $_POST[ 'age' ];
    $gender       = $_POST[ 'gender' ];
    // status check start
    $sql          = "SELECT volume FROM total_blood WHERE blood_group = '$blood_group' ";
    $rs           = mysqli_query( $conn, $sql );
    $row          = mysqli_fetch_assoc( $rs );
    $fetch_volume = $row[ 'volume' ];
    if( $status == '1' ) {
        if( $fetch_volume == 0 ) {
            echo "<script>window.location.href='requests_list.php?isUpdate=3';</script>"; 
        } else {
            $fetch_volume = $fetch_volume - $volume ;
            $qr           = "UPDATE total_blood set volume = '$fetch_volume' where blood_group = '$blood_group' ";
            $rs           = mysqli_query( $conn, $qr );
            $query        = "UPDATE requests SET status = '$status' WHERE ref_code = '$ref_code' ";
            $rs           = mysqli_query( $conn, $query );  
            $query        = "UPDATE requests_users SET status = '$status' WHERE ref_code = '$ref_code' ";
            $rs           = mysqli_query( $conn, $query );
            echo "<script>window.location.href='requests_list.php?isUpdate=1';</script>"; 
        }
    } else {   
        $fetch_volume = $fetch_volume + $volume ;
        $qr           = "UPDATE total_blood set volume = '$fetch_volume' where blood_group = '$blood_group' ";
        $rs           = mysqli_query( $conn, $qr );
        $query        = "UPDATE requests SET status = '$status' WHERE ref_code = '$ref_code' ";
        $rs           = mysqli_query( $conn, $query );  
        $query        = "UPDATE requests_users SET status = '$status' WHERE ref_code = '$ref_code' ";
        $rs           = mysqli_query( $conn, $query );
        echo "<script>window.location.href='requests_list.php?isUpdate=1';</script>"; 
    }
}
//delect request
if ( isset( $_GET[ 'id1' ] ) ) 
{
    $id     = $_GET[ 'id1' ];
    $qu     = "DELETE FROM requests WHERE id = '$id' ";
    $result = mysqli_query( $conn, $qu );
    if ( $result ) {
        echo "<script>window.location.href='requests_list.php?isDelet=1';</script>";
    } else {
         echo "<script>window.location.href='requests_list.php?isDelet=0';</script>";
    }
}
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Request List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Request List</li>
                <li class="breadcrumb-item active">Update Request List</li>
            </ol> 
            <form action="" method="post" class="registration">
                <div class="form-row" >
                    <div class="form-group  col-md-6">
                        <label for="">ID</label>
                        <input type="text" class="form-control" name="id" required="" value="<?php echo $id; ?>" readonly="">
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">Ref_Code</label>
                        <input type="text" class="form-control" name="ref_code" readonly="" value="<?php echo $ref_code; ?>">
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">Patient</label>
                        <input type="text" class="form-control" name="patient" placeholder="patient" required="" value="<?php echo $patient; ?>">
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">Age</label>
                        <input type="text" class="form-control" name="age" placeholder="patient" required="" value="<?php echo $age; ?>">
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">gender</label>
                        <input type="text" class="form-control" name="gender" placeholder="patient" required="" value="<?php echo $gender; ?>">
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">Blood Group</label>
                        <input type="text" class="form-control" name="blood_group" placeholder="blood_group" required="" value="<?php echo $blood_group; ?>">
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">Volume</label>
                        <input type="text" class="form-control" name="volume" placeholder="volume" required="" value="<?php echo $volume; ?>" readonly>
                    </div>
                    <div class="form-group  col-md-6"> 
                        <label for="">Organization</label>
                        <input type="text" class="form-control" name="organization" placeholder="organization" required="" value="<?php echo $organization; ?>">
                    </div>
                    <div class="form-group  col-md-6"> 
                        <label>Status</label>
                        <?php 
                            $ref = $ref_code;
                            $sql = mysqli_query($conn, "Select ref_code From handed_over where ref_code = $ref");
                            $num = mysqli_num_rows($sql);
                            if ($num > 0) {
                                ?>
                                <input type="text" class="form-control" name="" value="Handed Over" readonly="">
                                <?php
                            } else{
                                ?>
                                <select name="status"  class="form-control" value="<?php echo $status;?>">
                                    <option value="0" <?php if ($status == '0'){echo "selected";}?>>pending</option>  
                                    <option value="1" <?php if ($status == '1'){echo "selected";}?>>approve</option>   
                                </select>
                                <?php
                            }
                        ?>
                          
                    </div>
                    <div class="form-group  col-md-12">
                        <input type="submit" name="btnedit" id= "btn-sign-up" class="btn btn-primary colors" value="update">
                    </div>
                </div>
            </form>
        </div>
    </main>

<?php include "footer.php"; ?>