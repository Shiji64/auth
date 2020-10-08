<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/style.css" rel="stylesheet">
<script src="assets/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
<script src="assets/bootstrap-datepicker.js"></script>
</head>
<body>
<div class="floating-box">
<br>
<div style="margin-left: 437px;background-color: #f9f9f9;width: 600px;min-height: 270px;">
<div id="legend" align="center">
	<h2>Sign In</h2><br>
</div>
<form class="form-horizontal" action="controller/login.php" method="POST">
<fieldset>
	<div class="control-group">
        <!-- Fullname -->
        <label class="control-label"  for="username">User Name/ Email</label>
        <div class="controls">
          <input type="text"name="username" id="username" placeholder="User name" class="input-xlarge" required="true"><br><br>
        </div>
    </div>
    <div class="control-group">
        <!-- Fullname -->
        <label class="control-label"  for="password">Password</label>
        <div class="controls">
          <input type="password" id="password" name="password" placeholder="Password" class="input-xlarge" required="true">
        </div>
    </div>
   	<div class="control-group">
        <!-- Button -->
        <div class="controls">
          <button class="btn btn-success" type="submit" id="submit" name="submit">Sign In</button>
        </div>
      </div>
    <div class="control-group">
        <div class="controls">
			<p>New User <a href="signup.php">Register Here</a></p>
		</div>
	</div>
	<?php
	  if(isset($found))
	  {
	  	echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="index.php">Please try again</p>';
	  }
	  ?>
</form>
</div>
</div>
<center>
</body>
</html>
