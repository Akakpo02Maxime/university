<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $serie = $_POST['serie'];
  $maths = $_POST['maths'];
  $physique = $_POST['physique'];
  $anglais = $_POST['anglais'];

  if ($maths >= 8 && $physique >= 8 && $anglais >= 8) {
    header("location: inscription_finale.php");
    exit();
  } else {
    echo "<p>Vous ne remplissez pas les conditions d'admission.</p>";
    exit();
  }
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Notes - Génie mécanique</title>
</head>
<body>
  <h1>Entrez vos informations scolaires</h1>
  <form method="post">
    Nom: <input type="text" name="nom" required><br>
    Prénom: <input type="text" name="prenom" required><br>
    Série: <input type="text" name="serie" required><br>
    Maths: <input type="number" name="maths" required><br>
    Physique: <input type="number" name="physique" required><br>
    Anglais: <input type="number" name="anglais" required><br>
    <button type="submit">Soumettre</button>
  </form>
</body>
</html>