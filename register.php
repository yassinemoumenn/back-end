<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
  
  
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div  class="form-group">>
  	  <label for="exampleFormControlSelect1">firstname</label>
  	  <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>">
  	</div>
	  <div class="input-group">
  	  <label>lastname</label>
  	  <input type="text" name="lastname" value="<?php echo $lastname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>