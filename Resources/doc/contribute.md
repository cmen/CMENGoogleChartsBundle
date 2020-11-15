# How to contribute

Before opening a pull request, be sure to follow the steps below.

## Step 1 : check and correct the code using PHPStan
```bash
./vendor/bin/phpstan analyse --level max
```

## Step 2 : run tests using PHPUnit and check all tests are OK
```bash
./vendor/bin/phpunit
```

## Step 3 : check and correct coding standards using PHP CS Fixer
```bash
./vendor/bin/php-cs-fixer fix --diff -vv
```
