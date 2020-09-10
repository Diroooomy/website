 /*改变原始宽度（0）*/
 function openNav() {
    document.getElementById("mySidenav").style.width = "7%";
}
/*恢复原始宽度0*/
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
 /*改变原始宽度（0）*/
 function open() {
    document.getElementById("mySidenav").style.height = "8%";
}
/*恢复原始宽度0*/
function close() {
    document.getElementById("mySidenav").style.height = "0";
}
function hiddenbtn() {
    var myDiv = document.getElementById("open");
    myDiv.style.display = "none";
}