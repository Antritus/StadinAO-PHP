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
    <link rel="stylesheet" href="button.css"/>
    <link rel="stylesheet" href="page5.css" />
    <title>Main</title>
</head>

<body>
    <div class="header">
        <h1>PHP 25-30</h1>
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
        <!----------------------------------------------- TEHTÄVÄ 31 ALKU ---------------------------------------------------------------->
        <div class="col-9 col-s-9">

            <h3> Tehtävä 31 </h3>
            <p> Laskee syntymä vuoden käyttämällä annettua vuotta ja ikää </p>
            <div class="koodaus">
                <pre>
   &LTdiv class="tehtava-31">
    &LT?php
    function etuNimi($nimi, $ikä, $nykyvuosi)
        {
          $syntymävuosi = $nykyvuosi-$ikä;
          echo "$nimi Rupunen. Syntyi vuonna $syntymävuosi on $ikä vuotta vanha &LTbr>";
        }
        etuNimi("Tuomas", 25, 2024);
        etuNimi("Henri", 27, 2024);
        etuNimi("Petteri", 30, 2024); 
    ?>
   &LT/div> 
</pre>
            </div>

            <div class="tehtava-31">
                <?php
        function etuNimi($nimi, $ikä, $nykyvuosi)
        {
          $syntymävuosi = $nykyvuosi-$ikä;
          echo "$nimi Rupunen. Syntyi vuonna $syntymävuosi on $ikä vuotta vanha <br>";
        }
        etuNimi("Tuomas", 25, 2024);
        etuNimi("Henri", 27, 2024);
        etuNimi("Petteri", 30, 2024); 
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 31 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 32 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9">

            <h3> Tehtävä 32 </h3>
            <p> Laittaa tiedot muuttujiin php koodin alussa ja käyttää funktiota ja muuttujia lopussa. </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-32">
	&LT?php>
  $i1 = 350;
      $i2 = null;
      $i3 = 135;
      $i4 = 80;
      function testiKorkeus($minimiKorkeus = 50) 
      {
        echo "Korkeus on : $minimiKorkeus &LTbr>";
      }
      testiKorkeus($i1);
      testiKorkeus($i2); 
      testiKorkeus($i3);
      testiKorkeus($i4); 
    ?>
&LT/div>
</pre>
            </div>

            <div class="tehtava-32">
                <?php
      $i1 = 350;
      $i2 = null;
      $i3 = 135;
      $i4 = 80;
      function testiKorkeus($minimiKorkeus = 50) 
      {
        echo "Korkeus on : $minimiKorkeus <br>";
      }
      testiKorkeus($i1);
      testiKorkeus($i2); 
      testiKorkeus($i3);
      testiKorkeus($i4); 
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 32 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 33 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 33 </h3>
            <p> Pyöristää luvut ja tulostaa tulokset netti-sivulle </p>
            <div class="koodaus">
                <pre>
   &LTdiv class="tehtava-33">
    &LT?php
    function  pyoristaLuku($x){
      echo "Luku $x on pyöristettynä ".floor($x)."&LTbr>";
    }
    pyoristaLuku(2.35);
    pyoristaLuku(5.55);
    pyoristaLuku(-101.2);
    pyoristaLuku(-219.7);
    ?>
    &LT/div>
</pre>
            </div>

            <div class="tehtava-33">
                <?php
    function  pyoristaLuku($x){
      echo "Luku $x on pyöristettynä ".floor($x)."<br>";
    }
    pyoristaLuku(2.35);
    pyoristaLuku(5.55);
    pyoristaLuku(-101.2);
    pyoristaLuku(-219.7);
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 33 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 34 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 34 </h3>
            <p> Laskee rinnaikkain 3 vastusta ja palauttaa arvon </p>
            <div class="koodaus">
                <pre>
   &LTdiv class="tehtava-34">
    &LT?php
    $r1 = 100;
    $r2 = 100;
    $r3 = 100;

    function rinnakkain($r1, $r2, $r3){
      return pow(pow($r1, -1)+pow($r2, -1)+pow($r3, -1), -1);
    }
    echo "R1 = 100, R2 = 100, R3 = 100 rinnakkain: " . rinnakkain($r1, $r2, $r3) . "&ltbr>";
    ?>
    &LT/div>
