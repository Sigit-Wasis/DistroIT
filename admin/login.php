<?php
/*include('login_proses.php'); */// Memasuk-kan skrip Login 
 
if(isset($_SESSION['login_user'])){
header("location: home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="login-page">
  <div class="form">
    <form class="login-form" action="login_proses.php" method="post">
      <input type="text" name="username" maxlength="15" size="25" placeholder="username"/>
      <input type="password" name="password" maxlength="15" size="25" placeholder="*******"/>
      <input type="submit" id="submit" name="submit" value="Masuk" style="background:#009933;">
    </form>
  </div>
</div>
</body>
</html>