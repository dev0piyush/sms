<!DOCTYPE html>
<html lang="en-US" style="text-align: center;">
    <meta charset="UTF-8">
    <head>
        <title>
            Student Managment System
        </title>
    </head>
    <body>
        <style>
            .label{
                font-size: 32px;
                font-family: monospace;
                font-weight: bold;
                font-style: normal;
                color: dodgerblue;
            }
        </style>
        <label class="label">
            Student Managment System
        </label>
        <form action="" method="post">
            <div style="margin-top: 17px;">
                <input type="text" name="studfname" id="studfname" style="margin-inline-start: 7px;padding: 7px; width: 128px; margin-right: 0px;" placeholder="First Name" required>
                <input type="text" name="studlname" id="studlname" style="margin-inline-start: 7px;padding: 7px; width: 128px;" placeholder="Last Name" required>
            </div>
            <div style="margin-top: 7px;">
                <input type="email" name="studemail" id="studemail" style="margin-inline-start: 7px;padding: 7px; width: 282px;" placeholder="Email Id" required>
            </div>
            <div style="margin-top: 7px;">
                <select name="mcode" style="margin-inline-start: 7px;padding: 7px;">
                    <option name="mcode">+91</option>
                    <option name="mcode">+93</option>
                    <option name="mcode">+213</option>
                    <option name="mcode">+1</option>
                    <option name="mcode">+57</option>
                    <option name="mcode">+49</option>
                    <option name="mcode">+30</option>
                    <option name="mcode">+261</option>
                    <option name="mcode">+60</option>
                    <option name="mcode">+212</option>
                    <option name="mcode">+258</option>
                    <option name="mcode">+242</option>
                    <option name="mcode">+262</option>
                    <option name="mcode">+58</option>
                    <option name="mcode">+84</option>
                    <option name="mcode">+260</option>
                </select>
                <input type="text" name="studmno" id="studmno" style="margin-inline-start: 7px;padding: 7px; width: 202px;" placeholder="Mobile Number" required>
            </div>
            <div>
                <label for="gender" style="padding: 7px;margin-top: 7px;">Gender </label>
                <select name="studgender" style="margin-inline-start: 7px;padding: 7px; width: 232px;margin-top: 7px;">
                    <option name="studgender">Male</option>
                    <option name="studgender">Female</option>
                    <option name="studgender">Other</option>
                </select>
            </div>
            <div style="margin-top: 7px;">
                <input type="text" name="studcast" id="studcast" style="margin-inline-start: 7px;padding: 7px; width: 282px;" placeholder="Cast" required>
            </div>
            <div style="margin-top: 7px;">
                <input type="text" name="studcollege" id="studcollege" style="margin-inline-start: 7px;padding: 7px; width: 282px;" placeholder="College" required>
            </div>
            <div style="margin-top: 7px;">
                <input type="text" name="studcourse" id="studcourse" style="margin-inline-start: 7px;padding: 7px; width: 282px;" placeholder="Course" required>
            </div>
            <div style="margin-top: 7px;">
                <input type="text" name="studid" id="studid" style="margin-inline-start: 7px;padding: 7px; width: 282px;" placeholder="Sid" required>
            </div>
            <div>
                <label for="studdiv" style="padding: 7px;margin-top: 7px;">Division </label>
                <select name="studdiv" style="margin-inline-start: 7px;padding: 7px; width: 232px;margin-top: 7px;">
                    <option name="studdiv">1</option>
                    <option name="studdiv">2</option>
                    <option name="studdiv">3</option>
                    <option name="studdiv">4</option>
                    <option name="studdiv">5</option>
                    <option name="studdiv">6</option>
                    <option name="studdiv">7</option>
                    <option name="studdiv">8</option>
                </select>
            </div>
            <div style="margin-top: 7px;">
                <input type="text" name="studrno" id="studrno" style="margin-inline-start: 7px;padding: 7px; width: 282px;" placeholder="Roll No" required>
            </div>
            <div style="margin-top: 7px;">
                <textarea name="studaddress" id="studaddress"  style="margin-inline-start: 7px;padding: 7px; width: 282px; " placeholder="Address" required></textarea>
            </div>
            <div>
                <input type="text" name="studcity" id="studcity" style="margin-inline-start: 7px;padding: 7px; width: 282px;" placeholder="City" required>
            </div>
            <div>
                <label for="studstate" style="padding: 7px;margin-top: 7px;">State </label>
                <select name="studstate" style="margin-inline-start: 7px;padding: 7px; width: 232px;margin-top: 7px;">
                    <option name="studstate">Gujarat</option>
                    <option name="studstate">Maharastra</option>
                    <option name="studstate">Delhi</option>
                    <option name="studstate">MadhyaPradesh</option>
                    <option name="studstate">Banglore</option>
                </select>
            </div>
            <div style="margin-top: 7px;">
                <input type="text" name="studpincode" id="studpincode" style="margin-inline-start: 7px;padding: 7px; width: 282px;" placeholder="Pincode" required>
            </div>
            <div style="margin-top: 7px;">
                <input type="password" name="studpassword" id="studpassword" style="margin-inline-start: 7px;padding: 7px; width: 282px;" placeholder="Password" required>
            </div>
            <div>
                <input type="submit" name="btnSignUp" id="btnSignUp" value="Sign up" style="padding-left: 32px;padding-right: 32px;padding-top: 7px;padding-bottom: 7px;font-size: 17px;
                font-family: monospace;font-weight: bold;color: white;background-color: dodgerblue;border-color: dodgerblue;outline-color: dodgerblue;border-radius: 12px;
                margin-top: 22px;">
            </div>
        </form>
        <form action="" method="post">
            <div style="margin-top: 17px;">
                <button name="alreadyAccount" id="alreadyAccount" style="color: orange;font-weight: bold;font-family: monospace;font-size: 16px;
                border-color:orange;border-radius:7px;padding:7px;">Already have an account</button>
            </div>
        </form>
        <?php
        include "C:\inetpub\wwwroot\php\sms\Utilities\_init.php" ;
            $createTable= "CREATE TABLE $STUDENT(
                $STUD_FNAME VARCHAR(20),$STUD_LNAME VARCHAR(20),
                $STUD_EMAIL VARCHAR(42) UNIQUE,$STUD_MOBILE BIGINT(10) UNIQUE,$STUD_GENDER VARCHAR(10),
                $STUD_CAST VARCHAR(10) ,$STUD_COLLEGE VARCHAR(100),$STUD_COURSE VARCHAR(52),
                $STUD_ID BIGINT(10) , $STUD_DIV INT(1),$STUD_RNO INT(3),$STUD_ADDRESS VARCHAR(100),
                $STUD_CITY VARCHAR(20), $STUD_STATE VARCHAR(10),$STUD_PINCODE INT(6),$STUD_PASSWORD TEXT)";

            //$queryExe=mysqli_query($con,$createTable);

            if(isset($_POST['btnSignUp'])){
                $FNAME=$_POST[$STUD_FNAME];
                $LNAME=$_POST[$STUD_LNAME];
                $EMAIL=$_POST[$STUD_EMAIL];
                $MCODE=$_POST['mcode'];
                $MNO=$_POST[$STUD_MOBILE];
                $MOBILE=$MCODE.$MNO;
                $GENDER=$_POST[$STUD_GENDER];
                $CAST=$_POST[$STUD_CAST];
                $COLLEGE=$_POST[$STUD_COLLEGE];
                $COURSE=$_POST[$STUD_COURSE];
                $ID=$_POST[$STUD_ID];
                $DIV=$_POST[$STUD_DIV];
                $RNO=$_POST[$STUD_RNO];
                $ADDRESS=$_POST[$STUD_ADDRESS];
                $CITY=$_POST[$STUD_CITY];
                $STATE=$_POST[$STUD_STATE];
                $PINCODE=$_POST[$STUD_PINCODE];
                $PASSWORD=$_POST[$STUD_PASSWORD];

                $insertInTable= "INSERT INTO $STUDENT VALUES('$FNAME','$LNAME','$EMAIL',$MOBILE,'$GENDER','$CAST','$COLLEGE','$COURSE',$ID,$DIV,$RNO,'$ADDRESS','$CITY','$STATE',$PINCODE,'$PASSWORD')";
                $queryExe=mysqli_query($con,$insertInTable);
                if($queryExe){
                    ?>
                        <script type="text/javascript">
                            alert("Successfully Register !")
                            window.open("http://localhost/php/sms/Home/Home.php","_self")
                            </script>
                    <?php
                }
            }

            if(isset($_POST['alreadyAccount'])){
                ?>
                <script>
                    window.open("http://localhost/php/sms/Home/Login.php","_self")
                    </script>
                <?php
            }
        ?>
    </body>
</html>