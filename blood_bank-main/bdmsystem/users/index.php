<?php 
  $page = 'home';
  include "header.php";
  include "conn.php";
?>
<div class="w3l-contact-main">
  <div class="container py-md-5">
    <div id="demo" class="carousel slide" data-ride="carousel" >
        <!-- Indicators -->
        <ul class="carousel-indicators" >
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1" ></li>
            <li data-target="#demo" data-slide-to="2" ></li>
            <li data-target="#demo" data-slide-to="3" ></li>
        </ul>
        <!-- The slideshow -->

        
        <div class="carousel-inner" >
          <div class="carousel-item active" >
              <img src="../assets/images/c2.jpg" >
          </div>
          <div class="carousel-item" >
              <img src="../assets/images/c3.jpg" >
          </div>
          <div class="carousel-item" >
              <img src="../assets/images/c4.jpg" >
          </div>
          <div class="carousel-item" >
              <img src="../assets/images/c1.jpg" >
          </div>
        </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev" >
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next" >
            <span class="carousel-control-next-icon"></span>
            </a>
      </div>
  </div>
</div>
<div class="w3l-contact-main" style="background:#ccc;">
  <div class="container py-md-5">
    <p>Blood Center is public donation center with blood donation members in the changing health care system. Founded in 2002, Blood Center is one of the nation’s oldest and largest nonprofit transfusion medicine organizations. We provide a blood and volunteer services across the US. With our national footprint, deep community roots and specialized services, we are the thread that connects people and resources together to fuel progress in transfusion medicine.</p>
  </div>
</div>

<section class="w3l-content-with-photo-4">
  <!-- /content-grids-->
  <div class="content-photo-info py-5">
    <div class="container py-lg-5">
      <!-- /row-->
      <div class="content-photo-grids row">
        <div class="photo-6-inf-right col-lg-6 text-left pr-lg-5 mb-lg-0 mb-4">
          <h6 class="sub-title">We care your Life</h6>
          <h3 class="hny-title">Blood Bank Services</h3>
          <div class="servehny-1 mt-4">
            <div class="ser-sub">
              <a href="Available_blood.php" class="ser1"><span class="fa fa-check"></span>Available Blood</a>
              <a href="../hospital/login.php" class="ser1"><span class="fa fa-check"></span>New Donor</a>
              <a href="donation_list.php" class="ser1"><span class="fa fa-check"></span>Blood Donot List</a>
              <a href="users_requests.php" class="ser1"><span class="fa fa-check"></span>Requests</a>
            </div>
            <div class="ser-sub">
              <a href="users_requests_list.php" class="ser1"><span class="fa fa-check"></span>Requests Status</a>
              <a href="Hand_Over_list.php" class="ser1"><span class="fa fa-check"></span>Hand Over Blood History</a>
              <a href="photo_gallery.php" class="ser1"><span class="fa fa-check"></span>Photo Gallery</a>
            </div>
          </div>
          <div class="read">
            <a class="btn mt-4" href="services.php">Read More</a>
          </div>
        </div>
        <div class="photo-6-inf-left col-lg-6 pr-lg-4">
          <a href="../assets/images/blood-bank.jpg"><img src="../assets/images/blood-bank.jpg" class="photo"></a>
        </div>
      </div><!-- //row-->
    </div>
  </div>
</section>
<!-- /w3l-content-with-photo-4-->

