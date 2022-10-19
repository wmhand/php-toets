<?php session_start();?>

<h1><b>uw gegevens:</b></h1>

<p>naam: <?php  echo $_SESSION['voornaam'] ." ". $_SESSION['achternaam']?></p>
<p>email: <?php  echo $_SESSION['email']?></p>

<h1><b>uw iphone:</b></h1>
<p><?php  echo $_SESSION['iphone'] ." ". $_SESSION['versie'] ." ". $_SESSION['kleur']?> </p>


