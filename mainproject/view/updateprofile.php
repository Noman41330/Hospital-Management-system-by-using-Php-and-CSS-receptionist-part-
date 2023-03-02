<?php
include '../control/profilecheck.php';
?>

<!DOCTYPE html>
<html>
<title>
    Update Profile
</title>

<head>
    <link rel="stylesheet" type="text/css" href="css/design.css">
<body>
    <?php
        include '../view/header1.php';
        include '../view/header2.php';
        
        ?>

<fieldset>

    <div class="box registration">

        <h2 class="header">Update Profile</h2>

        <form action="" method="post">
            <div class="jserror">

                <label class="font"> User Name</label>
                <p id="showinfo"><?php echo $username; ?></p>
                <br><br>

                <label class="font"> First Name</label>
                <input type='text' name='firstname' id="firstname" value="<?php echo $firstname; ?>">
                <p id="firstnameerror"></p>



                <label class="font"> Last Name</label>
                <input type='text' name='lastname' id="lastname" value="<?php echo $lastname; ?>">
                <p id="lastnameerror"></p>


                <label class="font"> E-mail</label>
                <input type='text' name='email' id="email" value="<?php echo $email ; ?>">
                <p id="emailerror"></p>

             


                <label class="font"> Mobile Number</label>
                <input type='text' name='mobileno' id="mobileno" value="<?php echo $mobileno; ?>">
                <p id="mobilenumbererror"></p>

                <label class="font"> Passwords</label>
                <input type='password' id="password" name="password" value="<?php echo $password; ?>">
                <p id="doberror"></p>

                
            </div>
            <input type='submit' name='update' value='Update Profile' class="button submit">

        </form>


    </div>

</fieldset>

</body>

<?php
        include '../view/footer.php';
        
        ?>
</html>