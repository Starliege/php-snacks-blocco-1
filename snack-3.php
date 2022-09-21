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
  // Snack 3
  // Creare un array di array. Ogni array figlio avrà
  // come chiave una data in questo formato: DD-MM-
  // YYYY es 01-01-2007 e come valore un array di
  // post associati a quella data. Stampare ogni data con i relativi post.

$posts = [

  '10/01/2019' => [
      [
          'title' => 'Post 1',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 1'
      ],
      [
          'title' => 'Post 2',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 2'
      ],
  ],
  '10/02/2019' => [
      [
          'title' => 'Post 3',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 3'
      ]
  ],
  '15/05/2019' => [
      [
          'title' => 'Post 4',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 4'
      ],
      [
          'title' => 'Post 5',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 5'
      ],
      [
          'title' => 'Post 6',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 6'
      ]
  ],
];

foreach ($posts as $key => $value) {
  echo "<h5> Data: $key </h5>";
  "<br>";
  foreach ($value as $prop => $item) {
      echo "<ul>";
      foreach ($item as $k => $val) {
          echo "<li>{$k}: {$val}</li>";
      }
      echo "</ul>";
  }
}
?>
</body>
</html>
