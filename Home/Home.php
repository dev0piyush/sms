<?php

?>
<html>
    <head>
    <style>
    .button_signup {
        transition-duration: 0.4s;
        border: 3px solid black;
        font-family:"Comic Sans MS";
        border-radius: 12px;
        padding: 15px 30px;
        display: inline-block;
        text-align: center;
        background-color: white;
        color: black;
        font-size: 18px;
        cursor: pointer;
    }
    .signup {
        border-color: crimson;
        background-color: crimson;
        color: white;
        }

    .signup:hover {
        border-color: crimson;
        background-color: white;
        color: crimson;
    }
    .button_signin {
        transition-duration: 0.4s;
        border: 3px solid black;
        font-family:"Comic Sans MS";
        border-radius: 12px;
        padding: 15px 75px;
        display: inline-block;
        text-align: center;
        background-color: white;
        color: black;
        font-size: 18px;
        cursor: pointer;
    }
    .signin {
        border-color: crimson;
        color: crimson;
        }

    .signin:hover {
        background-color: crimson;
        color: white;
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
        background-image: linear-gradient(to bottom right , red , blue , red);
    } 

    </style>
        <title>
            Student Management System
        </title>
    </head>
    <body id="grad_back">
    <table style="margin:auto ; margin-top:90px ; margin-bottom:90px">
        <td>
            <img src ="home_back.png" class="center_img" width=500px/>
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
                    <form action="" method="POST">
                        <button style="margin-right:20px" class="button_signup signup" name="btnSignUp">Getting Started</button>
                    </form>
                </td>
                <td>
                    <form action="" method="POST">
                        <button class="button_signin signin" name="btnSignIn">Sign In</button>
                    </form>
                </td>
            </table>
            </p>
        </td>
    </table>
    </body>
    <?php
        if(isset($_POST['btnSignUp'])){
            ?>
                <script>
                    window.open("http://localhost/php/sms/Home/index.php","_self")
                    </script>
            <?php
        }

        if(isset($_POST['btnSignIn'])){
            ?>
                <script>
                    window.open("http://localhost/php/sms/Home/Login.php","_self")
                    </script>
            <?php
        }
    ?>
</html>