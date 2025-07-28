<?php include_once("index.html"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Mamba Dev - Portfolio Laravel 12 Backend</title>
    <!-- Chargement de Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Configuration de Tailwind pour utiliser la police Inter -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Animations personnalisées pour le thème Black Mamba */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            opacity: 0;
            animation-fill-mode: forwards;
        }

        .animate-fadeInUp-visible {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-fadeInUp.delay-200 {
            animation-delay: 0.2s;
        }

        .animate-fadeInUp.delay-400 {
            animation-delay: 0.4s;
        }

        /* Styles pour les icônes SVG */
        .icon-svg {
            display: inline-block;
            width: 1.5em; /* Ajustez la taille selon vos besoins */
            height: 1.5em;
            vertical-align: middle;
        }
    </style>
</head>
<body class="bg-gray-950 text-gray-200 font-inter leading-normal tracking-wide">

    <!-- En-tête et Navigation -->
    <header class="bg-black py-6 shadow-xl sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4 sm:px-6 lg:px-8">
            <a href="#" class="text-3xl font-extrabold text-green-500 hover:text-green-400 transition duration-300 rounded-lg p-2">
                <span class="text-white">Mamba</span><span class="text-green-500">Dev</span>
            </a>
            <nav>
                <ul class="flex space-x-4 sm:space-x-6 lg:space-x-8">
                    <li><a href="#about" class="text-lg text-gray-300 hover:text-green-500 transition duration-300 p-2 rounded-md">À Propos</a></li>
                    <li><a href="#skills" class="text-lg text-gray-300 hover:text-green-500 transition duration-300 p-2 rounded-md">Compétences</a></li>
                    <li><a href="#projects" class="text-lg text-gray-300 hover:text-green-500 transition duration-300 p-2 rounded-md">Projets Laravel</a></li>
                    <li><a href="#contact" class="text-lg text-gray-300 hover:text-green-500 transition duration-300 p-2 rounded-md">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Section Héro -->
    <section id="hero" class="relative h-screen flex items-center justify-center bg-cover bg-center"
        style="background-image: url('https://placehold.co/1920x1080/1a202c/68d391?text=Black+Mamba+Background');">
        <!-- Overlay pour assombrir l'image de fond -->
        <div class="absolute inset-0 bg-black opacity-75"></div>
        <div class="z-10 text-center p-4">
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-white mb-4 animate-fadeInUp">
                Erwan Francietta <span class="text-green-500">// Virtuose Backend</span>
            </h1>
            <p class="text-xl sm:text-2xl text-gray-300 mb-8 max-w-3xl mx-auto animate-fadeInUp delay-200">
                Spécialiste Laravel 12 : Conception d'APIs robustes, Optimisation de bases de données et Déploiement sécurisé.
            </p>
            <a href="#projects" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 sm:py-4 sm:px-10 rounded-full text-lg sm:text-xl transition duration-300 transform hover:scale-105 shadow-lg animate-fadeInUp delay-400">
                Voir Mes Projets Mortels
            </a>
        </div>
    </section>

    <!-- Section À Propos -->
    <section id="about" class="py-16 sm:py-20 bg-gray-900 rounded-b-xl shadow-inner">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl sm:text-5xl font-bold text-white mb-8 sm:mb-12 border-b-4 border-green-500 pb-2 sm:pb-4 inline-block rounded-sm">
                À Propos du Mamba
            </h2>
            <div class="max-w-4xl mx-auto text-base sm:text-lg text-gray-300 leading-relaxed">
                <p class="mb-4 sm:mb-6">
                    Tel un <strong class="text-white">Black Mamba</strong><span class="text-green-500">Dev</span>, je suis rapide, précis et redoutablement efficace dans l'environnement backend. Mon domaine de prédilection est le développement avec <strong class="text-white">Laravel 12</strong>, où je conçois des architectures solides, des APIs performantes et des solutions sécurisées qui résistent à l'épreuve du temps.
                </p>
                <p class="mb-4 sm:mb-6">
                    J'intègre également l'utilisation d'outils basés sur l'intelligence artificielle comme assistants de développement, me permettant d'optimiser les processus de code, de débogage et d'exploration de solutions innovantes, augmentant ainsi ma productivité et la qualité de mes livrables.
                </p>
                <p>
                    Avec une expertise approfondie en <strong class="text-white">PHP 8.x</strong>, en conception de bases de données relationnelles (MySQL, PostgreSQL) et en intégration de services tiers, je transforme les exigences complexes en applications web fluides et scalables. Je suis constamment à l'affût des meilleures pratiques et des dernières avancées technologiques pour garantir des systèmes fiables et optimisés.
                </p>
            </div>
        </div>
    </section>

    <!-- Section Compétences -->
    <section id="skills" class="py-16 sm:py-20 bg-gray-950">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl sm:text-5xl font-bold text-white mb-8 sm:mb-12 border-b-4 border-green-500 pb-2 sm:pb-4 inline-block rounded-sm">
                Arsenal du Mamba
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-10">
                <!-- Carte Compétence: Laravel 12 -->
                <div class="bg-gray-800 p-6 sm:p-8 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-2xl sm:text-3xl font-semibold text-green-500 mb-3 sm:mb-4">Laravel 12 (Expert)</h3>
                    <p class="text-gray-400 text-base sm:text-lg">
                        Maîtrise complète du framework : <strong class="text-white">Eloquent ORM, Blade Templating, Routage, Middleware, Queues, Events, Notifications</strong>. Développement d'APIs RESTful et GraphQL robustes.
                    </p>
                </div>
                <!-- Carte Compétence: PHP -->
                <div class="bg-gray-800 p-6 sm:p-8 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-2xl sm:text-3xl font-semibold text-green-500 mb-3 sm:mb-4">PHP 8.x (Avancé)</h3>
                    <p class="text-gray-400 text-base sm:text-lg">
                        Connaissance approfondie du langage, Programmation Orientée Objet (POO), design patterns, et optimisation des performances.
                    </p>
                </div>
                <!-- Carte Compétence: Bases de Données -->
                <div class="bg-gray-800 p-6 sm:p-8 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-2xl sm:text-3xl font-semibold text-green-500 mb-3 sm:mb-4">Bases de Données</h3>
                    <p class="text-gray-400 text-base sm:text-lg">
                        Conception et optimisation de schémas (MySQL, PostgreSQL), requêtes complexes, indexation, gestion de migrations.
                    </p>
                </div>
                <!-- Carte Compétence: Développement API -->
                <div class="bg-gray-800 p-6 sm:p-8 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-2xl sm:text-3xl font-semibold text-green-500 mb-3 sm:mb-4">Développement API</h3>
                    <p class="text-gray-400 text-base sm:text-lg">
                        Création d'APIs RESTful et GraphQL avec Laravel Sanctum/Passport, gestion des versions, documentation (Swagger/OpenAPI).
                    </p>
                </div>
                <!-- Carte Compétence: Tests & Qualité -->
                <div class="bg-gray-800 p-6 sm:p-8 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-2xl sm:text-3xl font-semibold text-green-500 mb-3 sm:mb-4">Tests & Qualité</h3>
                    <p class="text-gray-400 text-base sm:text-lg">
                        Tests unitaires (PHPUnit), tests d'intégration, TDD (Test-Driven Development) pour un code robuste.
                    </p>
                </div>
                <!-- Nouvelle Carte Compétence: Outils d'IA pour le Développement -->
                <div class="bg-gray-800 p-6 sm:p-8 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-2xl sm:text-3xl font-semibold text-green-500 mb-3 sm:mb-4">Outils d'IA pour le Développement</h3>
                    <p class="text-gray-400 text-base sm:text-lg">
                        Utilisation de l'intelligence artificielle pour l'assistance au codage, la génération de tests, l'optimisation de requêtes et l'exploration de solutions architecturales.
                    </p>
                </div>
                <!-- Carte Compétence: Déploiement & DevOps -->
                <div class="bg-gray-800 p-6 sm:p-8 rounded-xl shadow-xl border-t-4 border-green-600 transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-2xl sm:text-3xl font-semibold text-green-500 mb-3 sm:mb-4">Déploiement & DevOps</h3>
                    <p class="text-gray-400 text-base sm:text-lg">
                        Docker, Git, CI/CD (GitHub Actions, GitLab CI), Nginx, Linux.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projets -->
    <section id="projects" class="py-16 sm:py-20 bg-gray-900 rounded-t-xl shadow-inner">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl sm:text-5xl font-bold text-white mb-8 sm:mb-12 border-b-4 border-green-500 pb-2 sm:pb-4 inline-block rounded-sm">
                Frappes du Mamba : Projets Laravel
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10">
                <!-- Carte Projet 1 -->
                <div class="bg-gray-950 rounded-xl shadow-xl overflow-hidden transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="https://placehold.co/600x350/2d3748/68d391?text=Project+1+Screenshot" alt="Capture d'écran Projet 1" class="w-full h-48 sm:h-56 object-cover">
                    <div class="p-5 sm:p-6">
                        <h3 class="text-xl sm:text-2xl font-semibold text-green-500 mb-2">API E-commerce Robuste (Laravel 12)</h3>
                        <p class="text-gray-400 text-sm sm:text-base mb-4">
                            Développement complet d'une API RESTful pour une plateforme e-commerce, incluant gestion des produits, commandes, utilisateurs et paiements sécurisés via Stripe. Utilisation intensive de <strong class="text-white">Fillament,Breezer</strong> pour l'authentification.
                        </p>
                        <a href="https://github.com/skillformation/MaBoutique.git" target="_blank" class="text-green-500 hover:text-green-400 font-bold flex items-center justify-center text-base sm:text-lg">
                            Voir le Code
                            <!-- Icône GitHub -->
                            <svg class="ml-2 w-5 h-5 icon-svg" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.419 2.865 8.163 6.839 9.48.5.092.682-.217.682-.483 0-.237-.009-.86-.014-1.688-2.782.604-3.369-1.34-3.369-1.34-.455-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.004.07 1.532 1.03 1.532 1.03.89 1.523 2.336 1.082 2.903.827.09-.643.349-1.082.637-1.334-2.22-.253-4.555-1.11-4.555-4.943 0-1.09.39-1.984 1.03-2.68A4.323 4.323 0 018.84 6.37c.09-.26.368-1.29.086-2.67c0 0-.8-.256-2.64 1.02a9.208 9.208 0 00-2.522.342c-.812 2.228-2.64 1.02-2.64 1.02-.282 1.38.006 2.41.086 2.67.64 0 1.03-.89 1.03-2.68.64-.696 1.53-1.09 2.62-1.09.81 0 1.52.196 2.12.56.29.17.58.38.86.62.63.42 1.13.98 1.58 1.63.45.65.81 1.38 1.08 2.17.27.79.37 1.68.37 2.68 0 3.837-2.335 4.689-4.555 4.943.359.308.678.924.678 1.868 0 1.353-.012 2.443-.012 2.766 0 .269.18.575.689.483C19.135 20.163 22 16.419 22 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="py-16 sm:py-20 bg-gray-950 rounded-b-xl shadow-inner">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl sm:text-5xl font-bold text-white mb-8 sm:mb-12 border-b-4 border-green-500 pb-2 sm:pb-4 inline-block rounded-sm">
                Contacter le MambaDev
            </h2>
            <p class="text-lg sm:text-xl text-gray-300 mb-8 sm:mb-10 max-w-2xl mx-auto">
                Prêt à injecter une dose de puissance Laravel dans votre prochain projet ? N'hésitez pas à me contacter !
            </p>
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-8">
                <a href="mailto:your.email@example.com" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 sm:py-4 sm:px-8 rounded-full text-base sm:text-lg flex items-center transform hover:scale-105 transition duration-300 shadow-md">
                    <!-- Icône Email -->
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 sm:mr-3 icon-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Email Me
                </a>
                <a href="https://linkedin.com/in/your-linkedin-profile" target="_blank" class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-6 sm:py-4 sm:px-8 rounded-full text-base sm:text-lg flex items-center transform hover:scale-105 transition duration-300 shadow-md">
                    <!-- Icône LinkedIn -->
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 sm:mr-3 icon-svg" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38-.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 6.4h-5v16h5v-16zm7.982 0h-4.965v16h4.965v-8.733c0-4.085 2.547-6.05 5.867-6.05 3.32 0 5.096 1.965 5.096 6.05v8.733h4.966v-9.62c0-5.83-3.692-8.58-8.995-8.58-4.47 0-7.009 2.527-7.009 6.278v.825z"></path></svg>
                    LinkedIn
                </a>
                <a href="https://github.com/skillformation/" target="_blank" class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-3 px-6 sm:py-4 sm:px-8 rounded-full text-base sm:text-lg flex items-center transform hover:scale-105 transition duration-300 shadow-md">
                    <!-- Icône GitHub -->
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 sm:mr-3 icon-svg" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.419 2.865 8.163 6.839 9.48.5.092.682-.217.682-.483 0-.237-.009-.86-.014-1.688-2.782.604-3.369-1.34-3.369-1.34-.455-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.004.07 1.532 1.03 1.532 1.03.89 1.523 2.336 1.082 2.903.827.09-.643.349-1.082.637-1.334-2.22-.253-4.555-1.11-4.555-4.943 0-1.09.39-1.984 1.03-2.68A4.323 4.323 0 018.84 6.37c.09-.26.368-1.29.086-2.67c0 0-.8-.256-2.64 1.02a9.208 9.208 0 00-2.522.342c-.812 2.228-2.64 1.02-2.64 1.02-.282 1.38.006 2.41.086 2.67.64 0 1.03-.89 1.03-2.68.64-.696 1.53-1.09 2.62-1.09.81 0 1.52.196 2.12.56.29.17.58.38.86.62.63.42 1.13.98 1.58 1.63.45.65.81 1.38 1.08 2.17.27.79.37 1.68.37 2.68 0 3.837-2.335 4.689-4.555 4.943.359.308.678.924.678 1.868 0 1.353-.012 2.443-.012 2.766 0 .269.18.575.689.483C19.135 20.163 22 16.419 22 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd"></path></svg>
                    GitHub
                </a>
            </div>
        </div>
    </section>

    <!-- Pied de page -->
    <footer class="bg-black py-6 sm:py-8 text-center text-gray-400 text-xs sm:text-sm rounded-t-xl">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <p>&copy; 2025 Black Mamba Dev. Tous droits réservés. Propulsé par Laravel 12.</p>
        </div>
    </footer>

    <script>
        // Défilement fluide pour la navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Animation simple à l'apparition des éléments au scroll
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1 // L'élément est considéré comme visible à 10% de son apparition
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp-visible');
                    observer.unobserve(entry.target); // Cesse d'observer une fois l'animation déclenchée
                }
            });
        }, observerOptions);

        // Applique l'observateur à tous les éléments avec la classe 'animate-fadeInUp'
        document.querySelectorAll('.animate-fadeInUp').forEach(element => {
            observer.observe(element);
        });
    </script>
</body>
</html>

