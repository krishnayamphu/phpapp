<?php

require('../database/connect_db.php');

$sql = "SELECT  * FROM todo";
$result = $conn->query($sql);
$data="";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data.="<tr><td>".$row["id"]."</td><td>".$row["items"]."</td><td>".$row["created_at"]."</td>
<td>
<form name='frm'>
<button type='button' onclick='delData(".$row['id'].")'>Delete</button>
</form>
</td>
</tr>";
    }
    echo $data;
} else {
    echo "0 results";
}
$conn->close();