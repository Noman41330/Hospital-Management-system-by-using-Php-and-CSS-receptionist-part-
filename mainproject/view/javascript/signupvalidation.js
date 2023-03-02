function validateForm() 
{

  //First name
  var firstnamecheck = /^[a-zA-Z.\s]+$/;
  var firstname = document.getElementById("firstname").value;

  if (firstname == "" || firstname.length < 1) {
    document.getElementById("firstnameerror").innerHTML =
      "*Please fill up your First Name";
    return false;
  }
  if (!firstnamecheck.test(firstname)) {
    document.getElementById("firstnameerror").innerHTML =
      "*This first name isn't allowed.Please,take another name";
    return false;
  }

  //Last name
  var lastnamecheck = /^[a-zA-Z.\s]+$/;
  var lastname = document.getElementById("lastname").value;

  if (lastname == "" || lastname.length < 1) {
    document.getElementById("lastnameerror").innerHTML =
      "*Please fill up your Last Name";
    return false;
  }
  if (!lastnamecheck.test(lastname)) {
    document.getElementById("lastnameerror").innerHTML =
      "*This last name isn't allowed.Please,take another name";
    return false;
  }
  //username
  var name = /^[a-zA-Z0-9._-\s]+$/;
  var username = document.getElementById("username").value;

  if (username == "") {
    document.getElementById("usernameerror").innerHTML =
      "*Please fill out User Name";
    return false;
  }
  if (!name.test(username)) {
    document.getElementById("usernameerror").innerHTML =
      "*This username isn't allowed.Please,take another name";
    return false;
  }
  if (username.length < 2 || username.length > 20) {
    document.getElementById("usernameerror").innerHTML =
      "*Please,Check username length";
    return false;
  }


  //email
  var emailcheck =
    /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var email = document.getElementById("email").value;

  if (email == "") {
    document.getElementById("emailerror").innerHTML = "*Please fill up E-mail";
    return false;
  }
  if (!emailcheck.test(email)) {
    document.getElementById("emailerror").innerHTML = "*Invalid Email!!";
    return false;
  }

  //Mobile Number

  var numbercheck = /^[0-9+-]+$/;
  var mobileno = document.getElementById("mobileno").value;

  if (mobileno == "") {
    document.getElementById("mobilenumbererror").innerHTML =
      "*Please fill up Mobile Number";
    return false;
  }
  if (!numbercheck.test(mobileno)) {
    document.getElementById("mobilenumbererror").innerHTML =
      "*Incorrect Mobile Number!!";
    return false;
  }


  //password
  var password = document.getElementById("password").value;
  if (password == "") {
    document.getElementById("passworderror").innerHTML =
      "*Please fill out Password";
    return false;
  }
  if (password.search(/[a-z]/) < 0) {
    document.getElementById("passworderror").innerHTML =
      "*Your password must contain at least one letter";
    return false;
  }
  if (password.search(/[0-9]/) < 0) {
    document.getElementById("passworderror").innerHTML =
      "*Your password must contain at least one Number";
    return false;
  }
  if (password.length < 5) {
    document.getElementById("passworderror").innerHTML =
      "*Please,Check Password length";
    return false;
  }

}

