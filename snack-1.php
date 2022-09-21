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

  $partita = [
      'home_team' => 'Heat',
      'guest_team' => 'Bulls',
      'home_score' => 100,
      'guest_score' => 0
  ];
  
  $partite = [
      $partita,
      [
          'home_team' => 'Cavaliers',
          'guest_team' => 'Sixers',
          'home_score' => 80,
          'guest_score' => 100
      ],
      [
          'home_team' => 'Raptors',
          'guest_team' => 'Celtics',
          'home_score' => 70,
          'guest_score' => 90
      ],
  ];
  
  // var_dump($partite);
  
  ?>
  
  <ul>
      <?php
      for ($i = 0; $i < count($partite); $i++) {
      ?>
          <li>
              <?php
              echo "{$partite[$i]['home_team']} - {$partite[$i]['guest_team']} | "
              ?>
              <strong>
                  <?php
                  echo "{$partite[$i]['home_score']} - {$partite[$i]['guest_score']}"
                  ?>
              </strong>
          </li>
      <?php
      }
      ?>
  </ul>
</body>

</html>