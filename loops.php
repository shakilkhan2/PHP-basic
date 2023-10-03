<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops | PHP</title>
</head>
<body>

<!-- Foreach Loop Start -->
    <?php
$persons = array("Apu", "Dipu", "Shipu", "Ripu", "Nipu");

foreach($persons as $name){
    echo "$name </br>";
};



$prices = array("pen" => "10", "notebook" => "50", "books" => "400", "bag" => "1200");
foreach($prices as $item => $price){
    echo "$item = $price </br>";
};

$ages = array("Sifat" => "12", "Rifat" => "20", "Miraz" => "25", "Rony" => "27");
foreach($ages as $name => $age ){
    echo "$name is $age years old. </br>";
}

    ?>
    <!-- Foreach Loop End -->

    <!-- While Loop -->
    <?php
$i = 1;
while($i <=20){
    echo "serial no.    $i </br>";
    $i++;
}

$x = 2;
while($x <=20){
    echo "my even is: $x </br>";
    $x +=2 ;
}
    ?>

    <!--  -->
</body>
</html>