# Installation

## Step 1 : Download stable version using Composer
```bash
composer require cmen/google-charts-bundle
```
Composer will install the bundle in *vendor* directory.

## Step 2 : Enable the bundle (only for Symfony < 4)
Enable the bundle in the kernel :
```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new CMEN\GoogleChartsBundle\CMENGoogleChartsBundle(),
    );
}
```

## Step 3 (optional) : Configure version of Google Charts
If you use Symfony < 4 put the configuration in **app/config.yml**, otherwise put the configuration in **config/packages/cmen_google_charts.yaml**.

The latest stable version :
```yaml
cmen_google_charts:
    version: "current"
```

The next version in development :
```yaml
cmen_google_charts:
    version: "upcoming"
```

A frozen version :
```yaml
cmen_google_charts:
    version: "45"
```

See this [page](https://developers.google.com/chart/interactive/docs/basic_load_libs#load-version-name-or-number) 
for more information.

If you do not configure the bundle, the latest stable version is used.

## Step 4 (optional) : Customize locale
You can change locale to customize text for a country or language, affecting the formatting of values such as 
currencies, dates, and numbers. For example, if you want to use french :
```yaml
cmen_google_charts:
    language: "fr"
```

If you need to set dynamically the locale, you can use `gc_language` Twig function in Twig template :
```twig
<html>
<head></head>
<body>
    <div id="div_histogram"></div>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        {{ gc_language('fr') }}
    
        {{ gc_draw(histogram, 'div_histogram') }}
    </script>
</body>
</html>    
```

By default, Google Chart libraries are loaded with the "en" locale.
