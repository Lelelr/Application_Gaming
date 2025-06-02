<?php
session_start();
// require_once(DIR . 'Actions/connexion_bdd.php'); // Connexion à la BDD

// // Récupérer le nom de l'image dans la base de données
// $query = $conn->prepare("SELECT PHOTO_PROFIL FROM USERS WHERE ID = :id");
// $query->bindParam(':id', $userId, PDO::PARAM_INT);
// $query->execute();
// $result = $query->fetch(PDO::FETCH_ASSOC);

// // Nom du fichier
// $photoFileName = htmlspecialchars($photoFileName);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres</title>
</head>
<body>

    <!-- <div class="Liste">
        <h2>Général</h2>

        <div class="Sidebar-parametres">

            <section id="sidebar-parametres"> -->

                <!---------- 1e partie d'onglets ---------->
                <!-- <ul class="sidebar-generale"> -->
                    <!-- Accueil -->
                    <!-- <li class="active">
                        <a href="#" data-tab="Profil" class="active">
                            <i class='bx  bx-home-alt' ></i>
                            <span class="text">Profil</span>
                        </a>
                    </li> -->

                    <!-- Chat -->
                    <!-- <li>
                        <a href="#" data-tab="Securite">
                            <i class='bx  bx-message' ></i>
                            <span class="text">Sécurité</span>
                        </a>
                    </li> -->

                    <!-- Amis -->
                    <!-- <li>
                        <a href="#" data-tab="Apparence">
                            <i class='bx  bx-group' ></i>
                            <span class="text">Apparence</span>
                        </a>
                    </li> -->

                    <!-- Jeux -->
                    <!-- <li>
                        <a href="#" data-tab="Aide-et-contact">
                            <i class='bx  bx-dice-3' ></i>
                            <span class="text">Aide & contact</span>
                        </a>
                    </li>
                </ul> -->
<!-- 
            </section>

        </div>
        
    </div> -->


    <div class="Informations">

        <div class="Haut">
            <!-- Avatar -->
            <img src="../Images/Photo_profil/<?php echo $_SESSION['photo_profil']; ?>" alt="Photo de profil">
            <!-- Bouton -->
            <Button type="submit" class="Modifier">Modifier</button>
        </div>


        <div class="Milieu-gauche">

            <!-- Identifiant -->
            <div class="Input-group">
                <input type="text" id="identifiant" name="identifiant" value="<?php echo $_SESSION['identifiant']; ?>">
                <label for="identifiant">Identifiant</label>
            </div>

            <!-- Mot de passe -->
            <div class="Input-group">
                <input type="password" id="mdp" name="mdp" value="<?php echo $_SESSION['mdp']; ?>">
                <label for="mdp">Mot de passe</label>
            </div>

            <!-- Prénom -->
            <div class="Input-group">
                <input type="text" name="PRENOM" placeholder="Prénom" value="<?php echo $_SESSION['prenom']; ?>" required>
            </div>

            <!-- ADRESSE EMAIL -->
            <div class="Input-group">
                <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" required>
                <label for="email">e-mail</label>
            </div>

            <!-- Types de jeux -->
            <div class="Input-group">
                <select name="TYPE_DE_JEUX" required>
                    <option value="" disabled selected><?php echo $_SESSION['type_de_jeux']; ?></option>
                    <option>Action</option>
                    <option>Aventure</option>
                    <option>RPG</option>
                    <option>Stratégie</option>
                    <option>Simulation</option>
                    <option>Sport</option>
                    <option>Puzzle</option>
                </select>
            </div>

        </div>




        <div class="Milieu-droite">

            <!-- Genre -->
            <div class="Input-group">
                <select name="GENRE" required>
                    <option value="" disabled selected><?php echo $_SESSION['genre']; ?></option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
            </div>
            
            <!-- Age -->
            <div class="Input-group">
                <input type="number" name="AGE" placeholder="Âge" min="1" max="120" value="<?php echo $_SESSION['age']; ?>" required>
                <label for="age">Âge</label>
            </div>

            <!-- Loisirs -->
            <div class="Input-group">
                <input type="text" name="LOISIRS" placeholder="Loisirs (séparés par des virgules)" value="<?php echo $_SESSION['loisirs']; ?>" required>
                <label for="loisirs">Loisirs</label>
            </div>

            <!-- Localisation -->
            <div class="Input-group">
                <select name="LOCALISATION" required>
                    <option value="" disabled selected><?php echo $_SESSION['localisation']; ?></option>
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

            <!-- Plateforme(s) utilisée(s) -->
            <div class="Input-group">
                <select name="PLATEFORME" required>
                    <option value="" disabled selected><?php echo $_SESSION['plateforme']; ?></option>
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

        </div>

        <!-- Biographie -->
        <div class="Biographie">
            <div class="Input-group">
                <textarea name="BIOGRAPHIE" placeholder="Biographie" required></textarea>
            </div>
        </div>
            
        <div class="Bas">

        </div>


    </div>














        <div class="Droite">

            <!-- Identifiant -->
            <div class="Input-group">
                <input type="text" id="identifiant" name="identifiant" value="<?php echo $_SESSION['identifiant']; ?>">
                <label for="identifiant">Identifiant</label>
            </div>

            <!-- Mot de passe -->
            <div class="Input-group">
                <input type="password" id="mdp" name="mdp" value="<?php echo $_SESSION['mdp']; ?>">
                <label for="mdp">Mot de passe</label>
            </div>

            <!-- ADRESSE EMAIL -->
            <div class="Input-group">
                <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>">
                <label for="mdp">e-mail</label>
            </div>

        </div>

    
</body>
</html>