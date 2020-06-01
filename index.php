<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    
<div>
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
                    <hr class="mb-3">
                    <div class="col">

					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>
                    </div>
                    <div class="col">

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>
                    </div>
                    <div class="col">

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>
                    </div>
                   

                    <div class="col">

					<label for="password"><b>Password</b></label>
                    <input class="form-control" id="password"  type="password" name="password" required>
                    </div>
                    <div class="col">

<label for="phonenumber"><b>Confirmer password</b></label>
<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>
</div>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
</div>
</body>
</html>