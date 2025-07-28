import React, { useState, useEffect } from 'react';

// Main App component for the Laravel 12 Portfolio
const App = () => {
    // State to manage the currently active section for navigation
    const [activeSection, setActiveSection] = useState('home');
    // State to manage the visibility of the mobile navigation menu
    const [isNavOpen, setIsNavOpen] = useState(false);

    // Effect to scroll to the active section when it changes
    useEffect(() => {
        const element = document.getElementById(activeSection);
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    }, [activeSection]);

    // Function to handle navigation clicks
    const handleNavClick = (section) => {
        setActiveSection(section);
        setIsNavOpen(false); // Close mobile nav after clicking a link
    };

    return (
        <div className="min-h-screen bg-gray-100 font-sans text-gray-800">
            {/* Header and Navigation */}
            <header className="bg-gradient-to-r from-blue-600 to-purple-700 text-white shadow-lg fixed w-full z-50">
                <nav className="container mx-auto px-4 py-4 flex justify-between items-center">
                    {/* Brand/Logo */}
                    <div className="text-2xl font-bold tracking-tight">
                        <a href="#home" onClick={() => handleNavClick('home')} className="hover:text-blue-200 transition-colors duration-300">
                            Votre Nom - Portfolio Laravel 12
                        </a>
                    </div>

                    {/* Desktop Navigation */}
                    <ul className="hidden md:flex space-x-8 text-lg">
                        <li>
                            <a href="#home" onClick={() => handleNavClick('home')} className={`hover:text-blue-200 transition-colors duration-300 ${activeSection === 'home' ? 'font-semibold' : ''}`}>
                                Accueil
                            </a>
                        </li>
                        <li>
                            <a href="#about" onClick={() => handleNavClick('about')} className={`hover:text-blue-200 transition-colors duration-300 ${activeSection === 'about' ? 'font-semibold' : ''}`}>
                                À Propos
                            </a>
                        </li>
                        <li>
                            <a href="#skills" onClick={() => handleNavClick('skills')} className={`hover:text-blue-200 transition-colors duration-300 ${activeSection === 'skills' ? 'font-semibold' : ''}`}>
                                Compétences
                            </a>
                        </li>
                        <li>
                            <a href="#projects" onClick={() => handleNavClick('projects')} className={`hover:text-blue-200 transition-colors duration-300 ${activeSection === 'projects' ? 'font-semibold' : ''}`}>
                                Projets
                            </a>
                        </li>
                        <li>
                            <a href="#contact" onClick={() => handleNavClick('contact')} className={`hover:text-blue-200 transition-colors duration-300 ${activeSection === 'contact' ? 'font-semibold' : ''}`}>
                                Contact
                            </a>
                        </li>
                    </ul>

                    {/* Mobile Navigation Toggle */}
                    <button
                        className="md:hidden text-white focus:outline-none"
                        onClick={() => setIsNavOpen(!isNavOpen)}
                        aria-label="Toggle navigation"
                    >
                        <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            {isNavOpen ? (
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M6 18L18 6M6 6l12 12"></path>
                            ) : (
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                            )}
                        </svg>
                    </button>
                </nav>

                {/* Mobile Navigation Menu */}
                {isNavOpen && (
                    <ul className="md:hidden bg-blue-700 text-white py-4 px-4 space-y-2">
                        <li>
                            <a href="#home" onClick={() => handleNavClick('home')} className="block py-2 px-4 hover:bg-blue-600 rounded-md">Accueil</a>
                        </li>
                        <li>
                            <a href="#about" onClick={() => handleNavClick('about')} className="block py-2 px-4 hover:bg-blue-600 rounded-md">À Propos</a>
                        </li>
                        <li>
                            <a href="#skills" onClick={() => handleNavClick('skills')} className="block py-2 px-4 hover:bg-blue-600 rounded-md">Compétences</a>
                        </li>
                        <li>
                            <a href="#projects" onClick={() => handleNavClick('projects')} className="block py-2 px-4 hover:bg-blue-600 rounded-md">Projets</a>
                        </li>
                        <li>
                            <a href="#contact" onClick={() => handleNavClick('contact')} className="block py-2 px-4 hover:bg-blue-600 rounded-md">Contact</a>
                        </li>
                    </ul>
                )}
            </header>

            {/* Main content area, with padding to account for fixed header */}
            <main className="pt-20"> {/* Adjust padding-top based on header height */}

                {/* Home Section */}
                <section id="home" className="relative h-screen flex items-center justify-center bg-cover bg-center text-white" style={{ backgroundImage: "url('https://placehold.co/1920x1080/0F172A/E2E8F0?text=Bienvenue+sur+mon+Portfolio')" }}>
                    <div className="absolute inset-0 bg-black opacity-60"></div>
                    <div className="relative z-10 text-center p-8 rounded-lg bg-gray-900 bg-opacity-70 shadow-2xl max-w-3xl mx-auto">
                        <h1 className="text-5xl md:text-6xl font-extrabold mb-4 leading-tight">
                            Votre Nom
                        </h1>
                        <p className="text-2xl md:text-3xl font-light mb-8">
                            L'ingénieur développement web Laravel 12 le plus performant au monde.
                        </p>
                        <a
                            href="#projects"
                            onClick={() => handleNavClick('projects')}
                            className="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105"
                        >
                            Voir mes Projets
                        </a>
                    </div>
                </section>

                {/* About Section */}
                <section id="about" className="py-20 bg-white shadow-inner">
                    <div className="container mx-auto px-4">
                        <h2 className="text-4xl font-bold text-center mb-12 text-blue-700">À Propos de Moi</h2>
                        <div className="flex flex-col md:flex-row items-center md:space-x-12">
                            <div className="md:w-1/3 mb-8 md:mb-0">
                                <img
                                    src="https://placehold.co/400x400/6B7280/F9FAFB?text=Votre+Photo"
                                    alt="Votre Photo de Profil"
                                    className="rounded-full shadow-xl w-64 h-64 mx-auto object-cover border-4 border-blue-500"
                                />
                            </div>
                            <div className="md:w-2/3 text-lg leading-relaxed text-gray-700">
                                <p className="mb-4">
                                    Fort de mon expérience en tant qu'ingénieur développement web, je me spécialise dans la création d'applications web robustes, performantes et sécurisées avec <strong className="text-blue-600">Laravel 12</strong>. Ma passion réside dans la résolution de problèmes complexes et la conception de solutions élégantes qui répondent aux besoins les plus exigeants.
                                </p>
                                <p className="mb-4">
                                    Je suis un fervent adepte des bonnes pratiques de développement, de l'écriture de code propre et maintenable, et de l'implémentation de tests rigoureux pour garantir la qualité. Mon expertise couvre le cycle de vie complet du développement logiciel, de la conception à la mise en production.
                                </p>
                                <p>
                                    En dehors du code, j'aime rester à jour avec les dernières tendances technologiques et contribuer à la communauté open source. Je suis toujours à la recherche de nouveaux défis pour repousser les limites de ce qui est possible avec Laravel et les technologies web modernes.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                {/* Skills Section */}
                <section id="skills" className="py-20 bg-gray-50">
                    <div className="container mx-auto px-4">
                        <h2 className="text-4xl font-bold text-center mb-12 text-purple-700">Mes Compétences Techniques</h2>
                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            {/* Skill Card: Laravel 12 */}
                            <div className="bg-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition-shadow duration-300 border-t-4 border-blue-500">
                                <h3 className="text-2xl font-semibold mb-4 text-blue-600">Laravel 12 & PHP</h3>
                                <p className="text-gray-700">
                                    Maîtrise approfondie de Laravel 12 pour le développement backend, incluant Eloquent ORM, Blade Templating, Artisan CLI, Middleware, Service Providers, Queues, Events, Notifications, et l'intégration d'APIs tierces. Expertise en PHP 8.x et programmation orientée objet.
                                </p>
                            </div>
                            {/* Skill Card: Frontend Frameworks */}
                            <div className="bg-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition-shadow duration-300 border-t-4 border-green-500">
                                <h3 className="text-2xl font-semibold mb-4 text-green-600">Frontend (React, Vue.js, Livewire)</h3>
                                <p className="text-gray-700">
                                    Développement d'interfaces utilisateur interactives et réactives avec React.js et Vue.js. Expérience avec Livewire et Inertia.js pour des applications full-stack plus fluides avec Laravel. Maîtrise de JavaScript ES6+, HTML5 et CSS3.
                                </p>
                            </div>
                            {/* Skill Card: Databases & Caching */}
                            <div className="bg-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition-shadow duration-300 border-t-4 border-red-500">
                                <h3 className="text-2xl font-semibold mb-4 text-red-600">Bases de Données & Caching</h3>
                                <p className="text-gray-700">
                                    Conception et optimisation de bases de données relationnelles (MySQL, PostgreSQL). Utilisation de Redis pour le caching et les files d'attente. Maîtrise de la migration de données et de l'optimisation des requêtes.
                                </p>
                            </div>
                            {/* Skill Card: Testing & Quality */}
                            <div className="bg-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition-shadow duration-300 border-t-4 border-yellow-500">
                                <h3 className="text-2xl font-semibold mb-4 text-yellow-600">Tests & Qualité de Code</h3>
                                <p className="text-gray-700">
                                    Implémentation de tests unitaires et fonctionnels avec PHPUnit et PestPHP. Utilisation de Laravel Dusk pour les tests d'intégration. Adhésion aux principes SOLID, DRY, et aux bonnes pratiques de code pour un code propre et maintenable.
                                </p>
                            </div>
                            {/* Skill Card: DevOps & Deployment */}
                            <div className="bg-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition-shadow duration-300 border-t-4 border-indigo-500">
                                <h3 className="text-2xl font-semibold mb-4 text-indigo-600">DevOps & Déploiement</h3>
                                <p className="text-gray-700">
                                    Déploiement d'applications Laravel sur des serveurs (Forge, Vapor, AWS, DigitalOcean). Configuration de Nginx/Apache. Expérience avec Docker pour la conteneurisation et CI/CD (GitHub Actions, GitLab CI) pour l'automatisation.
                                </p>
                            </div>
                            {/* Skill Card: API Development */}
                            <div className="bg-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition-shadow duration-300 border-t-4 border-pink-500">
                                <h3 className="text-2xl font-semibold mb-4 text-pink-600">Développement d'API RESTful</h3>
                                <p className="text-gray-700">
                                    Conception et développement d'APIs RESTful sécurisées et performantes avec Laravel Sanctum ou Passport. Gestion des versions d'API, documentation (Swagger/OpenAPI) et intégration avec des services externes.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                {/* Projects Section */}
                <section id="projects" className="py-20 bg-white shadow-inner">
                    <div className="container mx-auto px-4">
                        <h2 className="text-4xl font-bold text-center mb-12 text-blue-700">Mes Projets Laravel 12</h2>
                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                            {/* Project Card 1 */}
                            <div className="bg-gray-50 rounded-lg shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                                <img
                                    src="https://placehold.co/600x400/3B82F6/FFFFFF?text=Projet+SaaS+Laravel"
                                    alt="Projet SaaS Laravel"
                                    className="w-full h-56 object-cover"
                                />
                                <div className="p-6">
                                    <h3 className="text-2xl font-semibold mb-3 text-blue-600">Plateforme SaaS Multi-Locataire</h3>
                                    <p className="text-gray-700 mb-4">
                                        Développement d'une plateforme SaaS complète avec Laravel 12, gérant l'authentification, les abonnements (Stripe), les rôles et permissions, et une architecture multi-locataire robuste. Utilisation de Livewire pour une expérience utilisateur dynamique.
                                    </p>
                                    <div className="flex flex-wrap gap-2 mb-4">
                                        <span className="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Laravel 12</span>
                                        <span className="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Livewire</span>
                                        <span className="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Tailwind CSS</span>
                                        <span className="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Stripe API</span>
                                    </div>
                                    <div className="flex justify-between items-center">
                                        <a href="#" className="text-blue-500 hover:text-blue-700 font-semibold flex items-center" target="_blank" rel="noopener noreferrer">
                                            Voir le Projet
                                            <svg className="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17.25 10.5L21 14.25m0 0L17.25 18m3.75-3.75H3"></path></svg>
                                        </a>
                                        <a href="#" className="text-gray-500 hover:text-gray-700 flex items-center" target="_blank" rel="noopener noreferrer">
                                            <svg className="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fillRule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.499.09.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.164-1.11-1.474-1.11-1.474-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.529 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.953 0-1.096.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.407.098 2.65.64.7 1.028 1.591 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2Z" clipRule="evenodd" /></svg>
                                            GitHub
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {/* Project Card 2 */}
                            <div className="bg-gray-50 rounded-lg shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                                <img
                                    src="https://placehold.co/600x400/EF4444/FFFFFF?text=API+RESTful+Laravel"
                                    alt="API RESTful Laravel"
                                    className="w-full h-56 object-cover"
                                />
                                <div className="p-6">
                                    <h3 className="text-2xl font-semibold mb-3 text-red-600">API RESTful Complexe pour E-commerce</h3>
                                    <p className="text-gray-700 mb-4">
                                        Conception et implémentation d'une API RESTful robuste pour une application e-commerce, gérant les produits, les commandes, les utilisateurs et les paiements. Sécurisée avec Laravel Sanctum et documentée avec Swagger.
                                    </p>
                                    <div className="flex flex-wrap gap-2 mb-4">
                                        <span className="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Laravel 12</span>
                                        <span className="bg-pink-100 text-pink-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Laravel Sanctum</span>
                                        <span className="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded-full">MySQL</span>
                                        <span className="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Swagger</span>
                                    </div>
                                    <div className="flex justify-between items-center">
                                        <a href="#" className="text-blue-500 hover:text-blue-700 font-semibold flex items-center" target="_blank" rel="noopener noreferrer">
                                            Voir la Doc API
                                            <svg className="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17.25 10.5L21 14.25m0 0L17.25 18m3.75-3.75H3"></path></svg>
                                        </a>
                                        <a href="#" className="text-gray-500 hover:text-gray-700 flex items-center" target="_blank" rel="noopener noreferrer">
                                            <svg className="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fillRule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.499.09.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.164-1.11-1.474-1.11-1.474-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.529 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.953 0-1.096.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.407.098 2.65.64.7 1.028 1.591 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2Z" clipRule="evenodd" /></svg>
                                            GitHub
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {/* Project Card 3 */}
                            <div className="bg-gray-50 rounded-lg shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                                <img
                                    src="https://placehold.co/600x400/10B981/FFFFFF?text=CMS+Personnalisé"
                                    alt="CMS Personnalisé"
                                    className="w-full h-56 object-cover"
                                />
                                <div className="p-6">
                                    <h3 className="text-2xl font-semibold mb-3 text-green-600">Système de Gestion de Contenu (CMS) Personnalisé</h3>
                                    <p className="text-gray-700 mb-4">
                                        Développement d'un CMS sur mesure avec Laravel 12 et Filament, offrant une interface d'administration intuitive pour la gestion de contenu, d'utilisateurs et de médias. Optimisé pour la performance et la sécurité.
                                    </p>
                                    <div className="flex flex-wrap gap-2 mb-4">
                                        <span className="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Laravel 12</span>
                                        <span className="bg-teal-100 text-teal-800 text-xs font-medium px-2.5 py-0.5 rounded-full">FilamentPHP</span>
                                        <span className="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">MySQL</span>
                                        <span className="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Vue.js</span>
                                    </div>
                                    <div className="flex justify-between items-center">
                                        <a href="#" className="text-blue-500 hover:text-blue-700 font-semibold flex items-center" target="_blank" rel="noopener noreferrer">
                                            Voir le Projet
                                            <svg className="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17.25 10.5L21 14.25m0 0L17.25 18m3.75-3.75H3"></path></svg>
                                        </a>
                                        <a href="#" className="text-gray-500 hover:text-gray-700 flex items-center" target="_blank" rel="noopener noreferrer">
                                            <svg className="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fillRule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.499.09.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.164-1.11-1.474-1.11-1.474-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.529 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.953 0-1.096.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.407.098 2.65.64.7 1.028 1.591 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2Z" clipRule="evenodd" /></svg>
                                            GitHub
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="text-center mt-12">
                            <p className="text-xl text-gray-700">
                                Ces projets ne sont qu'un aperçu de mon expertise. Contactez-moi pour discuter de vos besoins spécifiques !
                            </p>
                        </div>
                    </div>
                </section>

                {/* Contact Section */}
                <section id="contact" className="py-20 bg-gray-50">
                    <div className="container mx-auto px-4">
                        <h2 className="text-4xl font-bold text-center mb-12 text-purple-700">Contactez-Moi</h2>
                        <div className="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-xl border-t-4 border-purple-500">
                            <p className="text-lg text-gray-700 text-center mb-8">
                                Je suis toujours ouvert à de nouvelles opportunités et collaborations. N'hésitez pas à me contacter !
                            </p>
                            <form className="space-y-6">
                                <div>
                                    <label htmlFor="name" className="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        className="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                        placeholder="Votre Nom"
                                        required
                                    />
                                </div>
                                <div>
                                    <label htmlFor="email" className="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        className="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                        placeholder="votre.email@exemple.com"
                                        required
                                    />
                                </div>
                                <div>
                                    <label htmlFor="message" className="block text-sm font-medium text-gray-700 mb-1">Message</label>
                                    <textarea
                                        id="message"
                                        name="message"
                                        rows="5"
                                        className="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                        placeholder="Votre message..."
                                        required
                                    ></textarea>
                                </div>
                                <div className="text-center">
                                    <button
                                        type="submit"
                                        className="inline-flex justify-center py-3 px-8 border border-transparent shadow-sm text-lg font-medium rounded-full text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-300 transform hover:scale-105"
                                    >
                                        Envoyer le Message
                                    </button>
                                </div>
                            </form>
                            <div className="mt-8 text-center text-gray-600">
                                <p>Ou retrouvez-moi sur :</p>
                                <div className="flex justify-center space-x-6 mt-4">
                                    <a href="#" target="_blank" rel="noopener noreferrer" className="text-blue-600 hover:text-blue-800 transition-colors duration-300">
                                        <svg className="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" /></svg>
                                    </a>
                                    <a href="#" target="_blank" rel="noopener noreferrer" className="text-gray-800 hover:text-gray-600 transition-colors duration-300">
                                        <svg className="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fillRule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.499.09.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.164-1.11-1.474-1.11-1.474-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.529 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.953 0-1.096.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.407.098 2.65.64.7 1.028 1.591 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2Z" clipRule="evenodd" /></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            {/* Footer */}
            <footer className="bg-gray-800 text-white py-8 text-center">
                <div className="container mx-auto px-4">
                    <p>&copy; {new Date().getFullYear()} Votre Nom. Tous droits réservés.</p>
                    <p className="text-sm mt-2">
                        Créé avec <span className="text-red-500">&hearts;</span> et des compétences Laravel 12 exceptionnelles.
                    </p>
                </div>
            </footer>
        </div>
    );
};

export default App;