<section class="w3l-content-6">
    <!-- /content-6-main-->
    <div class="content-6-mian py-5">
        <div class="container py-lg-5">
            <div style="margin: 8px auto; display: block; text-align:center;">
            </div>
            <div class="title-content text-left mb-4">
            </div>
            <div style="margin: 8px auto; display: block; text-align:center;">
            </div>
            <div class="content-info-in row">
                <div class="content-gd col-lg-6 pl-lg-4">
                    <picture >
                        <img src='../assets/images/donationFact.jpg' alt='One Donation Can save upto three lives' class="photo">
                    </picture>
                    <blockquote>
                        <p style='font-family:oswald; margin-top: 30px;'>After donating blood, the body works to replenish the blood loss. This stimulates the production of new blood cells and in turn, helps in maintaining good health.</p>
                    </blockquote>
                </div>
                <div class="content-gd col-lg-6 pl-lg-4 pl-lg-4">
                    <table class="table table-responsive table-bordered ">
              <p class="reg" style='color:white;background-color:red;'>Compatible Blood Type Donors</p>
            <thead>
              <tr>
                <td><b>Blood Type</b></td>
                <td><b>Donate Blood To</b></td>
                <td><b>Receive Blood From</b></td>
                <td><b>Frequency Of Blood</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span style="color: #961e1b;"><b>A+</b></span></td>
                <td>A+ AB+</td>
                <td>A+ A- O+ O-</td>
                <td>1 Person in 3</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>O+</b></span></td>
                <td>O+ A+ B+ AB+</td>
                <td>O+ O-</td>
                <td>1 Person in 3</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>B+</b></span></td>
                <td>B+ AB+</td>
                <td>B+ B- O+ O-</td>
                <td>1 Person in 12</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>AB+</b></span></td>
                <td>AB+</td>
                <td>Everyone</td>
                <td>1 Person in 29</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>A-</b></span></td>
                <td>A+ A- AB+ AB-</td>
                <td>A- O-</td>
                <td>1 Person in 16</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>O-</b></span></td>
                <td>Everyone</td>
                <td>O-</td>
                <td>1 Person in 15</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>B-</b></span></td>
                <td>B+ B- AB+ AB-</td>
                <td>B- O-</td>
                <td>1 Person in 67</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>AB-</b></span></td>
                <td>AB+ AB-</td>
                <td>AB- A- B- O-</td>
                <td>1 Person in 167</td>
              </tr>
            </tbody>
          </table>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- //content-6-->

<section class="w3l-specification-6">
  <div class="specification-6-mian py-5">
    <div class="container py-lg-5">
      <div class="row story-6-grids text-left">
        <div class="col-lg-5 story-gd">
          <a href="../assets/images/featured-image-1.jpg"><img src="../assets/images/featured-image-1.jpg" class="photo"></a>
        </div>
        <div class="col-lg-7 story-gd pl-lg-4">
          <div class="title-content text-left mb-lg-5 mt-4">
            <h6 class="sub-title">For a New Life</h6>
            <h3 class="hny-title">We Care Humunity</h3>
          </div>
          <div class="skill_info mt-lg-5 mt-4">
            <div class="stats_left">
              <div class="counter_grid">
                <div class="icon_info">
                  <p class="counter">
                    <?php 
                      $sql  = " SELECT * FROM requests_users 
                                join userdata on requests_users.organization_id=userdata.id 
                                WHERE DATE(`date_created`) = CURDATE() ";
                      $qry  = mysqli_query( $conn , $sql );
                      $res  = mysqli_num_rows( $qry );
                      echo $res;
                    ?>
                  </p>
                  <h4>Daily Request</h4>
                  <p class="counter-para">Daily Blood Request Counter..</p>
                </div>
              </div>
            </div>
            <div class = "stats_left">
                <div class = "counter_grid">
                    <div class = "icon_info">
                        <p class = "counter">
                            <?php 
                                $qry =mysqli_query($conn,"SELECT * FROM requests_users join userdata on requests_users.organization_id=userdata.id ");
                                $res=mysqli_num_rows($qry);
                                echo $res;
                            ?>
                        </p>
                        <h4>Total Request</h4>
                        <p class = "counter-para">Total Request Counter.</p>
                    </div>
                </div>
            </div>
            <div class="stats_left">
              <div class="counter_grid">
                <div class="icon_info">
                  <p class="counter">
                    <?php 
                      $sql  = " SELECT * FROM `blood_inventory_data` ";
                      $qry  = mysqli_query( $conn , $sql );
                      $res  = mysqli_num_rows($qry);
                      echo $res;
                    ?>
                  </p>
                  <h4>Happy Clients</h4>
                  <p class="counter-para">Are Happy clientes Detail Counter..</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //specification-6-->
<?php include "footer.php";?>