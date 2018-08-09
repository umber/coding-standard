

test:
	rm -rf tests/stage/*
	cp -r tests/files/before tests/stage
	vendor/bin/phpcbf tests/stage/before --report=diff || true
	vendor/bin/phpcs tests/stage/before || true
	diff -ur tests/stage/before tests/files/after
