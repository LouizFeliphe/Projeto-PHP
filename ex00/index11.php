<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index11.php" method="post">
        <input type="radio" value="Visa" name="card" id="visa"> <label for="visa">Visa</label><br>
        <input type="radio" value="Mastercard" name="card" id="master"> <label for="master">Mastercard</label><br>
        <input type="radio" value="American Express" name="card" id="american"> <label for="american">American Express</label><br>
        <input type="submit" value="Confirm" name="confirm">
        
    </form>
</body>
</html>
<?php 
    if (isset($_POST["confirm"])) {
        if (empty($_POST["card"])) {
            echo "Choose a card to proceed";
        } else {
            $credit_card = $_POST["card"];
            echo "$credit_card";
            if ($_POST["card"] == "Visa") {
                echo "<br>You've chosen Visa";
            } else {
                echo "<br>You've chosen a card other than Visa";
            }
        }
       
}
?>