---
Auteur: Malo Florent
Année: Septembre 2022
---
# Hypnos Projet

[![Symfony](https://github.com/FofoMalo/hypnosEcf/actions/workflows/symfony.yml/badge.svg)](https://github.com/FofoMalo/hypnosEcf/actions/workflows/symfony.yml)

## Table of content

* 1. [Table of content](#table-of-content)

* 2. [Configurer son projet](#configurer-en-local-le-projet)

* 3. [initialiser](#initialiser)

* 4. [Database Config](#installer-docker)

* 5. [Créer un nouveau Gerant](#créer-un-nouveau-gérant)

* 6. [MySql DataBase](#mysql-et-docker-les-requêtes-demo)

* 7. [test Unitaire](#tests-unitaires)

* 8. [Gerant](#accéder-au-profil-gérant)

* 9. [installer en locale](#utilisateur-client-de-lapplication)

## Configurer en local le projet

Certains prérequis sont nécessaires pour un bon démarrage du projet, il nous faut installer les logiciels et ou outils suivants:

* Xampp ou `lamp` ( cross OS)

* Un serveur : `Apache2`

* php : `🐘 v8.1.4` ou `^`;

* `composer`

* symfony cli

* `Github` : pour le suivi de versionning

* `heroku` : pour le deploiement du site.

* Docker et `Docker-compose`.

A part Docker, et Docker-compose il faut vérifier que de nos outils sont opérationnels depuis le terminal saisir les commandes suivantes :

```zsh

symfony check:requirement

composer require

```

### Initialiser

<!-- Cette phase de développement a concerné la période où j'étais sous windows -->

Une fois les outils mis en place, se rendre dans le dossier -> xampp, ensuite dans le dossier `htdoc` et lancer la commande suivante pour initialiser un nouveau projet :

```zsh

symfony new 'hypsos' --full ou webapp

```

`/!\` il peut arriver que git ne soit pas reconnu dans le dossier, configurer git en global dans ce cas de figure.

Le nouveau projet ainsi que toutes les dépendances nécessaires ont été ainsi créées.

### Configurer une base de données et générer les fixtures

#### Installer Docker

Dans le cadre de mon projet j'ai installé `Docker-compose` pour la gestion de la base de données, grâce à symfony-cli, nous pouvons créer la BDD avec la commande suivante :

```zsh
symfony console make:docker:database
```

j'ai créé la base de données grâce à doctrine-Orm. Ensuite j'ai crée les Entités puis j'ai fait la migration des requêtes SQl. Pour finir j'ai généré des données en utilisant Faker/Factor.

Pour cela je vais utiliser composer:

```zsh

composer require --dev orm fixtures

```

j'ai ensuite installé les dépendances utiles pour fakerphp

```zsh

composer require fakerphp/faker --dev

```

Pour écrire les fixtures afin de générer des données fictives utiles pour les tests de comportements dans la base de données, par exemple est ce que la casse, le format définit est respectés. Le fichier  `AppFixtures.php` contient le script des fixtures du projet.
<!--La documentation sur Github à ce sujet est très utile pour la rédaction des fixtures-->

### Mysql et Docker, les requêtes Demo

---
> Demo de requêtes sql via docker, depuis Visual studio code

[![mysql_requete](https://cdn.loom.com/sessions/thumbnails/8fcbcc233a904a58b2f42e05f0a557e4-with-play.gif)](https://www.loom.com/share/8fcbcc233a904a58b2f42e05f0a557e4)

### Tests unitaires

* `Demo`

> Demo,
---
> Demo testUnitaire

[![asciicast](https://asciinema.org/a/l51NbbaGGiyoT64diMVFxsL18.svg)](https://asciinema.org/a/l51NbbaGGiyoT64diMVFxsL18)

### Accéder au profil Gérant

Considérant que l'Admin peut créer un nouveau gérant via le `register profil` qui sera lui même rediriger vers la page de login. Veuillez à renseigner les informations de connexion lors de l'enregistrement pour accéder au panel d'administration. En tant qu'administrateur vous pourrez désormais créer un nouvel hôtel , un gérant pour l'hôtel concerné, créer des suites dans la base de données, mettre à jour ou supprimer.

### Comment créer un gérant ?

* Se rendre à l'url suivante: `/register`

* Renseigner l'email du futur Gérant

[ ] son Role : admin

[ ] Son nom

`Valider`

Vous pourrez par la suite aller sur l'url `/login` renseigner les identifiants nouvellement créés et vous connectez en tant que Gérant du site.
vous aurez accès au dashboard pour créer un hôtel, et les suites.

### Charger et installer en locale pour test

Exemple :  `admin1` créer pour les tests en locale lors de la phase de développement

|email       | mot de passe  |
|:-----------|---------------|
|for@test.com| 123456@       |

### Utilisateur Client de l'application

* Pour installer en local sur votre machine il faudra `Uploader` via git en le clonant  : git clone <https://github.com/FofoMalo/hypnosEcf.git>

Vérifier  votre version php

* Procéder à une vérification de la version php en locale, et procéder à une installation de zip ext

```zsh

sudo apt-get install php8.1-zip

```

* 1. Install php-curl

* 2. install ckeditor bundle

```zsh

composer require friendsofsymfony/ckeditor-bundle

```

* 3. composer install

* 4. npm install and run  `__npm run build__`

### `Demo`

#### Créer un nouveau Gérant

---
> Demo créer un gérant

[![demo_register](https://cdn.loom.com/sessions/thumbnails/f6b85f88d83a4773b6021a763b7be9ed-with-play.gif)](https://www.loom.com/share/f6b85f88d83a4773b6021a763b7be9ed)

#### se connecter avec un compte existant

---
> Demo login accès à la base de données

[![demo_login](https://cdn.loom.com/sessions/thumbnails/b71d13c4bb2c4a9daaa2e0080ad311e7-with-play.gif)](https://www.loom.com/share/b71d13c4bb2c4a9daaa2e0080ad311e7)

> [retour](#table-of-content) 🌐
