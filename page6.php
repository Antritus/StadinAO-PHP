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
        <h1>PHP 37- 40 </h1>
    </div>

    <div class="row">
        <?php
        echo file_get_contents("./menu.html");
        ?>
        <!----------------------------------------------- TEHTÄVÄ 37 ALKU ---------------------------------------------------------------->
        <div class="col-9 col-s-9">

            <h3> Tehtävä 37 </h3>
            <p> </p>
            <div class="koodaus">
                <pre>
.tehtava-37 input[type=number], .tehtava-37 select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.tehtava-37 input[type=submit] {
  width: 100%;
  background-color: #638d9d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.tehtava-37 input[type=submit]:hover {
  background-color: #6fa6bc;
}

.tehtava-37 {
	width: 25%;
	border-radius: 7px;
  border-radius: 5px;
  border: 2px solid #436d7e;
  background-color: #f2f2f2;
  padding: 20px;
}

.tehtava-37 #Rkok {
	color: darkblue;
	font-weight: bold;
}
z
.tehtava-37 input:focus::placeholder {  color: transparent; }
.tehtava-37 input:focus::-webkit-input-placeholder { color:transparent; }
.tehtava-37 input:focus:-moz-placeholder { color:transparent; } /* FF 4-18 */
.tehtava-37 input:focus::-moz-placeholder { color:transparent; } /* FF 19+ */
.tehtava-37 input:focus:-ms-input-placeholder { color:transparent; } /* IE 10+ */

.tehtava-37 input::-webkit-outer-spin-button,
.tehtava-37 input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.tehtava-37 input[type=number] {  -moz-appearance: textfield;}
</pre></div>
            <div class="koodaus">
                <pre>

           &LTdiv class="tehtava-37">
            &LT?php

