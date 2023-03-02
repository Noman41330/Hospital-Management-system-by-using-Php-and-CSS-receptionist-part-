<?php
include '../control/changepasswordcheck.php';
?>


<!DOCTYPE html>
<html>

<title>
    Security
</title>
<head>
    <link rel="stylesheet" type="text/css" href="css/design.css">
</head>


<?php
        include '../view/header1.php';
        include '../view/header2.php';
        ?>


<fieldset>
    <body>
        <div class="box security">
            

            <h2 class="header">Change Passwords</h2>

            <form name="security" action="" onsubmit="return securityvalidation()" method="post">
                <div class="jserror">


                    <label class="font">Old Passwords:</label>
                    <input type='password' name='oldpassword' id="oldpassword">
                    <br>
                    <p id="oldpassworderror"></p>


                    <label class="font">New Passwords:</label>
                    <input type='password' name='newpassword' id="newpassword">
                    <br>
                    <p id="newpassworderror"></p>


                    <label class="font">Confirm New Passwords:</label>
                    <input type='password' name='confirmpassword' id="confirmpassword">
                    <br>
                    <p id="confirmpassworderror"></p>



                </div>


                <input type='submit' name='submit' value='Confirm' class="button submit">

            </form>

            <br>
            <p id="error"> <?php echo $error; ?></p>
            <br>

        </div>
        
</fieldset>
    </body>
<?php
        include '../view/footer.php';
        
        ?>
</html>