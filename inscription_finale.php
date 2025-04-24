<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("Location: connexion.php");
  exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $conn = new mysqli("localhost", "root", "", "universite_db");
  if ($conn->connect_error) die("Erreur connexion: " . $conn->connect_error);
  $sql = "INSERT INTO inscription (nom, prenom, naissance, lieu, email, sexe, pays, telephone, filiere)
          VALUES ('{$_POST['nom']}', '{$_POST['prenom']}', '{$_POST['naissance']}', '{$_POST['lieu']}', '{$_POST['email']}', '{$_POST['sexe']}', '{$_POST['pays']}', '{$_POST['telephone']}', '{$_POST['filiere']}')";
  echo $conn->query($sql) ? "<p>Inscription réussie.</p>" : "Erreur: " . $conn->error;
  $conn->close();
  exit();
}
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Inscription Finale</title></head>
<body>
  <h1>Formulaire d'inscription</h1>
  <form method="POST">
    Nom: <input type="text" name="nom" required><br>
    Prénom: <input type="text" name="prenom" required><br>
    Date de naissance: <input type="date" name="naissance" required><br>
    Lieu de naissance: <input type="text" name="lieu" required><br>
    Adresse mail: <input type="email" name="email" required><br>
    Sexe: <input type="radio" name="sexe" value="Homme" required> Homme
          <input type="radio" name="sexe" value="Femme" required> Femme<br>
    Pays d'origine: <select name="pays" required>
      <optgroup label="Afrique"><option>Togo</option><option>Ghana</option><option>Sénégal</option><option>Maroc</option><option>Côte d'Ivoire</option></optgroup>
      <optgroup label="Europe"><option>France</option><option>Allemagne</option><option>Espagne</option><option>Italie</option><option>Portugal</option></optgroup>
      <optgroup label="Asie"><option>Chine</option><option>Inde</option><option>Japon</option><option>Corée du Sud</option><option>Thaïlande</option></optgroup>
      <optgroup label="Amérique"><option>États-Unis</option><option>Brésil</option><option>Argentine</option><option>Canada</option><option>Mexique</option></optgroup>
    </select><br>
    Téléphone: <input type="tel" name="telephone" required><br>
	Filière: <input type="text" name="filiere" required><br>
    <button type="submit">Valider</button>
  </form>
</body>
</html>