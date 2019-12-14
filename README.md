
## How to Use 

1. Cloner le projet
2. Faire un `composer install` dans le dossier
3. Créer à la racine un fichier `.env.local` qui devra contenir 4 variable : `DATABASE_HOST` `DATABASE_NAME` `DATABASE_PASSWORD` `DATABASE_USERNAME` avec comme valeur les informations de connexion de votre bdd
4. Faire un `bin/console doctrine:database:create` pour créer la bdd si elle n'existe pas
5. Faire un `bin/console doctrine:migrations:migrate` pour exécuter les dernière migrations et mettre à jour la base de données
6. Faire un `bin/console doctrine:fixtures:load`
7. Lancer le server avec `symfony server:start`

Si ça ne marche pas, faire un`bin/console doctrine:database:drop --force`et reprendre à l'étape 4