$R1 = $R2 = $R3 = $Rkok = "";
$valinta = "rinnan";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $R1 = test_input($_POST["R1"]);
  $R2 = test_input($_POST["R2"]);
  $R3 = test_input($_POST["R3"]);
  $Rkok = test_input($_POST["lasku-tapa"]);
  $valinta = test_input($_POST["lasku-tapa"]);
  if (strtolower($valinta) == "rinnan") {
    $Rkok = pow(pow($R1, -1) + pow($R2, -1) + pow($R3, -1), -1);
  } else {
    $Rkok = $R1 + $R2 + $R3;
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
                    &LTh3 id="tehtava-37">Vastus Laskuri&LT/h3>
                    &LTform method="post" action="&LT?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>#tehtava-37">
                        &LTlabel for="R1">R1&LT/label>
                        &LT?php echo "&LTinput class=\"number\" type=\"number\" name=\"R1\" placeholder=\"R1 arvo\" min=\"0\" value=\"$R1\">"?>
                        &LTlabel for="R2">R2&LT/label>
                        &LT?php echo "&LTinput class=\"number\" type=\"number\" name=\"R2\" placeholder=\"R2 arvo\" min=\"0\" value=\"$R2\">"?>

                        &LTlabel for="R3">R3&LT/label>
                        &LT?php echo "&LTinput class=\"number\" type=\"number\" name=\"R3\" placeholder=\"R3 arvo\" min=\"0\" value=\"$R3\">"?>
                        &LTlabel for="valittu"> Lasku kaava&LT/label>
								&LTbr>
                        &LTselect id="lasku-tapa" name="lasku-tapa">
                        &LT?php 
                          if (strtolower($valinta) == "rinnan") {
                            echo "&LToption value=\"rinnan\" selected>Rinnan laskenta&LT/option>";
                            echo "&LToption value=\"sarjaan\">Sarjaan laskenta&LT/option>";
                          } else {
                            echo "&LToption value=\"rinnan\">Rinnan laskenta&LT/option>";
                            echo "&LToption value=\"sarjaan\" selected>Sarjaan laskenta&LT/option>";
                          }
                        ?>
                        &LT/select>
                        &LTbr>&LTbr>
                        &LTinput class="button-small" type="submit" name="submit" value="Laske">

                        &LT?php

  if (strtolower($valinta) == "rinnan") {
    echo "&LTh3>3 vastusta rinnassa&LT/h3>";
  } else {
    echo "&LTh3>3 vastusta sarjassa&LT/h3>";
  }
  $R1_2 = $R1 == "" ? 0 : $R1;
  echo "R1 = $R1_2 Ω&LTbr>";
  $R2_2 = $R2 == "" ? 0 : $R2;
  echo "R2 = $R2_2 Ω&LTbr>";
  $R3_2 = $R3 == "" ? 0 : $R3;
  echo "R3 = $R3_2 Ω&LTbr>";
  echo "&LTbr>";
  $Rkok2 = $Rkok == "" ? 0 : $Rkok;
  echo "&LTh3>Rkok = &LTspan id=\"Rkok\">$Rkok2&LT/span> Ω&LT/h3>";
?>
                    &LT/form>

            &LT/div>
</pre>
            </div>

            <a href="tiedot2.php"><button class="button-large">tiedot2.php</button></a>
            <br>
            <div class="tehtava-37">
                        <?php

$R1 = $R2 = $R3 = $Rkok = "";
$valinta = "rinnan";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $R1 = test_input($_POST["R1"]);
  $R2 = test_input($_POST["R2"]);
  $R3 = test_input($_POST["R3"]);
  $Rkok = test_input($_POST["lasku-tapa"]);
  $valinta = test_input($_POST["lasku-tapa"]);
  if (strtolower($valinta) == "rinnan") {
    $Rkok = pow(pow($R1, -1) + pow($R2, -1) + pow($R3, -1), -1);
  } else {
    $Rkok = $R1 + $R2 + $R3;
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
                    <h3 id="tehtava-37">Vastus Laskuri</h3>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#tehtava-37">
                        <label for="R1">R1</label>
                        <?php echo "<input class=\"number\" type=\"number\" name=\"R1\" placeholder=\"R1 arvo\" min=\"0\" value=\"$R1\">"?>
                        <label for="R2">R2</label>
                        <?php echo "<input class=\"number\" type=\"number\" name=\"R2\" placeholder=\"R2 arvo\" min=\"0\" value=\"$R2\">"?>

                        <label for="R3">R3</label>
                        <?php echo "<input class=\"number\" type=\"number\" name=\"R3\" placeholder=\"R3 arvo\" min=\"0\" value=\"$R3\">"?>
                        <label for="valittu"> Lasku kaava</label>
								<br>
                        <select id="lasku-tapa" name="lasku-tapa">
                        <?php 
                          if (strtolower($valinta) == "rinnan") {
                            echo "<option value=\"rinnan\" selected>Rinnan laskenta</option>";
                            echo "<option value=\"sarjaan\">Sarjaan laskenta</option>";
                          } else {
                            echo "<option value=\"rinnan\">Rinnan laskenta</option>";
                            echo "<option value=\"sarjaan\" selected>Sarjaan laskenta</option>";
                          }
                        ?>
                        </select>
                        <br><br>
                        <input class="button-small" type="submit" name="submit" value="Laske">

                        <?php

  if (strtolower($valinta) == "rinnan") {
    echo "<h3>3 vastusta rinnassa</h3>";
  } else {
    echo "<h3>3 vastusta sarjassa</h3>";
  }
  $R1_2 = $R1 == "" ? 0 : $R1;
  echo "R1 = $R1_2 Ω<br>";
  $R2_2 = $R2 == "" ? 0 : $R2;
  echo "R2 = $R2_2 Ω<br>";
  $R3_2 = $R3 == "" ? 0 : $R3;
  echo "R3 = $R3_2 Ω<br>";
  echo "<br>";
  $Rkok2 = $Rkok == "" ? 0 : $Rkok;
  echo "<h3>Rkok = <span id=\"Rkok\">$Rkok2</span> Ω</h3>";
?>
                    </form>

            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 37 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 38 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9">

            <h3> Tehtävä 38 </h3>
            <p> </p>
            <div class="koodaus">
                <pre>
            &LTdiv class="tehtava-38 tehtava-37">
            &LT?php

$R1 = $R2 = $R3 = "";
$valinta = "rinnan";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $R1 = test_input($_POST["R1"]);
  $R2 = test_input($_POST["R2"]);
  $R3 = test_input($_POST["R3"]);
  $Rkok = test_input($_POST["lasku-tapa"]);
  $valinta = test_input($_POST["lasku-tapa"]);
}

function muutLuvut() {
  $R1_2 = $R1 == "" ? 0 : $R1;
  echo "R1 = $R1_2 Ω&LTbr>";
  $R2_2 = $R2 == "" ? 0 : $R2;
  echo "R2 = $R2_2 Ω&LTbr>";
  $R3_2 = $R3 == "" ? 0 : $R3;
  echo "R3 = $R3_2 Ω&LTbr>";
  echo "&LTbr>"; 
}
function sarjan() {
  echo "&LTh3>Sarjan-laskun tulos&LT/h3>";
  muutLuvut();
  $Rkok = $R1 + $R2 + $R3;
  $Rkok2 = $Rkok == "" ? 0 : $Rkok;
  echo "&LTh3>Rkok = &LTspan id=\"Rkok\">$Rkok2&LT/span> Ω&LT/h3>";
}

function rinnan() {
  echo "&LTh3>Rinnan-laskun tulos&LT/h3>";
  muutLuvut();
  $Rkok = pow(pow($R1, -1) + pow($R2, -1) + pow($R3, -1), -1);
  $Rkok2 = $Rkok == "" ? 0 : $Rkok;
  echo "&LTh3>Rkok = &LTspan id=\"Rkok\">$Rkok2&LT/span> Ω&LT/h3>";

}
?>
                    &LT id="tehtava-38" h3>Vastus Laskuri&LT/h3>
                    &LTform method="post" action="&LT?php echo htmlspecialchars($_SERVER["PHP_SELF"])#tehtava-38?>">
                        &LTlabel for="R1">R1&LT/label>
                        &LT?php echo "&LTinput class=\"number\" type=\"number\" name=\"R1\" placeholder=\"R1 arvo\" min=\"0\" value=\"$R1\">"?>
                        &LTlabel for="R2">R2&LT/label>
                        &LT?php echo "&LTinput class=\"number\" type=\"number\" name=\"R2\" placeholder=\"R2 arvo\" min=\"0\" value=\"$R2\">"?>

                        &LTlabel for="R3">R3&LT/label>
                        &LT?php echo "&LTinput class=\"number\" type=\"number\" name=\"R3\" placeholder=\"R3 arvo\" min=\"0\" value=\"$R3\">"?>
                        &LTlabel for="valittu"> Lasku kaava&LT/label>
								&LTbr>
                        &LTselect id="lasku-tapa" name="lasku-tapa">
                        &LT?php 
                          if (strtolower($valinta) == "rinnan") {
                            echo "&LToption value=\"rinnan\" selected>Rinnan laskenta&LT/option>";
                            echo "&LToption value=\"sarjaan\">Sarjaan laskenta&LT/option>";
                          } else {
                            echo "&LToption value=\"rinnan\">Rinnan laskenta&LT/option>";
                            echo "&LToption value=\"sarjaan\" selected>Sarjaan laskenta&LT/option>";
                          }
                        ?>
                        &LT/select>
                        &LTbr>&LTbr>
                        &LTinput class="button-small" type="submit" name="submit" value="Laske">

                        &LT?php
  if (strtolower($valinta) == "rinnan") {
    rinnan();
  } else {
    sarjan();
  }
  
?>
                    &LT/form>

            &LT/div>
</pre>
            </div>

            <div class="tehtava-38 tehtava-37">
            <?php

$R1 = $R2 = $R3 = "";
$valinta = "rinnan";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $R1 = test_input($_POST["R1"]);
  $R2 = test_input($_POST["R2"]);
  $R3 = test_input($_POST["R3"]);
  $Rkok = test_input($_POST["lasku-tapa"]);
  $valinta = test_input($_POST["lasku-tapa"]);
}

