<?php namespace login;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/default.css">
  </head>
  <body>
      <div>Hi <?php echo htmlspecialchars($_POST['username']); ?>.</div>
  </body>
</html>