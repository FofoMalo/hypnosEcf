---
Année : 2022
Ecole : Studi Digital Campus
ECF: titre DWWM
auteur: Malo Florent
---

## 1.  <a name = 'table of content'></a>Tables of contents
* 1. [Table of content](#1-a-name--table-of-contentatables-of-contents)
* 2. [Configurer son projet](#configurer-en-local-le-projet)
* 3. [initialiser](#initialiser)
* 4. [Database Config](#configurer-une-base-de-données-et-généré-les-fixtures)
* 5. [Créer un nouveau Gerant](#acceder-au-profil-gerant)
 


## Configurer en local le projet
Certains prérequis sont nécéssaire pour un bon démarrage du projet, il faut : 
* Xampp( cross o.s)
* Un serveur : Apache2
* php : 🐘 v8.1.4
* composer
* symfony cli
* Github : pour le suivi de versionning
* heroku : pour le deploiement du site.
* Docker et Docker-compose.
A part Docker, et Docker-compose il faut vérifier l'opérationnalité de nos outils de puis le terminal
```pwsh
symfony check:requirement
composer require
```
## Initialiser
Une fois nos outils mis en place, se rendre dans xampp, dans le dossier htdocs et lancer la commande suivante : 
```pwsh
symfony new hypsos --full ou webapp
```
/!\ il peut arriver que git ne soit pas reconnu dans le dossier, configurer git en global dans ce cas de figure

Un nouveau projet avec toutes les dépendances nécéssaire ont été ainsi crée.
## Configurer une base de données et généré les fixtures
j'ai crée la base de donnée grâce à doctrine-Orm. Ensuite j'ai crée les Entités puis fait la migration. Pour générer des données j'ai utilisé Faker/Factory.
Pour cela je vais utiliser composer: 
```pwsh
composer require --dev orm fixtures
```
j'ai ensuite installé les dépendances utiles pour fakephp
```pwsh
composer require fakerphp/faker --dev
```
j'ai ensuite écrit mes fixtures pour générer de fausses données dans AppFixtures.php.
La documentation sur github à ce sujet est très utile pour la rédaction des fixtures.

## Acceder au profil Gerant.
Je considère que l'Admin peut créer un nouveau gérant via le register profil qui sera lui même rediriger vers la page de login. Veuillez renseigner les informations de connexion lors de l'enregistrement pour accéder au panel d'administration et ainsi créer un nouveau hôtel et des suites dans la base de donnée, mettre à jour ou supprimer.

## Utilisateur Client de l'application.

