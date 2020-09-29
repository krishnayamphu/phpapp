<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
</head>
<body>

<form action="person-details.php" method="post">
	<label>Fullname</label>
	<input type="text" name="name" required>
	<br><br>

	<label>Email</label>
	<input type="email" name="email" required>
	<br><br>

	<label>Gender</label>
	<input type="radio" name="gender" value="male" required>Male
	<input type="radio" name="gender" value="female">Female
	<br><br>

	<label>Courses</label>
	<input type="checkbox" name="courses[]" value="basic">Basic
	<input type="checkbox" name="courses[]" value="laravel">Laravel
	<input type="checkbox" name="courses[]" value="wordpress">Wordpress
	<br><br>

	<label>Country</label>
	<select name="country">
		<option value="Nepal">Nepal</option>
		<option value="Korea">Korea</option>
		<option value="Japan">Japan</option>
		<option value="China">China</option>
		<option value="India">India</option>
	</select>
	<br><br>

	<button type="submit">Register</button>
</form>
</body>
</html>