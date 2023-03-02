<?php
include '../control/logincheck.php';
if (isset($_SESSION['logusername'])) {
    header("location:home.php");
}
?>


<!DOCTYPE html>
<html>
<title>
    Log In
</title>
<head>
    
    <link rel="stylesheet" type="text/css" href="css/design.css">
</head>

<body>
    <div class="box login">
         <?php
        include '../view/header1.php';
        
        ?>
        <fieldset>
        <h2 class="header">Login</h2>
        <form action="" method="post" >
            <input type="text" name="logusername" placeholder="Enter UserName" required value="<?php if(isset($_COOKIE['logusername'])) { echo $_COOKIE['logusername'] ;}; ?>"> <br><br><br>
            
            <input type="password" name="logpassword" placeholder="Enter Password" required value="<?php if(isset($_COOKIE['logpassword'])) { echo $_COOKIE['logpassword'] ;}; ?>"><br><br>
            
            <?php
            if(!empty($error))
            {
                echo "<p id='error'> $error. </p>";
            }
            ?>
            <input type= "checkbox" name="remember_checkbox">Remember me.<br><br>
            <input name="submit" type="submit" value="LOGIN" class="button submit">
        </form>

        <br><br>
        
        <span><b>Don't have Account ?<a href="signup.php">Click Here</a> to register</b></span>
    </div>
    </fieldset>
</body>
<?php
        include '../view/footer.php';
        
        ?>
</html>