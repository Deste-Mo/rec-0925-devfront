# Documentation du Projet rec-0925-devfront

## Vue d'ensemble

Ce projet est un test technique de développement front-end pour reproduire fidèlement une interface utilisateur basée sur des maquettes Adobe XD. Le projet utilise HTML, Tailwind CSS et contient deux pages principales statiques pour la réservation et le paiement d'un test psychotechnique pour permis de conduire.

## Prérequis

-   Git (pour cloner le dépôt)
-   Navigateur web moderne (Chrome, Firefox, Safari, etc.)
-   Optionnel : PHP 8.1+ et Composer si vous souhaitez lancer le serveur Laravel complet

## Téléchargement du Projet

### Via Git (recommandé)

```bash
git clone https://github.com/Deste-Mo/rec-0925-devfront.git
cd rec-0925-devfront
```

### Téléchargement direct

1. Rendez-vous sur la page GitHub du projet
2. Cliquez sur "Code" > "Download ZIP"
3. Extrayez l'archive dans votre répertoire de travail

## Installation et Configuration

### Option 1 : Lancement des pages statiques (recommandé pour ce test)

Les pages HTML sont entièrement statiques et utilisent des CDN externes. Aucune installation supplémentaire n'est requise.

### Option 2 : Lancement via serveur Laravel (optionnel)

Si vous souhaitez exécuter le projet complet avec Laravel :

1. Installez les dépendances PHP :

```bash
composer install
```

2. Installez les dépendances Node.js :

```bash
npm install
```

3. Copiez le fichier d'environnement :

```bash
cp .env.example .env
```

4. Générez la clé d'application :

```bash
php artisan key:generate
```

## Lancement du Projet

### Méthode simple : Ouvrir directement les fichiers HTML

1. Naviguez vers le dossier `static/` du projet
2. Ouvrez les fichiers suivants dans votre navigateur :
    - `tolojanahary-completez-votre-reservation.html`
    - `tolojanahary-paiement.html`

### Méthode avancée : Via serveur local Laravel

1. Lancez le serveur de développement :

```bash
php artisan serve
```

2. Dans un autre terminal, lancez Vite pour les assets :

```bash
npm run dev
```

3. Ouvrez votre navigateur à l'adresse `http://localhost:8000`

## Accès aux Pages Spécifiques

### Page "Complétez votre réservation"

-   **Chemin** : `rec-0925-devfront/static/tolojanahary-completez-votre-reservation.html`
-   **Description** : Page permettant de sélectionner un package pour le test psychotechnique (Basic, Assurance, Complet)
-   **Fonctionnalités** :
    -   Affichage des tarifs (0€, 40€, 60€)
    -   Description des avantages de chaque package
    -   Boutons de sélection avec états visuels

### Page "Paiement"

-   **Chemin** : `rec-0925-devfront/static/tolojanahary-paiement.html`
-   **Description** : Page de confirmation et paiement de la réservation
-   **Fonctionnalités** :
    -   Formulaire d'informations personnelles (nom, email, téléphone)
    -   Récapitulatif du test (date, heure, adresse)
    -   Options de paiement (carte bancaire, Apple Pay, PayPal, Alma)
    -   Récapitulatif du prix total

## Structure du Projet

```
rec-0925-devfront/
├── static/
│   ├── tolojanahary-completez-votre-reservation.html
│   └── tolojanahary-paiement.html
├── resources/
│   ├── css/
│   └── js/
├── routes/
├── README.md
└── ...
```

## Technologies Utilisées

-   **HTML5** : Structure des pages
-   **Tailwind CSS** : Framework CSS utilitaire (via CDN)
-   **Font Awesome** : Icônes
-   **Google Fonts (Lato)** : Typographie
-   **Laravel** : Framework PHP (optionnel pour le serveur)

## Notes Techniques

-   Les pages sont responsives et optimisées pour mobile et desktop
-   Utilisation exclusive de Tailwind CSS, aucune dépendance supplémentaire requise
-   Les URLs sont personnalisées selon le format `{nom-de-famille}-{slug-de-la-page}`
-   Reproduction pixel-perfect des maquettes Adobe XD fournies

## Dépannage

-   **Problème** : Les styles ne s'affichent pas

    -   **Solution** : Vérifiez votre connexion internet (Tailwind CSS est chargé via CDN)

-   **Problème** : Erreur 404 lors du lancement Laravel
    -   **Solution** : Assurez-vous que PHP et Composer sont installés et que les dépendances sont installées

## Temps passé

-   Analyse des maquettes : 2h
-   Développement HTML/CSS : 8h
-   Tests et ajustements : 3h
-   **Total** : 13h

## Contact

Pour toute question concernant ce projet, veuillez contacter l'équipe de développement.
