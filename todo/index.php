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
<?php require('include/delete.php'); ?>
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
    require('../database/connect_db.php');
    $sql = "SELECT * FROM todo";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) :

        // output data of each row
        while($row = mysqli_fetch_assoc($result)):
            ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["items"]; ?></td>
            <td><?php echo $row["created_at"]; ?></td>
            <td>
                <a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='post'>
                <input type='hidden' name='id' value='<?php echo $row['id']; ?>'>
                <button>Delete</button>
                </form>
            </td>
        </tr>
    <?php
        endwhile;
    else :
        echo "0 results";
    endif;
    mysqli_close($conn);
?>

</table>
</body>
</html>