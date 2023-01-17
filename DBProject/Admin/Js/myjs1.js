function namecheck() {
    var name = document.getElementById("fname").value;
    if (name.length > 3) {
        document.getElementById("message").innerHTML = "Your name is correct";
        return true;
    }
    else {
        document.getElementById("message").innerHTML = "Incorrect name";
        return false;
    }
}
function fetchuser() {
    var fname = document.getElementById("fname").value;
    var xttp = new XMLHttpRequest();

    xttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("message").innerHTML = this.responseText;
        }
    }
    xttp.open("POST", "", true);
    xttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xttp.send("fname=" + fname);
}