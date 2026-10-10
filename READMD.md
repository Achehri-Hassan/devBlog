# DevBlog

DevBlog est un projet de blog développé progressivement pour pratiquer
le développement web avec HTML, CSS, JavaScript, PHP et MySQL.

## État actuel du projet

La première étape consiste à concevoir les interfaces du site avec HTML
et CSS.

### Interfaces conçues

-   Page d'accueil (Home)
-   Page de liste des articles
-   Page de détails d'un article
-   Page de connexion (Login)
-   Interface du tableau de bord (Dashboard)

Le design utilise une interface claire, une navigation cohérente et la
couleur orange `#FF9408` comme accent visuel.

## Étapes suivantes

1.  Créer la base de données MySQL et les tables nécessaires.
2.  Configurer la connexion à la base de données avec PHP et PDO.
3.  Développer les opérations CRUD pour les articles.
4.  Afficher les articles et leurs détails depuis la base de données.
5.  Ajouter les commentaires et les relations entre les tables.
6.  Mettre en place une API REST en PHP.
7.  Utiliser les méthodes HTTP : `GET`, `POST`, `PUT`, `PATCH` et
    `DELETE`.
8.  Connecter le frontend à l'API avec JavaScript et Fetch API.
9.  Tester les requêtes et les réponses avec Postman.
10. Ajouter les validations et les protections de sécurité nécessaires.

## Technologies prévues

-   HTML
-   CSS
-   JavaScript
-   PHP
-   MySQL
-   REST API / HTTP
-   Fetch API
-   Postman

> Les fonctionnalités backend, la base de données et l'API REST sont
> prévues pour les prochaines étapes. Elles ne sont pas encore
> présentées comme terminées.

## Lancer le projet

Si tu utilises XAMPP :

1.  Place le dossier du projet dans `C:\xampp\htdocs\devblog`.
2.  Démarre Apache depuis le panneau de contrôle XAMPP.
3.  Ouvre le projet dans ton navigateur, par exemple :
    `http://localhost/devblog/public/`.

Adapte l'URL si la structure de tes dossiers est différente.

## Git

Pour enregistrer les changements et les envoyer vers le dépôt distant :

``` bash
git add .
git commit -m "feat: add DevBlog frontend page designs"
git push
```

Si c'est le premier push de la branche `main`, utilise si nécessaire :

``` bash
git push -u origin main
```

## Objectif

Construire progressivement un blog fonctionnel, depuis les interfaces
frontend jusqu'au backend PHP/MySQL et à une API REST testée avec
Postman.
