<?php
    require_once("scripts/database.php");

    $skills = $pdo->query("SELECT * FROM skills", PDO::FETCH_OBJ);
?>

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
    <header id="header">
        <img src="static/header-bg.jpg" alt="header background." class="header-img">
        <div class="header-bg-div"></div>
        <span class="header-info">Piotr Prokop Portfolio</span>
        <button type="button" class="header-btn" id="header-btn">Continue...</button>
    </header>

    <main>
        <div class="about">
            <img src="static/my-img.jpg" alt="My Img." class="about-img">

            <h3>About me:</h3>
            <p class="about-text">
               Hi, my name is Piotr and i'm looking for programming job.
               I don't have any commercial experience yet, but i have some decent programming skill
               and i always want to improve.
             </p>

             <p class="about-text">
               I'm intersted in working on Javascript and some php, but other web technologies like
               React or Node are also fine.
             </p>
        </div>

        <div class="skills">
            <ul>
                <?php if($skills->rowCount() > 0) : ?>
                    <?php foreach($skills as $skill) : ?>
                    <li><?php echo $skill->text; ?></li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li>No skills current added!</li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="contact">

        </div>
    </main>

    <footer>
        Piotr Prokop Portfolio <?php echo date('Y') ?>
        <h3>Login to admin page</h3>
        <form action="scripts/login.php" method="POST" class="login-form">
            <input type="text" placeholder="Admin email..." name="email">
            <input type="password" placeholder="Password..." name="password">
            <button type="submit">Login!</button>
        </form>
    </footer>

    <script src="static/header-collapse.js"></script>
</body>
</html>
