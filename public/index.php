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
        
        /* Menu */
        nav {
            display: flex;
            justify-content: center;
            background: #252540;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            font-size: 22px;
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

        /* Menu_deroulant */
        .dropdown {
            position: absolute;
            top: 1.3rem;
            right: 2rem;
        }
        .dropdown button {
            background: #252540;
            color: #ffffff;
            padding: 1rem 2.2rem;
            border: none;
            border-radius: 5px;
            font-size: 1.6rem;
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
            font-size: 16px;
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

        /* Cartes */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            background: #2e2e44;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        .container h2 {
            margin-top: 0;
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
            transform: translateY(-10px); /* Permet de faire monter les cartes quand survolé */
        }
        .card h3 {
            margin-top: 0;
            margin-bottom: 0;
            color: #5e96ff; /* Titre des cartes en bleu */
        }
        .card .date {
            color: rgba(255, 255, 255, 0.6); /* Texte grisé ou transparent */
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
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
            padding: 1.5rem; /* Taille du header */
        }

        body {
            font-family: sans-serif;
            margin: 0; /* Assure que les éléments occupent toute la page */
            box-sizing: border-box; /* Permet que la taille des éléments soit gérée correctement */
            background-color: #1e1e2f;
            color: #cccccc;
            line-height: 1.8;
            font-size: 19px;
        }

        h1 {
            font-size: 38px;
        }

        footer {
            background: #252540;
            text-align: center;
            padding: 1.3rem; /* Taille du footer */
            margin-top: 3rem; /* Distance du dernier élément de la page */
            border-top: 3px solid #6d5dfc; /* Bordure du dessus de l'élément */
        }

        #icons svg {
            width: 5em;
            height: 5em;
            fill: #cccccc; /* Default icon color */
        }

        #icons {
            display: flex;
            flex-wrap: wrap;
        }

        #icons a {
            text-decoration: none;
            color: #ffffff; /* Ensure text is visible */
            display: inline-flex; 
            padding: 0; /* Supprime tout padding éventuel */
            margin: 0; /* Supprime les marges autour */
        }

        #icons figcaption {
            margin: 0.5rem 0 0;
            padding: 0; /* Supprime les paddings superflus */
            text-align: center;
        }       

        #icons a figure {
            margin-left: 0;
            margin-right: 0;
            margin-top: 0;
            margin-bottom: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: max-content;
        }


        #icons a:hover figure svg{
            stroke: var(--tertiary);
            fill: var(--tertiary);
            transition: .2s;
        }

        .savoir_plus{
            display: flex;
            justify-content: right;   
        }

        .savoir_plus a{
            color: #C8AD7F;
            transition: .3s ease-in-out;
        }

        .savoir_plus a:hover{
            transform: scale(1.15);
        }


    </style>
</head>
<body>
    <header>
        <h1>Bienvenue sur le site de Teva Philippe</h1>
        <div class="dropdown">
            <button>Menu</button>
            <div class="dropdown-content">
                <a href="index">Introduction et Présentation</a>
                <a href="parcours">Mon Parcours</a> <!-- TODO -->
                <a href="projets">Mes Projets</a> <!-- TODO -->
                <a href="evenements">Événements et Activités</a> <!-- TODO -->
                <a href="blog">Mon blog</a> <!-- TODO -->
                <a href="contact">Me contacter</a> <!-- TODO -->
            </div>
        </div>
    </header>
    <nav>
        <a href="#accueil">Présentation</a>
        <a href="#parcours">Mon parcours</a>
        <a href="#projets">Mes projets</a>
    </nav>

    <div class="container" id="accueil">
        <h2>Présentation</h2>
        <p>Bonjour, je suis <strong>Teva Philippe</strong>, étudiant en deuxième année de licence informatique à l'USMB. Passionné par les technologies, je développe des projets variés en programmation et participe à des événements comme la Nuit de l'Info. </p>
    </div>

    <div class="container" id="parcours">
        <h2>Mon parcours</h2>
        
        <div class="card">
            <h3>Nuit de l'Info 2024</h3>
            <p class="date">Nuit du 5/12/2024 au 6/12/2024</p>
            <p>Participation à cet événement annuel qui rassemble des étudiants pour relever des défis en programmation en l'espace d'une nuit.</p>
        </div>

        <div class="card">
            <h3>Job étudiant à l'aéroport</h3>
            <p class="date">15/11/2024 - 15/05/2025</p>
            <p>Agent d'enregistrement des bagages chaque week end à l'aéroport de Chambéry Savoie Mont Blanc.</Mont-Blanc></p>
        </div>
        <span class="savoir_plus">
            <a href="parcours">En savoir plus</a>
        </span>
    </div>

    <div class="container" id="projets">
        <h2>Mes projets</h2>
        <div class="card">
            <h3>Mon application Android</h3>
            <p>Une application développée avec Jetpack Compose Kotlin, offrant des fonctionnalités de gestion des tâches et de rappels.</p>
        </div>
        <div class="card">
            <h3>Plugin Minecraft</h3>
            <p>Création d'un plugin personnalisé en Java pour améliorer l'expérience multijoueur.</p>
        </div>
        <span class="savoir_plus">
            <a href="parcours">En savoir plus</a>
        </span>
    </div>

    <div class="container" id="contact">
        <h2>Pour me contacter</h2>
        <span id="icons">
            <a href="https://github.com/TevaPhilippe05">
                <figure>
                    <title>Python</title>
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title>
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    <figcaption>
                        GitHub
                    </figcaption>
                </figure>
            </a>
        </span>
    </div>

    <footer>
        <p>&copy; 2025 Teva Philippe. Tous droits réservés.</p>
    </footer>
</body>
</html>