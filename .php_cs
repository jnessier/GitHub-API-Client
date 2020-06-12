<?php

PhpCsFixer\Config::create()->setCacheFile(__DIR__ . '/.php_cs.cache');

// Define excludes
$excludes = [];

// Create finder
$finder = PhpCsFixer\Finder::create()
    ->exclude($excludes)
    ->in('src')
    ->in('tests');

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
