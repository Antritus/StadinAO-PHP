  <!DOCTYPE html>
  <html lang="en-us">
   <head>
    <meta charset="UTF-8">
	<style>
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

	</style>
    <link rel="stylesheet" href="button.css" />
       <title></title>
   </head>
   <body>
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
                    <h3>Vastus Laskuri</h3>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
            <a href="page6.php#tehtava-37"><button class="button-large">PALAA</button></a>
   </body>
  </html>