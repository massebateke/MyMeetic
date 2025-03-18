# Projet de Site de Rencontres

Ce projet consiste à développer un site de rencontres avec des fonctionnalités d'inscription, de connexion, de gestion de compte, et de recherche avancée. Le site est conçu pour permettre aux utilisateurs de se rencontrer en fonction de critères spécifiques tels que le genre, la localisation, les loisirs, et la tranche d'âge.

## Fonctionnalités

### Inscription / Connexion
- **Formulaire d'inscription** : Les utilisateurs peuvent s'inscrire en fournissant les informations suivantes :
  - Nom
  - Prénom
  - Date de naissance (vérification de l'âge, inscription réservée aux +18)
  - Genre (Homme, Femme, Autre...)
  - Ville
  - E-mail (unique, utilisé pour la connexion)
  - Mot de passe (hashé, utilisé pour la connexion)
  - Loisir (au moins un)

- **Formulaire de connexion** : Les utilisateurs peuvent se connecter en utilisant leur e-mail et mot de passe.

### Mon Compte
- **Récapitulatif des informations du compte** :
  - Nom
  - Prénom
  - Date de naissance
  - Genre
  - E-mail
  - Loisir(s)

- **Gestionnaire de compte** :
  - Modification du mot de passe
  - Modification de l'e-mail

- **Suppression du compte** :
  - Une fonctionnalité permettant de supprimer définitivement le compte (sans utiliser la commande SQL `DELETE`).

### Recherche
- **Filtres de recherche** :
  - Genre (Homme, Femme, Autre)
  - Localisation (ville)
  - Loisir (Dance, Skateboard, Manga, Licorne, Cuisiner, Autre)
  - Tranche d'âge (18/25, 25/35, 35/45, 45+)

- **Combinaison de filtres** : Il est possible de combiner tous les filtres pour affiner la recherche. Par exemple, rechercher un homme entre 25 et 35 ans, habitant à Paris ou Lyon, qui aime lire des mangas et cuisiner.

- **Affichage des résultats** : Les résultats de la recherche sont présentés sous forme de carrousel développé en JavaScript. Chaque élément du carrousel contient les informations d'une personne.

## Structure de la Base de Données

La base de données est conçue pour stocker les informations des utilisateurs de manière sécurisée et efficace. Voici un aperçu de la structure :

### Table `users`
- `id` (INT, Primary Key, Auto Increment)
- `nom` (VARCHAR)
- `prenom` (VARCHAR)
- `datedenaissance` (DATE)
- `genre` (ENUM('Homme', 'Femme', 'Autre'))
- `ville` (VARCHAR)
- `email` (VARCHAR, Unique)
- `motdepasse` (VARCHAR, Hashé)
- `loisir` (VARCHAR)

## Technologies Utilisées

- **Frontend** : HTML, CSS, JavaScript (natif ou bibliothèque légère comme Tailwind)
- **Backend** : PHP, MySQL
- **Sécurité** : Hashing des mots de passe (utiliser `password_hash` et `password_verify` en PHP)

## Améliorations à Apporter

Certaines fonctionnalités n'ont pas encore été implémentées ou nécessitent des améliorations. Voici une liste des points à travailler :

1. **Filtrage Multiple** :
   - Actuellement, la recherche ne permet pas de combiner plusieurs filtres (par exemple, genre + ville + loisir). Il est nécessaire d'implémenter cette fonctionnalité pour permettre des recherches plus précises.

2. **Carrousel des Résultats** :
   - Le carrousel pour afficher les résultats de la recherche n'a pas encore été développé. Il doit être implémenté en JavaScript natif ou avec une bibliothèque légère comme Tailwind.

3. **Vérification de l'Âge** :
   - La vérification de l'âge lors de l'inscription (pour s'assurer que l'utilisateur a +18 ans) n'a pas été implémentée. Cette fonctionnalité est essentielle pour respecter les exigences du projet.

4. **Gestion des Loisirs Multiples** :
   - Actuellement, un seul loisir peut être sélectionné lors de l'inscription. Il serait utile de permettre aux utilisateurs de sélectionner plusieurs loisirs.

5. **Optimisation de la Base de Données** :
   - La structure de la base de données pourrait être améliorée pour mieux gérer les relations entre les utilisateurs et leurs loisirs (par exemple, en utilisant une table de liaison `user_loisirs`).

6. **Expérience Utilisateur (UX)** :
   - Ajouter des messages d'erreur clairs lors de l'inscription ou de la connexion.
   - Améliorer l'interface utilisateur pour rendre le site plus intuitif et attractif.

## Installation
1. Télécharger ou cloner ce projet.
2. Ouvrir `index.php` dans un navigateur.

## Auteurs
- Développé par Massé BATEKE