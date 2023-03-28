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
<header>
    <nav>
        <a href="/phpapp/todo">Home</a>
        <a href="/phpapp/todo/create.php">Create</a>
    </nav>
</header>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data= $_POST['item'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpappdb";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO todo(items) VALUES ('$data')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="text" name="item" placeholder="Item">
    <br><br>
    <button>Save</button>
</form>
</body>
</html>