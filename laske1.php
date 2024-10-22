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
    <div class="viesti teksti">
      R1 <?php echo $_POST["R1"]; ?><br>
      R2 <?php echo $_POST["R2"]; ?><br>
      R3 <?php echo $_POST["R3"]; ?><br>
      Rkok: <?php echo pow(pow($_POST["R1"], -1) + pow($_POST["R2"], -1) + pow($_POST["R3"], -1), -1) ?><br><br><br>
      <a href="page5.php#tehtava-36"><button class="paluu">Palaa Tehtävä 36.</button></a>
    <div>
   </body>
  </html>