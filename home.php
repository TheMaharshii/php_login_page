<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Welcome home, <?php echo htmlspecialchars($_GET['username']); ?></h1>
    <a href="index.php" class="login-link">Logout</a>
  </body>
</html>
