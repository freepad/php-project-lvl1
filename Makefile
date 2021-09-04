prepare:
	chmod +x bin/brain-games
	chmod +x bin/brain-even
	chmod +x bin/brain-calc
	chmod +x bin/brain-gcd

install:
	composer install

brain-games:
	php bin/brain-games

brain-even:
	php bin/brain-even

brain-calc:
	php bin/brain-calc

brain-gcd:
	php bin/brain-gcd

brain-progression:
	php bin/brain-progression

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin