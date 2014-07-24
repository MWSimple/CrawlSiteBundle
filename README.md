CrawlSiteBundle
===============

## Installation

### Using composer

Add following lines to your `composer.json` file:

### Symfony 2.3.*

```json
"require": {
    ...
    "mwsimple/crawl-site": "2.3.*@dev"
}
```

Execute:

```cli
php composer.phar update "mwsimple/crawl-site"
```

Add it to the `AppKernel.php` class:

```php
// ...
new MWSimple\Bundle\AdminCrudBundle\MWSimpleCrawlSiteBundle(),
```

### Crawler Sites

```cli
php app/console mwsimple:crawlsite
```

## Dependencies

This bundle extends [Goutte](https://github.com/fabpot/goutte).

## Author

Gonzalo Alonso - gonkpo@gmail.com