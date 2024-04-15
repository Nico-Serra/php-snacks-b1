<?php 

/*
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
*/

$calendar = [
    [
        "TeamHome" => "Olimpia Milano",
        "TeamGuest" => "Cantù",
        "PointsHome" => "55",
        "PointGuest" => "60",
    ],
    [
        "TeamHome" => "Sassari",
        "TeamGuest" => "Bologna",
        "PointsHome" => "72",
        "PointGuest" => "60",
    ],
    [
        "TeamHome" => "Brindisi",
        "TeamGuest" => "Pistoia",
        "PointsHome" => "84",
        "PointGuest" => "86",
    ],
    [
        "TeamHome" => "Napoli",
        "TeamGuest" => "Pesaro",
        "PointsHome" => "76",
        "PointGuest" => "68",
    ],
    [
        "TeamHome" => "Varese",
        "TeamGuest" => "Reggio Emilia",
        "PointsHome" => "75",
        "PointGuest" => "80",
    ],
];

var_dump($calendar);

foreach ($calendar as $match) {
     echo $match["TeamHome"] . '-' . $match["TeamGuest"] . ' ' . '|' . $match["PointsHome"] . '-' . $match["PointGuest"] . '<br>';
    
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
</head>
<body>
    
</body>
</html>