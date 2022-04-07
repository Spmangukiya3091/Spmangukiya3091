<?php 
    include "session.php";
    include 'conn.php';
    include "slider.php";
    include "header.php";
    
    if ( isset( $_GET[ 'id' ] ) ) {   
        $id          = $_GET['id'];
        $q           = "SELECT * FROM userdata WHERE id = '$id' ";
        $rs          = mysqli_query($conn,$q);
        $res         = mysqli_fetch_row($rs);
        $id          = $res[0];
        $email       = $res[4]; 
        $name        = $res[1]; 
        $phone       = $res[5]; 
        $address     = $res[6];     
        $state       = $res[7]; 
        $city        = $res[8]; 
        $zipcode     = $res[9];
        $active      = $res[11];     
    }

    if( isset( $_POST[ 'btnedit' ] ) ) {
        $email       = $_POST[ 'email' ];
        $active      = $_POST[ 'active' ];
        $query       = "UPDATE `userdata` SET active = '$active' WHERE email = '$email' ";
        if ( $rs = mysqli_query( $conn, $query ) ) {
           echo "<script>window.location.href='hospital_login.php?isupdate=1';</script>";  
        } else {
            echo "<script>window.location.href='hospital_login.php?isupdate=0';</script>"; 
        }
    }
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Admin Detalis</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Users</li>
                <li class="breadcrumb-item active">Active-Inactive</li>
            </ol>            
            <form action="" method="post" class="registration">
                <div class="form-row" >
                    <div class="form-group  col-md-6">
                        <label for="">Name *</label>
                        <input type="text" class="form-control" name="" required="" value="<?php echo $name; ?>">
                    </div>
                     <div class="form-group  col-md-6">
                        <label for="">Email *</label>
                        <input type="text" class="form-control" name="email" required="" value="<?php echo $email; ?>">
                    </div>
                     <div class="form-group  col-md-6">
                        <label for="">Phone No *</label>
                        <input type="text" class="form-control" name="" required="" value="<?php echo $phone; ?>">
                    </div>
                     <div class="form-group  col-md-6">
                        <label for="">Address *</label>
                        <input type="text" class="form-control" name="" required="" value="<?php echo $address; ?>">
                    </div>
                     <div class="form-group  col-md-6">
                        <label for="">city *</label>
                        <input type="text" class="form-control" name="" required="" value="<?php echo $city; ?>">
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">State *</label>
                        <input type="text" class="form-control" name="" required="" value="<?php echo $state; ?>">
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">status *</label>
                        <select name="active"  class="form-control" value=" <?php echo $active; ?>">
                            <option value="0" <?php if ($active == '0'){echo "selected";}?>>Inactive</option>  
                            <option value="1" <?php if ($active == '1'){echo "selected";}?>>Active</option>   
                        </select>
                    </div>
                    <div class="form-group  col-md-6">
                    </div>
                    <div class="form-group  col-md-6">
                        <input type="submit" name="btnedit" id= "btn-sign-up" class="btn btn-primary" value="update">
                    </div>
                </div>
            </form>
        </div>
    </main>
<?php include "footer.php"; ?>