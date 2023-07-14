<?php

$rules = [
        '@PHP71Migration' => true,
        '@PHPUnit75Migration:risky' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'protected_to_private' => false,
        'native_constant_invocation' => ['strict' => false],
        'nullable_type_declaration_for_default_null_value' => ['use_nullable_type_declaration' => false],
        'no_superfluous_phpdoc_tags' => ['remove_inheritdoc' => true],
        'modernize_strpos' => true,
        'get_class_to_class_keyword' => true,
];

$finder = PhpCsFixer\Finder::create()
            ->in(__DIR__.'/src')
            ->append([__FILE__])
    ->name('*.php')
    ->notName('*.js')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$config = (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules($rules)
    // ->setIndent("\t")
    ->setLineEnding("\n")
    ->setUsingCache(true)
    ->setCacheFile(__DIR__.'/.php_cs.cache')
    ->setFinder($finder);

return $config;
