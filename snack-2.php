<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
  <style>
    body {
      background: #000;
      color: #fff;
      font-size: 2.5rem;
      font-family: Arial, Helvetica, sans-serif;
      line-height: 4rem;
    }
    .green {
      color: green;
    }
    .red {
      color: red;
    }
  </style>
</head>
<body>
<?php 
  // Snack 2
  // Passare come parametri GET name, mail e age e verificare
  // (cercando i metodi che non conosciamo nella documentazione)
  // che name sia più lungo di 3 caratteri, che mail contenga un punto e
  // una chiocciola e che age sia un numero. Se tutto è ok stampare
  // “Accesso riuscito”, altrimenti “Accesso negato”

  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];

  if (strlen($name)>3 &&
      ctype_digit($age) &&
      strpos($mail,"@") !== false &&
      strpos($mail,".") !== false &&
      strpos($mail,"@") < strpos($mail,".")) {
      echo "<span class=\"green\">Accesso riuscito</span>";
  } else {
      echo "<span class=\"red\">Accesso negato</span>";
  };
?>
</body>
</html>

