<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\Symfony\Set\SetProvider\Symfony8SetProvider;
use Rector\Symfony\Set\SymfonySetList;

return RectorConfig::configure()
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        typeDeclarations: true,
        privatization: true,
        naming: true,
        rectorPreset: true,
    )
    ->withSets([
        LevelSetList::UP_TO_PHP_85,
        SetList::DEAD_CODE,
        SetList::CODE_QUALITY,
        SetList::TYPE_DECLARATION,
        SetList::PHP_85,
        SetList::RECTOR_PRESET,
        SetList::EARLY_RETURN,
        setList::NAMING,
    ])
    ->withComposerBased(twig: true, doctrine: true, phpunit: true, symfony: true)
    ->withPreparedSets(

    )
    ->withPaths([
        __DIR__.'/src',
    ])
    ->withSkip([
        '*/src/Entity/*',
        '*/src/Repository/*',
    ]);
