<!-- Index.php -->

<?php
session_start();
// Si pas connecté, retour vers connexion.php
if (empty($_SESSION['user_id'])) {
    header('Location: ../Parcours_Utilisateurs/Connexion/Connexion.php');
    exit;
}
?>

<!--------------->


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Import CSS -->
    <link rel="stylesheet" href="Index.css">
    <!-- CSS spécifique à chaque page -->
    <link id="page-css" rel="stylesheet" href="css/Index.css">
    <title>Accueil</title>
</head>
<body>

    <!--------------- CONTENU PRINCIPALE --------------->
    <div class="Contenu">

        <div id="Blue_circle"></div>
        <div id="Pink_circle"></div>


        <!-- <nav>
            <div class="Sidebar">
                <div class="Sidebar-content">
                    <ul class="Lists">

                        <li class="List">
                            <a href="#" class="Nav-link">
                                <i class='bx  bx-home-alt icon' ></i> 
                                <span class="Link">Accueil</span>
                            </a>
                        </li>

                        <li class="List">
                            <a href="#" class="Nav-link">
                                <i class='bx  bx-message icon' ></i> 
                                <span class="Link">Chat</span>
                            </a>
                        </li>

                        <li class="List">
                            <a href="#" class="Nav-link">
                                <i class='bx  bx-group icon' ></i> 
                                <span class="Link">Amis</span>
                            </a>
                        </li>

                        <li class="List">
                            <a href="#" class="Nav-link">
                                <i class='bx  bx-dice-3 icon' ></i> 
                                <span class="Link">Jeux</span>
                            </a>
                        </li>

                        <li class="List">
                            <a href="#" class="Nav-link">
                                <i class='bx  bx-rocket icon' ></i> 
                                <span class="Link">Évenements</span>
                            </a>
                        </li>

                        <li class="List">
                            <a href="#" class="Nav-link">
                                <i class='bx  bx-station icon' ></i> 
                                <span class="Link">Live</span>
                            </a>
                        </li>

                    </ul>

                    <ul class="Bottom-content">
                        <li class="List">
                            <a href="#" class="Nav-link">
                                <i class='bx  bx-cog icon' ></i> 
                                <span class="Link">Paramètres</span>
                            </a>
                        </li>

                        <li class="List">
                            <a href="#" class="Nav-link">
                                <i class='bx  bx-log-out icon' ></i> 
                                <span class="Link">Déconnexion</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav> -->


<!--------------- SIDEBAR --------------->
<div class="Sidebar">

    <section id="sidebar">

        <!-- Logo -->
		<a href="#" class="Logo">
            <i class='bx  bx-joystick' ></i> 
			<span class="text">NextLevel</span>
		</a>

        <!---------- 1e partie d'onglets ---------->
		<ul class="side-menu top">
            <!-- Accueil -->
			<li class="active">
				<a href="#" data-tab="Accueil" class="active">
					<i class='bx  bx-home-alt' ></i>
					<span class="text">Accueil</span>
				</a>
			</li>

            <!-- Chat -->
			<li>
				<a href="#" data-tab="Chat">
					<i class='bx  bx-message' ></i>
					<span class="text">Chat</span>
				</a>
			</li>

            <!-- Amis -->
			<li>
				<a href="#" data-tab="Amis">
					<i class='bx  bx-group' ></i>
					<span class="text">Amis</span>
				</a>
			</li>

            <!-- Jeux -->
			<li>
				<a href="#" data-tab="Jeux">
					<i class='bx  bx-dice-3' ></i>
					<span class="text">Jeux</span>
				</a>
			</li>

            <!-- Évenements -->
			<li>
				<a href="#" data-tab="Evenements">
					<i class='bx  bx-rocket' ></i>
					<span class="text">Évenements</span>
				</a>
			</li>

            <!-- Live -->
            <li>
				<a href="#" data-tab="Live">
					<i class='bx  bx-station' ></i>
					<span class="text">Live</span>
				</a>
			</li>
		</ul>

        <!---------- 2e partie d'onglets ---------->
		<ul class="side-menu">

            <!-- Paramètres -->
			<li>
				<a href="#" data-tab="Parametres">
					<i class='bx bx-cog' ></i>
					<span class="text">Paramètres</span>
				</a>
			</li>

            <!-- Déconnexion -->
            <form method="POST" action="Deconnexion.php">
            <li>
                <a href="#" class="logout">
                    <i class='bx  bx-log-out' ></i>
                    <span class="text">Déconnexion</span>

                </a>
            </li>
            
            <form method="POST" action="Deconnexion.php">
                <button type="submit">Déconnexion</button>
            </form>
		</ul>
	</section>
