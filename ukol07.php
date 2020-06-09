<?php
$rope = true;
$knife = true;
$wood= true;
$nails = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Inventář</h1>                                              
<?php

if ($rope == true) { 
    echo '<img src="obrazky/rope.jpg" width="50" height="100" alt="provaz"><br>';
} else { 
    echo "Nemáš provaz.<br>";
}

if ($wood == true) { 
    echo '<img src="obrazky/wood.jpg" width="50" height="100" alt="drevo"><br>' ;

} else {
    echo "Nemáš dřevo.<br>"; 
}

if ($knife == true) { 
    echo '<img src="obrazky/knife.jpg" width="50" weight="100" alt="nuz"><br>';

} else {
    echo "Nemáš nůž.<br>";
}

if ($nails == true) { 
    echo '<img src="obrazky/nails.jpg" width="50" weight="100" alt="hrebiky"><br>';

} else {
    echo "Nemáš hřebíky.<br>";
}

?>

<h2>Můžeš vyrobit</h2>

<?php

if ($rope && $knife && $wood) {
    echo '<img src="obrazky/bow.jpg" width="50" weight="100" alt="luk"><br>';
}
if ($nails && $wood) {
    echo '<img src="obrazky/rocket.jpg" width="50" weight="100" alt="palka"><br>';
}
if ($rope && $wood) {
    echo '<img src="obrazky/woodchunk.jpg" width="50" weight"100" alt="nuncaky"><br>';
}
if ($knife && $wood) {
    echo '<img src="obrazky/spear.jpg" width="50" weight="100" alt="kopi"><br>';
}

?>

</body>
</html>

