<?php

?>
<html>
    <head>
    <style>
    .button_start {
        background-color: #FF673AB7;
        border:none;
        border-radius: 12px;
        color:white;
        padding: 15px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin: 4px 2px;
        cursor: pointer;
        font-family:"Comic Sans MS";
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
    }
    .button_signup {
        background-color: #FF673AB7;
        border:none;
        border-radius: 12px;
        color:white;
        padding: 15px 62px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin: 4px 2px;
        cursor: pointer;
        font-family:"Comic Sans MS";
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
    }
    .button2:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
    .container {
    position: relative;
    }
    .center {
        position: absolute;
        top: 10%;
        width: 100%;
        text-align: center;
        font-size: 18px;
    }
    .center_img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    #grad_back {
        height: 600px;
        background-image: linear-gradient(to bottom right , red , grey , blue);
    } 

    </style>
        <title>
            Student Management System
        </title>
    </head>
    <body id="grad_back">
    <table style="margin:auto ; margin-top:90px ; margin-bottom:90px">
        <td>
            <img src ="/sms/assets/images/png/back.png" class="center_img" width=500px/>
        </td>
        <td>
            <h1 style="font-family:Comic Sans MS ; color:white ;">Student Management System</h1>
            <p style="font-family:Comic Sans MS ; color:white ; font-size: 18px">
                Student Management System (SMS) is a software designed </br> 
                to track and manage all the data created by the school such </br> 
                as a student's grades, attendance, interpersonal activity </br>
                records, etc., as well as other school-related data , </br> </br>
                A Student Management System, also known as a </br>
                Student Information System (SIS) enables coordinate </br>
                scheduling and improved communications among the </br> 
                faculty and students. This system conducts student </br> 
                tracking operations for parents and administrative staff. </br></br>

            <table>
                <td>
                    <form action="signup.php" method="POST">
                        <button style="margin-right:20px" class="button_start button2" name="btnSignUp">Getting Started</button>
                    </form>
                </td>
                <td>
                    <form action="signin.php" method="POST">
                        <button class="button_signup button2" name="btnSignIn">Sign In</button>
                    </form>
                </td>
            </table>
            </p>
        </td>
    </table>
    </body>
    <?php

    ?>
</html>