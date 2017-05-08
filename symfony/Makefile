dev:
	php bin/console c:c -e dev
	php bin/console assets:install --symlink
	php bin/console assetic:dump -e dev

prod:
	php bin/console c:c -e prod
	php bin/console assets:install --symlink
	php bin/console assetic:dump -e prod

doctrine:
	php bin/console d:s:u --force --dump-sql --complete
