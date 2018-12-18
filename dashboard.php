<?php

if(!isset($_SESSION["user-id"])) {
  http_response_code(400);
  header("Location: index.php");
  exit();
}

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piotr Prokop portfolio page.</title>
    <link href="static/style.css" rel="stylesheet">
  </head>
  <body>
    <main>
      
    </main>
  </body>
</html>
