<?php

use yii\caching\FileCache;
use yii\i18n\PhpMessageSource;
use yii\rbac\PhpManager;

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(__DIR__, 2) . '/vendor',
    'components' => [
        'cache' => [
            'class' => FileCache::class,
        ],
        'authManager' => [
            'class' => PhpManager::class,
            'defaultRoles' => ['user', 'admin'],
            'itemFile' => '@common/config/rbac/items.php',
            'assignmentFile' => '@common/config/rbac/assignments.php',
            'ruleFile' => '@common/config/rbac/rules.php'
        ],
        'i18n' => [
            'translations' => [
                'backend' => [
                    'class' => PhpMessageSource::class,
                    'basePath' => '@common/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'backend' => 'backend.php'
                    ],
                ],
                'frontend' => [
                    'class' => PhpMessageSource::class,
                    'basePath' => '@common/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'frontend' => 'frontend.php'
                    ],
                ],
            ],
        ],
    ],
];
