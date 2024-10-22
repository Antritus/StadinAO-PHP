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
        <!----------------------------------------------- TEHTÄVÄ 1 ALKU ---------------------------------------------------------------->
        <div class="col-9 col-s-9">

            <h3> Tehtävä 1 </h3>
            <p> PHP koodauksen CSS-ohjeita. Ohjelmointikoodaus saadaan esille vaihtamalla < merkki & L T
                    yhdistelmäksi.</p>
                    <div class="koodaus">
                        <pre>
.tehtava-1 {
	color: red;
}

   &LTdiv class="tehtava-1">
    &LT?php
      echo "&LTH3> EKA OTSIKKO &LT/H3>";   &LTdiv class="tehtava-7">

      echo "&LTp id='vari2'> Muotoillaan HTML-elementtejä PHP-koodauksessa.&LT/p>";      
      echo "&LTp class='vari3'> Kokeillaan ohjeita. &LT/p>";	  
    ?>
   &LT/div> 
</pre>
                    </div>

                    <div class="vari1">
                        <?php
      echo "<H3> EKA OTSIKKO </H3>";
      echo "<p id='vari2'> Muotoillaan HTML-elementtejä PHP-koodauksessa.</p>";      
      echo "<p class='vari3'> Kokeillaan ohjeita. </p>";	  
    ?>
                    </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 1 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 2 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9">

            <h3> Tehtävä 2 </h3>
            <p> PHP ohjelmoinnin muuttujia. </p>
            <div class="koodaus">
                <pre>
.tehtava-2 {
	color: green;
}
.tehtava-2 h1 {
	color: red;
}

&LTdiv class="tehtava-2">
	&LT?php>
    $teksti1 = "&LTh1>Seitsemän miehen voima&LT/h1>&LTbr>Kiljukoon nyt kaikkein kaula,&LTbr>koska mielin virren laulaa&LTbr>voimasta seitsemän miehen. &LTbr>";
    $teksti2 = "&LTh1>Mitä minä huolin&LT/h1>Mitä minä huolin, veitikka nuori,&LTbr>jolla on rinta kuin Tunturi-vuori?&LTbr>Frallaralla rallaralla rallarallalaa!";
    echo $teksti2 . "&LTbr>";
    echo $teksti1 . "&LTbr>";
    ?>
&LT/div>
</pre>
            </div>

            <div class="tehtava-2">
                <?php
    $teksti1 = "<h1>Seitsemän miehen voima</h1><br>Kiljukoon nyt kaikkein kaula,<br>koska mielin virren laulaa<br>voimasta seitsemän miehen. <br>";
    $teksti2 = "<h1>Mitä minä huolin</h1>Mitä minä huolin, veitikka nuori,<br>jolla on rinta kuin Tunturi-vuori?<br>Frallaralla rallaralla rallarallalaa!";
    echo $teksti1 . "<br>";
    echo $teksti2 . "<br>";
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 2 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 3 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 3 </h3>
            <p> Laskee ympyrän pinta-alan ja pallon tilavuuden ja pinta-alan käyttämällä 1.32 säteenä </p>
            <div class="koodaus">
                <pre>   &LTdiv class="tehtava-7">

.tehtava-3 {
	color: white;
}
.tehtava-3 .value {
	font-size: 4px;
	color: MAROON;
}

   &LTdiv class="tehtava-3">
    &LT?php
    $sade = 1.32;
    $pintaalaympyra = pi()*pow($sade, 2);
   $tilavuuspallo = 4*pi()*pow($sade, 3) / 3;
   $pintaalapallo = 4*pi()*pow($sade, 2);
	echo "Ympyrän säde: &LTspan class=\"value\">" . $sade . "&LT/span>&LTbr>";
	echo "Ympyrän pinta-ala: &LTspan class=\"value\">" . $pintaalaympyra . "&LT/span>&LTbr>";
	echo "Pallon tilavuus: &LTspan class=\"value\">" . $tilavuuspallo . "&LT/span>&LTbr>";
	echo "Pallon pinta-ala: &LTspan class=\"value\">" . $pintaalapallo . "&LT/span>&LTbr>";
	
	echo "";
    ?>
    &LT/div>
</pre>
            </div>

            <div class="tehtava-3">
                <?php
    $sade = 1.32;
    $pintaalaympyra = pi()*pow($sade, 2);
   $tilavuuspallo = 4*pi()*pow($sade, 3) / 3;
   $pintaalapallo = 4*pi()*pow($sade, 2);
	echo "Ympyrän säde: <span class=\"value\">" . $sade . "</span><br>";
	echo "Ympyrän pinta-ala: <span class=\"value\">" . $pintaalaympyra . "</span><br>";
	echo "Pallon tilavuus: <span class=\"value\">" . $tilavuuspallo . "</span><br>";
	echo "Pallon pinta-ala: <span class=\"value\">" . $pintaalapallo . "</span><br>";
	
	echo "";
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 3 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 4 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 4 </h3>
            <p> Kertoo 3 numeroa yhteen </p>
            <div class="koodaus">
                <pre>
