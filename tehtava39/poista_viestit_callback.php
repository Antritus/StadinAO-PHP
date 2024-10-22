<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css" />
    <style>
        body{
            background-color: #8096c8;
        }
        .viesti {
            margin: auto;
            background-color: lightgrey;
            width: 40%;
            border: 1px solid green;
            padding: 50px;
        }
        .teksti{
            text-align: center;
        }
        .paluu{
            background-color: #436d7e;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            padding: 7px;
        }
    </style>
</head>
<body>
<script src="./js/automaatio.js"></script>
<?php
file_put_contents("./viestit.txt", "");
?>
<div class="viesti teksti">
    <style>
        * {
            text-decoration: none;
        }
    </style>
    <p><a href="../page6.php#tehtava-39">Siirretään sivulle...</a></p>
    <script>openWebsite("../page6.php#tehtava-39", 500)</script>
</div>
</body>
</html>