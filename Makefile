########################################
# variables
CONTAINERS=nginx php-fpm mysql workspace

########################################
# setup
# initialize the project
init:
	@git submodule init # initialize laradock-blueprint repository
	@git submodule update # actually fetch the content of laradock-blueprint
	# @echo "What is your project slug? (eg. laravel_blueprint)" && read PROJECT_NAME
	# TODO collect other variables 
	# TODO replace the variables in the .env.docker.example file before copying it to laradock/.env
	@cp .env.docker.example ./laradock/.env
	@cd ./laradock && docker-compose up -d $(CONTAINERS)
	@sleep 30
	@cd ./laradock && docker-compose exec --user=laradock workspace composer install
	@echo "The laravel-blueprint setup is up and running 🚀"

########################################
# laradock

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

#####################
# other

# catch any not matching tasks in order to make the `dc` command work
%:
	@: