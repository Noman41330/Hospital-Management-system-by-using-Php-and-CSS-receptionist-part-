<?php

session_start();

if (empty($_SESSION["logusername"])) {
    header("Location:login.php");
}
?>


<!DOCTYPE html>
<html>
<title>
    Home
</title>
<head>
    <link rel="stylesheet" type="text/css" href="css/design.css">
</head>

<body>

</body>
    <?php
        include '../view/header1.php';
        include '../view/header2.php';
        ?>

<fieldset>

    
    
    <span>Welcome,</span>
    <span><?php echo $_SESSION["firstname"];?> </span><br>
<button><a href="patientform.php">Admit patient</a></button><br><br>
<button><a href="search.php">Search patient</a></button><br><br>
<button><a href="deletepatient.php">Delete patient</a></button><br><br>

    </fieldset>
</body>


<?php
        include '../view/footer.php';
        
        ?>

</html>