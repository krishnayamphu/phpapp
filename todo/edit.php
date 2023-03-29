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
<?php require('include/update.php'); ?>
<header>
    <nav>
        <a href="/phpapp/todo">Home</a>
        <a href="/phpapp/todo/create.php">Create</a>
    </nav>
</header>
<?php

    $id=$_GET['id']; //1

    require('../database/connect_db.php');
    $sql = "SELECT * FROM todo WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo"
        <form action='".htmlspecialchars($_SERVER['PHP_SELF'])."' method='post'>
        <input type='hidden' name='id' value='".$row['id']."'>
        <input type='text' name='item' placeholder='Item' value='".$row['items']."'>
<br><br>
<button>Update</button>
</form>
";
    }
    }
    mysqli_close($conn);


?>

</body>
</html>