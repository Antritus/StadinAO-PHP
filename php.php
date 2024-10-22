<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans+Condensed:wght@200..900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="button.css" />
    <link rel="stylesheet" href="page6.css" />
    <link rel="stylesheet" href="./tehtava39/tehtava39.css" />
    <title>Main</title>
</head>

<body>
<div class="header">
    <h1>PHP 37-42 </h1>
</div>

<div class="row">
    <?php
    echo file_get_contents("./menu.html");
    ?>
    <div class="col-9 col-s-9">
        <?php phpinfo() ?>
        <?php phpcredits() ?>
    </div>
</div>
<div class="footer">
    <p>
        This collection of beautiful and breathtaking photos is free for
        personal and commercial use.
    </p>
</div>
</body>

</html>