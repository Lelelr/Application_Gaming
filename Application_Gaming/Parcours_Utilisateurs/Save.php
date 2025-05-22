<?php
header('Content-Type: application/json; charset=utf-8');
ini_set('display_errors', 0);
ini_set('log_errors', 1);
error_reporting(E_ALL);


// Paramètres de conexion à la base de données
$host     = 'localhost';
$dbname   = 'Application_Gaming';
$user     = 'leandre';   
$password = 'leandre.mdp';       


// Connexion PDO
try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    http_response_code(500);
    die(json_encode([
        'error' => 'Connexion BD échouée : ' . $e->getMessage()
    ]));
}


// Récupération des données
$prenom             = $_POST['PRENOM']         ?? '';
$identifiant        = $_POST['IDENTIFIANT']    ?? '';
$email              = $_POST['EMAIL']          ?? '';
$mdp_plain          = $_POST['MDP']            ?? '';
$age                = (int)($_POST['AGE']      ?? 0);
$genre              = $_POST['GENRE']          ?? '';
$type_de_jeux       = $_POST['TYPE_DE_JEUX']   ?? '';
$plateforme         = $_POST['PLATEFORME']     ?? '';
$loisirs            = $_POST['LOISIRS']        ?? '';
$localisation       = $_POST['LOCALISATION']   ?? '';
$biographie         = $_POST['BIOGRAPHIE']     ?? '';
$hobbies            = $_POST['hobbies']        ?? [];  // tableau vide si rien de coché





// Encoder en JSON (même tableau vide → '[]')
// Pour empecher qu'il y ai écrit "ARRAY" dans la BDD
$hobbiesJson = json_encode($hobbies, JSON_UNESCAPED_UNICODE);




// Préparation et exécution de l'INSERT
$sql = "INSERT INTO USERS
  (prenom, identifiant, email, mdp, age, genre, type_de_jeux, plateforme, loisirs, localisation, biographie, hobbies)
VALUES
  (:prenom, :identifiant, :email, :mdp, :age, :genre, :type_de_jeux, :plateforme, :loisirs, :localisation, :biographie, :hobbies)";
$stmt = $pdo->prepare($sql);

// Exécution avec hachage du mot de passe
try {
  $stmt->execute([
    ':prenom'       => $prenom,
    ':identifiant'  => $identifiant,
    ':email'        => $email,
    ':mdp'          => password_hash($mdp_plain, PASSWORD_DEFAULT),
    ':age'          => $age,
    ':genre'        => $genre,
    ':type_de_jeux' => $type_de_jeux,
    ':plateforme'   => $plateforme,
    ':loisirs'      => $loisirs,
    ':localisation' => $localisation,
    ':biographie'   => $biographie,
    ':hobbies'      => $hobbiesJson
  ]);



    // 6. Renvoi de l'ID inséré en JSON
    echo json_encode([
        'id' => $pdo->lastInsertId()
    ]);
    exit;
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        'error' => 'Échec de l’insertion : ' . $e->getMessage()
    ]);
    exit;
}
