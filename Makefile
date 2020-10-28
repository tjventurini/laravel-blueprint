########################################
# setup
# initialize the project
# init:
	# TODO: move setup commands in here 

########################################
# laradock

# start the laradock setup
up:
	@cd ./laradock && docker-compose up -d nginx php-fpm mysql workspace
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
	@echo ...