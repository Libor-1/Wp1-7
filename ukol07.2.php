<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$age = 55;

/*
if($age > 15) {
    $enterafree = 100;
} else {
    $enteryfree = 50;
} */
// don't forgget the backest (závorky);

if($age > 15) {
    $enteryfee = 100;
} else {
    $enteryfree = 50;
}

if(($age <= 15) || ($age >= 65)) {
    $enteryfree = 50;
} else {
    $enteryfree = 100;
}
   
?>

<p> Jelikož ti je <?= $age ?>, tak platíš <?= $enteryfree ?> Kč. </p>
    
</body>
</html>