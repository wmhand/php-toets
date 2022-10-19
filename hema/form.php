
<?php
$melding ='';
if (isset($_POST['submit'])){

    if (!empty($_POST['product']) && !empty($_POST['amount'])){
        $amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_FLOAT);
        $product = $_POST['product'];
if ($amount === false){
    $melding= "vul een hoeveelheid in";
}else{


    if ($product=='handdoek'){
$melding = "totaal prijs van de $amount $product is € " .
    number_format($amount *22*0.8, 2, ',','.');
    //round(($amount * 22 *0.8),2);


    }  if ($product=='broek'){
        $melding = "totaal prijs van de $amount $product is € " .
            number_format($amount *17*0.7, 2, ',','.');
           // round(($amount * 17 *0.7),2);


    }if ($product=='shirt'){
        $melding = "totaal prijs van de $amount $product is € " .
            number_format($amount *10*0.5, 2, ',','.');
           // round(($amount * 10 *0.5),2);


    }
    }
    }else{
        $melding = "vul alles in";
    }











}




?>









<form method="post">
    <h1>stappelkorting</h1>

    <label>welk product wordt verkocht?</label>
    <br>
    <input type="radio" name="product" value="handdoek"> handdoek
    <br>
    <input type="radio" name="product" value="broek"> broek
    <br>
    <input type="radio" name="product" value="shirt"> shirt
    <br>

    <label>amount: </label> <input type="text" name="amount">
    <br>
    <button type="submit" name="submit">uitrekenen</button>







</form>
<br>

<?php
echo $melding;
?>
