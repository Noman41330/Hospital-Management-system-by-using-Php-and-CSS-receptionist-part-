<?php
include '../control/patientformcheck.php';
?>


<!DOCTYPE html>
<html>

<title>
   Patient Registration
</title>
<head>
    <link rel="stylesheet" type="text/css" href="css/design.css">
</head>


<body>
    <div class="box registration">
        <?php
        include '../view/header1.php';
        include '../view/header2.php';
        
        ?>
      

<fieldset>
  
        <h2 class="header">Registration:</h2>
     

        <form name="registrationForm" action="" onsubmit="return validateForm()" method="post">
            
            <div class="jserror">
               <h3>Personal Information:</h3>

                <label class="font"> Patient ID:</label><br>
                <input type='text' name='patientid' id="patientid" >
                <?php echo $valpatientid; ?>
                <p id="patientiderror"></p>



                <label class="font"> First Name of Patient:</label><br>
                <input type='text' name='firstname' id="firstname" >
                <?php echo $valfirstname; ?>
                <p id="firstnameerror"></p>

                
                

                <label class="font"> Last Name of Patient:</label><br>
                <input type='text' name='lastname' id="lastname" >
                <?php echo $vallastname; ?>
                <p id="lastnameerror"></p>
                

                <label class="font"> Father's Name of Patient:</label><br>
                <input type='text' name='fathername' id="fathername" >
                <?php echo $valfathername; ?>
                <p id='fathernameerror'></p>

                <label class="font"> Gender:</label><br>
                <input type='radio' name='gender' id="male" value="male">
                <label for="Male">Male</label>
                <input type='radio' name='gender' id="female" value="female">
                <label for="Female">Female</label>
                <?php echo $valgender; ?>
                <p id="gendererror"></p>

                <label class="font"> Date of Birth:</label><br>
                <input type='date' id="dob" name="dob">
                <p id="doberror"></p>
                <?php echo $valdob; ?>

                <label class="font"> NID/ Birth certificate Number:</label><br>
                <input type='text' name='nid' id="nid" >
                <?php echo $valnid; ?>
                <p id="niderror"></p>

                 <label class="font"> Religion:</label><br>
                <input type='text' name='religion' id="religion" >
                <?php echo $valreligion; ?>
                <p id="religionerror"></p>
                
                <h3>Contact Informations:</h3><br>

                <label for="address">Address:</label><br>
                <br>
                <textarea name="address" id="address" rows="4" cols="40">
                </textarea> 

                <?php echo $valaddress; ?>
                <p id="addresserror"></p>


                <label class="font"> E-mail:</label><br>
                <input type='text' name='email' id="email" >
                <?php echo $valemail; ?>
                <p id="emailerror"></p>
                

                <label class="font"> Mobile Number:</label><br>
                <input type='text' name='mobileno' id="mobileno" >
                <?php echo $valmobileno; ?>
                <p id="mobilenumbererror"></p>


                <h3>Admission Information:</h3><br>
                
                


                <label class="font"> Doctor in charge:</label><br>
                <input type='text' name='doctor' id="doctor" >
                <?php echo $valdoctor; ?>
                <p id="doctorerror"></p>

                <label class="font"> Room Number:</label><br>
                <input type='text' name='roomnumber' id="roomnumber" >
                <?php echo $valroomnumber; ?>
                <p id="roomnumbererror"></p>


                  <label class="font">Room type:</label><br>
                <input type='radio' name='roomtype' id="general" value="general">
                <label for="general">General</label>
                <input type='radio' name='bedtype' id="cabin" value="cabin">
                <label for="cabin">Cabin</label>
                <?php echo $valroomtype; ?>
                <p id="roomtypeerror"></p>
                
                
               


                <label class="font"> Bed Number:</label><br>
                <input type='text' name='bednumber' id="bednumber" >
                <?php echo $valbednumber; ?>
                <p id="bednumbererror"></p>


                Payment Information:<be><br>
                

                <label class="font"> Payable amount:</label><br>
                <input type='text' name='payable' id="payable">
                <?php echo $valpayable; ?>
                <p id="payableerror"></p>

                <label class="font"> Paid amount:</label><br>
                <input type='text' name='paid' id="paid" >
                <?php echo $valpaid; ?>
                <p id="paiderror"></p>
                

               
                <label class="font"> Due amount:</label><br>
                <input type='text' name='due' id="due" >
                <?php echo $valdue ?>
                <p id="dueerror"></p>




                </div>

            <input type='submit' name='submit' value='Submit' class="button submit">

        </form>

        <br>
        <?php echo $error; ?>
        <br>


        
    </div>
 </fieldset>
   
</body>
<?php
        include '../view/footer.php';
        
        ?>
</html>