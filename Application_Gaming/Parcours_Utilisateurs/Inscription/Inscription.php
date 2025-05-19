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

                <!-- Titre -->
                <div class="Titre">
                    <h1>NextLevel</h1>
                    <!-- Import Logo -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M22 8.65A5 5 0 0 0 17 4H7a5 5 0 0 0-5 4.74A2 2 0 0 0 2 9v7.5A3.48 3.48 0 0 0 5.5 20c1.43 0 2.32-1.06 3.19-2.09.32-.37.65-.76 1-1.1a4.81 4.81 0 0 1 1.54-.75 6.61 6.61 0 0 1 1.54 0 4.81 4.81 0 0 1 1.54.75c.35.34.68.73 1 1.1.87 1 1.76 2.09 3.19 2.09a3.48 3.48 0 0 0 3.5-3.5V9a2.09 2.09 0 0 0 0-.26zm-2 7.85a1.5 1.5 0 0 1-1.5 1.5c-.5 0-1-.64-1.66-1.38-.34-.39-.72-.85-1.15-1.26a6.68 6.68 0 0 0-2.46-1.25 6.93 6.93 0 0 0-2.46 0 6.68 6.68 0 0 0-2.46 1.25c-.43.41-.81.87-1.15 1.26C6.54 17.36 6 18 5.5 18A1.5 1.5 0 0 1 4 16.5V9a.77.77 0 0 0 0-.15A3 3 0 0 1 7 6h10a3 3 0 0 1 3 2.72v.12A.86.86 0 0 0 20 9z"></path><circle cx="16" cy="12" r="1"></circle><circle cx="18" cy="10" r="1"></circle><circle cx="16" cy="8" r="1"></circle><circle cx="14" cy="10" r="1"></circle><circle cx="8" cy="10" r="2"></circle></svg>
                </div>

        
                <!-- Étape 1 : Identité -->
                <form class="form-step active">

                    <!-- Sous-Titres -->
                    <div class="SubTitle">
                        <h2>Bienvenue !</h2>
                    </div>

                    <!-- Identifiant -->
                    <div class="Input-group">
                        <input type="text" name="IDENTIFIANT" placeholder="" required>
                        <label for="">Identifiant</label>
                    </div>
                        
                    <!-- Prénom -->
                    <div class="Input-group">
                    <input type="text" name="PRENOM" placeholder="" required>
                    <label for="">Prénom</label>
                    </div>

                    <!-- Adresse Email -->
                    <div class="Input-group">
                    <input type="email" name="EMAIL" placeholder="E‑mail" required>
                    <label for="">Email</label>
                    </div>

                    <!-- Mot de passe -->
                    <div class="Input-group">
                    <input type="password" name="MDP" placeholder="Mot de passe" required>
                    <label for="">Mot de passe</label>
                    </div>

                    <!-- Boutton -->
                    <button type="button" class="btn-next btn">Continuer</button>

                    <!-- Déjà un compte -->
                    <div class="Connexion">
                        <p>Vous avez déjà un compte ? <a href="../Connexion/Connexion.php" class"creer-un-compte>Se connecter</a></p>
                    </div>
                </form>

                



                <!-- Étape 2 : Compte & Profil -->
                <form class="form-step">

                    <!-- Sous-Titres -->
                    <div class="SubTitle">
                        <h2>Quel type de gamer êtes vous ? </h2>
                    </div>

                    <!-- Types de jeux -->
                    <select name="TYPE_DE_JEUX" required>
                        <option value="" disabled selected>Type de jeux</option>
                        <option>Action</option>
                        <option>Aventure</option>
                        <option>RPG</option>
                        <option>Stratégie</option>
                        <option>Simulation</option>
                        <option>Sport</option>
                        <option>Puzzle</option>
                        <option>Autre</option>
                    </select>

                    <!-- Plateformes -->
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

                    <!-- Boutton -->
                <button type="button" class="btn-next">Continuer</button>
                </form>

                <!-- Étape 3 : Préférences & Localisation -->
                <form class="form-step">

                <!-- Genre -->
                    <select name="GENRE" required>
                        <option value="" disabled selected>Genre</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>

                    <!-- Age -->
                    <input type="number" name="AGE" placeholder="Âge" min="1" max="120" required>

                    <!-- Loisirs -->
                    <input type="text" name="LOISIRS" placeholder="Loisirs (séparés par des virgules)">

                    <!-- Localisation -->
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

                    <!-- Biographie -->
                    <textarea name="BIOGRAPHIE" placeholder="Biographie"></textarea>
                    
                    <!-- Boutton -->
                    <button type="button" class="btn-submit">Terminer</button>
                </form>
                </form>
                
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