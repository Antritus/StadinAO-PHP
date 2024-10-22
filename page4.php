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
    <link rel="stylesheet" href="page1.css" />
    <title>Main</title>
</head>

<body>
    <div class="header">
        <h1>PHP 19-24</h1>
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
        <!----------------------------------------------- TEHTÄVÄ 25 ALKU ---------------------------------------------------------------->
        <div class="col-9 col-s-9">

            <h3> Tehtävä 25 </h3>
            <p> Tekee taulukon henkilöille ja koe arvosanoille ja laskee arvot yhteen for lauseella </p>
            <div class="koodaus">
                <pre>
   &LTdiv class="tehtava-25">
    &LT?php
    $arvio = array(array("Ykkönen Alli", 30, 40, 50, 60), array("Kakkonen Bertta", 40, 50, 60, 70), array("Kolmonen Carita", 50, 60, 70, 80));

    echo "&LTtable> &LTtbody>&LTtr>&LTtd>Nimi&LT/td>&LTtd>Koe 1&LT/td>&LTtd>Koe 2&LT/td>&LTtd>Koe 3&LT/td>&LTtd>Koe 4&LT/td>&LTtd>Yht.&LT/td>&LTtd>Arvosana&LT/td>&LT/tr>";

    for ($i = 0; $i &LT sizeof($arvio); $i++){
        echo "&LTtr>";
        $total = 0;
        for ($j = 0; $j &LT sizeof($arvio[$i]); $j++){
            echo "&LTtd>".$arvio[$i][$j]."&LT/td>";
            if ($j >= 1) {
                $total += $arvio[$i][$j];
            }
        }
        echo "&LTtd>".$total."&LT/td>";
        echo "&LTtd>0&LT/td>";
    
        echo "&LT/tr>";
    }
    echo "&LT/tbody>&LT/table>";
    ?>
   &LT/div> 
</pre>
            </div>

            <div class="tehtava-25 CSSTableGenerator">
                <?php
    $arvio = array(array("Ykkönen Alli", 30, 40, 50, 60), array("Kakkonen Bertta", 40, 50, 60, 70), array("Kolmonen Carita", 50, 60, 70, 80));

    echo "<table> <tbody><tr><td>Nimi</td><td>Koe 1</td><td>Koe 2</td><td>Koe 3</td><td>Koe 4</td><td>Yht.</td><td>Arvosana</td></tr>";

    for ($i = 0; $i < sizeof($arvio); $i++){
        echo "<tr>";
        $total = 0;
        for ($j = 0; $j < sizeof($arvio[$i]); $j++){
            echo "<td>".$arvio[$i][$j]."</td>";
            if ($j >= 1) {
                $total += $arvio[$i][$j];
            }
        }
        echo "<td>".$total."</td>";
        echo "<td>0</td>";
    
        echo "</tr>";
    }
    echo "</tbody></table>";
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 25 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 26 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 26 </h3>
            <p> Käyttää while lauseketta ja laskee numerot kymmeneen </p>
            <div class="koodaus">
                <pre>
   &LTdiv class="tehtava-26">
    &LT?php
    $numero = 0;
    while($numero <= 10) {
       echo "Numero on: $numero &LTbr>";
        $numero++;
    }
    ?>
    &LT/div>
</pre>
            </div>

            <div class="tehtava-26">
                <?php
    $numero = 0;
    while($numero <= 10) {
       echo "Numero on: $numero <br>";
        $numero++;
    }
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 26 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 27 ALKU ---------------------------------------------------------------->

        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9">

            <h3> Tehtävä 26 </h3>
            <p> Käyttää while lausetta ja printtaa taulukon arvoja </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-26">
	&LT?php>
    $nimet = array(
    "A" => "Anthony", 
    "B" => "Bertha", 
    "C" => "Cecilia", 
    "D" => "David", 
    "E" => "Edward", 
    "F" => "Felicia"
);

$nimi = "F";
$solu = "A";

do {
    echo $nimet[$solu] . "&LTbr>";
    $solu++;
} while ($solu &LT= $nimi);
    ?>
    ?>
&LT/div>
</pre>
            </div>

            <div class="tehtava-26">
                <?php
$nimet = array(
    "A" => "Anthony", 
    "B" => "Bertha", 
    "C" => "Cecilia", 
    "D" => "David", 
    "E" => "Edward", 
    "F" => "Felicia"
);

$nimi = "F";
$solu = "A";

while ($solu <= $nimi) {
    echo $nimet[$solu] . "<br>";
    $solu++;
}
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 27 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 28 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 28 </h3>
            <p> Tulostaa "tämä näkyy" jos numero on < 4 && > 7. </p>
            <div class="koodaus">
                <pre>
   &LTdiv class="tehtava-28">
    &LT?php

     for ($numero = 0; $numero <= 10; $numero++) {
        echo "Näytetään numero $numero. &LTbr>";
        if ($numero &LT 5 || $numero > 7) {
            echo "Tämä näkyy &LTbr>";
            continue;
        }
      }
    ?>
    &LT/div>
</pre>
            </div>

            <div class="tehtava-">
                <?php
     for ($numero = 0; $numero <= 10; $numero++) {
        echo "Näytetään numero $numero. <br>";
        if ($numero < 5 || $numero > 7) {
            echo "Tämä näkyy <br>";
            continue;
        }
      }
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 28 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 29 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 29 </h3>
            <p> Käyttää functiota ja laskee rinnan kytkennän avulla R1, R2, R3 = 100ohm </p>
            <div class="koodaus">
                <pre>
   &LTdiv class="tehtava-29">
    &LT?php
    function rinnankytkentä() {
        echo pow(pow(100, -1) + pow(100, -1) + pow(100, -1), -1);
    }
    rinnankytkentä();
    ?>
    &LT/div>
</pre>
            </div>

            <div class="tehtava-29">
                <?php
    function rinnankytkentä() {
        echo pow(pow(100, -1) + pow(100, -1) + pow(100, -1), -1);
    }
    rinnankytkentä();
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 29 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 30 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 30 </h3>
            <p> Funktio laskee ympyrän pinta-alan ja kehän pituuden ja tulostaa arvot </p>
            <div class="koodaus">
                <pre>
   &LTdiv class="tehtava-30">
    &LT?php
    function ympyrä($sade) {
        $keha = 2*pi()*$sade;
        $pintaala = pi()*pow($sade, 2);

        echo "Säde: $sade&LTbr>";
        echo "Kehä: $keha&LTbr>";
        echo "Pinta-Ala: $pintaala&LTbr>";
        echo "&LTbr>";
    }

    ympyrä(10);
    ympyrä(32);
    ympyrä(1.2);
    ympyrä(23);
    ?>
    &LT/div>
</pre>
            </div>

            <div class="tehtava-30">
                <?php
    function ympyrä($sade) {
        $keha = 2*pi()*$sade;
        $pintaala = pi()*pow($sade, 2);

        echo "Säde: $sade<br>";
        echo "Kehä: $keha<br>";
        echo "Pinta-Ala: $pintaala<br>";
        echo "<br>";
    }

    ympyrä(10);
    ympyrä(32);
    ympyrä(1.2);
    ympyrä(23);
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ  LOPPU---------------------------------------------------------------->
    </div>
    <div class="footer">
        <p>
            This collection of beautiful and breathtaking photos is free for
            personal and commercial use.
        </p>
    </div>
</body>

</html>