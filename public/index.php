<!doctype html>
<?php
    // affichage des erreurs
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Teva Philippe</title>
    <style>
        
        nav {
            display: flex;
            justify-content: center;
            background: #252540;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        nav a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 1.5rem;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #6d5dfc;
        }
        .dropdown {
            position: absolute;
            top: 1rem;
            right: 2rem;
        }
        .dropdown button {
            background: #252540;
            color: #ffffff;
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }
        .dropdown button:hover {
            background: #6d5dfc;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background: #252540;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            padding: 0.5rem 0;
        }
        .dropdown-content a {
            display: block;
            color: #ffffff;
            text-decoration: none;
            padding: 0.5rem 1rem;
        }
        .dropdown-content a:hover {
            background: #6d5dfc;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            background: #2e2e44;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        .container h2 {
            color: #6d5dfc;
        }
        .card {
            background: #3a3a55;
            margin: 1.5rem 0;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card h3 {
            color: #5e96ff;
        }
        
        button {
            background: #6d5dfc; /* Couleur de fond */
            color: #ffffff; /* Couleur du texte */
            padding: 1rem 2rem; /* Plus grand padding */
            border: none; /* Pas de bordure */
            border-radius: 12px; /* Bords plus arrondis */
            font-weight: bold; /* Texte en gras */
            cursor: pointer; /* Curseur en main */
            transition: 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease; /* Transition pour l'animation */
        }
        button:hover {
            background: #5e96ff;
        }

        /* Header, Body et Footer */

        header {
            background: linear-gradient(135deg, #5366c6, #006e4e); /* Dégradé du header */
            color: #ccffff;
            text-align: center;
            padding: 1.9rem; /* Taille du header */
        }

        body {
            font-family: sans-serif;
            margin: 0; /* Assure que les éléments occupent toute la page */
            box-sizing: border-box; /* Permet que la taille des éléments soit gérée correctement */
            background-color: #1e1e2f;
            color: #cccccc;
        }

        footer {
            background: #252540;
            text-align: center;
            padding: 1.3rem; /* Taille du footer */
            margin-top: 3rem; /* Distance du dernier élément de la page */
            border-top: 3px solid #6d5dfc; /* Bordure du dessus de l'élément */
        }

    </style>
</head>
<body>
    <header>
        <h1>Bienvenue sur le site de Teva Philippe</h1>
        <div class="dropdown">
            <button>Menu</button>
            <div class="dropdown-content">
                <a href="index"> Introduction et Présentation </a>
                <a href="test"> Mon Parcours</a> <!-- TODO -->
                <a href="index"> Projets et Portefolio</a> <!-- TODO -->
                <a href="index"> Événements et Activités</a> <!-- TODO -->
                <a href="index"> Mon blog</a> <!-- TODO -->
                <a href="index"> Me contacter</a> <!-- TODO -->
            </div>
        </div>
    </header>
    <nav>
        <a href="#accueil">Présentation</a>
        <a href="#about">Mon parcours</a>
        <a href="#contact">Mes projets</a>
    </nav>
    <div class="container" id="accueil">
        <h2>Voici les différentes pages disponibles</h2>
        <p>Bonjour, je suis Teva PHILIPPE actuellement en deuxième année de licence informatique à l'USMB. Ce site est actuellement en construction. <br> <br>

        Mémo : A développer - > <br>
        <br>
        - Nuit de l'info 2024<br>
        - Mon Job à l'aéroport<br>
        - Langages de programmation et logiciels : Arduino, Jetpack Compose Kotlin, Html, Css, php, Java Script, Java, C++, Unreal Engine, Arduino, Python, Svelte, Vu js, Ada, Bash, SQL<br>
        - Mon application android<br>
        - Projet visi Python<br>
        - Plugin minecraft<br>
        <br>
        A apprendre :<br>
        - rust<br>
        - C et C# <br>
        <br>
        A faire : passer entierement sous linux

        </p>
    </div>
    <div class="container" id="about">
        <h2>A propos</h2>
        <div class="card">
            <h3>Machin</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor magna eu orci tincidunt, a convallis lorem sollicitudin.</p>
        </div>
        <div class="card">
            <h3>Truc</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fermentum lacus ut purus efficitur, eget consequat eros hendrerit.</p>
        </div>
    </div>
    <div class="container" id="contact">
        <h2>Pour me contacter</h2>
        <h3>Voici un lien vers mon gitHub</h3>
        <a href="https://github.com/TevaPhilippe05">Git</a>
    </div>
    <footer>
        <p>&copy; 2025 Teva Philippe. Tous droits réservés.</p>
    </footer>
</body>
</html>