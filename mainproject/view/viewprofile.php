<?php
include '../control/profilecheck.php';
?>

<!DOCTYPE html>
<html>
<title>
    View Profile
</title>

<head>
    <link rel="stylesheet" type="text/css" href="css/design.css">
</head>


    <?php
        include '../view/header1.php';
        include '../view/header2.php';
        ?>

<fieldset>

    <div class="box registration">

        <h2 class="header">Profile</h2>

        <form action="" method="post">
            <div class="jserror">
                <label class="font"> First Name</label>
                <input type='text' name='firstname' value="<?php echo $firstname; ?>" readonly>
                <br><br>

                <label class="font"> Last Name</label>
                <input type='lastname' name='lastname' value="<?php echo $lastname; ?>" readonly>
                <br><br>

                <label class="font"> User Name</label>
                <input type='text' name='username' value="<?php echo $username; ?>" readonly>
                <br><br>

                <label class="font"> E-mail</label>
                <input type='text' name='email' value="<?php echo $email ; ?>" readonly>
                <br><br>

                

                <label class="font"> Mobile Number</label>
                <input type='text' name='mobileno' value="<?php echo $mobileno; ?>" readonly>
                <br><br>

                <label class="font"> Passwords</label>
                <input type='password' id="password" name="password" value="<?php echo $password; ?>" readonly>
                <br><br>

              

                

            </div>


        </form>


    </div>

</fieldset>

</body>
<?php
        include '../view/footer.php';
        
        ?>

</html>