function muutLuvut() {
  $R1_2 = $R1 == "" ? 0 : $R1;
  echo "R1 = $R1_2 Ω<br>";
  $R2_2 = $R2 == "" ? 0 : $R2;
  echo "R2 = $R2_2 Ω<br>";
  $R3_2 = $R3 == "" ? 0 : $R3;
  echo "R3 = $R3_2 Ω<br>";
  echo "<br>"; 
}
function sarjan() {
  echo "<h3>Sarjan-laskun tulos</h3>";
  muutLuvut();
  $Rkok = $R1 + $R2 + $R3;
  $Rkok2 = $Rkok == "" ? 0 : $Rkok;
  echo "<h3>Rkok = <span id=\"Rkok\">$Rkok2</span> Ω</h3>";
}

function rinnan() {
  echo "<h3>Rinnan-laskun tulos</h3>";
  muutLuvut();
  $Rkok = pow(pow($R1, -1) + pow($R2, -1) + pow($R3, -1), -1);
  $Rkok2 = $Rkok == "" ? 0 : $Rkok;
  echo "<h3>Rkok = <span id=\"Rkok\">$Rkok2</span> Ω</h3>";

}
?>
                    <h3 id="tehtava-38">Vastus Laskuri</h3>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>#tehtava-38">
                        <label for="R1">R1</label>
                        <?php echo "<input class=\"number\" type=\"number\" name=\"R1\" placeholder=\"R1 arvo\" min=\"0\" value=\"$R1\">"?>
                        <label for="R2">R2</label>
                        <?php echo "<input class=\"number\" type=\"number\" name=\"R2\" placeholder=\"R2 arvo\" min=\"0\" value=\"$R2\">"?>

                        <label for="R3">R3</label>
                        <?php echo "<input class=\"number\" type=\"number\" name=\"R3\" placeholder=\"R3 arvo\" min=\"0\" value=\"$R3\">"?>
                        <label for="valittu"> Lasku kaava</label>
								<br>
                        <select id="lasku-tapa" name="lasku-tapa">
                        <?php 
                          if (strtolower($valinta) == "rinnan") {
                            echo "<option value=\"rinnan\" selected>Rinnan laskenta</option>";
                            echo "<option value=\"sarjaan\">Sarjaan laskenta</option>";
                          } else {
                            echo "<option value=\"rinnan\">Rinnan laskenta</option>";
                            echo "<option value=\"sarjaan\" selected>Sarjaan laskenta</option>";
                          }
                        ?>
                        </select>
                        <br><br>
                        <input class="button-small" type="submit" name="submit" value="Laske">

                        <?php
  if (strtolower($valinta) == "rinnan") {
    rinnan();
  } else {
    sarjan();
  }
  
