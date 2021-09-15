<?php 
require_once "controller.php";

$number = new Numbers;


if (isset($_POST['submit-1'])) {
    $number->value = $_POST['my-input'];
    $mod = $number->value % 2;
    $number->positive = ($number->value > 0) ? true : false; 
    $number->even = ($mod == 0) ? true : false;   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="public/css/tailwind.css" />
    <title>Modul 1</title>
</head>
<body>
    <form action="" method="post" class="form-1">
        <center class="next">
            <h1><a href="index2.php">NEXT</a></h1>
        </center>
        <div class="content">
            <div class="container-1">
                <div class="button">
                    <div class="btn-1" onclick="counterMinus()">-</div>
                    <input type="number" name="my-input" id="my-input" class="my-input" value="0">
                    <div class="btn-2" onclick="counterPlus()">+</div>
                </div>
                
                <center class="submit">
                <button type="submit" id="submit" name="submit-1">Check</button>
                </center>

                <?php if($number->value == 0): ?>
                <?php elseif($number->positive && $number->even): ?>
                    <center><h1 > Positif dan Genap</h1></center>
                <?php elseif($number->positive && !$number->even): ?>
                    <center><h1 style="font-size: 1.7em;" > Positif dan Ganjil</h1></center>
                <?php elseif(!$number->positive && $number->even): ?>
                    <center><h1 style="font-size: 1.7em;">Negatif dan Genap</h1></center>
                <?php elseif(!$number->positive && !$number->even): ?>
                    <center><h1 style="font-size: 1.7em;">Negatif dan Ganjil</h1></center>
                <?php endif; ?>
            </div>

            <div class="container-2">
                <ul>
                    <li>
                        <div class="button">
                            <label for="start">Start</label>
                            <div class="btn-1" onclick="minSt()">-</div>
                            <input type="number" name="start"  id="start" class="my-input" value="0">
                            <div class="btn-2" onclick="plusSt()">+</div>
                        </div>
                    </li>
                    <li>
                        <div class="button">
                            <label for="range">Range</label>
                            <div class="btn-1" onclick="minRg()">-</div>
                            <input type="number" id="range" name="range"  class="my-input" value="0">
                            <div class="btn-2" onclick="plusRg()">+</div>
                        </div>
                    </li>
                    <li>
                        <div class="button">
                            <label for="amount">Amount</label>
                            <div class="btn-1" onclick="minAm()">-</div>
                            <input type="number" name="amount"  class="my-input" value="0" id="amount" >
                            <div class="btn-2" onclick="plusAm()">+</div>
                        </div>
                    </li>
                    <li>
                        <center class="submit">
                        <button type="submit" id="submit" name="submit-2">Check</button>
                        </center>
                    </li>
                </ul>
                <center>
                    <?php
                     if (isset($_POST['submit-2'])): ?>
                        <?php $number2 = new Numbering($_POST['start'],$_POST['range'],$_POST['amount']);?>
                        <h1 style="margin-top: -20px;"><?php echo $number2->display(); ?></h1>
                    <?php endif; ?>
                </center>
            </div>
            </div>
        </div>
    </form>


<script>
    const counter = document.getElementById("my-input");
    let start = document.getElementById('start');
    let range = document.getElementById('range');
    let amount = document.getElementById('amount');
    let counterValue = counter.value;
    let stVal = start.value;
    let rgVal = range.value;
    let amVal = amount.value;

    function counterPlus() {
    counter.value = ++counterValue;
    }
    function plusSt() {
    start.value = ++stVal;
    }
    function plusRg() {
    range.value = ++rgVal;
    }
    function plusAm() {
    amount.value = ++amVal;
    }

    function counterMinus() {
    counter.value = --counterValue;
    }
    function minSt() {
    start.value = --stVal;
    }
    function minRg() {
    range.value = --rgVal;
    }
    function minAm() {
    amount.value = --amVal;
    }

</script>
</body>
</html>
