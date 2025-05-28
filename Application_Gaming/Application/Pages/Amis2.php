<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amis 2</title>
</head>
<body>

    <!-- Retour -->
    <!-- <div class="Retour">
        <h2>Retour</h2>
        <button id="btn-amis-v1" data-tab="Amis">Retour à la version 1</button>
    </div> -->

    <!-- Affichage -->
    <div class="Affichage">
        <div class="Gauche">

            <!-- Effet -->
            <div class="Effet"></div>

            <!-- Partie du Haut -->
            <div class="Haut"></div>

            <!-- Partie du Bas -->
            <div class="Bas">
                <div class="Bordure"></div>
                <!-- Boutton Demander -->
                <Button type="submit" class="btn-Demander">Demander</button>

                <!-- Boutton Ignorer -->
                <Button type="submit" class="btn-Ignorer">Ignorer</button>
            </div>
        </div>
        



        <div class="Droite">
            <div class="Premiere-partie">
                <h2>Identifiant</h2>
                <div class="Age"></div>
            </div>

            <div class="Deuxieme-partie"></div>

            <div class="Troisieme-partie">
                <p>Biographie</p>
            </div>

            <div class="Bordure"></div>


            <div class="Quatrieme-partie"></div>

        </div>
    </div>

    <!-- Rechercher un amis -->
    <div class="Rechercher-un-amis">
        <h2>Rechercher un amis !</h2>

        </button>
    </div>

    <!-- Filtres -->
    <div class="Filtres">
        <h2>Filtres</h2>
    </div>






    <script>
        // délégation pour revenir
        $("#content").on("click", "#btn-amis-v1", function(){
        // on réutilise loadPage défini dans index
        loadPage("amis");
        });
    </script>

</body>
</html>



<!-- Pour afficher les utilisateurs aléatoirement -->
<!-- Filtrer ce que l'utilisateur actuel : -->
<!-- N'a pas déja en relation (ami ou demande envoyée / reçue) -->
<!-- N'a pas bloqué -->
<!-- ne s'affiche pas lui-même -->