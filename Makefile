########################################
# variables
CONTAINERS="nginx php-fpm mysql workspace"

########################################
# setup
# initialize the project
init:
	@git submodule init 
	@git submodule update

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