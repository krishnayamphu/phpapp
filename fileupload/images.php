<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            display: flex;
        }

        .img-container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 5px;
        }
        img{
            width: 100px;
            height: 100px;
            object-fit: cover;
            display: inline-block;
            border: 2px solid #ccc;
        }
    </style>
</head>
<body>
<form action="store.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<hr>
<div class="container">


<?php
$mydir="uploads";
$files=glob($mydir.'/*.*');
foreach($files as $file) {    ?>
        <div class="img-container">
            <a href="<?php echo $file; ?>">
            <img src="<?php echo $file; ?>">
            </a>
            <form action="del.php" method="post">
                <input type="hidden" name="pic" value="<?php echo $file; ?>">
                <button type="submit" name="submit">Delete</button>
            </form>
        </div>

<?php } ?>
</div>
</body>
</html>
