<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass= $_POST['password'];
    require('../database/connect_db.php');
    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "Welcome Admin";
    } else {
        echo "Invalid username or password";
    }
    mysqli_close($conn);
}
?>