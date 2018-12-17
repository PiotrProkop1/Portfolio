<?php

if($_REQUEST["METHOD"] != "POST") {
    http_response_code(400);
    header("Location: ../index.php");
    exit();
}

if(!isset($_POST["email"]) || !isset($_POST["password"])) {
    http_response_code(400);
    header("Location: ../index.php");
    exit();
}

require_once("database.php");

$row = $pdo->prepare("SELECT * FROM users WHERE email = ?")->execute(["email" => $_POST["email"]]);

if($row->rowCount() === 0) {
    http_response_code(401);
    $_SESSION["error"] = "Bad email or password!";
    header("Location: ../index.php");
    exit();
}

$user = $row->fetch(PDO::FETCH_OBJ);

if(!password_verify($_POST["password"], $user->password)) {
    http_response_code(401);
    $_SESSION["error"] = "Bad email or password!";
    header("Location: ../index.php");
    exit();
}

$_SESSION["user-id"] = $user->_id;
http_response_code(200);
header("Location: ../dashboard.php");
exit();
