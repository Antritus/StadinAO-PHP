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
        <h1>PHP 1-6</h1>
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
        <!----------------------------------------------- TEHTÄVÄ 7 ALKU ---------------------------------------------------------------->
        <div class="col-9 col-s-9">

            <h3> Tehtävä 7 </h3>
            <p> Laskee vastuksen rinnakkain kytkennän käyttämällä "taulukkoa" (array) </p>
            <div class="koodaus">
                <pre>
.tehtava-7 {
	color: maroon;
}
.tehtava-7 .value {
	color: white;
}


   &LTdiv class="tehtava-7">
    &LT?php
    $R = array(10, 123, 23);
    $Rkok = pow((pow($R[0], -1) + pow($R[1], -1) + pow($R[2], -1)), -1);
    
	echo "R1: &LTspan class=\"value\">". $R[0] . "&LT/span> R2: &LTspan class=\"value\">" . $R[1] . "&LT/span> R3: &LTspan class=\"value\">" . $R[2] ."&LT/span>&LTbr>";
	echo "Rkok = ((R1^-1)+(R2^-1)+(R3^-1))^1 br>";
	echo "Rkok = &LTspan class=\"value\">" . $Rkok . "&LT/span>";
    ?>
   &LT/div> 
</pre>
            </div>

            <div class="tehtava-7">
                <?php
    $R = array(10, 123, 23);
    $Rkok = pow((pow($R[0], -1) + pow($R[1], -1) + pow($R[2], -1)), -1);
    
	echo "R1: <span class=\"value\">". $R[0] . "</span> R2: <span class=\"value\">" . $R[1] . "</span> R3: <span class=\"value\">" . $R[2] ."</span><br>";
	echo "Rkok = ((R1^-1)+(R2^-1)+(R3^-1))^1 <br>";
	echo "Rkok = <span class=\"value\">" . $Rkok . "</span>";
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 7 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 8 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9">

            <h3> Tehtävä 8 </h3>
            <p> Liittää yhdellä echolla aforismonia sivuun ja käyttää taulukkoa aforismien tellentamiseen </p>
            <div class="koodaus">
                <pre>
.tehtava-8 {
	color: black;
}
.tehtava-8 .value {
  font-family: "Reddit Sans Condensed", sans-serif;
  font-optical-sizing: auto;
  font-weight: 800;
  font-style: normal;
}

&LTdiv class="tehtava-8">
	&LT?php>
    $aforismit = array("Lähes kaikki suuri on nuorten tekemää", "Nuoressa ei huilaaminen mene hukkaan.", "Nuoret ovat säännöllisesti ajattelemattomia.");
    print "\"&LTspan class=\"value\">". $aforismit[0] . "&LT/span>\" - Benjamin Franklin&LTbr>\"&LTspan class=\"value\">". $aforismit[1] . "&LT/span>\"- Suomalainen sananlasku&LTbr>\"&LTspan class=\"value\">". $aforismit[2] . "&LT/span>\" - Homeros";
    ?>
&LT/div>
</pre>
            </div>

            <div class="tehtava-8">
                <?php
    $aforismit = array("Lähes kaikki suuri on nuorten tekemää", "Nuoressa ei huilaaminen mene hukkaan.", "Nuoret ovat säännöllisesti ajattelemattomia.");
    print "\"<span class=\"value\">". $aforismit[0] . "</span>\" - Benjamin Franklin<br>\"<span class=\"value\">". $aforismit[1] . "</span>\"- Suomalainen sananlasku<br>\"<span class=\"value\">". $aforismit[2] . "</span>\" - Homeros";
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 8 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 9 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 9 </h3>
            <p> Testaa kuinka monta elementtiä on taulukon sisällä </p>
            <div class="koodaus">
                <pre>
.tehtava-9 {
	color: black;
}
.tehtava-9 .value {
}

   &LTdiv class="tehtava-9">
    &LT?php
    $hedelmat = array("Mango", "Kiivi", "Meloni", "Banaani");
    echo "Count: " . count($hedelmat) . "&LTbr>";
    echo "Sizeof: " . sizeof($hedelmat);
    ?>
    &LT/div>
