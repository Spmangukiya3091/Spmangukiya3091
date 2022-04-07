<?php include 'conn.php';
if (isset($_POST['btnsignup']) && ($_POST['btnsignup']) === 'Sign Up') {
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $organization = $_POST['organization'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $cit = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $password = $_POST['password'];
    $qr = "INSERT INTO userdata(name, designation, organization, email, phone, address, state, city, zipcode, password) VALUES ('$name', '$designation', '$organization', '$email', '$phone', '$address', '$state', '$city', '$zipcode', '$password')";
    $res = mysqli_query($conn, $qr);
    if ($res) {
        header("location:login.php");
    } else {
        ?>
        <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Danger!</strong> Registration Is Not Success.
        </div>
        <?php
}
}
?>
<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            /* background: linear-gradient(135deg, #71b7e6, #9b59b6);  */
            background: linear-gradient(150deg, #fe346e, #400082);
            padding: 10px;
        }
        .container{
            max-width: 700px;
            width: 100%;
            background: #fff;
            padding: 25px 30px;
            border-radius: 5px;
           /* box-shadow: 12px 12px 22px grey;  */
        }
        .container .title{
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }
        .container .title::before{
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            background: linear-gradient(150deg, #fe346e, #400082);
            /* background: #9b59b6; */
        }
        .container form .user-details{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }
        form .user-details .input-box{
            width: calc(100% / 2 - 20px);
            margin-bottom: 15px;
        }
        .user-details .input-box .details{
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }
        .user-details .input-box input{
            height: 45px;
            width: 100%;
            font-size: 16px;
            outline: none;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding-left: 15px;
            border-bottom-width: 2px;       /* */
            transition: all 0.3s ease;
        }
        .user-details .input-box input:focus,
        .user-details .input-box input:valid{
            border-color: #9b59b6;
        }
        form .gender-details .gender-title{
            font-size: 20px;
            font-weight: 500;
        }
        form .gender-details .category{
            display: flex;
            width: 80%;
            margin: 14px 0;
            justify-content: space-between;   /**/
        }
        form .gender-details .category label{
            display: flex;
            align-items: center;
        }
        form .gender-details .category .dot{
            height: 18px;
            width: 18px;
            background: #d9d9d9;
            border-radius: 50%;
            margin-right: 10px;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }
        #dot-1:checked ~ .category  label .one,
        #dot-2:checked ~ .category  label .two,
        #dot-3:checked ~ .category  label .three{
            border-color: #d9d9d9;
            background: #9b59b6;
        }
        form input[type="radio"]{
            display: none;
        }
        form .button{
            height: 45px;
            margin: 45px 0;
        }
        form .button input{
            height: 100%;
            width: 100%;
            outline-color: none;
            color: #fff;
            border: none;
            font-size: 18px;
            font-weight: 500;
            border-radius: 5px;
            letter-spacing: 1px;
            background: linear-gradient(150deg, #fe346e, #400082);

        }
        form .button input:hover{
            background: linear-gradient(-150deg, #fe346e, #400082);  /* - */

        }
        @media (max-width: 584px){       /* 584 thi motu to work kre*/
            .container{
                max-width: 100%;
            }
            form .user-details .input-box{
                margin-bottom: 15px;
                width: 100%;
            }
            form .gender-details .category{
                width: 80%;
            }
            .container form .user-details{
               max-height: 300px;
               overflow-y: scroll;
            }
            .user-details::-webkit-scrollbar{   /* scrollbar hide kryo*/
                width: 0;
            }
        }
        .col-6{
            width: 45%;
        }
    </style>
<link rel="stylesheet" type="text/css" href="../assets/css/model.css">
 <div class="container">
        <div class="title">Hospital Registration</div>
        <form action="" method="post" class="registration">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                     <input type="text" class="form-control" name="name" required="">
                </div>
                <div class="input-box">
                    <label for="">Designation *</label>
                    <input type="text" class="form-control" name="designation" required="">
                </div>
                <div class="input-box">
                     <label for="">Organization *</label>
                    <select class="form-control" name="organization" required="">
                        <option value="none">None</option>
                        <option value="Kiran Hospital">Kiran Hospital</option>
                        <option value="Navyug Hospital">Navyug Hospital</option>
                        <option value="Jivan Jyot Hospital">Jivan Jyot Hospital</option>
                        <option value="Mangukiya Hospital">Mangukiya Hospital</option>
                    </select>
                </div>
                <div class="input-box">
                     <label for="">Email Address *</label>
                    <input type="email" class="form-control" name="email" required="">
                </div>
                <div class="input-box">
                    <label for="">Phone No. *</label>
                    <input type="text" class="form-control" name="phone" required="">
                </div>
                <div class="input-box">
                     <label for="">Address *</label>
                    <input type="text" class="form-control" name="address" required="" placeholder="">
                </div>
                <div class="input-box">
                    <label for="">State *</label>
                        <input type="text" class="form-control" name="state" required="">
                </div>
                <div class="input-box">
                    <label for="">City *</label>
                        <input type="text" class="form-control" name="city" required="">
                </div>
                <div class="input-box">
                     <label for="">Zip Code *</label>
                        <input type="text" class="form-control" name="zipcode" required="">
                </div>
                <div class="input-box">
                     <label for="">Password *</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
                <div class="button col-6">
                    <input type="submit" name="btnsignup" id= "btn-sign-up" class="btn btn-primary" value="Sign Up">
                </div>
                 <div class="button col-6">
                    <input type="reset" name="btnreset" class="btn btn-primary" value="Reset">
                </div>

                <div class="form-group">
                    <h6><i class="fa fa-user-circle-o" aria-hidden="true"></i> Alredy Member ? <a href="login.php">Login Here</a></h6>
                </div>
            </div>
        </form>
    </div>



   