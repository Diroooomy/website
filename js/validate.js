var reg = /^\s*$/g;
function validateForm() {
    var x = document.forms["form"]["name"].value;
    if (x == null || x == ""||reg.test(x)) {
        alert("内容不能为空或全为空格！");
        return false;
    }
}
function validate() {
    var x = document.forms["form"]["com"].value;
    if (x == null || x == ""||reg.test(x)) {
        alert("内容不能为空或全为空格！");
        return false;
    }
}