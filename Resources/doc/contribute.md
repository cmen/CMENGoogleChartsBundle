# How to contribute

Before opening a pull request, be sure to follow the steps below.

## Step 1 : check and correct the code using PHPStan and Rector
```bash
composer analyse
composer rector
```

## Step 2 : run tests using PHPUnit and check all tests are OK
```bash
composer tests
```

## Step 3 : check and correct coding standards using PHP CS Fixer
```bash
composer lint
```