</pre>
            </div>

            <div class="tehtava-34">
                <?php
    $r1 = 100;
    $r2 = 100;
    $r3 = 100;

    function rinnakkain($r1, $r2, $r3){
      return pow(pow($r1, -1)+pow($r2, -1)+pow($r3, -1), -1);
    }
    echo "R1 = 100, R2 = 100, R3 = 100 rinnakkain: " . rinnakkain($r1, $r2, $r3) . "<br>";
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 34 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 35 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"></div>
        <div class="col-9 col-s-9 left">
            <h3>Tehtävä 35</h3>
            <p>Näyttää kellon ajan, kuukauden, tervehdyksen, päivämäärän, vuoden käyttäen date() funktiota. </p>

            <div class="koodaus">
                <pre>
    function kuukausi() {
      switch (date("n")){
        case 0:
          return "Tammikuu";
          break;
        case 1:
          return "Helmikuu";
          break;
        case 2:
          return "Maaliskuu";
          break;
        case 3:
          return "Huhtikuu";
          break;
        case 4:
          return "Toukokuu";
          break;
        case 6:
          return "Kesäkuu";
          break;
        case 7:
          return "Heinäkuu";
          break;
        case 8;
          return "Elokuu";
          break;
        case 9:
          return "Syyskuu";
          break;
        case 10:
          return "Lokakuu";
          break;
        case 11:
          return "Marraskuu";
          break;
        default:
          return "Joulukuu";
          break;
      }
     }
     function paiva() {
      switch (strtolower(date("N"))){
        case 0:
          return "Maanantai";
          break;
        case 1:
          return "Tiistai";
          break;
        case 2:
          return "Keskiviikko";
          break;
        case 3:
          return "Torstai";
          break;
        case 4:
          return "Perjantai";
          break;
        case 5:
          return "Lauantai";
          break;
        default:
          return "Sunnuntai";
          break;                                                  
      }
     }

     function tervehdys() {
      $time = date("G")+(date("i")/100); // Desimaali kello
      $tervehdys = null;

      if ($time > 5.01 && $time &LT= 10) {
        $tervehdys = "Hyvää huomenta";
      } else if ($time > 9 && $time &LT= 14) {
        $tervehdys = "Hyvää päivää";
      } else if ($time > 14 && $time &LT= 17) {
        $tervehdys = "Hyvää iltapäivää";
      } else if ($time > 18 && $time &LT= 23) {
        $tervehdys = "Hyvää iltaa";
      } else {
        $tervehdys = "Rauhallista yötä";
      }
      return $tervehdys;
    }
    function exe(){

      $kelloH = date("G");
      $kelloM = date("i");
      $paiva = paiva();
      $kuukausi = kuukausi();
      $vuosi = date("Y");
      $paivamaara = date("d");
      echo "&LTh1>$tervehdys&LTbr>Kello on $kelloH:$kelloM, $paiva, $paivamaara. $kuukausi $vuosi&LT/h1>";
    }
    exe();
    
    </pre>
            </div>

            <div class="tehtava-35">
                <?php 
     function kuukausi() {
      switch (date("n")){
        case 0:
          return "Tammikuu";
          break;
        case 1:
          return "Helmikuu";
          break;
        case 2:
          return "Maaliskuu";
          break;
        case 3:
          return "Huhtikuu";
          break;
        case 4:
          return "Toukokuu";
          break;
        case 6:
          return "Kesäkuu";
          break;
        case 7:
          return "Heinäkuu";
          break;
        case 8;
          return "Elokuu";
          break;
        case 9:
          return "Syyskuu";
          break;
        case 10:
          return "Lokakuu";
          break;
        case 11:
          return "Marraskuu";
          break;
        default:
          return "Joulukuu";
          break;
      }
     }
     function paiva() {
      switch (strtolower(date("N"))){
        case 0:
          return "Maanantai";
          break;
        case 1:
          return "Tiistai";
          break;
        case 2:
          return "Keskiviikko";
          break;
        case 3:
          return "Torstai";
          break;
        case 4:
          return "Perjantai";
          break;
        case 5:
          return "Lauantai";
          break;
        default:
          return "Sunnuntai";
          break;                                                  
      }
     }

     function tervehdys() {
      $time = date("G")+(date("i")/100); // Desimaali kello
      $tervehdys = null;

      if ($time > 5.01 && $time <= 10) {
        $tervehdys = "Hyvää huomenta";
      } else if ($time > 9 && $time <= 14) {
        $tervehdys = "Hyvää päivää";
      } else if ($time > 14 && $time <= 17) {
        $tervehdys = "Hyvää iltapäivää";
      } else if ($time > 18 && $time <= 23) {
        $tervehdys = "Hyvää iltaa";
      } else {
        $tervehdys = "Rauhallista yötä";
      }
      return $tervehdys;
    }
    function exe(){

      $kelloH = date("G");
      $kelloM = date("i");
      $paiva = paiva();
      $kuukausi = kuukausi();
      $vuosi = date("Y");
      $paivamaara = date("d");
      $tervehdys = tervehdys();
      echo "<h1>$tervehdys<br>Kello on $kelloH:$kelloM, $paiva, $paivamaara. $kuukausi $vuosi</h1>";
    }
    exe();
    
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 35 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 36 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 36 </h3>
            <p> </p>
            <h3>tiedot1.php</h3>
            <div class="koodaus">
                <pre>
