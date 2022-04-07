<?php
session_start();

error_reporting(0);

include "sidenav.php";
include "topheader.php";

$server = "localhost";
$user = "root";
$password = "";
$db = "agro_system";

$con = mysqli_connect($server, $user, $password, $db);

if ($con) {
    ?>
                   <script>
                       alert('Connection Successful');
                   </script>
                   <?php
} else {
    ?>
                   <script>
                       alert('Not Connection');
                   </script>
                   <?php
}

$query = "SELECT * FROM user_info";
$query_run = mysqli_query($con, $query);

?>
 <!-- End Navbar -->
 <div class="content">
   <div class="container-fluid">


     <div class="col-md-14">
       <div class="card ">
         <div class="card-header card-header-primary">
           <h4 class="card-title"> User List</h4>
         </div>
         <div class="card-body">

           <div class="table-responsive ps">
             <table class="table tablesorter " id="page1">
               <thead class=" text-primary">
                 <tr>
                    <th>ID</th>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>Email</th>
                   <th>Mobile</th>
                   <th>Address</th>
                   <th>
                     <a class=" btn btn-primary" href="addproduct.php">Add New</a>
                   </th>
                 </tr>
               </thead>
               <tbody>
                   <?php
if (mysqli_num_rows($query_run) > 0) {
    while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
                                <tr>
                                    <td><?php echo $row['user_id']; ?></td>
                                    <td><?php echo $row['first_name']; ?></td>
                                    <td><?php echo $row['last_name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['mobile']; ?></td>
                                    <td><?php echo $row['address1']; ?></td>
                                    <!-- <td>
                                        <a href="" class="btn btn-info">EDIT</a>
                                    </td> -->
                                </tr>
                            <?php
}
} else {

    ?>
                        <tr>
                            <td>no recorde avialable</td>
                        </tr>
                    <?php
}
?>

               </tbody>
             </table>
             <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
               <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
             </div>
             <div class="ps__rail-y" style="top: 0px; right: 0px;">
               <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
             </div>
           </div>
         </div>
       </div>
       <nav aria-label="Page navigation example">
         <ul class="pagination">
           <li class="page-item">
             <a class="page-link" href="#" aria-label="Previous">
               <span aria-hidden="true">&laquo;</span>
               <span class="sr-only">Previous</span>
             </a>
           </li>

             <li class="page-item"><a class="page-link" href="productlist.php?page=<?php echo $b; ?>"><?php echo $b . " "; ?></a></li>

           <li class="page-item">
             <a class="page-link" href="#" aria-label="Next">
               <span aria-hidden="true">&raquo;</span>
               <span class="sr-only">Next</span>
             </a>
           </li>
         </ul>
       </nav>



     </div>


   </div>
 </div>
 <?php
include "footer.php";
?>