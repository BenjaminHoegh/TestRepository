<?php 
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Finder\Finder;


$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__)
    ->exclude('vendor');

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        '@PHP80Migration' => true,
        '@PhpCsFixer' => true,
        'general_phpdoc_annotation_remove' => ['annotations' => ['expectedDeprecation']],
    ])
    ->setFinder($finder);

return $config;