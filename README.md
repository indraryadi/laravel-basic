## docker-base-setup
php7-nginx-mysql

# up the container
sudo docker-compose up -d

# check if it's up
sudo docker-compose ps

# access into container
sudo docker exec -it 'container name' bash/ash

# create laravel project
# go inside container first
sudo docker exec -it testing_app bash

# after terminal change to docker container run composer
composer create-project --prefer-dist laravel/laravel

# to run migration 
# don't forget to setup .env first
# fill it like docker-compose
# go inside container first



