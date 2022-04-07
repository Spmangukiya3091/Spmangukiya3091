<?php 
  include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </style>
</head>
<body>
    
    <div class="container">
        <div class="title">Registration</div>
        <form action="">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter Your Name" required> 
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter Your Username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter Your Email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter Your Phone Number" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter Your Password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm Your Password" required>
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="gender" id="dot-1">
                <input type="radio" name="gender" id="dot-2">
                <input type="radio" name="gender" id="dot-3">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Prefer not to say</span>
                     </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>

</body>
</html>