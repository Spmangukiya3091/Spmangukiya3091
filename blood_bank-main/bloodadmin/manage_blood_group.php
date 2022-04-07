<?php 
    include "session.php";
    include 'conn.php';
    include "slider.php";
    include "header.php";
    
    if ( isset( $_GET[ 'id' ] ) ) {   
        $id          = $_GET['id'];
        $q           = "SELECT * FROM blood_group WHERE id = '$id' ";
        $rs          = mysqli_query($conn,$q);
        $res         = mysqli_fetch_row($rs);
        $id          = $res[0];
        $blood_group = $res[1];
    }

    if( isset( $_POST[ 'btnedit' ] ) ) {
        $id          = $_GET[ 'id' ];
        $blood_group = $_POST[ 'blood_group' ];
        $query       = "UPDATE `blood_group` SET blood_group = '$blood_group' WHERE id = '$id' ";
        if ( $rs = mysqli_query( $conn, $query ) ) {
           echo "<script>window.location.href='blood_group_data.php?isupdate=1';</script>";  
        } else {
            echo "<script>window.location.href='blood_group_data.php?isupdate=0';</script>"; 
        }
    }

    if ( isset( $_GET[ 'id1' ] ) ) 
    {
        $id     = $_GET[ 'id1' ];
        $qu     = "DELETE FROM blood_group WHERE id = '$id' ";
        $result = mysqli_query( $conn, $qu );
        if ( $result ) {
            echo "<script>window.location.href='blood_group_data.php?isDelet=1';</script>";
        } else {
            echo "<script>window.location.href='blood_group_data.php?isDelet=0';</script>";
        }
    }
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Admin Detalis</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Blood Group</li>
                <li class="breadcrumb-item active">Blood Group Edit</li>
            </ol>            
            <form action="" method="post" class="registration">
                <div class="form-row" >
                    <div class="form-group  col-md-12">
                        <label for=""><i class="fa fa-tint text-danger" aria-hidden="true"></i>Blood Group *</label>
                        <input type="text" class="form-control" name="blood_group" required="" value="<?php echo $blood_group; ?>">
                    </div>
                    <div class="form-group  col-md-12">
                        <input type="submit" name="btnedit" id= "btn-sign-up" class="btn btn-primary" value="update">
                    </div>
                </div>
            </form>
        </div>
    </main>
<?php include "footer.php"; ?>