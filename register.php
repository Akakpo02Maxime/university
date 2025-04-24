<?php
$conn = new mysqli("localhost", "root", "", "connexion_db");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "INSERT INTO utilisateurs (email, mot_de_passe) VALUES ('$email', '$password')";
  if ($conn->query($sql) === TRUE) {
    echo "Compte créé.";
	 header("Location: index.php");
  } else {
    echo "Erreur: " . $conn->error;
  }
}
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Inscription</title></head>
<body>
<h2>Créer un compte</h2>
<form method="POST">
  Email: <input type="email" name="email" required><br>
  Mot de passe: <input type="password" name="password" required><br>
  <button type="submit">S'inscrire</button>
</form>
</body>
</html>