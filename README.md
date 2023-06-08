<p style="text-align: center">
<a href="https://bgrfacile.com" target="_blank">
<img src="D:\LAB\_PROD\bgrfacile\lab\bgrfacile\public\assets\images\logo_bgrfacile.svg" width="400" alt="Bgrfacile Logo" title="bgrfacile">
</a>
</p>

## About bgrfacile

Bgrfacile est une Plateforme numérique qui a pour but de faciliter l'enseignement et l'apprentissage, tout en aidant à
la gestion quotidienne des établissement scolaire. Pour ce faire, elle met à la disposition des enseignants et des
élèves des outils numériques qui leur permettent de travailler ensemble, de communiquer et de partager des informations.

- site web officiel: [https://bgrfacile.com](https://bgrfacile.com).
- application pour les écoles: [https://ecole.bgrfacile.com](https://ecole.bgrfacile.com).
- application
  mobile: [https://play.google.com/store/apps/details?id=com.bgrfacile](https://play.google.com/store/apps/details?id=com.bgrfacile).

Borderaux Géneral de Renseignement Facile (BGRFACILE) est la première plateforme numérique qui permet aux écoles de
gérer
les inscriptions, les paiements, les notes, les absences, les retards, les devoirs, les examens, les emplois du temps,
les cours, les communications, les événements, les annonces, les documents, les ressources, les utilisateurs, etc.

## Contributeurs

- [Benaja Bendo](https://github.com/benaja-bendo)

## Model économique

### Modèle d'abonnement

Vous pouvez proposer un modèle d'abonnement payant qui donne aux utilisateurs un accès illimité au contenu premium de
votre application. Vous pouvez proposer différents niveaux d'abonnement avec des fonctionnalités supplémentaires ou du
contenu exclusif pour inciter les utilisateurs à passer à un abonnement payant.

- Free
    - 1 établissement
    - 1 classe
    - ...

### Vente de cours individuels

Vous pouvez permettre aux utilisateurs de publier des cours payants sur votre plateforme. Les utilisateurs intéressés
peuvent acheter ces cours individuellement. Vous pouvez prendre une commission sur chaque vente réalisée par le biais de
votre application.

### Vente de packs de cours

Au lieu de vendre des cours individuels, vous pouvez créer des packs de cours regroupés par thème, niveau ou domaine
spécifique. Les utilisateurs peuvent acheter ces packs de cours à un prix avantageux par rapport à l'achat individuel
des cours. Cela peut encourager les utilisateurs à acheter davantage de contenu et générer des revenus supplémentaires.

### Annonces publicitaires

Vous pouvez inclure des espaces publicitaires dans votre application et proposer des publicités pertinentes aux
utilisateurs. Vous pouvez vendre ces espaces publicitaires directement aux annonceurs ou utiliser des plates-formes
publicitaires tierces pour afficher des annonces. Cela peut générer des revenus en fonction des clics ou des impressions
publicitaires.

### Parrainage et partenariats

Vous pouvez établir des partenariats avec d'autres entreprises ou éducateurs pour promouvoir leurs produits ou services
sur votre application. En retour, vous pouvez recevoir des commissions ou des frais de parrainage lorsque des
utilisateurs effectuent des achats grâce à ces partenariats.

### Vente de produits complémentaires

Vous pouvez proposer des produits ou des services complémentaires tels que des livres, des ressources pédagogiques, des
outils d'apprentissage en ligne, etc. Ces produits peuvent être vendus directement sur votre application, et vous pouvez
recevoir une commission sur les ventes.

### Formation en direct ou coaching

En plus du contenu préenregistré, vous pouvez proposer des sessions de formation en direct, des webinaires ou des
séances de coaching payantes. Les utilisateurs peuvent payer pour participer à ces sessions interactives dispensées par
des experts ou des instructeurs qualifiés.

## Mise en place du projet

### Prérequis

- PHP 8.1^
- Composer 2.1.9^
- MySQL 8.0^
- Node 14.17.6^
- NPM 6.14.15^
- Redis 6.2.5^

### Installation

- Cloner le projet sur votre machine locale `git clone ...`.
- Se placer dans le dossier du projet `cd bgrfacile`.
- Lancer la commande `composer install` pour installer les dépendances PHP.
- Lancer la commande `npm install`.
- Lancer la commande `npm run build`.
- Copier le fichier `.env.example` et le renommer en `.env`.
- Modifier les variables d'environnement dans le fichier `.env` (base de données, mail, etc.) selon votre configuration.
- Lancer la commande `php artisan migrate` pour créer les tables dans la base de données.
- Lancer la commande `php artisan db:seed` pour remplir les tables avec des données de test.
- Lancer la commande `php artisan storage:link` pour créer le lien symbolique vers le dossier de stockage.
- Lancer la commande `php artisan passport:install` pour installer les clés de chiffrement de passport.
- Lancer la commande `php artisan queue:work` pour lancer le worker de queue.
- Lancer la commande `php artisan serve` pour lancer le serveur de développement.

## Liste des fonctionnalités

### site web bgrfacile (libre pour tous)

Le site posséde les fonctionnalités de base suivantes:

- Tableau de bord
  - [x] Authentification
  - [x] Gestion des utilisateurs
  - [x] Gestion des établissements
  - [x] Gestion des paiements
  - [x] Gestion des paramètres
  - [x] Gestion des statistiques
  - [x] Gestion des rôles et permissions
  - [x] Gestion des abonnements

- bibliothèque de cours
    - recherche d'un cours
    - liste des cours
    - liste des cours par matière
    - liste des cours par niveau
    - liste des cours par filière
    - liste des cours par option
    - liste des cours par langue
    - liste des cours par type d'enseignement
    - liste des cours par type d'encadrement
    - liste des cours par type de document
    - liste des cours par type de fichier
    - liste des cours par type de support
    - liste des cours par type de ressource
    - liste des cours par type de source
    - liste des cours par type de contenu

- bibliothèque de devoirs (exercices)
    - recherche d'un devoir
    - liste des devoirs
    - liste des devoirs par matière
    - liste des devoirs par niveau
    - liste des devoirs par filière
    - liste des devoirs par option
    - liste des devoirs par langue
    - liste des devoirs par type d'enseignement
    - liste des devoirs par type d'encadrement
    - liste des devoirs par type de document
    - liste des devoirs par type de fichier
    - liste des devoirs par type de support
    - liste des devoirs par type de ressource

- repertoire des établissements
    - recherche d'un établissement
    - liste des établissements
    - liste des établissements par ville
    - liste des établissements par type
    - liste des établissements par niveau
    - liste des établissements par filière
    - liste des établissements par option
    - liste des établissements par langue
    - liste des établissements par type d'enseignement
    - liste des établissements par type d'encadrement

- trouvez un professeur particulier
    - recherche d'un professeur
    - liste des professeurs
    - liste des professeurs par ville
    - liste des professeurs par niveau
    - liste des professeurs par filière
    - liste des professeurs par option
    - liste des professeurs par langue
    - liste des professeurs par type d'enseignement
    - liste des professeurs par type d'encadrement
    - liste des professeurs par type de document

### application bgrfacile premium pour les établissements

L'application bgrfacile premium est une application qui permet aux établissements scolaire de gérer leur établissement.
Elle posséde les fonctionnalités de base suivantes:

- création de son établissement (école, collège, lycée, université, etc.)
- gestion des classes
- gestion des matières
- gestion des professeurs
- gestion des élèves
- gestion des parents
- gestion des cours
- gestion des devoirs et quiz (qui a fait quoi, qui a rendu quoi, qui a corrigé quoi, etc.)
- gestion de emploi du temps
- gestion des notes
- gestion des bulletins de notes
- gestion des absences
- gestion des paiements
- gestion des évènements
- gestion des annonces
- gestion des messages
- gestion des notifications
- gestion des paramètres
- gestion des statistiques
- gestion des rôles et permissions
- gestion des abonnements
- gestion de l'espace blog de l'établissement
- gestion de l'espace inscription à l'établissement
- gestion des sondages et enquêtes (sondage, enquête, questionnaire, etc.)

## Mise en place de la base de données

### User

    -   id | int
    -   last_name | string?
    -   first_name | string
    -   email | string (unique)
    -   slug | string (unique) (default: first_name-last_name)
    -   birthday | date?
    -   phone | string?
    -   gender | string?
    -   profile_picture | string?
    -   email_verified_at | datetime?
    -   password | string
    -   remember_token | string?
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Role

    -   id | int
    -   name | string
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Address

    -   id | int
    -   country | string // default: "Congo-Kinshasa"
    -   city | string  // default: "Kinshasa"
    -   street | string  // default: "N/A"
    -   zip_code | string  // default: "N/A"
    -   addressable_id | int  // default: "N/A"
    -   addressable_type | string  // default: "N/A"
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Course

    -   id | int
    -   name | string
    -   slug | string (unique) (default: name)
    -   description | text?
    -   status | enum (default: "draft") (draft, published, archived)
    -   is_premium | boolean (default: false)
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### CourseUser

    -   id | int
    -   course_id | int
    -   user_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Cycle

    -   id | int
    -   name | string
    -   slug | string (unique) (default: name)
    -   description | text?
    -   status | enum (default: "draft") (draft, published, archived)
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Level

    -   id | int
    -   name | string
    -   slug | string (unique) (default: name)
    -   description | text?
    -   status | enum (default: "draft") (draft, published, archived)
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Subject

    -   id | int
    -   name | string
    -   slug | string (unique) (default: name)
    -   description | text?
    -   status | enum (default: "draft") (draft, published, archived)
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Skill

    -   id | int
    -   name | string
    -   slug | string (unique) (default: name)
    -   description | text?
    -   status | enum (default: "draft") (draft, published, archived)
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### CourseCycle ``Pivot``

    -   id | int
    -   course_id | int
    -   cycle_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### CourseLevel ``Pivot``

    -   id | int
    -   course_id | int
    -   level_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### CourseSubject ``Pivot``

    -   id | int
    -   course_id | int
    -   subject_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### CourseSkill ``Pivot``

    -   id | int
    -   course_id | int
    -   skill_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### CycleLevel

    -   id | int
    -   cycle_id | int
    -   level_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### LevelSubject ``Pivot``

    -   id | int
    -   level_id | int
    -   subject_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### CycleSubject ``Pivot``

    -   id | int
    -   cycle_id | int
    -   subject_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### ContentText

    -   id | int
    -   content | json
    -   contentable_id | int
    -   contentable_type | string
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### ContentImage

    -   id | int
    -   content | text
    -   contentable_id | int
    -   contentable_type | string
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### ContentPdf

    -   id | int
    -   content | text
    -   contentable_id | int
    -   contentable_type | string
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### School

    -   id | int
    -   name | string
    -   email | string
    -   phone | string
    -   website | string
    -   level_min | string?
    -   level_max | string?
    -   description | text?
    -   small_description | text?
    -   status | enum (default: "draft") (draft, published, archived)
    -   address | string
    -   logo | string
    -   cover | string
    -   subscription_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)
    -   deleted_at | datetime?

### Location

    -   id | int
    -   school_id | int
    -   latitude | string
    -   longitude | string
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### TypeSchool

    -   id | int
    -   name | string
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### StatusSchool

    -   id | int
    -   name | string
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### SchoolTypeSchool ``Pivot``

    -   id | int
    -   school_id | int
    -   type_school_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### SchoolStatusSchool ``Pivot``

    -   id | int
    -   school_id | int
    -   status_school_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### SchoolUser ``Pivot``

    -   id | int
    -   school_id | int
    -   user_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

<!--
### Class

    -   id | int
    -   name | string
    -   school_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Homework

    -   id | int
    -   title | string
    -   description | string
    -   file | string
    -   school_id | int
    -   class_id | int
    -   subject_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Note

    -   id | int
    -   value | int
    -   school_id | int
    -   class_id | int
    -   subject_id | int
    -   student_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Absence

    -   id | int
    -   school_id | int
    -   class_id | int
    -   subject_id | int
    -   student_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Payment

    -   id | int
    -   amount | int
    -   school_id | int
    -   student_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Event

    -   id | int
    -   title | string
    -   description | string
    -   start_date | datetime
    -   end_date | datetime
    -   school_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Announcement

    -   id | int
    -   title | string
    -   description | string
    -   school_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Message

    -   id | int
    -   title | string
    -   content | string
    -   sender_id | int
    -   receiver_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Notification

    -   id | int
    -   title | string
    -   content | string
    -   user_id | int
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Contact

    -   id | int
    -   name | string
    -   email | string
    -   phone | string
    -   message | string
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### Setting

    -   id | int
    -   name | string
    -   value | string
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)

### PaymentMethod

    -   id | int
    -   name | string
    -   created_at | datetime (default: now)
    -   updated_at | datetime (default: now)
-->

