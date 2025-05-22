<?php

$host     = 'localhost';
$dbname   = 'Application_Gaming';
$user     = 'leandre';   
$password = 'leandre.mdp';       

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    // Pour déboguer, on affiche le message d’erreur du pilote
    die("Erreur de connexion MySQL dans index.php/save.php : " . $e->getMessage());
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
    <link rel="stylesheet" href="Inscription.css">
    <title>Inscription</title>
</head>

<body>

    <!--------------- CONTENU PRINCIPALE --------------->
    <div class="Contenu">

        <div id="Blue_circle"></div>
        <div id="Pink_circle"></div>
        
        <!--------------- CONTENU GAUCHE --------------->
        <div class="Left">

            <div class="Contenu-Gauche">

                <div class="form-container">


                    <!----- Étape 1 : Identité ----->
                    <form class="form-step active">

                        <!-- Titre -->
                        <div class="Titre">
                            <h1>NextLevel</h1>
                            <!-- Import Logo -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M22 8.65A5 5 0 0 0 17 4H7a5 5 0 0 0-5 4.74A2 2 0 0 0 2 9v7.5A3.48 3.48 0 0 0 5.5 20c1.43 0 2.32-1.06 3.19-2.09.32-.37.65-.76 1-1.1a4.81 4.81 0 0 1 1.54-.75 6.61 6.61 0 0 1 1.54 0 4.81 4.81 0 0 1 1.54.75c.35.34.68.73 1 1.1.87 1 1.76 2.09 3.19 2.09a3.48 3.48 0 0 0 3.5-3.5V9a2.09 2.09 0 0 0 0-.26zm-2 7.85a1.5 1.5 0 0 1-1.5 1.5c-.5 0-1-.64-1.66-1.38-.34-.39-.72-.85-1.15-1.26a6.68 6.68 0 0 0-2.46-1.25 6.93 6.93 0 0 0-2.46 0 6.68 6.68 0 0 0-2.46 1.25c-.43.41-.81.87-1.15 1.26C6.54 17.36 6 18 5.5 18A1.5 1.5 0 0 1 4 16.5V9a.77.77 0 0 0 0-.15A3 3 0 0 1 7 6h10a3 3 0 0 1 3 2.72v.12A.86.86 0 0 0 20 9z"></path><circle cx="16" cy="12" r="1"></circle><circle cx="18" cy="10" r="1"></circle><circle cx="16" cy="8" r="1"></circle><circle cx="14" cy="10" r="1"></circle><circle cx="8" cy="10" r="2"></circle></svg>
                        </div>

                        <!-- Sous-Titres -->
                        <div class="SubTitle">
                            <h2>Bienvenue !</h2>
                        </div>

                        <!-- Prénom -->
                        <div class="Input-group">
                            <input type="text" name="PRENOM" placeholder="Prénom" required>
                        </div>

                        <!-- Adresse email -->
                        <div class="Input-group">
                            <input type="email" name="EMAIL" placeholder="E‑mail" required>
                        </div>

                        <!-- Identifiant -->
                        <div class="Input-group">
                            <input type="text" name="IDENTIFIANT" placeholder="Identifiant" required>
                            <label for="">Identifiant</label>
                        </div>

                        <!-- Mot de passe -->
                        <div class="Input-group">
                            <input type="password" name="MDP" placeholder="Mot de passe" required>
                        </div>


                        <!-- Boutton -->
                        <button type="button" class="btn-next btn">Continuer</button>
                        

                        <!-- Pas de compte -->
                        <div class="Connexion">
                            <p>Vous avez déjà un compte ? <a href="../Connexion/Connexion.php" class"creer-un-compte>Se connecter</a></p>
                        </div>

                        <!-- Étape -->
                        <div class="Etape-connexion">
                            <div class="Etape-valide">
                                <p>1</p>
                            </div>

                            <div class="Etape-non-valide">
                                <p>2</p>
                            </div>

                            <div class="Etape-non-valide">
                                <p>3</p>
                            </div>
                        </div>
                    </form>





                    <!----- Étape 2 : Profil Personnel ----->
                    <form class="form-step">

                        <!-- Titre -->
                        <div class="Titre">
                            <h1>NextLevel</h1>
                            <!-- Import Logo -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M22 8.65A5 5 0 0 0 17 4H7a5 5 0 0 0-5 4.74A2 2 0 0 0 2 9v7.5A3.48 3.48 0 0 0 5.5 20c1.43 0 2.32-1.06 3.19-2.09.32-.37.65-.76 1-1.1a4.81 4.81 0 0 1 1.54-.75 6.61 6.61 0 0 1 1.54 0 4.81 4.81 0 0 1 1.54.75c.35.34.68.73 1 1.1.87 1 1.76 2.09 3.19 2.09a3.48 3.48 0 0 0 3.5-3.5V9a2.09 2.09 0 0 0 0-.26zm-2 7.85a1.5 1.5 0 0 1-1.5 1.5c-.5 0-1-.64-1.66-1.38-.34-.39-.72-.85-1.15-1.26a6.68 6.68 0 0 0-2.46-1.25 6.93 6.93 0 0 0-2.46 0 6.68 6.68 0 0 0-2.46 1.25c-.43.41-.81.87-1.15 1.26C6.54 17.36 6 18 5.5 18A1.5 1.5 0 0 1 4 16.5V9a.77.77 0 0 0 0-.15A3 3 0 0 1 7 6h10a3 3 0 0 1 3 2.72v.12A.86.86 0 0 0 20 9z"></path><circle cx="16" cy="12" r="1"></circle><circle cx="18" cy="10" r="1"></circle><circle cx="16" cy="8" r="1"></circle><circle cx="14" cy="10" r="1"></circle><circle cx="8" cy="10" r="2"></circle></svg>
                        </div>

                        <!-- Sous-Titres -->
                        <div class="SubTitle">
                            <h2>Quel type de gamer êtes vous ?</h2>
                        </div>

                        <!-- Paragraphe -->
                        <div class="Paragraphe">
                            <p>Afin d'optimiser au mieux votre expérience, veuillez remplir ces informations.</p>
                        </div>


                        <!-- Types de jeux -->
                        <div class="Input-group">
                            <select name="TYPE_DE_JEUX" required>
                                <option value="" disabled selected>Type de jeux</option>
                                <option>Action</option>
                                <option>Aventure</option>
                                <option>RPG</option>
                                <option>Stratégie</option>
                                <option>Simulation</option>
                                <option>Sport</option>
                                <option>Puzzle</option>
                            </select>
                        </div>

                        <!-- Plateformes -->
                        <div class="Input-group">
                            <select name="PLATEFORME" required>
                                <option value="" disabled selected>Plateforme</option>
                                <option>PC</option>
                                <option>PS4</option>
                                <option>PS5</option>
                                <option>Xbox One</option>
                                <option>Xbox Series X</option>
                                <option>Switch</option>
                                <option>Mobile</option>
                                <option>Autre</option>
                            </select>
                        </div>

                        <!-- Boutton -->
                        <button type="button" class="btn-next btn">Continuer</button>

                        <!-- Étape -->
                        <div class="Etape-connexion">
                            <div class="Etape-valide">
                                <p>1</p>
                            </div>

                            <div class="Etape-valide">
                                <p>2</p>
                            </div>

                            <div class="Etape-non-valide">
                                <p>3</p>
                            </div>
                        </div>
                    </form>





                    <!----- Étape 3 : Préférences & Localisation ----->
                    <form class="form-step">

                        <!-- Titre -->
                        <div class="Titre">
                            <h1>NextLevel</h1>
                            <!-- Import Logo -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M22 8.65A5 5 0 0 0 17 4H7a5 5 0 0 0-5 4.74A2 2 0 0 0 2 9v7.5A3.48 3.48 0 0 0 5.5 20c1.43 0 2.32-1.06 3.19-2.09.32-.37.65-.76 1-1.1a4.81 4.81 0 0 1 1.54-.75 6.61 6.61 0 0 1 1.54 0 4.81 4.81 0 0 1 1.54.75c.35.34.68.73 1 1.1.87 1 1.76 2.09 3.19 2.09a3.48 3.48 0 0 0 3.5-3.5V9a2.09 2.09 0 0 0 0-.26zm-2 7.85a1.5 1.5 0 0 1-1.5 1.5c-.5 0-1-.64-1.66-1.38-.34-.39-.72-.85-1.15-1.26a6.68 6.68 0 0 0-2.46-1.25 6.93 6.93 0 0 0-2.46 0 6.68 6.68 0 0 0-2.46 1.25c-.43.41-.81.87-1.15 1.26C6.54 17.36 6 18 5.5 18A1.5 1.5 0 0 1 4 16.5V9a.77.77 0 0 0 0-.15A3 3 0 0 1 7 6h10a3 3 0 0 1 3 2.72v.12A.86.86 0 0 0 20 9z"></path><circle cx="16" cy="12" r="1"></circle><circle cx="18" cy="10" r="1"></circle><circle cx="16" cy="8" r="1"></circle><circle cx="14" cy="10" r="1"></circle><circle cx="8" cy="10" r="2"></circle></svg>
                        </div>

                        <!-- Sous-Titres -->
                        <div class="SubTitle">
                            <h2>Quel type de gamer êtes vous ?</h2>
                        </div>

                        <!-- Paragraphe -->
                        <div class="Paragraphe">
                            <p>Afin d'optimiser au mieux votre expérience, veuillez remplir ces informations.</p>
                        </div>

                        <!-- Genre -->
                        <div class="Input-group">
                            <select name="GENRE" required>
                                <option value="" disabled selected>Genre</option>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                            </select>
                        </div>
                        
                        <!-- Age -->
                        <div class="Input-group">
                            <input type="number" name="AGE" placeholder="Âge" min="1" max="120" required>
                        </div>

                        <!-- Loisirs -->
                        <div class="Input-group">
                            <input type="text" name="LOISIRS" placeholder="Loisirs (séparés par des virgules)">
                        </div>



