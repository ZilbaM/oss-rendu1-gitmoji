# OSS Rendu 1 - Basile MAILLE

[![Last version](https://img.shields.io/packagist/v/zilbam/oss-rendu1-gitmoji?maxAge=3600)](https://packagist.org/packages/zilbam/oss-rendu1-gitmoji)

## Installation

```bash
composer require zilbam/oss-rendu1-gitmoji
```
Install the dependencies:
```bash
composer install
```

## How to use ?


```php
    use Zilbam\OssRendu1Gitmoji\GitmojisService;
    ...
    
    // Initialize the service
    $gitmojisService = new GitmojisService();
    
    // Get all the gitmojis
    $gitmojis = $gitmojisService->getGitmojis();
    
    // Get a gitmoji by its name
    $bug = $gitmojisService['bug'];
    
    // Display the gitmoji
    echo $bug;
    
    // Echo the gitmoji's description
    echo $bug->description;
    
    // Get the gitmoji's name
    $gitmojiName = $bug->name;
    
    // Get the gitmoji's code
    $gitmojiCode = $bug->code;
```

## Tests and linters:

```bash
php vendor/bin/phpstan analyse src --level=max
```

```bash
php vendor/bin/php-cs-fixer fix src --rules=@PSR12
```

```bash
php vendor/bin/phpunit tests
```