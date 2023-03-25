<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css">
</head>
<body>
	<div class="container">
		<h1>Supper global GET</h1>
		<form action="information.php" method="get">
			<div class="form-group">
				<label for="first-name">First Name</label>
				<input type="text" id="first-name" name="first-name" required>
			</div>
			<div class="form-group">
				<label for="last-name">Last Name</label>
				<input type="text" id="last-name" name="last-name" required>
			</div>
			<div class="form-group">
				<label for="email">Email Address</label>
				<input type="email" id="email" name="email" required>
			</div>
			<button type="submit" class="button-primary">Submit</button>
		</form>
	</div>
</body>
</html>
