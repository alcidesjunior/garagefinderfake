<?php
$request = $_GET['request'];

switch($request) {
  case "listParkings":
  echo listParkings();
}

function listParkings() {

// Criar um array associativo com os dados
$parking1 = array(
    "id" => 1,
    "garageOwnerId" => 101,
    "driverId" => 201,
    "licensePlate" => "ABC123",
    "vehicleId" => 301,
    "garageId" => 401,
    "price" => 20.0,
    "pricePerHour" => 5.0,
    "permanenceDuration" => 2,
    "start" => "2023-09-17T12:00:00Z",
    "end" => "2023-09-17T13:00:00Z",
    "status" => true
);

$parking2 = array(
    "id" => 2,
    "garageOwnerId" => 102,
    "driverId" => 202,
    "licensePlate" => "XYZ789",
    "vehicleId" => 302,
    "garageId" => 402,
    "price" => 15.0,
    "pricePerHour" => 4.0,
    "permanenceDuration" => 1,
    "start" => "2023-09-17T14:00:00Z",
    "end" => "2023-09-17T14:30:00Z",
    "status" => true
);

$parking3 = array(
    "id" => 3,
    "garageOwnerId" => 103,
    "driverId" => 203,
    "licensePlate" => "DEF456",
    "vehicleId" => 303,
    "garageId" => 403,
    "price" => 25.0,
    "pricePerHour" => 6.0,
    "permanenceDuration" => 3,
    "start" => "2023-09-17T15:00:00Z",
    "end" => "2023-09-17T17:00:00Z",
    "status" => true
);

$parking4 = array(
    "id" => 4,
    "garageOwnerId" => 104,
    "driverId" => 204,
    "licensePlate" => "GHI789",
    "vehicleId" => 304,
    "garageId" => 404,
    "price" => 30.0,
    "pricePerHour" => 7.0,
    "permanenceDuration" => 4,
    "start" => "2023-09-17T18:00:00Z",
    "end" => "2023-09-17T22:00:00Z",
    "status" => true
);

// Colocar os itens em um array
$parkingArray = array($parking1, $parking2, $parking3, $parking4);

// Codificar o array em formato JSON
$jsonString = json_encode($parkingArray, JSON_PRETTY_PRINT);

// Imprimir a saída JSON
return $jsonString;

}
?>
