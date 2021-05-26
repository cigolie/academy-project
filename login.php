<!DOCTYPEhtml>
<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Darkblue Academy</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="menu.css">
		<link rel="stylesheet" href="footer.css">
	</head>
	<body> 
		<table>
		<tr><td colspan="2"><div class="titlu" >
			<a href="index.html">Darkblue Academy ✈️ <div class= "motto">	 born to fly</div></a></div>
			</div></div>
<div class="dropdown" style="float:left;">
  <button class="dropbtn">Meniu</button>
  <div class="dropdown-content" style="left:0;">
  <a href="index.html">Pagină principală</a>
  <a href="contact.html">Despre noi</a>
  <a href="new.html">Înregistrează-te</a>
  </div>
</div></td>

<?php
session_start();

include_once 'dbconnect.php';

$nume = $_POST['nume'];
$pass = $_POST['pass'];


$q1= "SELECT * FROM info WHERE NUME='".$nume."' && PAROLA= '".$pass."'"; 
$result1 = mysqli_query($con, $q1);
$num = mysqli_num_rows($result1);
if($num==1)
	{
		header("location:option.php");
		$_SESSION["nume"]=$nume;
		
	}
else 
{
	header("location:errorlog.html");
}
?>

	<tr><td colspan="2"><div class="footer">
	<h4 class="question">Ai întrebări?</h4>
	<p class="par">Nu ezita să ne contactezi.</p>
	<ul class="lst">
							<li >📌 Strada Viitorului, 28 <br> Sector 2, Bucuresti 020602</li><br>
							<li>📞 + 1235 2355 98</li><br>
							<li>📧️ darkbluemail.com</li>
						</ul>
		</div></td></tr>
	</table>
	</body>
</html>