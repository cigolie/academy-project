<?php
session_start();
?>
<!DOCTYPEhtml>
<html>
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Darkblue Academy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="footer.css">
    <script type="text/javascript" src="js2.js"></script> 
  </head>
  <body> 
    <table>
    <tr><td colspan="2"><div class="titlu" >
      <a href="#">Darkblue Academy ✈️ <div class= "motto">  born to fly</div></a></div>
      </div></div>
<div class="dropdown" style="float:left;">
  <button class="dropbtn">Meniu</button>
  <div class="dropdown-content" style="left:0;">
  
  <a href="index.html">Log Out</a>
  </div>
</div></td>
<td><h3 class="q1"> Bine ai venit,<?php echo $_SESSION["nume"]; ?>!</h3>
<tr><td>
	<div class="bye">
	<p>Îți mulțumim că ai ales Darkblue Academy!<br> Zboruri line!</p>
  <p class="par">În următoarele 48h, vei primi un mesaj de confirmare la numărul de telefon introdus în formular.</p>
	</div></td></tr>

<?php
include_once 'dbconnect.php';
$tip=$_POST["tip"];
$nume=$_SESSION["nume"];
$nr=0;

$q1="SELECT COD FROM oferta WHERE TIP='".$tip."'";
$result1=mysqli_query($con,$q1);
$row1=mysqli_fetch_array($result1);
$cod=$row1["COD"];
$q2="SELECT ID FROM info WHERE NUME='".$nume."'";
$result2=mysqli_query($con,$q2);
$row2=mysqli_fetch_array($result2);
$id=$row2["ID"];
$q2 = "INSERT INTO final VALUES (".$nr.",".$id.",".$cod.")";
	mysqli_query($con, $q2);


 ?>

<tr><td colspan="2"><div class="footer">
  <h4 class="question">Ai întrebări?</h4>
  <p class="par">Nu ezita să ne contactezi.</p>
  <ul class="lst">
              <li >📌 Strada Viitorului, 28 <br> Sector 2, Bucuresti 020602</li><br>
              <li>📞 + 1235 2355 98</li><br>
              <li>📧️ darkbluemail.com</li><br>
              <li>Ora exacta: <font color="white"><p id="demo" align="left"></p> </li>
            </ul>
    </div></td></tr>
  </table>
  </body>
</html>