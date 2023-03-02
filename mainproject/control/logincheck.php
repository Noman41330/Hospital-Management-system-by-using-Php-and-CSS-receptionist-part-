<?php
include '../model/mainprojectdb.php';
session_start();
$error = "";
if (isset($_POST['submit'])) {
    if (empty($_POST['logusername']) || empty($_POST['logpassword'])) 
    {
        $error = "Please fill Up Usernname and Password!!";
    } 
    else 
    {
        $logusername = $_POST['logusername'];
        $logpassword = $_POST['logpassword'];

        $connection = new mainproject();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->CheckUser($conobj, "signuptable", $logusername, $logpassword);

        if ($userQuery->num_rows > 0) {
            $_SESSION["logusername"] = $logusername;
            $_SESSION["logpassword"] = $logpassword;
            while($row = $userQuery->fetch_assoc()) {
                $_SESSION["firstname"]=$row["firstname"];
                
                
            }

        } else {
            $error = "Username or Password is invalid";
        }
        $connection->CloseCon($conobj);

    }


    if(!empty($_POST['remember_checkbox']))
        {
            $remember_checkbox=$_POST['remember_checkbox'];

            setcookie('logusername',$logusername,time()+60);
            setcookie('logpassword',$logpassword,time()+60);
        }
    else
        {

            setcookie('logusername',$logusername,60);
            setcookie('logpassword',$logpassword,60);

        }




}


?>