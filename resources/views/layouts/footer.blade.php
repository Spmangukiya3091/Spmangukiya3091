<!-- footer-66 -->
<footer class="w3l-footer-66">
    <!-- footer -->
    <div class="footer-66-info">
        <div class="container">
            <div class="row footer-top">
                <div class="col-lg-4 footer-grid_section_w3layouts pr-lg-5">
                    <h2 class="logo-2 mb-lg-4 mb-3">
                        <a class="navbar-brand" href="index.php"><span>Blood</span>Bank</a>
                    </h2>
                    <p>Blood Center is public donation center with blood donation members in the changing health care system. </p>
                    <h4 class="sub-con-fo ad-info my-4">Catch on Social</h4>
                    <ul class="w3layouts_social_list list-unstyled">
                        <li><a href="#" class="w3pvt_facebook"> <span class="fa fa-facebook-f"> </span></a> </li>
                        <li><a href="#" class="w3pvt_twitter">  <span class="fa fa-twitter">    </span></a> </li>
                        <li><a href="#" class="w3pvt_dribble">  <span class="fa fa-dribbble">   </span></a> </li>
                        <li><a href="#" class="w3pvt_google">   <span class="fa fa-google-plus"></span></a> </li>
                    </ul>
                </div>
                <div class="col-lg-8 footer-right" style=" padding-top : 0px ; padding-bottom : 0px ; ">
                    <div class="bottom-w3layouts-sec-nav">
                        <div class="row sub-content-botom mx-0">
                            <div class="col-md-6 footer-grid_section_w3layouts pl-lg-0">
                                <h3 class="footer-title"> Information </h3>
                                <ul class="footer list-unstyled">
                                    <li><a href="index.php"> Home </a></li>
                                    <li><a href="../assets/images/404-page-example.jpg.webp"> Blog </a></li>
                                    <li><a href="about.php"> About Us </a></li>
                                    <li><a href="services.php"> Services </a></li>
                                    <li><a href="contact.php"> Contact Us </a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 footer-grid_section_w3layouts ">
                                <h3 class="footer-title">Working Hours</h3>
                                <ul class="wrk-schedule-block">
                                    <li> Monday     <span class="schedule-time"> 24 hours open </span></li>
                                    <li> Tuesday    <span class="schedule-time"> 24 hours open </span></li>
                                    <li> Wednesday  <span class="schedule-time"> 24 hours open </span></li>
                                    <li> Thursday   <span class="schedule-time"> 24 hours open </span></li>
                                    <li> Friday     <span class="schedule-time"> 24 hours open </span></li>
                                    <li> Saturday   <span class="schedule-time"> 24 hours open </span></li>
                                    <li> Sunday     <span class="schedule-time"> 24 hours open </span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cpy-right py-3">
        <p class="text-center">© <?php echo date("Y");?> BloodBank. All rights reserved | Design by Roll No.
            <a class="mybtn-profile" data-id='265'> 265 </a>
            <a class="mybtn-profile" data-id='273'> 273 </a>
            <a class="mybtn-profile" data-id='274'> 274 </a>
        </p>
    </div>
    <?php include '265.php';?>
    <?php include '273.php';?>
    <?php include '274.php';?>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</footer>
<!--//footer-66 -->

<script src="../assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->
<!--//-->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });

    $('document').ready(function(){
        
        $('#blood_group').on('change',function(){
            var blood_grp = $(this).val();
             $.ajax({
              url:"getbloodgrp.php",
              method:"post",
              data:{blood_group:blood_grp},
              success:function(data){   
                $('#avolume').val(data);
              }
            });
        });
    });


        
    $('document').ready(function(){
      $( ".mybtn-profile" ).each(function( index ) {
          console.log( index + ": " + $( this ).text() );
          $(this).on('click',function(){
            var data_val = $(this).data('id');
            if(data_val == '265'){
                $('#myProfile265').css('display','block');
            }
            else if(data_val == '273'){
                $('#myProfile273').css('display','block');
            }
            else{
                $('#myProfile274').css('display','block');
            }
          });
        });
    });
    $('.close-model').on('click',function(){
        $('#myProfile265').css('display','none');
        $('#myProfile273').css('display','none');
        $('#myProfile274').css('display','none');
     });

</script>
<!-- stats -->
<script src="../assets/js/jquery.waypoints.min.js"></script>
<script src="../assets/js/jquery.countup.js"></script>
<script src="../assets/js/datatables-demo.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<!-- <script src="../assets/js/bootstrap.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Template CSS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>  
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>     
</body>
</html>