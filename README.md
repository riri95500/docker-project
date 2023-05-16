# docker-project

Après avoir cloné le git il faudra supprimer le ".gitignore" dans le dossier pg_data

Puis exécutez "docker compose up -d"

À la suite faire un "docker ps" pour récupérer l'id du container

On va rentrer dans le terminal du container : docker exec -it container_symfony_id sh

Pour avoir un environnement d'exécution optimisé pour notre applications Symfony : composer require symfony/runtime

Après l'installation migrez les données: - php bin/console make:migration
                                         - php bin/console doctrine:migration:migrate
                                         
Ouvrir sur le navigateur l'app: http://localhost:8000/default et l'adminer: http://localhost:8081/adminer

Injecter les données dans la table TodoList sur adminer
