<?php

declare(strict_types = 1);

use Rector\Core\Configuration\Option;
use Rector\Core\ValueObject\PhpVersion;
use Rector\DeadCode\Rector\Assign\RemoveUnusedVariableAssignRector;
use Rector\Php71\Rector\FuncCall\RemoveExtraParametersRector;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Set\ValueObject\SetList;
use Rector\Symfony\Set\SymfonySetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void
{
    // get parameters
    $parameters = $containerConfigurator->parameters();

    //-- Set path to analyze
    $parameters->set(Option::PATHS, [__DIR__.'/src', __DIR__.'/tests']);

    // is your PHP version different from the one your refactor to? [default: your PHP version], uses PHP_VERSION_ID format
    $parameters->set(Option::PHP_VERSION_FEATURES, PhpVersion::PHP_72);

    // Define what rule sets will be applied
    $parameters->set(Option::SETS, [
        SetList::DEAD_CODE,

        //-- PHP version migrations
        SetList::PHP_52,
        SetList::PHP_53,
        SetList::PHP_54,
        SetList::PHP_55,
        SetList::PHP_56,
        SetList::PHP_70,
        SetList::PHP_71,
        SetList::PHP_72,

        //-- Symfony migrations
        SymfonySetList::SYMFONY_44,

        //-- PHP Unit Test
        PHPUnitSetList::PHPUNIT_80,
    ]);

    $parameters->set(Option::SKIP, [
        RemoveExtraParametersRector::class,
    ]);

    // Run Rector only on changed files
    // $parameters->set(Option::ENABLE_CACHE, true);

    //-- get services (needed for register a single rule)
    // $services = $containerConfigurator->services();
};
