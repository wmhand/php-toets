
<?php

$message = "";
session_start();
if (isset($_POST['submit'])){

if (!empty($_POST['voornaam']) && !empty($_POST['email']) && !empty($_POST['achternaam']) &&!empty($_POST['iphone']) && !empty($_POST['versie']) && !empty($_POST['kleur'])){
$voornaam = filter_input(INPUT_POST, 'voornaam', FILTER_VALIDATE_INT) ;
$achternaam = filter_input(INPUT_POST, 'achternaam', FILTER_VALIDATE_INT) ;
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ;
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$iphone = $_POST['iphone'];
$versie = $_POST['versie'];
$kleur = $_POST['kleur'];


if (!$voornaam || !$achternaam || !$email){
$message = "vul een correcte email en naam in";
}
else{
    $_SESSION['voornaam'] = $voornaam;
    $_SESSION['achternaam'] = $achternaam;
    $_SESSION['email'] = $email;
    $_SESSION['iphone'] = $iphone;
    $_SESSION['versie'] = $versie;
    $_SESSION['kleur'] = $kleur;

header("Location: result.php");
}
}else{
    $message = "vul alles in";
}

}





?>




<h1><B>kies iphone</B></h1>

<form method="post">
    voornaam:  <input name="voornaam">
    <br>
    achternaam: <input name="achternaam">
    <br>
    email: <input name="email">
    <br>

<label>welke iphone wil je kopen?</label>
    <br>
     <input type="radio" name="iphone" value="iphone 11"> iphone 11
    <br>
    <input type="radio" name="iphone" value="iphone 12"> iphone 12
    <br>
    <input type="radio" name="iphone" value="iphone 12"> iphone 13
    <br>


    <label>welke versie wil je kopen?</label>
    <br>
    <input type="radio" name="versie" value="mini"> mini
    <br>
    <input type="radio" name="versie" value="normaal "> normaal
    <br>
    <input type="radio" name="versie" value="pro"> pro
    <br>


    <label>welke kleur?</label>
    <br>
    <input type="radio" name="kleur" value="rood"> rood
    <br>
    <input type="radio" name="kleur" value="blauw"> blauw
    <br>
    <input type="radio" name="kleur" value="zwart"> zwart
    <br>
    <br>
    <br>



    <button type="submit" name="submit" >inschrijven</button>

</form>
<?php
echo $message;
?>
