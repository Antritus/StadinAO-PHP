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
$name = $email = $message = "";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$message = test_input($_POST["message"]);
	$file = fopen("./viestit.txt", "a+") or die("./viestit.txt ei voitu löytää!");
	fwrite($file, $email." | ".$name."\n".$message."\n\n");
	fclose($file);

}
    ?>
    <div class="viesti teksti">
    	<h1>Viesti on lähetetty sivuston ylläpitäjille.</h1>
		<p>Siirretään takaisin automaattisesti <span id="time">4</span> sekunnin kuluttua tai paina palaa nappia</p>
    	<br>
      <a href="../page6.php#tehtava-39"><button class="paluu">Palaa tehtävä 39</button></a>
		<script>nextTick("../page6.php#tehtava-39", 4000);</script>
    </div>
   </body>
  </html>