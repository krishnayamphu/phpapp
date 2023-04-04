<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP AJAX</title>
</head>
<body>
<h2>The XMLHttpRequest Object</h2>

<div id="demo">
    <p>Let AJAX change this text.</p>
    <button type="button" onclick="loadData()">Change Content</button>
</div>

<script>
    function loadData() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById("demo").innerHTML = this.responseText;
        }
        xhttp.open("GET", "data.php");
        xhttp.send();
    }
</script>
</body>
</html>