.tehtava-4 {
	color: pink;
}
.tehtava-4 .value {
	font-size: 15px;
	color: MAROON;
}

   &LTdiv class="tehtava-4">
    &LT?php
    $eka = 3;
    $toka = 7;
    $kolmas = 70;
    $tulos = $eka*$toka*$kolmas;
	echo "Kerrotaan: " . $eka . ", " . $toka . ", " . $kolmas . " yhteen&LTbr>";
	echo "Tulos &LTspan class=\"value\">". $tulos . "&LT/span>";
    ?>
    &LT/div>
</pre>
            </div>

            <div class="tehtava-4">
                <?php
    $eka = 3;
    $toka = 7;
    $kolmas = 70;
    $tulos = $eka*$toka*$kolmas;
	echo "Kerrotaan: " . $eka . ", " . $toka . ", " . $kolmas . " yhteen<br>";
	echo "Tulos <span class=\"value\">". $tulos . "</span>";
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 4 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 5 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 5 </h3>
            <p> Laskee kolmen vastuksen rinnaikkain kytkennän arvon </p>
            <div class="koodaus">
                <pre>
.tehtava-5 {
	color: maroon;
}
.tehtava-5 .value {
	font-size: 15px;
	color: red;
}

   &LTdiv class="tehtava-5">
    &LT?php
    $R1 = 1;
    $R2 = 2;
    $R3 = 4;
    $Rkok = pow((pow($R1, -1) + pow($R2, -1) + pow($R3, -1)), -1);

	echo "R1: ". $R1 . " R2: " . $R2 . " R3: " . $R3 ."&LTbr>";
	echo "Rkok = ((R1^-1)+(R2^-1)+(R3^-1))^1 &LTbr>";
	echo "Rkok = &LTspan class=\"value\">" . $Rkok . "&LT/span>";
    ?>
    &LT/div>
</pre>
            </div>

            <div class="tehtava-5">
                <?php
    $R1 = 1;
    $R2 = 2;
    $R3 = 4;
    $Rkok = pow((pow($R1, -1) + pow($R2, -1) + pow($R3, -1)), -1);

	echo "R1: <span class=\"value\">". $R1 . "</span> R2: <span class=\"value\">" . $R2 . "</span> R3: <span class=\"value\">" . $R3 ."</span><br>";
	echo "Rkok = ((R1^-1)+(R2^-1)+(R3^-1))^1 <br>";
	echo "Rkok = <span class=\"value\">" . $Rkok . "</span>";
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 5 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 6 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 6 </h3>
            <p> Liittää yhdellä echolla aforismonia sivuun </p>
            <div class="koodaus">
                <pre>
.tehtava-6 {
	color: black;
}
.tehtava-6 .value {
  font-family: "Reddit Sans Condensed", sans-serif;
  font-optical-sizing: auto;
  font-weight: 800;
  font-style: normal;
}

&LThead>
	&LTlink rel="preconnect" href="https://fonts.googleapis.com">
	&LTlink rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	&LTlink href="https://fonts.googleapis.com/css2?family=Reddit+Sans+Condensed:wght@200..900&display=swap" rel="stylesheet">
&LT/head>

   &LTdiv class="tehtava-6">
    &LT?php
    print "\"&LTspan class=\"value\">Lähes kaikki suuri on nuorten tekemää&LT/span>\" - Benjamin Franklin&LTbr>\"&LTspan class=\"value\">Nuoressa ei huilaaminen mene hukkaan.&LT/span>\"- Suomalainen sananlasku&LTbr>\"&LTspan class=\"value\">Nuoret ovat säännöllisesti ajattelemattomia.&LT/span>\" - Homeros";
    ?>
    &LT/div>
</pre>
            </div>

            <div class="tehtava-6">
                <?php
    print "\"<span class=\"value\">Lähes kaikki suuri on nuorten tekemää</span>\" - Benjamin Franklin<br>\"<span class=\"value\">Nuoressa ei huilaaminen mene hukkaan.</span>\"- Suomalainen sananlasku<br>\"<span class=\"value\">Nuoret ovat säännöllisesti ajattelemattomia.</span>\" - Homeros";
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 6 LOPPU---------------------------------------------------------------->
    </div>
    <div class="footer">
        <p>
            This collection of beautiful and breathtaking photos is free for
            personal and commercial use.
        </p>
    </div>





</body>

</html>