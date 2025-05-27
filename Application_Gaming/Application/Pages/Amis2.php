<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amis 2</title>
</head>
<body>

    <!-- Trouves tes amis -->
    <div class="Trouves-tes-amis">
        <h2>Trouves tes amis version 2 !</h2>
        <button id="btn-amis-v1" data-tab="amis">Retour à la version 1</button>
        </button>
    </div>

    <!-- Suggestions -->
    <div class="Suggestions">
        <h2>Suggestions</h2>
    </div>

    <!-- En ligne -->
    <div class="En-ligne">
        <h2>En ligne</h2>
    </div>

    <!-- Mes amis -->
    <div class="Mes-amis">
        <h2>Mes amis</h2>
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