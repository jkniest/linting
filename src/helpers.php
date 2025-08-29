<?php

declare(strict_types=1);

namespace jkniest\Linting;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

function styles(Finder $finder, array $rules = []): Config
{
    $rules = array_merge(require __DIR__.'/rules.php', $rules);

    return new Config()
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules)
        ->setParallelConfig(ParallelConfigFactory::detect());
}
