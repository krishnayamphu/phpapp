<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th,td{
            border: 1px solid #cccccc;
            padding: 5px;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <a href="/phpapp/todo">Home</a>
        <a href="/phpapp/todo/create.php">Create</a>
    </nav>
</header>
<table>
    <tr>
        <th>#ID</th>
        <th>Items</th>
        <th>Created Date</th>
        <th>Action</th>
    </tr>

    <?php
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
    $sql = "SELECT * FROM todo";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row["id"]. "</td> ";
            echo "<td>".$row["items"]. "</td> ";
            echo "<td>".$row["created_at"]. "</td> ";
            echo "<td>
                <a href=''>Edit</a>
                <form action=''>
                <button>Delete</button>
</form>
            </td> ";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>
</table>
</body>
</html>