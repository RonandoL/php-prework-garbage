<!DOCTYPE html>
<html>
<head>
	<title>PHP form check box example</title>
</head>

<body>

		<form action="building_choices.php" method="post">
				<p>
						Which buildings do you want access to?<br/>
						<input type="checkbox" name="formDoor[]" value="A" />A Bld<br>
						<input type="checkbox" name="formDoor[]" value="B" />B Bld<br>
						<input type="checkbox" name="formDoor[]" value="C" />C Bld<br>
						<input type="checkbox" name="formDoor[]" value="D" />D Bld<br>
						<input type="checkbox" name="formDoor[]" value="E" />E Bld<br>
				</p>
						<input type="submit" name="formSubmit" value="Submit" />
		</form>

</body>
</html>
