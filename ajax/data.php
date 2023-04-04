<?php
require('../database/connect_db.php');
$sql = "SELECT * FROM todo";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["items"]."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