&LT!DOCTYPE html>
  &LThtml>
   &LThead>
    &LTmeta charset="UTF-8">
    &LTlink rel="stylesheet" href="main.css" />
	&LTstyle>
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
    &LT/style> 
   &LT/head>
   &LTbody>
    &LTdiv class="viesti teksti">
      R1 &LT?php echo $_POST["R1"]; ?>&LTbr>
      R2 &LT?php echo $_POST["R2"]; ?>&LTbr>
      R3 &LT?php echo $_POST["R3"]; ?>&LTbr>
      Rkok: &LT?php echo pow(pow($_POST["R1"], -1) + pow($_POST["R2"], -1) + pow($_POST["R3"], -1), -1) ?>&LTbr>&LTbr>&LTbr>
      &LTa href="page5.php#tehtava-36">&LTbutton class="paluu">Palaa Tehtävä 36.&LT/button>&LT/a>
    &LTdiv>
   &LT/body>
  &LT/html>
</pre>
            </div>
            <br>
            <h3>tiedot1.php</h3>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-36" id="tehtava-36">
   &LTform action="laske1.php" method="POST"> 
      R1: &LTinput type="number" name="R1">&LTbr> 
      R2: &LTinput type="number" name="R2">&LTbr> 
      R3: &LTinput type="number" name="R3">&LTbr> 
      &LTinput type="submit" value="Lähetä">
    &LT/form>
    &LT/div>
</pre>
            </div>
            <a href="tiedot1.php"><button class="button-large">tiedot1.php</button></a>
            <div class="tehtava-36" id="tehtava-36">
                <form action="laske1.php" method="POST">
                    <label for="R1">R1: </label><input type="text" name="R1"><br>
                    <label for="R2">R2: </label><input type="text" name="R2"><br>
                    <label for="R1">R3: </label><input type="text" name="R3"><br>
                    <input type="submit" value="Lähetä">
                </form>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 36 LOPPU---------------------------------------------------------------->
    </div>
    <div class="footer">
        <p>
            This collection of beautiful and breathtaking photos is free for
            personal and commercial use.
        </p>
    </div>
</body>

</html>