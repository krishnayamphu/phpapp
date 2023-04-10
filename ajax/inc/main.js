function postData(){
    const xhttp = new XMLHttpRequest();

    let data="item="+document.forms['frm'].item.value;
    console.log(data)
    xhttp.open("POST", "inc/insert.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(data);
}