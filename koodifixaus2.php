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
    <link rel="stylesheet" href="koodifixaus.css" />
    <title>Main</title>
</head>

<body>
    <div class="header">
        <h1>Random Sivusto</h1>
    </div>

    <div class="row">
        <div class="col-3 col-s-3 menu">
            <ul>
                <a href="index.php">
                    <li>1 - 6</li>
                </a>
                <a href="page1.php">
                    <li>7 - 12</li>
                </a>
                <a href="page2.php">
                    <li>13 - 18</li>
                </a>
                <a href="page3.php">
                    <li>19 - 24</li>
                </a>
                <a href="page4.php">
                    <li>25 - 30</li>
                </a>
                <a href="page5.php">
                    <li>31 - 36</li>
                </a>
                <a href="page6.php">
                    <li>37 - 42</li>
                </a>
                <a class="koodifixaus" href="koodifixaus.php">
                    <li>HTML KOODI -> KOODI HTML BLOCK</li>
                </a>
                <a class="koodifixaus" href="koodifixaus2.php">
                    <li>HTML KOODI -> PHP ECHO</li>
                </a>
            </ul>
        </div>
        <div class="col-9 col-s-9">
            <textarea id="input">        &LTdiv class="col-3 col-s-3 menu">
            &LTul>
                &LTa href="index.php">
                    &LTli>1 - 6&LT/li>
                &LT/a>
                &LTa href="page1.php">
                    &LTli>7 - 12&LT/li>
                &LT/a>
                &LTa href="page2.php">
                    &LTli>13 - 18&LT/li>
                &LT/a>
                &LTa href="page3.php">
                    &LTli>19 - 24&LT/li>
                &LT/a>
                &LTa href="page4.php">
                    &LTli>25 - 30&LT/li>
                &LT/a>
                &LTa href="page5.php">
                    &LTli>31 - 36&LT/li>
                &LT/a>
                &LTa href="page6.php">
                    &LTli>37 - 42&LT/li>
                &LT/a>
                &LTa class="koodifixaus" href="koodifixaus.php">
                    &LTli>HTML KOODI -> KOODI HTML BLOCK&LT/li>
                &LT/a>
                &LTa class="koodifixaus" href="koodifixaus2.php">
                    &LTli>HTML KOODI -> PHP ECHO&LT/li>
                &LT/a>
            &LT/ul>
        &LT/div></textarea>
            <button onclick="convert();">Convert Convert Convert Convert Convert Convert Convert Convert Convert Convert
                Convert Convert Convert Convert Convert Convert Convert Convert Convert Convert Convert Convert Convert
                Convert Convert Convert Convert</button>
            <textarea id="convert"></textarea>
            <script>
            function convert() {
                let input = document.getElementById("input").value;
                input = input.replaceAll("\"", "\\\"");
                document.getElementById("convert").value = input;
            }

            convert();
            </script>
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