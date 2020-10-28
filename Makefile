########################################
# variables
#
# the list of containers to work with
CONTAINERS=nginx php-fpm mysql workspace
# the branch to pull updates form
UPDATE_MAIN_BRANCH=master
# time that we give the containers to boot before we proceed with the setup 
WAITING_TIME=10

########################################
# repository
#
# initialize the project
init:
	@git submodule init # initialize laradock-blueprint repository
	@git submodule update # actually fetch the content of laradock-blueprint
	@cp .env.docker.example ./laradock/.env
	@cd ./laradock && docker-compose up -d $(CONTAINERS)
	@echo "Giving containers some time to boot before we continue ... ⌚"
	@sleep $(WAITING_TIME)
	@cd ./laradock && docker-compose exec --user=laradock workspace composer install
	@echo "The laravel-blueprint setup is up and running 🚀"
# upgrade the project 
upgrade: 
	@git remote add blueprint git@github.com:tjventurini/laravel-blueprint.git
	@git fetch blueprint
	@git checkout $(UPDATE_MAIN_BRANCH)
	@git merge blueprint/$(UPDATE_MAIN_BRANCH)

########################################
# laradock
#
# build containers
build:
	@cd ./laradock && docker-compose build $(CONTAINERS)
# start the laradock setup
up:
	@cd ./laradock && docker-compose up -d $(CONTAINERS)
# stop the laradock setup
stop:
	@cd ./laradock && docker-compose stop
# access the workspace using zsh
zsh: 
	@cd ./laradock && docker-compose exec --user=laradock workspace zsh
# access the workspace using bash
bash: 
	@cd ./laradock && docker-compose exec --user=laradock workspace bash
# execute any command using docker-compose 
dc: 
	@cd ./laradock && docker-compose $(filter-out $@,$(MAKECMDGOALS))

########################################
# application 
#
# update project dependencies
composer-update:
	@cd ./laradock && docker-compose exec --user=laradock workspace composer cc && docker-compose exec --user=laradock workspace composer update
# dump composer autoload
composer-dump:
	@cd ./laradock && docker-compose exec --user=laradock workspace composer dump
# refresh the application
refresh:
	@cd ./laradock && docker-compose down
	@echo "We need sudo permissions to delete the `.laradock` data folder 🔐"
	sudo rm -rf ./.laradock
	@cd ./laradock && docker-compose up -d $(CONTAINERS)
	@echo "Giving containers some time to boot before we continue ... ⌚"
	@sleep $(WAITING_TIME)
	@cd ./laradock && docker-compose exec --user=laradock workspace composer install
	@echo "The laravel-blueprint setup is up and running 🚀"
# render docs using vuepress 
docs-build:
	@cd ./docs && ./deploy.sh
# render docs using vuepress dev
docs-watch:
	@cd ./docs && vuepress dev

########################################
# other
#
# catch any not matching tasks in order to make the `dc` command work
%:
	@: