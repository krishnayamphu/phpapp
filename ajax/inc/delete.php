<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    require('../../database/connect_db.php');
    $sql = "DELETE FROM todo WHERE id=$id";
    $stmt = $conn->prepare("DELETE FROM todo WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    echo "Item Deleted";
    $stmt->close();
    $conn->close();

}
?>