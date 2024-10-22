<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans+Condensed:wght@200..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../main.css" />
    <link rel="stylesheet" href="../index.css" />
    <link rel="stylesheet" href="../button.css" />
    <link rel="stylesheet" href="tehtava39.css" />
    <title>Main</title>
</head>

<body>
    <div class="header">
        <h1>viestit</h1>
    </div>

    <div class="row">
        <div class="col-3 col-s-3 menu">
            <ul>
                <a href="../index.php">
                    <li>1 - 6</li>
                </a>
                <a href="../page1.php">
                    <li>7 - 12</li>
                </a>
                <a href="../page2.php">
                    <li>13 - 18</li>
                </a>
                <a href="../page3.php">
                    <li>19 - 24</li>
                </a>
                <a href="../page4.php">
                    <li>25 - 30</li>
                </a>
                <a href="../page5.php">
                    <li>31 - 36</li>
                </a>
                <a href="../page6.php">
                    <li>37 - 42</li>
                </a>
                <a class="koodifixaus" href="../koodifixaus.php">
                    <li>HTML KOODI -> KOODI HTML BLOCK</li>
                </a>
                <a class="koodifixaus" href="koodifixaus2.php">
                    <li>HTML KOODI -> PHP ECHO</li>
                </a>
            </ul>
        </div>
        <div class="col-9 col-s-9">
        <div class="xfile">
					<h1>EMAIL | NIMI</h1>
                <div id="tehtava-39" class="tehtava-39 tausta1">
            <form>
        <?php

        $file = fopen("viestit.txt", "r") or die("Ei viestejä!");
			while(!feof($file)) {
				$val = fgets($file);
				if (strpos($val, '|') !== false) {
//					$split = explode($val, ' | ');
//					echo "<h1><span class=\"email\">".$split[0]."</span> | <span class=\"name\">".$split[1]."</span></h1>";
					echo "<h1>".$val."</h1>";
				} else {
					echo "<p>".$val."</p>";
			}
			}
        fclose($file);
        ?>
   </form>
  </div>
        </div>
	  <a href="../page6.php#tehtava-39"><div class="button-small">PALAA TEHTAVA-39</div></a>
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