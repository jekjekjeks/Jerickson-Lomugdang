<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/x-icon" href="favicon.jpg">  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>LOGIN - JEKS</title>
  <link rel="stylesheet" type="text/css" href="loginregister.css">
  </style>
</head>
<body>
<br><br>
<img src="favicon.jpg">
<form method="post" action="login.php">
  <?php include('errors.php'); ?>
  <div class="row">
    <label for="email">Username</label>
    <input type="text" name="username" autocomplete="off" placeholder="">
  </div>
  <div class="row">
    <label for="password">Password</label>
    <input type="password" name="password" id="myInput">
    <div class="showpass-login"><input type="checkbox" onclick="loginpass()">Show Password</div>
  <div class=""><br>
      <button type="submit" class="btn" name="login_user">Login</button>
  </div>
  <p>
    No account yet? <a href="register.php">Sign up</a>
  </p>
</form>
</body>
</html>

<script type="text/javascript">
  function loginpass() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>