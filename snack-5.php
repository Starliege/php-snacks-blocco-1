<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 5</title>
  <style>
    body {
      padding: 50px 10%;
      background: #000;
      color: #fff;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 1.5rem;
      line-height: 2rem;
      font-style: italic;
    }
  </style>
</head>
<body>
<?php 
  // Snack 5
  // Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
  // Prendere il paragrafo e suddividerlo in tanti paragrafi.
  // Ogni punto un nuovo paragrafo.

  $citazione = "<p>Come sai, io sono un grande appassionato di fumetti, soprattutto di quelli sui supereroi. Trovo che tutta la filosofia che circonda i supereroi sia affascinante. Prendi il mio supereroe preferito, Superman. Non un grandissimo fumetto, la sua grafica è mediocre. Ma la filosofia… la filosofia non è soltanto eccelsa, è unica!
  Dunque, l’elemento fondamentale della filosofia dei supereroi è che abbiamo un supereroe e il suo alter-ego: Batman è di fatto Bruce Wayne, l’Uomo Ragno è di fatto Peter Parker. Quando quel personaggio si sveglia al mattino è Peter Parker, deve mettersi un costume per diventare l’Uomo Ragno. Ed è questa caratteristica che fa di Superman l’unico nel suo genere: Superman non diventa Superman, Superman è nato Superman! Quando Superman si sveglia al mattino è Superman. Il suo alter-ego è Clark Kent. Quella tuta con la grande “S” rossa è la coperta che lo avvolgeva da bambino quando i Kent lo trovarono, sono quelli i suoi vestiti. Quello che indossa come Kent, gli occhiali, l’abito da lavoro, quello è il suo costume. È il costume che Superman indossa per mimetizzarsi tra noi. Clark Kent è il modo in cui Superman ci vede. E quali sono le caratteristiche di Clark Kent? È debole, non crede in sé stesso ed è un vigliacco. Clark Kent rappresenta la critica di Superman alla razza umana, più o meno come Beatrix Kiddo è la moglie di Tommy Plympton.</p>";

  echo str_replace(".", ".</p> <p>", $citazione);
?>
</body>
</html>

