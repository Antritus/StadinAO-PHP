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
    <title>Main</title>
</head>

<body>
    <div class="header">
        <h1>PHP 13-18</h1>
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
        <!----------------------------------------------- TEHTÄVÄ 19 ALKU ---------------------------------------------------------------->
        <div class="col-9 col-s-9">
            <h3> Tehtävä 19 </h3>
            <p> Tulostaa muuttujien tulot, jos LUKU_2 on tai suurempi kuin 14 </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-19">
&LT?php
                                        $LUKU_1 = 12;
                                        $LUKU_2 = 14;
                                        $LUKU_3 = 16;
                    
                                        if ($LUKU_2 >= 14) {
                                          echo "LUKU_1 * LUKU_2" . ($LUKU_1*$LUKU_2)."&LTbr>";
                                          echo "LUKU_2 * LUKU_3" . ($LUKU_2*$LUKU_3)."&LTbr>";
                                          echo "LUKU_1 * LUKU_3" . ($LUKU_1*$LUKU_3)."&LTbr>";
                                        }
?>
&LT/div> 
</pre>
            </div>
            <div class="tehtava-19">
                <?php
                                        $LUKU_1 = 12;
                                        $LUKU_2 = 14;
                                        $LUKU_3 = 16;
                    
                                        if ($LUKU_2 >= 14) {
                                          echo "LUKU_1 * LUKU_2 = " . ($LUKU_1*$LUKU_2)."<br>";
                                          echo "LUKU_2 * LUKU_3 = " . ($LUKU_2*$LUKU_3)."<br>";
                                          echo "LUKU_1 * LUKU_3 = " . ($LUKU_1*$LUKU_3)."<br>";
                                        }
                        ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 19 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 20 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9">
            <h3> Tehtävä 20 </h3>
            <p> Käyttää switch-lausetta ja tarkistaa tuloksen ja laittaa tuloksen avulla infoa </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-20">
&LT?php>
$tulos = 456;
                    switch ($tulos){
                      case 123:
                          echo "Tulos on 123";
                          break;
                      case 234:
                          echo "Tulos on 234";
                          break;
                      case 456:
                          echo "Tulos on 456";
                          break;
                      case 567:
                          echo "Tulos on 567";
                          break;
                      default:
                          echo "Tuntematon tulos: " . $tulos;
                          break;
                    }
?>
&LT/div>
</pre>
            </div>
            <div class="tehtava-20">
                <?php
                    $tulos = 456;
                    switch ($tulos){
                      case 123:
                          echo "Tulos on 123";
                          break;
                      case 234:
                          echo "Tulos on 234";
                          break;
                      case 456:
                          echo "Tulos on 456";
                          break;
                      case 567:
                          echo "Tulos on 567";
                          break;
                      default:
                          echo "Tuntematon tulos: " . $tulos;
                          break;
                    }
                        ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 20 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 21 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">
            <h3> Tehtävä 21 </h3>
            <p> Näyttää 1-10 numerot käyttämällä for lausetta </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-21">
&LT?php
for ($i = 1; $i &LT 11; $i++){
                        echo "&LTp>".$i."&LT/p>";
                    }
?>
&LT/div>
</pre>
            </div>
            <div class="tehtava-21">
                <?php
                    for ($i = 1; $i < 11; $i++) {
                      echo "<p>".$i."</p>";
                    }
                        ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 21 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 22 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">
            <h3> Tehtävä 22 </h3>
            <p> Näyttää luvut 0-500 joka 50 numeroa </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-22">
&LT?php
for ($i = 0; $i &LT 501; $i+=50){
                      echo "&LTp>".$i."&LT/p>";
                    }
?>
&LT/div>
</pre>
            </div>
            <div class="tehtava-22">
                <?php
                    for ($i = 0; $i < 501; $i+=50){
                      echo "<p>".$i."</p>";
                    }
                    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 22 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 23 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">
            <h3> Tehtävä 23 </h3>
            <p> Lähettää aakkoset käyttämällä taulokkoa ja for lausetta </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-23">
&LT?php
$aakkoset = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "å", "ä", "ö");
                    for ($i = 0; $i &LT sizeof($aakkoset); $i++){
                        // PHP ei tunnista åäö kun laittaa suureksi kirjaimeksi?
                        echo "&LTspan>".strtoupper($aakkoset[$i])."&LT/span>";
                    }
?>
&LT/div>
</pre>
            </div>
            <div class="tehtava-23">
                <?php
                    $aakkoset = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "å", "ä", "ö");
                    for ($i = 0; $i < sizeof($aakkoset); $i++){
                        // PHP ei tunnista åäö kun laittaa suureksi kirjaimeksi?
                        echo "<span>".strtoupper($aakkoset[$i])."</span>";
                    }
                        ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 23 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 24 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">
            <h3> Tehtävä 24 </h3>
            <p> Printtaa suomenkielen aakkoset 5 kirjainta riville ja käyttää for lausetta </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-24">
&LT?php
                    $aakkoset = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "å", "ä", "ö");
                    $i2 = 1;
                    for ($i = 0; $i &LT sizeof($aakkoset); $i++){
                        // PHP ei tunnista åäö kun laittaa suureksi kirjaimeksi?
                        echo "&LTspan>".strtoupper($aakkoset[$i])."&LT/span>";

                        if ($i2 == 5){
                          echo "&LTbr>";
                          $i2 = 0;
                        }
                        $i2++;
                    }
?>
&LT/div>
</pre>
            </div>
            <div class="tehtava-24">
                <?php
                    $aakkoset = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "å", "ä", "ö");
                    $i2 = 1;
                    for ($i = 0; $i < sizeof($aakkoset); $i++){
                        // PHP ei tunnista åäö kun laittaa suureksi kirjaimeksi?
                        echo "<span>".strtoupper($aakkoset[$i])." </span>";

                        if ($i2 == 5){
                            echo "<br>";
                            $i2 = 0;
                        }
                        $i2++;
                    }
                        ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 24 LOPPU---------------------------------------------------------------->
    </div>
    <div class="footer">
        <p>
            This collection of beautiful and breathtaking photos is free for
            personal and commercial use.
        </p>
    </div>
</body>

</html>