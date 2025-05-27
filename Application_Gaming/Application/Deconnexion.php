<?php
session_start();

// On vide la session
$_SESSION = [];

// On supprime le cookie de session si besoin
if (ini_get("session.use_cookies")) {
    setcookie(session_name(), '', time() - 42000, '/');
}
session_destroy();

// Redirection vers la page de connexion
header('Location: ../Parcours_Utilisateurs/Connexion/Connexion.php');
exit;
