<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>nextGenSquadX | Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


    <img src="images/logo.png" height="150px" width="150px">
        

    <div class="top">
            <header>Login</header>
   </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Enter username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
		
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>