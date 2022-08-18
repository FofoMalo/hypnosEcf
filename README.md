---
Auteur: Malo Florent
Année: Septembre 2022
Ecole: Studi Digital Campus
ECF: titre DWWM
---
## 1.  <a name = 'table of content'></a>Table des matières
* 1. [Table of content](#1-a-name--table-of-contentatables-of-contents)
* 2. [Configurer son projet](#configurer-en-local-le-projet)
* 3. [initialiser](#initialiser)
* 4. [Database Config](#configurer-une-base-de-données-et-générer-les-fixtures)
* 5. [Créer un nouveau Gerant](#comment-créer-un-gérant)
* 6. [installer en locale](#charger-et-installer-en-locale-pour-test)


## Configurer en local le projet
Certains prérequis sont nécéssaires pour un bon démarrage du projet, il nous faut : 
* Xampp( cross OS)
* Un serveur : Apache2
* php : 🐘 v8.1.4
* composer
* symfony cli
* Github : pour le suivi de versionning
* heroku : pour le deploiement du site.
* Docker et Docker-compose.
A part Docker, et Docker-compose il faut vérifier l'opérationnalité de nos outils depuis le terminal avec les commandes suivantes: 
```zsh
symfony check:requirement
composer require
```
## Initialiser
Une fois nos outils mis en place, se rendre dans xampp, dans le dossier htdocs et lancer la commande suivante : 
```zsh
symfony new hypsos --full ou webapp
```
/!\ il peut arriver que git ne soit pas reconnu dans le dossier, configurer git en global dans ce cas de figure.

Le nouveau projet ainsi que toutes les dépendances nécéssaires ont été ainsi crées.

## Configurer une base de données et générer les fixtures
j'ai crée la base de donnée grâce à doctrine-Orm. Ensuite j'ai crée les Entités puis fait la migration. Pour générer des données j'ai utilisé Faker/Factory.
Pour cela je vais utiliser composer: 
```zsh
composer require --dev orm fixtures
```
j'ai ensuite installé les dépendances utiles pour fakerphp
```zsh
composer require fakerphp/faker --dev
```
j'ai ensuite écrit mes fixtures pour générer de fausses données dans AppFixtures.php.
La documentation sur github à ce sujet est très utile pour la rédaction des fixtures.

## Acceder au profil Gerant.
Je considère que l'Admin peut créer un nouveau gérant via le register profil qui sera lui même rediriger vers la page de login. Veuillez renseigner les informations de connexion lors de l'enregistrement pour accéder au panel d'administration et ainsi créer un nouveau hôtel et des suites dans la base de donnée, mettre à jour ou supprimer.

## Comment créer un gérant: 
* Se rendre  à l'url suivante: <kbd>___ /register___</kbd>
* Renseigner l'email du futur Gérant
* son Role : admin
* Son nom
* Valider 
Vous pourrez par la suite aller sur l'url <kbd> ___/login___</kbd>
vous aurez accès au dashboard pour créer un hôtel, et les suites.

## Charger et installer en locale pour test 

exemple admin1 créer pour les tests en locale: 
---
for@test.com
123456@
---
## Utilisateur Client de l'application.
* Uploader : git clone https://github.com/FofoMalo/hypnosEcf.git
* Check your php -version, and install the zip ext
```zsh
sudo apt-get install php8.1-zip
```

* 1. Install php-curl 
* 2. install ckeditor bundle 
```
composer require friendsofsymfony/ckeditor-bundle
```
* 3. composer install
* 4. npm install and run ___npm run build___
### Demo
[demo](<a href="https://www.loom.com/share/b71d13c4bb2c4a9daaa2e0080ad311e7">
    <p>Hôtel Hypsos_Demo_ 16 August 2022 - Watch Video</p>
    <img style="max-width:300px;" src="https://cdn.loom.com/sessions/thumbnails/b71d13c4bb2c4a9daaa2e0080ad311e7-with-play.gif">
  </a>





