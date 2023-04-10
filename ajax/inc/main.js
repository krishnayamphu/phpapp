
function showData(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("myData").innerHTML = this.responseText;
        // console.log(this.responseText)
    }
    xhttp.open("GET", "show.php");
    xhttp.send();
}
function postData(){
    const xhttp = new XMLHttpRequest();
    let v=document.forms['frm'].item.value;
    let data="tname="+v;
    xhttp.open("POST", "post.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(data);
    document.forms['frm'].item.value="";
    showData();
}
function delData(id){
    const xhttp = new XMLHttpRequest();
    let v=id;
    console.log(v);
    let data="id="+v;
    xhttp.open("POST", "inc/delete.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(data);
    showData();
}
showData();