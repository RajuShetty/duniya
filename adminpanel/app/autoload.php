<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/** @var ClassLoader $loader */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
$loader->registerNamespaces(array(
    // ...

    'Imagine'   => __DIR__.'/../vendor/imagine/lib',
    'Liip'      => __DIR__.'/../vendor/bundles',
));

return $loader;
