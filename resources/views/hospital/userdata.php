<?php include "conn.php" ?>
<!-- The Modal -->
<div id="myModal" class="modal md-6">
    <!-- Modal content -->
    <div class="modal-content">
        <h3 class="reg">User Profile
        <span class="close-model">&times;</span></h3>
        <?php
            if ( isset( $_SESSION[ 'email' ]) && $_SESSION[ 'email' ] != '' ) {
                $email  = $_SESSION['email'];
                $sql    = "SELECT * FROM userdata WHERE email='".$email."'";
                $rs     = mysqli_query($conn,$sql);
                $num    = mysqli_num_rows($rs);
                if ( $num > 0 ) {
                    while( $row = mysqli_fetch_assoc( $rs )){   
                        ?>  
                        <table class="table table-condensed">
                            <!-- <tr>
                                <th>Name</th>
                                <th>:</th>
                                <td><?php echo $row['name']?></td>
                            </tr> -->
                            <tr>
                                <th>Organization name</th>
                                <th>:</th>
                                <td><?php echo $row['organization']?></td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <th>:</th>
                                <td><?php echo $row['email']?></td>
                            </tr>
                            <tr>
                                <th>Phone No.</th>
                                <th>:</th>
                                <td><?php echo $row['phone']?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <th>:</th>
                                <td><?php echo $row['address']?></td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <th>:</th>
                                <td><?php echo $row['state']?></td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <th>:</th>
                                <td><?php echo $row['city']?></td>
                            </tr>
                            <tr>
                                <th>Zip Code</th>
                                <th>:</th>
                                <td><?php echo $row['zipcode']?></td>
                            </tr>
                        </table>
                        <?php
                    }
                }
            }
        ?>
        <div class="form-group  col-md-12" style="text-align: center;">
            <a href="manage_profile.php">
                <button type="submit" class="btn btn-sm btn-outline-primary" name="btnEdit" value="Update">Update</button>
            </a>
        </div>
    </div>
</div>
