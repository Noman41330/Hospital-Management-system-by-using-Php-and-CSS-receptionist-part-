<?php
include '../model/mainprojectdb.php';
session_start();


$error = "";

if (isset($_POST['submit'])) {
    
        $oldpassword = $_POST['oldpassword'];

        $connection = new mainproject();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->CheckUser($conobj, "signuptable", $_SESSION["logusername"], $oldpassword);

        if ($userQuery->num_rows > 0) 
        {
            if($_POST['newpassword']==$_POST['confirmpassword'])
            { 
                
                $userQuery=$connection->UpdatePassword($conobj,"signuptable",$_SESSION["logusername"],$_POST['newpassword']);
                if($userQuery==TRUE)
                {
       
                    $error = " Password Updated successfully"; 
       
                }
                else
                {
                    $error = " Password not Updated";   
                }
                
                
            }
            else
                $error = "New Password not matched";

        } 
        
        else 
        {
            $error = " Password is invalid";
        }
        $connection->CloseCon($conobj);

  
}