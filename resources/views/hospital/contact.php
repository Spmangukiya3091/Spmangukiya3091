<?php 
    $page = 'contact';
    include "session.php";
    include "conn.php";
    include "header.php";
if (isset($_POST['btnsubmit']) && ($_POST['btnsubmit'])==='Submit'){   
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $message    = $_POST['message'];
    $qr         = "INSERT INTO contact_us(name, email, message) VALUES ('$name','$email','$message')";
    $res        = mysqli_query($conn,$qr);
    if ($res){
        ?>  
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Thank You For Contact.
        </div>
        <?php
    }else {
        ?>  
        <div class="alert alert-danger">
            <strong>Danger!</strong> Contact Again.
        </div>
        <?php
    }
}
?>
<!-- /breadcrumbs -->
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">Contact</span>
    </div>
</nav>
<!-- //breadcrumbs -->
<!-- /contact-form -->
<section class="w3l-contact-main">
    <div class="contant11-top-bg py-5">
        <div class="container py-md-5">
            <div class="row contact-info-left text-center">
                <div class="col-lg-4 col-md-6 contact-info">
                    <div class="contact-gd">
                        <span class="fa fa-location-arrow" aria-hidden="true"></span>
                        <h4>Address</h4>
                        <p>4885 Pretty View Lane, Lorem ipsum, Dolor sit amet, New York, USA</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 contact-info">
                    <div class="contact-gd">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <h4>Phone</h4>
                        <p><a href="tel:+44 7834 857829">+44 7834 857829</a></p>
                        <p><a href="tel:+44 987 654 321">+44 987 654 321</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 contact-info">
                    <div class="contact-gd">
                        <span class="fa fa-envelope-open-o" aria-hidden="true"></span>
                        <h4>Mail</h4><p>.</p>
                        <p><a href="mailto:info.bloodbank@protomail.com" class="email">info.bloodbank@protomail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- //contact-form -->
<!-- /contact-form -->
<section class="w3l-contact-main">
    <div class="contact-infhny py-5">
        <div class="container py-lg-5">
            <div class="title-content text-left mb-lg-5 mt-4">
                <h6 class="sub-title">Contact Us</h6>
                <h3 class="hny-title">Drop your message for any info <br>or question.</h3>
            </div>
            <div class="row align-form-map">
                <div class="col-lg-6 form-inner-cont">
                    <form  method="post" class="signin-form">
                        <div class="form-input">
                            <label for="name">Name*</label>
                            <input type="text" name="name" id="name" placeholder="" required=""/>
                        </div>
                        <div class="form-input">
                            <label for="email">Email*</label>
                            <input type="email" name="email" id="email" placeholder="" required="" />
                        </div>
                        <div class="form-input">
                            <label for="message">Message*</label>
                            <textarea placeholder="Type Your Message" name="message" id="message" required=""></textarea>
                        </div>
                        <input type="submit" name="btnsubmit" value="Submit" class="btn-contact" >
                    </form>
                </div>
                <div class="map col-lg-6 pl-lg-5">
                    <img src="../assets/images/contact.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contact-form -->
<?php include "footer.php";?>