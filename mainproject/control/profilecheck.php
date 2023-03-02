<?php
include('../model/mainprojectdb.php');
session_start();

 
 $firstname=$lastname =$username =$email =$mobileno=$password ="";

 $connection = new mainproject();
$conobj=$connection->OpenCon();


$userQuery=$connection->CheckUser($conobj,"signuptable",$_SESSION["logusername"],$_SESSION["logpassword"]);
if($userQuery->num_rows > 0)
{
    while($row = $userQuery->fetch_assoc()) 
    {
        $firstname=$row["firstname"];
        $lastname=$row["lastname"];
        $username =$row["username"];
        $email =$row["email"];
        $mobileno=$row["mobileno"];
        $password=$row["password"];
        


    }

   
    
      
}
if (isset($_POST['update'])) 
{
    
    $connection = new mainproject();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->UpdateProfile($conobj,"signuptable",$_SESSION['logusername'],$_POST['firstname'],$_POST['lastname'], $_POST['email'],
        $_POST['mobileno'],$_POST['password']);
    if($userQuery==TRUE)
    {
       
        echo " updated"; 
       
    }
    else
    {
        echo "could not update";    
    }
    $connection->CloseCon($conobj);
    
    
    
 }

 