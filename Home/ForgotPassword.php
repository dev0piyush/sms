<!DOCTYPE html>
<html lang="en-US" style="text-align: center;">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>
            Forgot Password
        </title>
        <style>
            .label{
                font-size: 32px;
                font-family: monospace;
                font-weight: bold;
                font-style: normal;
                color: thistle;
            }
        </style>
        <label class="label">
           Forgot Password
        </label>
    </head>
    <body>
       <form action="" method="post">
        <div style="margin-top: 17px;">
            <input type="text" name="studrno" id="studrno" style="margin-inline-start: 7px;padding: 7px; width: 312px;" placeholder="Roll No" required>
        </div>
        <div style="margin-top: 7px;">
            <input type="text" name="studid" id="studid" style="margin-inline-start: 7px;padding: 7px; width: 312px;" placeholder="Sid" required>
        </div>
        <div style="margin-top: 7px;">
            <input type="email" name="studemail" id="studemail" style="margin-inline-start: 7px;padding: 7px; width: 312px;" placeholder="Email Id" >
        </div>
        <div style="margin-top: 7px;">
            <input type="password" name="studpassword" id="studpassword" style="margin-inline-start: 7px;padding: 7px; width: 312px;" placeholder="Password" required>
        </div>
        <div style="margin-top: 7px;">
            <input type="password" name="studcpassword" id="studcpassword" style="margin-inline-start: 7px;padding: 7px; width: 312px;" placeholder="Confirm Password" required>
        </div>
        <div>
            <input type="submit" name="changePassword" id="changePassword" value="Chnage Password" style="padding-left: 32px;padding-right: 32px;padding-top: 7px;padding-bottom: 7px;font-size: 17px;
            font-family: monospace;font-weight: bold;color: white;background-color: thistle;border-color: thistle;outline-color: thistle;border-radius: 12px;
            margin-top: 22px;">
        </div>  
       </form>
       <form action="" method="post">
            <div style="margin-top: 17px;">
                <button name="gotoHome" id="gotoHome" style="color: gray;font-weight: bold;font-family: monospace;font-size: 16px;
                border-color:gray;border-radius:7px;padding:7px;padding-left: 17px;padding-right: 17px;">Go to Home</button>
            </div>
        </form>
       <?php
        include "C:\inetpub\wwwroot\php\sms\Utilities\_init.php" ;
        if(isset($_POST['changePassword'])){
        $RNO=$_POST[$STUD_RNO];
        $SID=$_POST[$STUD_ID];
        $EMAIL=$_POST[$STUD_EMAIL];
        $PASSWD=$_POST[$STUD_PASSWORD];
        $CPASSWD=$_POST['studcpassword'];

            if($PASSWD==$CPASSWD){
                $sql="UPDATE $STUDENT SET $STUD_PASSWORD='$PASSWD' WHERE $STUD_RNO=$RNO OR $STUD_ID=$SID OR $STUD_EMAIL='$EMAIL'";
                $dbQuery=mysqli_query($con,$sql);
                if(!$dbQuery){
                ?>
                    <script type="text/javascript">
                    alert("Something went wrong")
                    </script>
                <?php
                }else{
                ?>
                <script type="text/javascript">
                alert("Password Update Successfully")
                    window.open("http://localhost/php/sms/Home/Login.php","_self")
                </script>
                <?php
                }
            }else{
                ?>
                <script type="text/javascript">
                alert("Confirm Password Must be Same as Password")
                </script>
                <?php
            }
        }
        
        if(isset($_POST['gotoHome'])){
            ?>
                <script type="text/javascript">
                        window.open("http://localhost/php/sms/Home/Home.php","_self")
                    </script>
            <?php
        }

       ?>
    </body>
</html>