</pre>
            </div>

            <div class="tehtava-9">
                <?php
    $hedelmat = array("Mango", "Kiivi", "Meloni", "Banaani");
    echo "Count: " . count($hedelmat) . "<br>";
    echo "Sizeof: " . sizeof($hedelmat);
   ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 9 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 10 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 10 </h3>
            <p> Generoi uuden pöydän jossa on 3 riviä ja 7 saraketta per rivi </p>
            <div class="koodaus">
                <pre>
   &LTdiv class="tehtava-10 CSSTableGenerator">
    &LT?php
    $numerot = array(array(1, 2, 3, 4, 5, 6, 7), array(8, 9, 10, 11, 12, 13, 14), array(15, 16, 17, 18, 19, 20, 21));
    
    echo "&LTtable> &LTtbody>&LTtr>
         &LT/tr>";
    for ($rivi = 0; $rivi <= count($numerot)-1; $rivi++) {
      echo "&LTtr>";
	  for ($sarake = 0; $sarake <= 6; $sarake++){
	    echo "&LTtd>". $numerot[$rivi][$sarake] ."&LT/td>";
      }
      echo "&LT/tr>";
    }
    echo "&LT/tr>&LT/tbody>&LT/table>";
    ?>
    &LT/div>
</pre>
            </div>

            <div class="tehtava-10 CSSTableGenerator">
                <?php
    $numerot = array(array(1, 2, 3, 4, 5, 6, 7), array(8, 9, 10, 11, 12, 13, 14), array(15, 16, 17, 18, 19, 20, 21));
    
    echo "<table> <tbody><tr>
         </tr>";
    for ($rivi = 0; $rivi <= count($numerot)-1; $rivi++) {
      echo "<tr>";
	  for ($sarake = 0; $sarake <= 6; $sarake++){
	    echo "<td>". $numerot[$rivi][$sarake] ."</td>";
      }
      echo "</tr>";
    }
    echo "</tr></tbody></table>";
        
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 10 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 11 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 11 </h3>
            <p> Generoi uuden pöydän, jossa on laskettu keski-arvo ja arvo-sanoja </p>
            <div class="koodaus">
                <pre>
   &LTdiv class="tehtava-11">
    &LT?php
    $numerot = array(array("Matti Meikäläinen", 53, 20, 32, 42), array("Maija Mehiläinen", 2, 32, 85, 100), array("Ville Vilkas", 100, 100, 32, 82));
    
    echo "table> tbody>tr>td>Nimi/td>td>Arvo/td>td>Arvo 2/td>td>Arvo 3/td>td>Arvo 4/td>td>Keski arvo/td>td>Arvosana/td>/tr>";
    for ($rivi = 0; $rivi = count($numerot)-1; $rivi++) {
      echo "tr>";
     $total = 0;
	    for ($sarake = 0; $sarake = 4; $sarake++){
	      echo "td>". $numerot[$rivi][$sarake] ."/td>";
        if (0 != $sarake) {
          $total = $total + $numerot[$rivi][$sarake];
        }
      }
	    echo "td>". $total ."/td>";
  	 if ($total  120){
	  	  echo "td>HYLÄTTY/td>";	    	
	    } else if ($total >= 120 && $total  176) {
	      echo "td>". 1 ."/td>";
      } else if ($total >= 176 && $total  232) {
		    echo "td>". 2 ."/td>";
	    } else if ($total >= 232 && $total  288) {
  	    echo "td>". 3 ."/td>";
      } else if ($total >= 288 && $total  344) {
		    echo "td>". 4 ."/td>";
	    } else if ($total >= 344 && $total  400) {
        echo "td>". 5 ."/td>";
  	  } else if ($total >= 400){	
  	    echo "td>YLI/td>";
	  	}
      echo "/tr>";
    }
    echo "/tr>/tbody>/table>";
    ?>
    &LT/div>
