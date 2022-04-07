<?php 
  include "conn.php";
  #Delete Data
  if (isset($_GET['id1'])){ 
    $id     = $_GET['id1'];
    $qu     = "DELETE FROM requests_users WHERE id = $id";
    $result = mysqli_query( $conn , $qu );
    if ( $result ) {
      //header('location:requests.php?isDelet=1');
      echo "<script>window.location.href='users_requests_list.php?isDelet=1';</script>";
    }
    else{
      ?>  
      <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Danger!</strong> Your Request Is Not Deleted....
      </div>
      <?php
    }
  }
?>
