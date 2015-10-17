# Installation

## Step 1 : Download CMENGoogleChartsBundle using Composer
```
composer require cmen/google-charts-bundle "@dev"
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
