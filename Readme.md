Gestionnaire de commandes clients

Contexte

La petite entreprise BatiExperts souhaite améliorer son suivi des commandes. Actuellement, les commandes sont gérées sur un carnet, ce qui entraîne des erreurs et des oublis. L'objectif de cette application est de développer un système permettant de :

Gérer les clients (nom, email, téléphone).

Enregistrer et suivre des commandes (chaque commande est liée à un client et a un statut : "en attente", "expédiée", "livrée").

Relation entre les entités

Un client peut passer plusieurs commandes.

Une commande appartient à un seul client.

Structure du projet

/mvc-orders
|- /controllers
|  |- ClientController.php
|  |- OrderController.php
|- /lib
|  |- database.php
|- /models
|  |- /repositories
|  |  |- ClientRepository.php
|  |  |- OrderRepository.php
|  |- Client.php
|  |- Order.php
|- /views
|  |- 404.php
|  |- /templates
|  |  |- footer.php
|  |  |- header.php
|  |- client-create.php
|  |- client-edit.php
|  |- client-list.php
|  |- client-view.php
|  |- order-create.php
|  |- order-edit.php
|  |- order-list.php
|  |- order-view.php
|  |- home.php
|- index.php
|- README.md

Fonctionnalités

Clients

CRUD (Créer, Lire, Modifier, Supprimer)

Afficher les commandes d'un client

Commandes

Liée à un client

Statut : "en attente", "expédiée", "livrée"

Un client peut avoir plusieurs commandes

Afficher le client associé à une commande

Exemple d'utilisation

Un employé ajoute un nouveau client.

Il enregistre une commande pour ce client.

La commande est affichée avec son statut.

L'employé peut mettre à jour le statut de la commande.

L'employé peut consulter toutes les commandes d'un client donné.

Méthodologie

Créer la structure de la base de données avec des données de test.

Développer le CRUD pour les clients.

Développer le CRUD pour les commandes.

Assurer le lien entre les clients et leurs commandes.

Technologies utilisées : PHP, MySQL, MVC
