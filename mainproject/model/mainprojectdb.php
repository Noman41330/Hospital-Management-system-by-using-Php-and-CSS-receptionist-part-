<?php
class mainproject{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mainproject";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

    function CheckUser($conn,$table,$logusername,$logpassword)
    {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $logusername."' AND password='". $logpassword."'");
    return $result;
    }



    function insertuser($conn,$table,$firstname,$lastname,$username,$email,$mobileno,$password)
    {
        $result = $conn->query("INSERT INTO $table (firstname,lastname,username,email,mobileno,password) VALUES ('$firstname','$lastname','$username','$email','$mobileno','$password')  ");
        return $result;
    }

    function UpdateProfile($conn,$table,$firstname,$lastname,$username,$email,$mobileno,$password)
    {
        $sql = "UPDATE $table SET firstname='$firstname', lastname='$lastname', email='$email',mobileno='$mobileno',password='$password' WHERE username='$username'";
   
       if ($conn->query($sql) === TRUE) {
           $result= TRUE;
       } else {
           $result= FALSE ;
       }
       return  $result;
    }

    function UpdatePassword($conn,$table,$username,$newpassword)
    {
        $sql = "UPDATE $table SET password='$newpassword' WHERE username='$username'";
   
       if ($conn->query($sql) === TRUE) {
           $result= TRUE;
       } else {
           $result= FALSE ;
       }
       return  $result;
    }

    function insertpatient($conn,$table,$patientid, $firstname, $lastname, $fathername, $gender, $dob, $nid, $religion, $address, $email, $mobileno, $doctor, $roomnumber, $roomtype, $bednumber, $payable, $paid, $due)
    {
        $result = $conn->query("INSERT INTO $table (patientid,firstname,lastname,fathername,gender,dob,nid,religion,address,email,mobileno,doctor,roomnumber,roomtype,bednumber,payable,paid,due) VALUES ('$patientid','$firstname','$lastname','$fathername','$gender','$dob','$nid','$religion','$address','$email','$mobileno','$doctor','$roomnumber','$roomtype','$bednumber','$payable','$paid','$due')  ");
        return $result;
    }




    function CloseCon($conn)
    {
        $conn -> close();
    }
}
?>