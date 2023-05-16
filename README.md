# docker-project

Après avoir clone le git faudra supprimer le ".gitignore" dans le dossier pg_data.

Puis entrer "docker compose up -d"

À la suite faire un "docker ps" pour récupérer l'id du container

On va rentrer dans terminal du container : docker exec -it container_symfony_id sh

Puis après on install symfony: composer require symfony/runtime

Àprès l'installation migré les donnés: php bin/console make:migration

Ouvrir sur le navigateur l'app: http://localhost:8000/default et l'adminer: http://localhost:8081/adminer

Puis crée directement sur adminer les données et après retourner sur l'app pour les afficher.
