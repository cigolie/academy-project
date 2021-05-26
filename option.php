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
    <link rel="stylesheet" href="option.css">
    <link rel="stylesheet" href="footer.css">
  </head>
  <body> 
    <table>
    <tr><td colspan="2"><div class="titlu" >
      <a href="final.php">Darkblue Academy ✈️ <div class= "motto">  born to fly</div></a></div>
      </div></div>
<div class="dropdown" style="float:left;">
  <button class="dropbtn">Meniu</button>
  <div class="dropdown-content" style="left:0;">
  
  <a href="index.html">Log Out</a>
  </div>
</div></td>
<td><h3 class="q1"> Bine ai venit,<?php echo $_SESSION["nume"]; ?>!</h3>
<tr><td>
	<div class="option">
		<form method="POST" action="final.php" name="myForm">
			<table><caption>Alege oferta care ți se potrivește:</caption>
  <tr><td colspan="2"><input type="radio" name="tip" value="Standard" required>Standard
  	<p class="detalii">Pachetul Standard oferă 60 de zile de instruire teoretică și practică,<br>alături de certificările necesare.<br><b>300€ - cazare inclusă</b> </td></tr>
<tr><td colspan="2"><input type="radio" name="tip" value="Premium" required>Premium
<p class="detalii">Pachetul Premium oferă 90 de zile de instruire teoretică și practică,<br> alături de certificările necesare.În plus,oferim un număr mai mare de probe<br> practice dar și conferințe susținute de mari nume ale aviației.<br><b>500€ - cazare inclusă</b>
	<br><input type="reset" value="Anulează"><input type="submit" value="Trimite"></td></tr>
		</form>
	</div>


<tr><td colspan="2"><div class="footer">
  <h4 class="question">Ai întrebări?</h4>
  <p class="par">Nu ezita să ne contactezi.</p>
  <ul class="lst">
              <li >📌 Strada Viitorului, 28 <br> Sector 2, Bucuresti 020602</li><br>
              <li>📞 + 1235 2355 98</li><br>
              <li>📧️ darkbluemail.com</li><br>
               
            </ul>

    </div></td></tr>
  </table>
  </body>
</html>