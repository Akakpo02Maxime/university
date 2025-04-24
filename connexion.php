<?php
session_start();
$conn = new mysqli("localhost", "root", "", "connexion_db");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $result = $conn->query("SELECT * FROM utilisateurs WHERE email='$email' AND mot_de_passe='$password'");
  if ($result->num_rows > 0) {
    $_SESSION['email'] = $email;
    header("Location: index.php");
  } else {
    echo "Email ou mot de passe incorrect.";
  }
}
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Connexion</title></head>
<body>
<h2>Connexion</h2>
<form method="POST">
  Email: <input type="email" name="email" required><br>
  Mot de passe: <input type="password" name="password" required><br>
  <button type="submit">Se connecter</button>
</form>
<a href="register.php">Créer un compte</a>
</body>
</html>