
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/style.css" rel="stylesheet">
    <script src="assets/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script src="assets/bootstrap-datepicker.js"></script>
</head>
<body>
<div class="signup_form">
  <form class="form-horizontal" action="controller/register.php" method="POST">
  <fieldset>
    <br>
    <div style="margin-left: 437px;background-color: #f9f9f9;width: 600px;min-height: 450px;">
      <br>
      <div id="legend" align="center">
      <h2>Sign Up</h2>
      </div><br>
      <div class="control-group">
        <!-- Fullname -->
        <label class="control-label"  for="username">First name</label>
        <div class="controls">
          <input type="text" id="username" name="first_name" placeholder="First name" class="input-xlarge" required="true">
        </div>
      </div>
      <div class="control-group">
        <!-- Username -->
        <label class="control-label"  for="username">Last name</label>
        <div class="controls">
        <input type="text" id="username" name="last_name" class="input-xlarge" placeholder="Last name" required="true">
        </div>
      </div>
   
      <div class="control-group">
        <!-- E-mail -->
        <label class="control-label" for="email">E-mail</label>
        <div class="controls">
          <input type="email" id="email" name="email_id" placeholder="E-mail" class="input-xlarge" required="true">
        </div>
      </div>
   
      <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Password</label>
        <div class="controls">
          <input type="password" id="password" name="password" placeholder="Password" class="input-xlarge" required="true">
        </div>
      </div>
      <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Date of Birth</label>
        <div class="controls">
          <input type="datepicker" id="user_dob" name="user_dob" placeholder="Date of Birth" class="input-xlarge datepicker" required="true">
        </div>
      </div>
      <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Type</label>
        <div class="controls">
          <input type="radio" id="admin" name="user_type" value="0" required="true">&nbsp;Admin&nbsp;&nbsp;
          <input type="radio" id="others" name="user_type" value="1" required="true">&nbsp;Others&nbsp;
        </div>
      </div>
   
      <div class="control-group">
        <!-- Button -->
        <div class="controls">
          <button class="btn btn-success" type="submit" id="submit" name="submit">Register</button>
        </div>
      </div>

      <div class="control-group">
        <div class="controls">
         Already registered <a href="signin.php">Signin</a>
        </div><br>
      </div>
    </div>
    

  </fieldset>
</form>
</div>

<script type="text/javascript">
$("document").ready(function(){
     $('.datepicker').datepicker({
      format: 'mm-dd-yyyy'
    });
});
 
</script>
</body>
</html>
