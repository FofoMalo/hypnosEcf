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
## 
