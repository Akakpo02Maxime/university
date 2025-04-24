<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $serie = $_POST['serie'];
  $economie = $POST_['economie'];
  $français = $_POST['français'];
  $anglais = $_POST['anglais'];

  if ($economie >= 8 && $français >= 8 && $anglais >= 8) {
    header("location: inscription_finale.php");
    exit();
  } else {
    echo "<p>vous ne remplissez pas les conditions d'admission.</p>";
    exit();
  }
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Notes - Communication des organisations</title>
</head>
<body>
  <h1>Entrez vos informations scolaires</h1>
  <form method="post">
    Nom: <input type="text" name="nom" required><br>
    Prénom: <input type="text" name="prenom" required><br>
    Série: <input type="text" name="serie" required><br>
    Economie: <input type="number" name="economie" required><br>
    Français: <input type="number" name="français" required><br>
    Anglais: <input type="number" name="anglais" required><br>
    <button type="submit">Soumettre</button>
  </form>
</body>
</html>