<!-- ------------------ -->




                        <div class="checkbox-group">
                            <label><input type="checkbox" name="hobbies[]" value="musique"> Musique</label>
                            <label><input type="checkbox" name="hobbies[]" value="sport"> Sport</label>
                            <label><input type="checkbox" name="hobbies[]" value="balade"> Balade</label>
                            <label><input type="checkbox" name="hobbies[]" value="lecture"> Lecture</label>
                            <label><input type="checkbox" name="hobbies[]" value="cinema"> Cinéma</label>
                        </div>









<!-- ------------------ -->


                        <!-- Localisation -->
                         <div class="Input-group">
                            <select name="LOCALISATION" required>
                                <option value="" disabled selected>Localisation</option>
                                <option>PARIS</option>
                                <option>Marseille</option>
                                <option>Lyon</option>
                                <option>Toulouse</option>
                                <option>Nice</option>
                                <option>Nantes</option>
                                <option>Strasbourg</option>
                                <option>Montpellier</option>
                                <option>Bordeaux</option>
                                <option>Lille</option>
                                <option>Rennes</option>
                                <option>Reims</option>
                                <option>Le Havre</option>
                                <option>Saint-Étienne</option>
                                <option>Toulon</option>
                                <option>Grenoble</option>
                                <option>Dijon</option>
                                <option>Angers</option>
                                <option>Nîmes</option>
                                <option>Villeurbanne</option>
                            </select>
                         </div>
                        

                        <!-- Biographie -->
                        <div class="Input-group">
                            <textarea name="BIOGRAPHIE" placeholder="Biographie" required></textarea>
                        </div>
                        
                        
                        <!-- Boutton -->
                        <button type="button" class="btn-submit btn">Terminer</button>

                        <!-- Étape -->
                        <div class="Etape-connexion">
                            <div class="Etape-valide">
                                <p>1</p>
                            </div>
                            <div class="Etape-valide">
                                <p>2</p>
                            </div>
                            <div class="Etape-valide">
                                <p>3</p>
                            </div>
                        </div>
                    </form>
                    </div>








                </div>
                
            </div>
        </div>

        <!--------------- CONTENU DROITE --------------->
        <div class="Right">
            
        </div>

    </div>
    
    <script src="Inscription.js"></script>
</body>
</html>