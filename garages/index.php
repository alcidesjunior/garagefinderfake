<?php
$parking1 = array(
    "id" => 1,
    "parkingSpaces" => 50,
    "busySpace" => 10,
    "price" => 15.0,
    "lat" => "-3.7438212",
    "long" => "-38.5381543"
);

$parking2 = array(
    "id" => 2,
    "parkingSpaces" => 30,
    "busySpace" => 5,
    "price" => 10.0,
    "lat" => "-3.7438794",
    "long" => "-38.5361452"
);

$parking3 = array(
    "id" => 3,
    "parkingSpaces" => 40,
    "busySpace" => 15,
    "price" => 20.0,
    "lat" => "-3.737900",
    "long" => "-38.5363314"
);

$parking4 = array(
    "id" => 4,
    "parkingSpaces" => 60,
    "busySpace" => 20,
    "price" => 25.0,
    "lat" => "987.654321",
    "long" => "123.456789"
);

// Colocar os itens em um array
$parkingArray = array($parking1, $parking2, $parking3, $parking4);

// Codificar o array em formato JSON
$jsonString = json_encode($parkingArray, JSON_PRETTY_PRINT);

// Imprimir a saída JSON
return $jsonString;
?>
