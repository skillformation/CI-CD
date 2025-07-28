<?php include_once("index.html"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Nom - Développeur Backend Laravel</title>
    <meta name="description" content="Portfolio professionnel de [Votre Nom], développeur backend Laravel spécialisé dans la conception d'APIs robustes, l'optimisation de bases de données et le déploiement sécurisé.">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Custom Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fadeInUp {
            opacity: 0;
            animation-fill-mode: forwards;
        }

        .animate-fadeInUp-visible {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .delay-200 { animation-delay: 0.2s; }
        .delay-400 { animation-delay: 0.4s; }

        /* Icon Sizing */
        .icon-svg {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
        }

        /* Mobile Menu */
        #mobile-menu.hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-950 text-gray-200 leading-normal tracking-wide">

    <header class="bg-black py-4 shadow-xl sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4 sm:px-6 lg:px-8">
            <a href="#" class="text-2xl sm:text-3xl font-extrabold text-green-500 hover:text-green-400 transition duration-300 p-2 rounded-lg">
                <span class="text-white">Votre</span><span class="text-green-500">Nom</span>
            </a>
            <nav class="hidden md:block">
                <ul class="flex space-x-4 lg:space-x-8">
                    <li><a href="#about" class="text-base lg:text-lg text-gray-300 hover:text-green-500 transition duration-300 p-2 rounded-md">À Propos</a></li>
                    <li><a href="#skills" class="text-base lg:text-lg text-gray-300 hover:text-green-500 transition duration-300 p-2 rounded-md">Compétences</a></li>
                    <li><a href="#projects" class="text-base lg:text-lg text-gray-300 hover:text-green-500 transition duration-300 p-2 rounded-md">Projets</a></li>
                    <li><a href="#contact" class="text-base lg:text-lg text-gray-300 hover:text-green-500 transition duration-300 p-2 rounded-md">Contact</a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-300 hover:text-green-500 focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <nav id="mobile-menu" class="md:hidden bg-black px-4 pt-2 pb-4 hidden">
            <ul class="flex flex-col space-y-2">
                <li><a href="#about" class="block text-base text-gray-300 hover:text-green-500 transition duration-300 p-2 rounded-md">À Propos</a></li>
                <li><a href="#skills" class="block text-base text-gray-300 hover:text-green-500 transition duration-300 p-2 rounded-md">Compétences</a></li>
                <li><a href="#projects" class="block text-base text-gray-300 hover:text-green-500 transition duration-300 p-2 rounded-md">Projets</a></li>
                <li><a href="#contact" class="block text-base text-gray-300 hover:text-green-500 transition duration-300 p-2 rounded-md">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero" class="relative h-screen flex items-center justify-center bg-cover bg-center"
        style="background-image: url('https://placehold.co/1920x1080/1a202c/68d391?text=Your+Background+Image');">
        <div class="absolute inset-0 bg-black opacity-75"></div>
        <div class="z-10 text-center p-4 mx-auto max-w-4xl">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white mb-3 sm:mb-4 animate-fadeInUp">
                [Votre Nom] <span class="text-green-500">// Développeur Backend</span>
            </h1>
            <p class="text-lg sm:text-xl text-gray-300 mb-6 sm:mb-8 animate-fadeInUp delay-200">
                Conception d'APIs robustes, Optimisation de bases de données et Déploiement sécurisé avec Laravel.
            </p>
            <a href="#projects" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 sm:py-3.5 sm:px-8 rounded-full text-base sm:text-lg transition duration-300 transform hover:scale-105 shadow-lg animate-fadeInUp delay-400">
                Voir Mes Projets
            </a>
        </div>
    </section>

    ---

    <section id="about" class="py-12 sm:py-16 bg-gray-900 rounded-b-xl shadow-inner">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6 sm:mb-10 border-b-4 border-green-500 pb-2 sm:pb-3 inline-block rounded-sm">
                À Propos de Moi
            </h2>
            <div class="max-w-3xl mx-auto text-base sm:text-lg text-gray-300 leading-relaxed">
                <p class="mb-4">
                    Passionné par le développement backend, je suis spécialisé dans la création d'applications robustes et scalables avec <strong class="text-white">Laravel</strong>. Mon approche est axée sur la performance, la sécurité et la maintenabilité du code.
                </p>
                <p class="mb-4">
                    Fort d'une expérience solide en <strong class="text-white">PHP 8.x</strong> et en gestion de bases de données (MySQL, PostgreSQL), je transforme les concepts complexes en solutions fonctionnelles et efficaces. Je suis constamment à l'affût des nouvelles technologies pour offrir des solutions innovantes.
                </p>
                <p>
                    J'intègre également les <strong class="text-white">outils d'intelligence artificielle</strong> dans mon processus de développement pour optimiser le codage, le débogage et l'exploration architecturale, garantissant ainsi des livrables de haute qualité et une productivité accrue.
                </p>
            </div>
        </div>
    </section>

    ---

    <section id="skills" class="py-12 sm:py-16 bg-gray-950">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6 sm:mb-10 border-b-4 border-green-500 pb-2 sm:pb-3 inline-block rounded-sm">
                Mes Compétences Techniques
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <div class="bg-gray-800 p-5 sm:p-7 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-xl sm:text-2xl font-semibold text-green-500 mb-2 sm:mb-3">Laravel (Expert)</h3>
                    <p class="text-gray-400 text-sm sm:text-base">
                        Maîtrise complète du framework : <strong class="text-white">Eloquent ORM, Blade, Routage, Middleware, Queues, Events, Notifications</strong>. Développement d'APIs RESTful et GraphQL.
                    </p>
                </div>
                <div class="bg-gray-800 p-5 sm:p-7 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-xl sm:text-2xl font-semibold text-green-500 mb-2 sm:mb-3">PHP 8.x (Avancé)</h3>
                    <p class="text-gray-400 text-sm sm:text-base">
                        Connaissance approfondie du langage, <strong class="text-white">POO, design patterns</strong>, et optimisation des performances.
                    </p>
                </div>
                <div class="bg-gray-800 p-5 sm:p-7 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-xl sm:text-2xl font-semibold text-green-500 mb-2 sm:mb-3">Bases de Données</h3>
                    <p class="text-gray-400 text-sm sm:text-base">
                        Conception et optimisation de schémas (<strong class="text-white">MySQL, PostgreSQL</strong>), requêtes complexes, indexation, migrations.
                    </p>
                </div>
                <div class="bg-gray-800 p-5 sm:p-7 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-xl sm:text-2xl font-semibold text-green-500 mb-2 sm:mb-3">Développement API</h3>
                    <p class="text-gray-400 text-sm sm:text-base">
                        Création d'APIs <strong class="text-white">RESTful et GraphQL</strong> avec Laravel Sanctum/Passport, gestion des versions, documentation (Swagger/OpenAPI).
                    </p>
                </div>
                <div class="bg-gray-800 p-5 sm:p-7 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-xl sm:text-2xl font-semibold text-green-500 mb-2 sm:mb-3">Tests & Qualité</h3>
                    <p class="text-gray-400 text-sm sm:text-base">
                        Tests unitaires (<strong class="text-white">PHPUnit</strong>), tests d'intégration, TDD (Test-Driven Development) pour un code robuste.
                    </p>
                </div>
                <div class="bg-gray-800 p-5 sm:p-7 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-xl sm:text-2xl font-semibold text-green-500 mb-2 sm:mb-3">Outils d'IA pour le Dev</h3>
                    <p class="text-gray-400 text-sm sm:text-base">
                        Utilisation de l'IA pour l'assistance au codage, la génération de tests, l'optimisation et l'exploration de solutions.
                    </p>
                </div>
                <div class="bg-gray-800 p-5 sm:p-7 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-xl sm:text-2xl font-semibold text-green-500 mb-2 sm:mb-3">Déploiement & DevOps</h3>
                    <p class="text-gray-400 text-sm sm:text-base">
                        <strong class="text-white">Docker, Git, CI/CD</strong> (GitHub Actions), Nginx, Linux.
                    </p>
                </div>
                </div>
        </div>
    </section>

    ---

    <section id="projects" class="py-12 sm:py-16 bg-gray-900 rounded-t-xl shadow-inner">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6 sm:mb-10 border-b-4 border-green-500 pb-2 sm:pb-3 inline-block rounded-sm">
                Mes Projets Réalisés
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <div class="bg-gray-950 rounded-xl shadow-xl overflow-hidden transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="https://placehold.co/600x350/2d3748/68d391?text=Projet+E-commerce" alt="Capture d'écran Projet E-commerce" class="w-full h-40 sm:h-48 object-cover">
                    <div class="p-4 sm:p-5">
                        <h3 class="text-lg sm:text-xl font-semibold text-green-500 mb-2">API E-commerce Robuste (Laravel 12)</h3>
                        <p class="text-gray-400 text-xs sm:text-sm mb-3">
                            Développement complet d'une API RESTful pour une plateforme e-commerce, incluant gestion des produits, commandes, utilisateurs et paiements sécurisés via Stripe.
                        </p>
                        <ul class="flex flex-wrap gap-2 text-xs sm:text-sm text-gray-400 mb-4 justify-center">
                            <li class="bg-gray-700 px-2 py-1 rounded-full">Laravel 12</li>
                            <li class="bg-gray-700 px-2 py-1 rounded-full">PHP 8.x</li>
                            <li class="bg-gray-700 px-2 py-1 rounded-full">MySQL</li>
                            <li class="bg-gray-700 px-2 py-1 rounded-full">Stripe API</li>
                        </ul>
                        <a href="https://github.com/skillformation/MaBoutique.git" target="_blank" class="text-green-500 hover:text-green-400 font-bold flex items-center justify-center text-sm sm:text-base">
                            Voir le Code
                            <svg class="ml-2 w-4 h-4 sm:w-5 sm:h-5 icon-svg" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.419 2.865 8.163 6.839 9.48.5.092.682-.217.682-.483 0-.237-.009-.86-.014-1.688-2.782.604-3.369-1.34-3.369-1.34-.455-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.004.07 1.532 1.03 1.532 1.03.89 1.523 2.336 1.082 2.903.827.09-.643.349-1.082.637-1.334-2.22-.253-4.555-1.11-4.555-4.943 0-1.09.39-1.984 1.03-2.68A4.323 4.323 0 018.84 6.37c.09-.26.368-1.29.086-2.67c0 0-.8-.256-2.64 1.02a9.208 9.208 0 00-2.522.342c-.812 2.228-2.64 1.02-2.64 1.02-.282 1.38.006 2.41.086 2.67.64 0 1.03-.89 1.03-2.68.64-.696 1.53-1.09 2.62-1.09.81 0 1.52.196 2.12.56.29.17.58.38.86.62.63.42 1.13.98 1.58 1.63.45.65.81 1.38 1.08 2.17.27.79.37 1.68.37 2.68 0 3.837-2.335 4.689-4.555 4.943.359.308.678.924.678 1.868 0 1.353-.012 2.443-.012 2.766 0 .269.18.575.689.483C19.135 20.163 22 16.419 22 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="bg-gray-950 rounded-xl shadow-xl overflow-hidden transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="https://placehold.co/600x350/2d3748/68d391?text=Projet+Blog" alt="Capture d'écran Projet Blog" class="w-full h-40 sm:h-48 object-cover">
                    <div class="p-4 sm:p-5">
                        <h3 class="text-lg sm:text-xl font-semibold text-green-500 mb-2">Plateforme de Blog (Laravel Breeze & Livewire)</h3>
                        <p class="text-gray-400 text-xs sm:text-sm mb-3">
                            Création d'un système de gestion de contenu pour blog, avec authentification utilisateur, rédaction et publication d'articles, et commentaires en temps réel.
                        </p>
                        <ul class="flex flex-wrap gap-2 text-xs sm:text-sm text-gray-400 mb-4 justify-center">
                            <li class="bg-gray-700 px-2 py-1 rounded-full">Laravel 11</li>
                            <li class="bg-gray-700 px-2 py-1 rounded-full">Livewire</li>
                            <li class="bg-gray-700 px-2 py-1 rounded-full">Tailwind CSS</li>
                            <li class="bg-gray-700 px-2 py-1 rounded-full">SQLite</li>
                        </ul>
                        <a href="https://github.com/yourusername/project-blog-repo" target="_blank" class="text-green-500 hover:text-green-400 font-bold flex items-center justify-center text-sm sm:text-base">
                            Voir le Code
                            <svg class="ml-2 w-4 h-4 sm:w-5 sm:h-5 icon-svg" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.419 2.865 8.163 6.839 9.48.5.092.682-.217.682-.483 0-.237-.009-.86-.014-1.688-2.782.604-3.369-1.34-3.369-1.34-.455-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.004.07 1.532 1.03 1.532 1.03.89 1.523 2.336 1.082 2.903.827.09-.643.349-1.082.637-1.334-2.22-.253-4.555-1.11-4.555-4.943 0-1.09.39-1.984 1.03-2.68A4.323 4.323 0 018.84 6.37c.09-.26.368-1.29.086-2.67c0 0-.8-.256-2.64 1.02a9.208 9.208 0 00-2.522.342c-.812 2.228-2.64 1.02-2.64 1.02-.282 1.38.006 2.41.086 2.67.64 0 1.03-.89 1.03-2.68.64-.696 1.53-1.09 2.62-1.09.81 0 1.52.196 2.12.56.29.17.58.38.86.62.63.42 1.13.98 1.58 1.63.45.65.81 1.38 1.08 2.17.27.79.37 1.68.37 2.68 0 3.837-2.335 4.689-4.555 4.943.359.308.678.924.678 1.868 0 1.353-.012 2.443-.012 2.766 0 .269.18.575.689.483C19.135 20.163 22 16.419 22 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="bg-gray-950 rounded-xl shadow-xl overflow-hidden transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="https://placehold.co/600x350/2d3748/68d391?text=Projet+Dashboard+Admin" alt="Capture d'écran Projet Dashboard Admin" class="w-full h-40 sm:h-48 object-cover">
                    <div class="p-4 sm:p-5">
                        <h3 class="text-lg sm:text-xl font-semibold text-green-500 mb-2">Tableau de Bord Administratif (Laravel Filament)</h3>
                        <p class="text-gray-400 text-xs sm:text-sm mb-3">
                            Développement d'un panneau d'administration intuitif et riche en fonctionnalités pour la gestion des utilisateurs, des contenus et des rapports.
                        </p>
                        <ul class="flex flex-wrap gap-2 text-xs sm:text-sm text-gray-400 mb-4 justify-center">
                            <li class="bg-gray-700 px-2 py-1 rounded-full">Laravel 12</li>
                            <li class="bg-gray-700 px-2 py-1 rounded-full">Filament PHP</li>
                            <li class="bg-gray-700 px-2 py-1 rounded-full">Vue.js (pour certains composants)</li>
                            <li class="bg-gray-700 px-2 py-1 rounded-full">PostgreSQL</li>
                        </ul>
                        <a href="https://github.com/yourusername/project-admin-dashboard-repo" target="_blank" class="text-green-500 hover:text-green-400 font-bold flex items-center justify-center text-sm sm:text-base">
                            Voir le Code
                            <svg class="ml-2 w-4 h-4 sm:w-5 sm:h-5 icon-svg" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.419 2.865 8.163 6.839 9.48.5.092.682-.217.682-.483 0-.237-.009-.86-.014-1.688-2.782.604-3.369-1.34-3.369-1.34-.455-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.004.07 1.532 1.03 1.532 1.03.89 1.523 2.336 1.082 2.903.827.09-.643.349-1.082.637-1.334-2.22-.253-4.555-1.11-4.555-4.943 0-1.09.39-1.984 1.03-2.68A4.323 4.323 0 018.84 6.37c.09-.26.368-1.29.086-2.67c0 0-.8-.256-2.64 1.02a9.208 9.208 0 00-2.522.342c-.812 2.228-2.64 1.02-2.64 1.02-.282 1.38.006 2.41.086 2.67.64 0 1.03-.89 1.03-2.68.64-.696 1.53-1.09 2.62-1.09.81 0 1.52.196 2.12.56.29.17.58.38.86.62.63.42 1.13.98 1.58 1.63.45.65.81 1.38 1.08 2.17.27.79.37 1.68.37 2.68 0 3.837-2.335 4.689-4.555 4.943.359.308.678.924.678 1.868 0 1.353-.012 2.443-.012 2.766 0 .269.18.575.689.483C19.135 20.163 22 16.419 22 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ---

    <section id="contact" class="py-12 sm:py-16 bg-gray-950 rounded-b-xl shadow-inner">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6 sm:mb-10 border-b-4 border-green-500 pb-2 sm:pb-3 inline-block rounded-sm">
                Me Contacter
            </h2>
            <p class="text-base sm:text-lg text-gray-300 mb-6 sm:mb-8 max-w-2xl mx-auto">
                Prêt à discuter de votre prochain projet ou à collaborer ? N'hésitez pas à me contacter via les plateformes suivantes :
            </p>
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-8">
                <a href="mailto:votre.email@example.com" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2.5 px-5 sm:py-3 px-6 rounded-full text-sm sm:text-base flex items-center transform hover:scale-105 transition duration-300 shadow-md">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 icon-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Email
                </a>
                <a href="https://linkedin.com/in/votre-profil-linkedin" target="_blank" class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-2.5 px-5 sm:py-3 px-6 rounded-full text-sm sm:text-base flex items-center transform hover:scale-105 transition duration-300 shadow-md">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 icon-svg" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38-.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 6.4h-5v16h5v-16zm7.982 0h-4.965v16h4.965v-8.733c0-4.085 2.547-6.05 5.867-6.05 3.32 0 5.096 1.965 5.096 6.05v8.733h4.966v-9.62c0-5.83-3.692-8.58-8.995-8.58-4.47 0-7.009 2.527-7.009 6.278v.825z"></path></svg>
                    LinkedIn
                </a>
                <a href="https://github.com/votre-nom-utilisateur-github" target="_blank" class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-2.5 px-5 sm:py-3 px-6 rounded-full text-sm sm:text-base flex items-center transform hover:scale-105 transition duration-300 shadow-md">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 icon-svg" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.419 2.865 8.163 6.839 9.48.5.092.682-.217.682-.483 0-.237-.009-.86-.014-1.688-2.782.604-3.369-1.34-3.369-1.34-.455-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.004.07 1.532 1.03 1.532 1.03.89 1.523 2.336 1.082 2.903.827.09-.643.349-1.082.637-1.334-2.22-.253-4.555-1.11-4.555-4.943 0-1.09.39-1.984 1.03-2.68A4.323 4.323 0 018.84 6.37c.09-.26.368-1.29.086-2.67c0 0-.8-.256-2.64 1.02a9.208 9.208 0 00-2.522.342c-.812 2.228-2.64 1.02-2.64 1.02-.282 1.38.006 2.41.086 2.67.64 0 1.03-.89 1.03-2.68.64-.696 1.53-1.09 2.62-1.09.81 0 1.52.196 2.12.56.29.17.58.38.86.62.63.42 1.13.98 1.58 1.63.45.65.81 1.38 1.08 2.17.27.79.37 1.68.37 2.68 0 3.837-2.335 4.689-4.555 4.943.359.308.678.924.678 1.868 0 1.353-.012 2.443-.012 2.766 0 .269.18.575.689.483C19.135 20.163 22 16.419 22 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd"></path></svg>
                    GitHub
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-black py-5 sm:py-6 text-center text-gray-400 text-xs sm:text-sm rounded-t-xl">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <p>&copy; 2025 [Votre Nom]. Tous droits réservés. Propulsé par Laravel.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    // Adjust for sticky header height
                    const headerOffset = document.querySelector('header').offsetHeight;
                    const elementPosition = targetElement.offsetTop;
                    window.scrollTo({
                        top: elementPosition - headerOffset,
                        behavior: 'smooth'
                    });
                }
                // Close mobile menu if open
                const mobileMenu = document.getElementById('mobile-menu');
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Intersection Observer for fade-in animations
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1 // Element considered visible when 10% is in view
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp-visible');
                    observer.unobserve(entry.target); // Stop observing once animated
                }
            });
        }, observerOptions);

        // Apply observer to all elements with 'animate-fadeInUp' class
        document.querySelectorAll('.animate-fadeInUp').forEach(element => {
            observer.observe(element);
        });

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>