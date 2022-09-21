<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <style>
        body {
            background: #000;
            color: #fff;
            font-size: 2.5rem;
            font-family: Arial, Helvetica, sans-serif;
            line-height: 4rem;
            margin: 0 auto;
            text-align: center;
        }

        .teachers, .pm {
            width: 20%;
            margin: 0 auto;
        }

        .teachers {
            background: grey;
        }

        .pm {
            background: green;
        }
    </style>
</head>

<body>
    <?php
    // Snack 6
    // Utilizzare questo array: https://pastebin.com/CkX3680A. 
    // Stampiamo il nostro array mettendo gli insegnanti 
    // in un rettangolo grigio e i PM in un rettangolo verde.

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
    ?>

    <?php foreach ($db as $key => $value) { ?>
        <?php echo "<h2>$key</h2>" ?>
        <div class="<?php echo $key ?>">
            <?php foreach ($value as $value) {
                echo "
                        <p>$value[name] $value[lastname] </p>";
            } ?>
        </div> <?php
            } ?>
</body>
</html>