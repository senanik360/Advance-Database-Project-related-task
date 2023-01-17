function validateForm() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    
    if (fname == "" ) {
     document.getElementById("errorfname").innerHTML="Please fill out first name";
      return false;
    }
   if ( lname == "") {
     document.getElementById("errorlname").innerHTML="Please fill out last name";
      return false;
    }
   if(!res)
    {
      document.getElementById("errormail").innerHTML="Email format is not correct";
      return false; 
    }
  }