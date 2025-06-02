<?php
session_start();
// var_dump($_SERVER['REQUEST_METHOD'], $_POST);
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupération et validation basique
    $identifiant = trim($_POST['identifiant'] ?? '');
    $mdp = $_POST['mdp'] ?? '';

    if ($identifiant === '' || $mdp === '') {
        $error = 'Veuillez renseigner tous les champs.';
    } else {
        // Connexion à la BDD
        try {
        $db = new PDO('mysql:host=localhost;dbname=Application_Gaming;charset=utf8', 'leandre', 'leandre.mdp');


        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur de connexion BDD : ' . $e->getMessage());
        }


        // On sélectionne l’utilisateur et son mot de passe hashé
        $stmt = $db->prepare("SELECT ID, PRENOM, EMAIL, MDP, TYPE_DE_JEUX, PLATEFORME, GENRE, AGE, 
        LOISIRS, LOCALISATION, BIOGRAPHIE, CREATED_AT, IDENTIFIANT, HOBBIES, PHOTO_PROFIL FROM USERS WHERE IDENTIFIANT =:identifiant");

        $stmt->execute(['identifiant' => $identifiant]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérification : est-ce que l’utilisateur existe ET le mot de passe correspond au hash ?
        if ($user && password_verify($mdp, $user['MDP'])) {

            // Authentification réussie : on stocke en session
            $_SESSION['user_id']      = $user['ID'];
            $_SESSION['prenom']       = $user['PRENOM'];
            $_SESSION['email']        = $user['EMAIL'];
            $_SESSION['mdp']          = $user['MDP'];
            $_SESSION['type_de_jeux'] = $user['TYPE_DE_JEUX'];
            $_SESSION['plateforme']   = $user['PLATEFORME'];
            $_SESSION['genre']        = $user['GENRE'];
            $_SESSION['age']          = $user['AGE'];
            $_SESSION['loisirs']      = $user['LOISIRS'];
            $_SESSION['localisation'] = $user['LOCALISATION'];
            $_SESSION['biographie']   = $user['BIOGRAPHIE'];
            $_SESSION['created_at']   = $user['CREATED_AT'];
            $_SESSION['identifiant']  = $user['IDENTIFIANT'];
            $_SESSION['hobbies']      = $user['HOBBIES'];
            $_SESSION['photo_profil'] = $user['PHOTO_PROFIL'];


            // Redirection vers la page principale
            header('Location: ../../Application/Index.php');
            exit;
        } else {
            $error = 'Identifiant ou mot de passe incorrect.';
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Import CSS -->
    <link rel="stylesheet" href="Connexion.css">
    <title>Connexion</title>
</head>

<body>

    <!--------------- CONTENU PRINCIPALE --------------->
    <div class="Contenu">

        <div id="Blue_circle"></div>
        <div id="Pink_circle"></div>
        
        <!--------------- CONTENU GAUCHE --------------->
        <div class="Left">

            <div class="Contenu-Gauche">

                <!-- Titre -->
                <div class="Titre">
                    <h1>NextLevel</h1>
                    <!-- Import Logo -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M22 8.65A5 5 0 0 0 17 4H7a5 5 0 0 0-5 4.74A2 2 0 0 0 2 9v7.5A3.48 3.48 0 0 0 5.5 20c1.43 0 2.32-1.06 3.19-2.09.32-.37.65-.76 1-1.1a4.81 4.81 0 0 1 1.54-.75 6.61 6.61 0 0 1 1.54 0 4.81 4.81 0 0 1 1.54.75c.35.34.68.73 1 1.1.87 1 1.76 2.09 3.19 2.09a3.48 3.48 0 0 0 3.5-3.5V9a2.09 2.09 0 0 0 0-.26zm-2 7.85a1.5 1.5 0 0 1-1.5 1.5c-.5 0-1-.64-1.66-1.38-.34-.39-.72-.85-1.15-1.26a6.68 6.68 0 0 0-2.46-1.25 6.93 6.93 0 0 0-2.46 0 6.68 6.68 0 0 0-2.46 1.25c-.43.41-.81.87-1.15 1.26C6.54 17.36 6 18 5.5 18A1.5 1.5 0 0 1 4 16.5V9a.77.77 0 0 0 0-.15A3 3 0 0 1 7 6h10a3 3 0 0 1 3 2.72v.12A.86.86 0 0 0 20 9z"></path><circle cx="16" cy="12" r="1"></circle><circle cx="18" cy="10" r="1"></circle><circle cx="16" cy="8" r="1"></circle><circle cx="14" cy="10" r="1"></circle><circle cx="8" cy="10" r="2"></circle></svg>
                </div>

                <!-- Sous-Titres -->
                <div class="SubTitle">
                    <h2>Content de vous revoir !</h2>
                </div>

                <form method="POST" action="">

                    <!-- Identifiants -->
                    <div class="Input-group">
                        <input type="text" id="identifiant" name="identifiant" required>
                        <label for="identifiant">Identifiant</label>
                    </div>

                    <!-- Mot de passe -->
                    <div class="Input-group">
                        <input type="password" id="mdp" name="mdp" required>
                        <label for="mdp">Mot de passe</label>
                    </div>

                    <!-- Se souvenir de moi -->
                    <div class="Remember">
                        <a href="#">Mot de passe oublié ?</a>
                    </div>

                    <!-- Boutton Connexion -->
                    <Button type="submit" class="btn">Connexion</button>

                    <!-- Pas de compte -->
                    <div class="Connexion">
                        <p>Vous n'avez pas de compte ? <a href="../Inscription/Inscription.php" class"creer-un-compte>Créer un compte</a></p>
                    </div>
                </form>

                <!-- Message d'erreur -->
                <?php if ($error): ?>
                    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
                <?php endif; ?>


                

            </div>
            
        </div>

        <!--------------- CONTENU DROITE --------------->
        <div class="Right">
            
        </div>

    </div>
    

</body>
</html>