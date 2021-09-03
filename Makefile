prepare:
	chmod +x bin/brain-games

install:
	composer install

brain-games:
	php bin/brain-games

validate:
	composer validate