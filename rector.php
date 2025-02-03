<?php

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\Class_\ReturnTypeFromStrictTernaryRector;
use Rector\TypeDeclaration\Rector\ClassMethod\BoolReturnTypeFromBooleanStrictReturnsRector;
use Rector\TypeDeclaration\Rector\ClassMethod\NumericReturnTypeFromStrictReturnsRector;
use Rector\TypeDeclaration\Rector\ClassMethod\NumericReturnTypeFromStrictScalarReturnsRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictConstantReturnRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictFluentReturnRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictNewArrayRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictTypedPropertyRector;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;

return RectorConfig::configure()
    ->withRules([
        TypedPropertyFromStrictConstructorRector::class,
        ReturnTypeFromStrictTernaryRector::class,
        ReturnTypeFromStrictNewArrayRector::class,
        NumericReturnTypeFromStrictReturnsRector::class,
        NumericReturnTypeFromStrictScalarReturnsRector::class,
        BoolReturnTypeFromBooleanStrictReturnsRector::class,
        ReturnTypeFromStrictTypedPropertyRector::class,
        ReturnTypeFromStrictFluentReturnRector::class,
        ReturnTypeFromStrictConstantReturnRector::class,
    ])
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
    )
    ->withSets([        // Melhorias de segurança
        SetList::PHP_82,          // Garantir compatibilidade com PHP 8.2+
        SetList::CODE_QUALITY,    // Melhorar qualidade do código
        SetList::DEAD_CODE,       // Remover código morto
        SetList::CARBON,
        SetList::TYPE_DECLARATION,

    ]);
