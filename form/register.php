<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body>

	<form method="POST" action="data.php">
		<label>Username</label>
		<input type="text" name="username">
		<br><br>
		<label>Password</label>
		<input type="password" name="password">
		<br><br>
		<label>Gender</label>
		<input type="radio" name="g" value="m" checked>Male
		<input type="radio" name="g" value="f">Female
		<br><br>
		<label>Course</label>
		<input type="checkbox" name="courses[]" value="basic" checked>Basic
		<input type="checkbox" name="courses[]" value="web">Web
		<br><br>
		<label>Country</label>
		<select name="country">
			<option value="nepal">Nepal</option>
			<option value="china">China</option>
			<option value="india">India</option>
			<option value="japan">Japan</option>
		</select>
		<br><br>
		<label>Remarks</label>
		<textarea name="remarks" cols="10" rows="5">
			
		</textarea>
		<br><br>
		<label>Date</label>
		<input type="date" name="date">
		<br><br>
		<button>Submit</button>
	</form>

</body>
</html>