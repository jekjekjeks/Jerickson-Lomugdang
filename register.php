<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="favicon.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>REGISTER - JEKS</title>
  <link rel="stylesheet" type="text/css" href="loginregister.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<img src="favicon.jpg">
<form method="post" action="register.php">
  <?php include('errors.php'); ?>
  <div class="row">
    <label for="text">Username</label>
    <input type="text" name="username" autocomplete="off" value="<?php echo $username; ?>">
  </div>
  <div class="row">
    <label for="password">Password</label>
    <input type="password" name="password_1" id="myInput1">
  </div>
  <div class="showpass-register"><input type="checkbox" onclick="registerpass1()">Show Password</div>
  <div class="row">
    <label for="password">Confirm Password</label>
    <input type="password" name="password_2" id="myInput2">
  </div>
  <div class="showpass-register"><input type="checkbox" onclick="registerpass2()">Show Password</div>
  <button type="submit" class="btn" name="reg_user">Register</button>
  <p>
    Already have an account? <a href="login.php">Sign in</a>
  </p>
</form>
<br>
</body>
</html>

<script type="text/javascript">
  function registerpass1() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function registerpass2() {
  var x = document.getElementById("myInput2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>