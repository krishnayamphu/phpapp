<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require('include/insert.php'); ?>
<header>
    <nav>
        <a href="/phpapp/todo">Home</a>
        <a href="/phpapp/todo/create.php">Create</a>
    </nav>
</header>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="text" name="item" placeholder="Item">
    <br><br>
    <button>Save</button>
</form>
</body>
</html>