<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data= $_POST['tname'];

    require('../database/connect_db.php');

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO todo(items) VALUES (?)");
    $stmt->bind_param("s", $data);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    $stmt->close();
    $conn->close();
}
?>