<?php

PhpCsFixer\Config::create()->setCacheFile(__DIR__.'/.php_cs.cache');

// Define excludes
$excludes = [
    'vendor',
];

// Create finder
$finder = PhpCsFixer\Finder::create()
    ->exclude($excludes)
    ->in(__DIR__);

// Create config
return PhpCsFixer\Config::create()
    ->setRiskyAllowed(false)
    ->setRules([
        '@PSR1' => true,
        '@PSR2' => true,
        //'@Symfony' => true,
        //'@PhpCsFixer' => true,
        'no_superfluous_phpdoc_tags' => false,
    ])
    ->setFinder($finder);
