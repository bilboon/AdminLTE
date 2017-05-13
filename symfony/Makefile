CONSOLE=bin/console

install: vendor db-create db-update db-fixtures cc cc-prod acl

# Cache / assets
cc:
	php $(CONSOLE) c:c -e dev
	php $(CONSOLE) assets:install --symlink
	php $(CONSOLE) assetic:dump -e dev

cc-prod:
	php $(CONSOLE) c:c -e prod
	php $(CONSOLE) assets:install --symlink
	php $(CONSOLE) assetic:dump -e prod

# Database
db-create:
	php $(CONSOLE) doctrine:database:drop --force --if-exists
	php $(CONSOLE) doctrine:database:create --if-not-exists

db-update:
	php $(CONSOLE) doctrine:schema:update --force --dump-sql --complete

db-fixtures:
	php $(CONSOLE) doctrine:fixtures:load -n

# Other
vendor:
	composer install

acl:
	sudo setfacl -R -m u:www-data:rwX -m u:`whoami`:rwX web var
	sudo setfacl -dR -m u:www-data:rwX -m u:`whoami`:rwX web var

