# Done during four hours

Comparsion between symfony graphql library
Repository creation
Symfony installation with database
Graphql type Implementation ( Go to /graphql route)
Readme Implementation

# TO DO

Graphql Query implementation
Graphql Mutation implementation
Fixtures
Testing

# Blocking area
Almost library have requirement issue with symfony 6.
The easyest way to use graphql with symfony is graphqlite library which have less boilerplate code.   

# Requirement

"php": ">=8.1"
mysql server 

# Installation 

### Install php dependencies

```bash
composer install
```

## create and update the db
```bash
php bin/console doc:data:cre
php bin/console doctrine:migrations:migrate --no-interaction
```

## Run the fixtures
```bash
php bin/console doctrine:fixtures:load --group=init  --group=dev
```


## Run the app
```bash
php bin/console server start
```




# Description of the project
## Objectifs de l'exercice
L’objectif de cette exercice et de développer une messagerie instantané en utilisant une API
GraphQL
Grâce à l’API, vous devez être capable de
● Récupérer les informations d’un utilisateur
● Récupérer les informations d’une discussion
● Récupérer les messages d’une discussion
● Publier un nouveau message dans une discussion
● Créer une nouvelle discussion
● Connaître le nombre de messages non lus.
L’api graphql doit être sécurisé. C’est à dire qu’un utilisateur B ne peux pas envoyer des messages en
se faisant passer pour un autre. Il ne pourra pas non plus lire, via l’api, des messages qui ne lui sont
pas adressés.

## Planning
Vous dépensez maximum 4 heures sur cet exercice. Garder en tête que le but de l’exercice est de tester
vos compétences en PHP et sur Symfony

## Données
Vous pouvez utiliser un jeu de données initial (fixtures). Par exemple un jeu de données contenant des
utilisateurs, des discussions et des messages.
Voici les différentes entitées que vous devez créer: (données à titre indicatif, libre à vous d'adapter et
de modifier au mieux)
User
● Id
● Email
● Lastname

● Firstname
Message
● Id
● From (of type User)
● Content
● Date
● metadatas (of type Metadata[])
● thread (of type Thread)
Thread
● Id
● subject
● messages (of type Message[])
● participants (of type User[])
Metadata
● Id
● User
● Message
● ReadDate

## Contraintes technologiques
Technologie qui doit être utilisé:
● Symfony ^6.0.0
● Doctrine (ORM)
● MySQL ou PostgreSQL
● webonyx/graphql-php or youshido (Pas de ApiPlatform)

Déploiement et format attendu
Le résultat peut être envoyé sous forme d'archive, ou sous forme de lien vers un repo git, contenant
toutes les informations nécessaires pour faire fonctionner le serveur graphql.
Pour gagner du temps il n'est pas nécessaire d'utiliser un serveur autre que la commande `php
bin/console server start` de symfony
Il est supposé que le testeur de services Web aura installé php 7.2, 8.0, 8.1, ou 8.2 composer, mysql ou
postgresql sur la machine de test.