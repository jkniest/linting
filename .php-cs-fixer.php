<?php

$finder = PhpCsFixer\Finder::create()
  ->notPath('vendor')
  ->in(__DIR__ . '/src')
  ->name('*.php')
  ->ignoreDotFiles(true)
  ->ignoreVCS(true);

return jkniest\Linting\styles($finder);
