<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id= $_POST['id'];

    require('../database/connect_db.php');
    $sql = "DELETE FROM todo WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Data deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>