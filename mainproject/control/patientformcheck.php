

<?php
include '../model/mainprojectdb.php';

$valpatientid = $valfirstname = $vallastname = $valfathername = $valgender = $valdob = $valnid = $valreligion = $valaddress =$valemail = $valmobileno = $valdoctor = $valroomnumber = $valroomtype = $valbednumber = $valpayable = $valpaid = $valdue  = $error = "";

if (isset($_POST['submit']))
{
    $patientid = $_POST["patientid"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $fathername = $_POST["fathername"];
    
    if (isset($_POST['gender']))
    {
        $gender = $_POST["gender"];
    }
    $dob = $_POST["dob"];
    $nid = $_POST["nid"];
    $religion = $_POST["religion"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $mobileno = $_POST["mobileno"];
    $doctor = $_POST["doctor"];
    $roomnumber = $_POST["roomnumber"];
    if (isset($_POST['roomtype']))
    {
        $roomtype = $_POST["roomtype"];
    }
    $bednumber = $_POST["bednumber"];
    $payable = $_POST["payable"];
    $paid = $_POST["paid"];
    $due = $_POST["due"];

    
    if (!empty($_POST["patientid"]) && (strlen($_POST["patientid"]) ))
    {
        if (!empty($_POST["firstname"]) && (strlen($_POST["firstname"]) ))
        {
            if (!empty($_POST["lastname"]) && (strlen($_POST["lastname"]) ))
            {
                if (!empty($_POST["fathername"]) && strlen($_POST["fathername"]) )
                {
                    if (isset($_POST["gender"]))
                    {
                        if (!empty($_POST["dob"]))
                        {
                            if (!empty($_POST["nid"]) && strlen($_POST["nid"]))
                            {
                                if (!empty($_POST["religion"]) && strlen($_POST["religion"]))
                                {
                                    if (!empty($_POST["address"]) && strlen($_POST["address"]))
                                    {
                                        if (!empty($_POST["email"]) && strlen($_POST["email"]))
                                        {
                                            if (!empty($_POST["mobileno"]) && strlen($_POST["mobileno"]))
                                            {
                                                if (!empty($_POST["doctor"]) && strlen($_POST["doctor"]))
                                                {
                                                    if (!empty($_POST["roomnumber"]) && strlen($_POST["roomnumber"])) 
                                                    {
                                                        if (!empty($_POST["roomtype"]))
                                                        {
                                                            if (!empty($_POST["bednumber"]) && strlen($_POST["bednumber"]))
                                                            {
                                                                if (!empty($_POST["payable"]) && strlen($_POST["payable"]))
                                                                {
                                                                    if (!empty($_POST["paid"]) && strlen($_POST["paid"]))
                                                                    {
                                                                        if (!empty($_POST["due"]) && strlen($_POST["due"]))
                                                                        {
                                                                            $connection = new mainproject();
                                                                                $conobj = $connection->OpenCon();

                                                                                $userQuery = $connection->insertpatient($conobj, "patientlist", $patientid, $firstname, $lastname, $fathername, $gender, $dob, $nid, $religion, $address, $email, $mobileno, $doctor, $roomnumber, $roomtype, $bednumber, $payable, $paid, $due);
                                                                                if ($userQuery === true)
                                                                                    {
                                                                                        $error = "Patient data Inserted succuessfully";
                                                                                    }
                                                                                else
                                                                                    {
                                                                                         $error = "Patient data is not inseted!!!" . $conobj->error;
                                                                                    }
                                                                                    $connection->CloseCon($conobj);
                                                                                    }
                                                                    }
                                                                    else
                                                                    {
                                                                        $valpaid = "please enter paid amount"; 
                                                                    }
                                                                }
                                                                else
                                                                {
                                                                    $valpayable = "please enter payable amount"; 
                                                                }
                                                            }
                                                            else
                                                            {
                                                                $valbednumber = "please enter bed number";
                                                            }
                                                        }
                                                        else
                                                        {
                                                            $valroomtype = "please enter room type";
                                                        } 
                                                    } 
                                                    else
                                                    {
                                                        $valroomnumber = "please enter room number"; 
                                                    }
                                                }
                                                else
                                                {
                                                    $valdoctor = "please enter incharge doctor's name"; 
                                                }       
                                            }
                                            else
                                            {
                                                $valmobileno = "please enter patient's phone number"; 
                                            }
                                        }
                                        else
                                        {
                                            $valemail = "please enter patient's email"; 
                                        }
                                    }
                                    else
                                    {
                                        $valaddress = "please enter patient's address"; 
                                    }
                                } 
                                else
                                {
                                    $valreligion = "please enter religion name";
                                }
                            }
                            else
                            {
                                $valnid = "please select NID or birth cirtificate number";
                            }

                        }
                        else
                        {
                            $valdob = "please select Date of Birth";
                        }

                    }
                    else
                    {
                        $valgender = "Fill Up ptheints gender!";
                    }

                }
                else
                {
                    $valfathername = "PLease fill pathient's father's name";
                }

            }
            else
            {
                $vallastname = "PLease fill the last name";
            }

        }
        else
        {
            $valfirstname = "PLease fill the first name";
        }
    }
    else
    {
        $valpatientid = "PLease patient id first";
    }

}
