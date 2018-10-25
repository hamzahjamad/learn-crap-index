# Getting Started
Run this command to install packages
```
docker run --user $(id -u):$(id -g) --rm -v $(pwd):/app composer bash -c "composer install"
```

Run this command to start the application
```
docker-compose up
```

# Test
Run test
```
docker-compose exec app bash -c "./vendor/bin/phpunit"
```

Run test with coverage
```
docker-compose exec app bash -c "./vendor/bin/phpunit --coverage-html ./tests/coverage_results"
```
The test result can be viewed on tests/coverage_results folder.

# Notes
### Test coverage config
In phpunit.xml file, we need to specify which folder we want to cover for the test coverage report
```
	<filter>
		<whitelist processUncoveredFilesFromWhitelist="true">
			<directory suffix=".php">./app</directory>
		</whitelist>	
	</filter>	
```
### Crap Index value
The higher the value of the index, the more complex our actual code (if the test already cover the code completely).
To lower the index value, we can either :
* make more test to increase our test coverage for that code
* make our code more simple by refactoring it 

---

## Reference
* [Test Code Coverage: From Myth to Reality](https://code.tutsplus.com/articles/test-code-coverage-from-myth-to-reality--cms-20442)
* [How to Read and Improve the C.R.A.P Index of your code](https://opnsrce.github.io/how-to-read-and-improve-the-c-r-a-p-index-of-your-code)

## Disclaimer
* While writing and testing this code, i'm using Linux as my development machine. It might be not working in Windows / Mac OS X environment.