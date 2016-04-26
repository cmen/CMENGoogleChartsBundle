# Installation

## Step 1 : Download last version of CMENGoogleChartsBundle using Composer
```
composer require cmen/google-charts-bundle "~x.x"
```
Composer will install the bundle to your project's vendor directory.

## Step 2 : Enable the bundle
Enable the bundle in the kernel :
```
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
The latest version :
```
# app/config.yml
...
cmen_google_charts:
    version: "1"
```

The cutting edge developer version :
```
# app/config.yml
...
cmen_google_charts:
    version: "1.1"
```

A frozen version :
```
# app/config.yml
...
cmen_google_charts:
    version: "41"
```

If you do not configure the bundle, the latest version is used.

## Step 4 (optional) : Customize locale
You can change locale to customize text for a country or language, affecting the formatting of values such as 
currencies, dates, and numbers. For example, if you want to use french :
```
cmen_google_charts:
    language: 'fr'
```

If you need to set dynamically the locale, you can use `gc_language` Twig function in Twig template :
```
<html>
<head></head>
<body>
    <div id="div_histogram"></div>
    
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        {{ gc_language('fr') }}
    
        {{ gc_draw(histogram, 'div_histogram') }}
    </script>
</body>
</html>    
```

By default, the Google Chart libraries are loaded with the "en" locale.