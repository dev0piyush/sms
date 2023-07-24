<!DOCTYPE html>
<html lang="en-US" style="text-align: center;">
    <meta charset="UTF-8">
    <head>
        <title>
            Student Login
        </title>
    </head>
    <body>
        <style>
            .label{
                font-size: 38px;
                font-family: monospace;
                font-weight: bold;
                font-style: normal;
                color: orange;
            }
        </style>
        <label class="label">
            Login
        </label>
        <form action="" method="post">
            <div style="margin-top: 17px;">
                <input type="email" name="studemail" id="studemail" style="margin-inline-start: 7px;padding: 7px; width: 312px;" placeholder="Email Id" required>
            </div>
            <div style="margin-top: 7px;">
                <input type="password" name="studpassword" id="studpassword" style="margin-inline-start: 7px;padding: 7px; width: 312px;" placeholder="Password" required>
            </div>
            <div>
                <input type="submit" name="btnLogin" id="btnLogin" value="Login" style="padding-left: 32px;padding-right: 32px;padding-top: 7px;padding-bottom: 7px;font-size: 17px;
                font-family: monospace;font-weight: bold;color: white;background-color: orange;border-color: orange;outline-color: orange;border-radius: 12px;
                margin-top: 22px;">
            </div>
        </form>
        <form action="" method="post">
            <div style="margin-top: 17px;">
                <button name="newAccount" id="newAccount" style="color: dodgerblue;font-weight: bold;font-family: monospace;font-size: 16px;
                border-color:dodgerblue;border-radius:7px;padding:7px;padding-left: 17px;padding-right: 17px;">New student? create now</button>
            </div>
        </form>
    </body>
    <?php
        include "C:\inetpub\wwwroot\php\sms\Utilities\_init.php" ;

        if(isset($_POST['btnLogin'])){
            $EMAIL=$_POST[$STUD_EMAIL];
            $PASSWORD=$_POST[$STUD_PASSWORD];
            

            $selectQuery="SELECT $STUD_EMAIL,$STUD_PASSWORD FROM $STUDENT";
            $dbQuery=mysqli_query($con,$selectQuery);
            $data=mysqli_num_rows($dbQuery);

            if($data){
                while($row=mysqli_fetch_array($dbQuery)){
                    ?>
                    <tr>
                        <td>
                        <?php
                            echo $row[0];
                        ?>
                        </td>
                        <td>
                        <?php
                            echo $row[1];
                        ?>
                        </td>
                    </tr>
                    <?php
                }
            }
        }

    ?>
</html>