CONSOLE=bin/console

install:
	composer install
	cc
	cc-prod
	db-create
	db-update
	db-fixtures

# Cache / assets
cc:
	php $(CONSOLE) c:c -e dev
	assets

assets:
	php $(CONSOLE) assets:install --symlink
	php $(CONSOLE) assetic:dump -e dev

cc-prod:
	php $(CONSOLE) c:c -e prod
	assets-prod

assets-prod:
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
acl:
	cd symfony/web
	sudo setfacl -R -m u:www-data:rwX -m u:`whoami`:rwX symfony/web
	sudo setfacl -dR -m u:www-data:rwX -m u:`whoami`:rwX symfony/web

