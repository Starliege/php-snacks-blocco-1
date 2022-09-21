<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
  <style>
    body {
      background: #000;
      color: #fff;
      font-size: 2.5rem;
      font-family: Arial, Helvetica, sans-serif;
      line-height: 4rem;
    }
  </style>
</head>
<body>
<?php 
  // Snack 1
  // Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
  // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
  // e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
  // Olimpia Milano - Cantù | 55-60

$partite = [
  [
    "squadraCasa" => [
      "nome" => "Heat",
      "punti" => "10"
    ],
    "squadraOspite" => [
      "nome" => "Bulls",
      "punti" => "30"
    ]
  ],
  [
    "squadraCasa" => [
      "nome" => "Cavaliers",
      "punti" => "20"
    ],
    "squadraOspite" => [
      "nome" => "Sixers",
      "punti" => "8"
    ]
  ],
  [
    "squadraCasa" => [
      "nome" => "Raptors",
      "punti" => "24"
    ],
    "squadraOspite" => [
      "nome" => "Celtics",
      "punti" => "20"
    ]
  ]
];

for ($i=0; $i < sizeof($partite) ; $i++)
  echo $partite[$i]["squadraCasa"]["nome"]." - ".$partite[$i]["squadraOspite"]["nome"]." | ".$partite[$i]["squadraCasa"]["punti"]." - ".$partite[$i]["squadraOspite"]["punti"]."<br>";

?>
</body>
</html>

