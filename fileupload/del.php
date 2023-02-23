<?php
if (isset($_POST["submit"])) {
    $filename = $_POST['pic'];
    unlink($filename);
    header('Location: images.php');
}

?>