</div>
<!--------------- SIDEBAR --------------->


<!--------------- Container --------------->
<div class="Container">

  <!-- Zone où le contenu PHP sera chargé dynamiquement -->

  <main class="content" id="content">
    <h1>Bienvenue, <?= htmlspecialchars($_SESSION['identifiant']) ?> !</h1>
    <!-- Le contenu des pages sera injecté ici -->
  </main>

    <!-- <main class="content"> -->

        <!-- Accueil -->
        <!-- <div id="Accueil" class="tab-content ">
            <h2>Accueil</h2>
            <p>Voici la page d'accueil.</p>
        </div> -->

        <!-- Chat -->
        <!-- <div id="Chat" class="tab-content">
            <h2>Chat</h2>
            <p>Voici la page de chat.</p>
        </div> -->

        <!-- Amis -->
        <!-- <div id="Amis" class="tab-content">
            <h2>Amis</h2>
            <p>Voici la page d'amis.</p>
        </div> -->

        <!-- Jeux -->
        <!-- <div id="Jeux" class="tab-content">
            <h2>Jeux</h2>
            <p>Voici la page de jeux.</p>
        </div> -->

        <!-- Ebenements -->
        <!-- <div id="Evenements" class="tab-content">
            <h2>Evenements</h2>
            <p>Voici la page d'événements.</p>
        </div> -->

        <!-- Live -->
        <!-- <div id="Live" class="tab-content">
            <h2>Live</h2>
            <p>Voici la page de live.</p>
        </div> -->

        <!-- Paramètres -->
        <!-- <div id="Parametres" class="tab-content">
            <h2>Paramètres</h2>
            <p>Voici la page de paramètres.</p>
        </div> -->
        
    <!-- </main> -->





  <!-- Script de gestion des onglets : pages et css -->
  <script>

    document.addEventListener('DOMContentLoaded', () => {
        const tabs = document.querySelectorAll('.side-menu a');
        const content = document.getElementById('content');
        const pageCss = document.getElementById('page-css');

        if (!content || !pageCss) {
        console.error('Élément #content ou #page-css introuvable');
        return;
        }

        if (!content) {
            console.error('Élément #content introuvable');
            return;
        }

        function loadPage(page) {
            // Mettre à jour le CSS spécifique
            const cssPath = `css/${page}.css`;
            const bust = Date.now();
            pageCss.href = `${cssPath}?ts=${bust}`;
            pageCss.onerror = () => console.error(`Échec du chargement CSS: ${cssPath}`);


            // 2) Charger le contenu PHP
            // fetch(`Pages/${page}.php`)
            // .then(response => {
            //     if (!response.ok) throw new Error('Erreur de chargement');
            //     return response.text();
            // })
            // .then(html => {
            //     content.innerHTML = html;
            // })
            // .catch(err => {
            // content.innerHTML = `
            //     <p>Impossible de charger la page "${page}".</p>
            //     <pre>${err.message}</pre>
            // `;
            // console.error('Détail de l’erreur :', err);
            // });



            const phpPath = `Pages/${page}.php`;
            console.log(`Tentative de chargement : ${phpPath}`);
            fetch(phpPath)
            .then(response => {
                console.log(`Réponse (${response.status}):`, response);
                if (!response.ok) throw new Error(`Status ${response.status} - ${response.statusText}`);
                return response.text();
            })
            .then(html => {
                content.innerHTML = html;
            })
            .catch(err => {
                content.innerHTML = `
                <p>Impossible de charger la page "${page}".</p>
                <pre>${err.message}</pre>
                `;
                console.error('Détail de l’erreur :', err);
            });
        }

        // Gestion des clicks sur la nav principale
        tabs.forEach(link => {
            link.addEventListener('click', event => {
            event.preventDefault();
            const page = link.dataset.tab;

            // Mettre à jour la classe active
            tabs.forEach(l => l.classList.toggle('active', l === link));

            // Charger le contenu PHP et CSS
            loadPage(page);
            });
        });



        // Boutons internes dans #content
        content.addEventListener('click', event => {
            //Rrcupère l'attribut data-tab du bouton/lien cliqué
            const target = event.target;
            const subPage = target.dataset.tab;
            if (!subPage) return;        // rien à faire si pas de data-tab
            event.preventDefault();      // on empêche l'éventuel href

            // Retirer l'active des navs
            tabs.forEach(l => l.classList.remove('active'));

            // Charger la "sous-page"
            loadPage(subPage);
        });



    });





  </script>





</div>
<!--------------- Container --------------->










</div>

<script src="Script.js"></script>
</body>
</html>