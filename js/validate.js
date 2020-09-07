var reg = /^\s*$/g;
function validateForm() {
    var x = document.forms["form"]["name"].value;
    if (x == null || x == ""||reg.test(x)) {
        alert("you got a name to fill");
        return false;
    }
}