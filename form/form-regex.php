<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
<?php
	$data=$err="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_POST['url'])){
			$err="*field required";
		}else{
			$data=htmlspecialchars($_POST['url']);
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$data)) {
			  $err = "invalid url format";
			}else{
				echo "Data: ".$data;
			}
			
		}
	}

?>
<br>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<label>Email</label>
		<input type="text" name="url">
		<span class="err"><?php echo $err; ?></span>
		<br><br>
		<button>Submit</button>
	</form>



</body>
</html>