?>
                    </form>

            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 38 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 39 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 39 </h3>
            <p> Lähettää viestin viesti_1k.php sivustolle alemmalla taulukolla. Viestejä voi katsoa painamalla KATSO KAIKKI VIESTIT painiketta ja viestit voidaan poistaa painamalla POISTA VIESTIT nappia</p>
            <div id="tehtava-39" class="tehtava-39 tausta1">
                <div class="tausta1">
                    <form method="post" action="./tehtava39/viesti_1k.php">
                        <div class="form-group">
                            <label for="name">Nimi:</label>
                            <input class="lomake1" type="text" id="name" name="name" placeholder="Anna nimesi..." required>
                        </div>

                        <div class="form-group">
                            <label for="email">Sähköposti:</label>
                            <input class="lomake1" type="email" id="email" name="email" placeholder="example@example.com" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Viesti:</label>
                            <textarea class="lomake1" id="message" name="message" placeholder="Viesti..." required></textarea>
                        </div>

                        <div class="form-group">
                            <input class="lomake1" type="submit" value="Lähetä viesti">
                        </div>
                    </form>
                </div>

                <br><br><br>

                <h1>POISTA KAIKKI VIESTIT</h1>
                <a href="./tehtava39/poista_viestit.php">
                    <button class="button-small">Poista viestit</button>
                </a>

                <h1>KATSO KAIKKI VIESTIT</h1>
                <a href="./tehtava39/xfile.php">
                    <button class="button-small">Katso kaikki viestit</button>
                </a>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 39 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 40 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"></div>
        <div class="col-9 col-s-9">
            <h1>Tehtävä 40</h1>
            <p>Lukee sivuston menun menu.html tiedostosta ja näyttää menun sivustolla</p>
            <h3>menu.html</h3>
            <div class="koodaus">
<pre>
&LTdiv class="col-3 col-s-3 menu">
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
        &LTa class="koodifixaus" href="php.php">
            &LTli>PHP INFO&LT/li>
        &LT/a>
    &LT/ul>
&LT/div>
</pre>
            </div>
            <h3>page6.php</h3>
            <div class="koodaus">
                <pre>
    &LT?php
    echo file_get_contents("./menu.html");
    ?>
                </pre>
            </div>
            <?php
            echo file_get_contents("./menu.html");
            ?>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 40 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 41 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"></div>
        <div class="col-9 col-s-9">
            <h1>Tehtävä 41</h1>
            <p>Tehtävää ei ole olemassa</p>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 41 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 42 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"></div>
        <div class="col-9 col-s-9">
            <h1>Tehtävä 42</h1>
            <p>Tehtävää ei ole olemassa</p>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 42 LOPPU---------------------------------------------------------------->
    </div>
    <div class="footer">
        <p>
            This collection of beautiful and breathtaking photos is free for
            personal and commercial use.
        </p>
    </div>
</body>

</html>