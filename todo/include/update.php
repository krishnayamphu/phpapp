<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id= $_POST['id'];
    $data=$_POST['item'];

    require('../database/connect_db.php');
    $sql = "UPDATE todo SET items='$data' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Data updated successfully";
        header('location:index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>