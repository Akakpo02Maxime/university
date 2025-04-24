<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("Location: connexion.php");
  exit();
}
$filiere = $_GET['filiere'];
header("Location: notes_$filiere.php");
exit();
?>