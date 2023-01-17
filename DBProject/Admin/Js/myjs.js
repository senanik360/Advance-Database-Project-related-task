function validateForm(){
  var fname = document.getElementById("first_name").value;
  var lname = document.getElementById("last_name").value;
  var email = document.getElementById("email").value;
  var admincode = document.getElementById("admin_code").value;
  var phone = document.getElementById("mobile_no").value;
  var nid = document.getElementById("nid").value;

  var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = patt.test(email);

    
    if (isNum(fname)) {
        document.getElementById("errorfname").innerHTML = "Name Cannot be Numeric";
        return false;
    }
    if (isNum(lname)) {
      document.getElementById("errorlname").innerHTML = "Name Cannot be Numeric";
      return false;
  }
  if (admincode!=520520) {
    document.getElementById("erroradmincode").innerHTML = "Wrong Admin Code";
    return false;
}
if (phone.length<11) {
  document.getElementById("errorphone").innerHTML = "Invalid Phone.!";
  return false;
}
if (nid.length<13) {
  document.getElementById("errornid").innerHTML = "Invalid NID.!";
  return false;
}
  if(!res)
   {
    document.getElementById("erroremail").innerHTML = "Invalid Email";
    return false;
}else {
        return true;
    }
}
