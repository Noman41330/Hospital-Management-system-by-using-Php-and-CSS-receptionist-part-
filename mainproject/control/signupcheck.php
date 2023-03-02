<?php
include '../model/mainprojectdb.php';

$valfirstname = $vallastname = $valusername = $valemail = $valmobileno = $valpassword = $valconfirmpassword =  $error = "";

if (isset($_POST['submit']))
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $mobileno = $_POST["mobileno"];
    $password = $_POST["password"];
    

    if (!empty($_POST["firstname"]) && (strlen($_POST["firstname"])  ))
    {
        if (!empty($_POST["lastname"]) && (strlen($_POST["lastname"]) ))
        {
            if (!empty($_POST["username"]) && strlen($_POST["username"]) )
            {
                if (!empty($_POST["email"]))
                {
                    if (!empty($_POST["mobileno"]) && strlen($_POST["mobileno"]) > 5 && !preg_match("/[^0-9+-]/", $mobileno))
                    {
                        if (!empty($_POST["password"]) && (strlen($_POST["password"]) > 4))
                        {
                           $connection = new mainproject();
                                $conobj = $connection->OpenCon();

                                $userQuery = $connection->insertuser($conobj, "signuptable", $firstname, $lastname, $username, $email, $mobileno, $password);
                                if ($userQuery === true)
                                {
                                    $error = "Data Inserted Successfully";
                                }
                                else
                                {
                                    $error = "Data is not inseted!" . $conobj->error;
                                }
                                 $connection->CloseCon($conobj);
 
                        }
                        else
                        {
                            $valpassword = "Please enter passwords(PHP)";
                        }

                    }
                    else
                    {
                        $valmobileno = "please enter your phone number(PHP)";
                    }

                }
                else
                {
                    $valemail = "Please enter Email properly!(PHP)!";
                }

            }
            else
            {
                $valusername = "Please fill Up user Name properly!(PHP)!";
            }

        }
        else
        {
            $vallastname = "Please fill Up Last Name properly(PHP)!";
        }

    }
    else
    {
        $valfirstname = "Please fill Up First Name properly!(PHP)";
    }

}
