<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use RectorLaravel\Set\LaravelSetList;
use Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector;
use Rector\Php83\Rector\ClassMethod\AddOverrideAttributeToOverriddenMethodsRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/bootstrap/app.php',
        __DIR__ . '/config',
        __DIR__ . '/database',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
        __DIR__ . '/resources/views', // Para arquivos Blade (Livewire)
    ])
    ->withSkip([
        // Regras específicas que você quer ignorar
        AddOverrideAttributeToOverriddenMethodsRector::class,
        EncapsedStringsToSprintfRector::class,
        __DIR__ . '/vendor', // Ignorar dependências
        __DIR__ . '/storage', // Ignorar arquivos de cache
        __DIR__ . '/bootstrap/cache',
    ])
    ->withPreparedSets(
        deadCode: true,       // Remoção de código morto
        codeQuality: true,    // Melhorar qualidade do código
        typeDeclarations: true, // Adicionar declarações de tipo sempre que possível
        privatization: true,  // Tornar propriedades e métodos privados quando possível
        earlyReturn: true,    // Substituir if-else complexos por retornos antecipados
        strictBooleans: true, // Melhorar o uso de booleans
        codingStyle: true,    // Melhorias gerais de estilo de código
    )
    ->withPhpSets(php82: true) // Garantir compatibilidade com PHP 8.2
    ->withSets([
        SetList::PHP_82, // Compatibilidade com PHP 8.2+
        SetList::PHP_80, // Compatibilidade com PHP 8.0+
        SetList::CODE_QUALITY, // Melhorias gerais de qualidade
        SetList::DEAD_CODE,    // Remoção de código não utilizado
        SetList::TYPE_DECLARATION, // Melhorar declarações de tipo
        SetList::CARBON,       // Melhorias específicas para a biblioteca Carbon
        LaravelSetList::LARAVEL_110, // Regras específicas para Laravel 10
        LaravelSetList::LARAVEL_CODE_QUALITY, // Melhorias de qualidade de código Laravel
        LaravelSetList::LARAVEL_ELOQUENT_MAGIC_METHOD_TO_QUERY_BUILDER,
        LaravelSetList::LARAVEL_IF_HELPERS,
        LaravelSetList::LARAVEL_CONTAINER_STRING_TO_FULLY_QUALIFIED_NAME,
        LaravelSetList::LARAVEL_COLLECTION,
    ])
    ->withFileExtensions([
        'php',        // Arquivos PHP normais
        'blade.php',  // Suporte para arquivos Blade
    ]);