</pre>
            </div>

            <div class="tehtava-11 CSSTableGenerator">
                <?php
    $numerot = array(array("Matti Meikäläinen", 53, 20, 32, 42), array("Maija Mehiläinen", 2, 32, 85, 100), array("Ville Vilkas", 100, 100, 32, 82));
    
    echo "<table> <tbody><tr><td>Nimi</td><td>Arvo</td><td>Arvo 2</td><td>Arvo 3</td><td>Arvo 4</td><td>Keski arvo</td><td>Arvosana</td></tr>";
    for ($rivi = 0; $rivi <= count($numerot)-1; $rivi++) {
      echo "<tr>";
     $total = 0;
	    for ($sarake = 0; $sarake <= 4; $sarake++){
	      echo "<td>". $numerot[$rivi][$sarake] ."</td>";
        if (0 != $sarake) {
          $total = $total + $numerot[$rivi][$sarake];
        }
      }
	    echo "<td>". $total ."</td>";
  	 if ($total < 120){
	  	  echo "<td>HYLÄTTY</td>";	    	
	    } else if ($total >= 120 && $total < 176) {
	      echo "<td>". 1 ."</td>";
      } else if ($total >= 176 && $total < 232) {
		    echo "<td>". 2 ."</td>";
	    } else if ($total >= 232 && $total < 288) {
  	    echo "<td>". 3 ."</td>";
      } else if ($total >= 288 && $total < 344) {
		    echo "<td>". 4 ."</td>";
	    } else if ($total >= 344 && $total < 400) {
        echo "<td>". 5 ."</td>";
  	  } else if ($total >= 400){	
  	    echo "<td>YLI</td>";
	  	}
      echo "</tr>";
    }
    echo "</tr></tbody></table>";
        
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 11 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 12 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 12 </h3>
            <p> Laskee kolmen vastuksen rinnaikkain kytkennän arvon </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-12 CSSTableGenerator">
    &LT?php
    $arvio = array("koe1"=>"21", "koe2"=>"25", 
                    "koe3"=>"28");
    echo "&LTtable> &LTtbody>&LTtr>&LTtd>Koe&LT/td>&LTtd>Arvosana&LT/td>&LT/tr>";
    echo "&LTtr>&LTtd>koe1&LT/td>&LTtd>".$arvio["koe1"]."&LT/td>&LT/tr>";
    echo "&LTtr>&LTtd>koe2&LT/td>&LTtd>".$arvio["koe2"]."&LT/td>&LT/tr>";
    echo "&LTtr>&LTtd>koe3&LT/td>&LTtd>".$arvio["koe3"]."&LT/td>&LT/tr>";
    echo "&LTtr>&LTtd>Yhteispiste&LT/td>&LTtd>".($arvio["koe1"]+$arvio["koe2"]+$arvio["koe3"])."&LT/td>&LT/tr>";
    echo "&LT/tr>&LT/tbody>&LT/table>";
    ?>
&LT/div>
</pre>
            </div>

            <div class="tehtava-12 CSSTableGenerator">
                <?php
    $arvio = array("koe1"=>"21", "koe2"=>"25", 
                    "koe3"=>"28");
    echo "<table> <tbody><tr><td>Koe</td><td>Arvosana</td></tr>";
    echo "<tr><td>koe1</td><td>".$arvio["koe1"]."</td></tr>";
    echo "<tr><td>koe2</td><td>".$arvio["koe2"]."</td></tr>";
    echo "<tr><td>koe3</td><td>".$arvio["koe3"]."</td></tr>";
    echo "<tr><td>Yhteispiste</td><td>".($arvio["koe1"]+$arvio["koe2"]+$arvio["koe3"])."</td></tr>";
    echo "</tr></tbody></table>";
    ?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 12 LOPPU---------------------------------------------------------------->
    </div>
    <div class="footer">
        <p>
            This collection of beautiful and breathtaking photos is free for
            personal and commercial use.
        </p>
    </div>





</body>

</html>