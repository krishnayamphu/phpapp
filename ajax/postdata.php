<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form name="frm">
    <input type="text" id="txtname" name="tname">
    <button type="button" onclick="postData()">Send</button>
</form>

<script>
    function postData(){
        const xhttp = new XMLHttpRequest();
        let v=document.forms['frm'].tname.value;
        console.log(v)
        let data="tname="+v;
        xhttp.open("POST", "post.php"); //action="post.php" method="post"
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(data);
    }
</script>
</body>
</html>