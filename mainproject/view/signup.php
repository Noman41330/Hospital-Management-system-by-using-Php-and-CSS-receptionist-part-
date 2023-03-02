<?php
include '../control/signupcheck.php';
?>


<!DOCTYPE html>
<html>
<head>
<title>
    Registration
</title>

    
<link rel="stylesheet" type="text/css" href="css/design.css">
</head>



<body>
    <div class="box registration">
      <?php
        include '../view/header1.php';
        
        ?>  
      

<fieldset>
    
        <h2 class="header" color="red">Staff Registration:</h2>

        <form name="registrationForm" action="" onsubmit="return validateForm()" method="post">
            
            <div class="jserror">

                <label class="font"> First Name:</label><br>
                <input type='text' name='firstname' id="firstname" >
                
                <p id="firstnameerror"></p>
                <?php echo $valfirstname; ?><br>

                
                

                <label class="font"> Last Name:</label><br>
                <input type='text' name='lastname' id="lastname">
                
                <p id="lastnameerror"></p>
                <?php echo $vallastname; ?><br>
                

                <label class="font"> User Name:</label><br>
                <input type='text' name='username' id="username" >
                
                <p id='usernameerror'></p>
                <?php echo $valusername; ?><br>
                

                <label class="font"> E-mail:</label><br>
                <input type='text' name='email' id="email">
                
                <p id="emailerror"></p>
                <?php echo $valemail; ?><br>
                

                <label class="font"> Mobile Number:</label><br>
                <input type='text' name='mobileno' id="mobileno" >
                
                <p id="mobilenumbererror"></p>
                <?php echo $valmobileno; ?><br>
                
                


                <label class="font"> Passwords:</label><br>
                <input type='password' name='password' id="password">
               
                <p id="passworderror"></p>
                 <?php echo $valpassword; ?><br>
                

               




                </div>

            <input type='submit' name='submit' value='Signup' class="button submit">

        </form>
        <br>
        <?php echo $error; ?>
        <br>


      <span><b>Already Have An Account ?<a href="login.php">Click Here</a> to Login</b></span>  
    </div>

 </fieldset>
 <script src="javascript/signupvalidation.js"></script>
 
</body>
<?php
        include '../view/footer.php';
        
        ?>
</html>