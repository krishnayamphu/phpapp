<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data= $_POST['item'];

    require('../database/connect_db.php');

    $sql = "INSERT INTO todo(items) VALUES ('$data')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>