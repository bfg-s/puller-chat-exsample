<?php

return [
    "Bfg\BlessModel\ServiceProvider" => [
        "index" => 0,
        "installed" => true,
        "install_complete" => true,
        "name" => "bfg/bless_model",
        "logo" => "",
        "provider" => "Bfg\\BlessModel\\ServiceProvider",
        "version" => "",
        "child" => "",
        "type" => "bfg-app",
        "parent" => "Bfg\\Installer\\ServiceProvider",
        "path" => "vendor/bfg/bless_model/src/ServiceProvider.php",
        "dir" => "vendor/bfg/bless_model/src",
        "composer_file" => "vendor/bfg/bless_model/composer.json",
        "composer_name" => "bfg/bless_model",
        "composer_version" => "0.0.3",
        "description" => "Recursive auto save eloquent Models",
        "extensions" => [

        ]
    ],
    "Bfg\EmbeddedCall\ServiceProvider" => [
        "index" => 1,
        "installed" => true,
        "install_complete" => true,
        "name" => "bfg/embedded-call",
        "logo" => "",
        "provider" => "Bfg\\EmbeddedCall\\ServiceProvider",
        "version" => "",
        "child" => "",
        "type" => "bfg-app",
        "parent" => "Bfg\\Installer\\ServiceProvider",
        "path" => "vendor/bfg/embedded-call/src/ServiceProvider.php",
        "dir" => "vendor/bfg/embedded-call/src",
        "composer_file" => "vendor/bfg/embedded-call/composer.json",
        "composer_name" => "bfg/embedded-call",
        "composer_version" => "0.0.5",
        "description" => "API with closing functions",
        "extensions" => [

        ]
    ],
    "Bfg\Entity\ServiceProvider" => [
        "index" => 2,
        "installed" => true,
        "install_complete" => true,
        "name" => "bfg/entity",
        "logo" => "",
        "provider" => "Bfg\\Entity\\ServiceProvider",
        "version" => "",
        "child" => "",
        "type" => "bfg-app",
        "parent" => "Bfg\\Installer\\ServiceProvider",
        "path" => "vendor/bfg/entity/src/ServiceProvider.php",
        "dir" => "vendor/bfg/entity/src",
        "composer_file" => "vendor/bfg/entity/composer.json",
        "composer_name" => "bfg/entity",
        "composer_version" => "1.1.15",
        "description" => "Pattern for generating php entities.",
        "extensions" => [

        ]
    ],
    "Bfg\IdeHelper\ServiceProvider" => [
        "index" => 3,
        "installed" => true,
        "install_complete" => true,
        "name" => "bfg/ide-helper",
        "logo" => "",
        "provider" => "Bfg\\IdeHelper\\ServiceProvider",
        "version" => "",
        "child" => "",
        "type" => "bfg-app",
        "parent" => "Bfg\\Installer\\ServiceProvider",
        "path" => "vendor/bfg/ide-helper/src/ServiceProvider.php",
        "dir" => "vendor/bfg/ide-helper/src",
        "composer_file" => "vendor/bfg/ide-helper/composer.json",
        "composer_name" => "bfg/ide-helper",
        "composer_version" => "0.0.2",
        "description" => "IDE Helper with 'barryvdh'",
        "extensions" => [

        ]
    ],
    "Bfg\Installer\ServiceProvider" => [
        "index" => 4,
        "installed" => true,
        "install_complete" => true,
        "name" => "bfg/installer",
        "logo" => "",
        "provider" => "Bfg\\Installer\\ServiceProvider",
        "version" => "",
        "child" => "bfg-app",
        "type" => "",
        "parent" => "",
        "path" => "vendor/bfg/installer/src/ServiceProvider.php",
        "dir" => "vendor/bfg/installer/src",
        "composer_file" => "vendor/bfg/installer/composer.json",
        "composer_name" => "bfg/installer",
        "composer_version" => "0.1.7",
        "description" => "Simplify the installation process for certain packages",
        "extensions" => [
            "Bfg\BlessModel\ServiceProvider" => "Bfg\\BlessModel\\ServiceProvider",
            "Bfg\EmbeddedCall\ServiceProvider" => "Bfg\\EmbeddedCall\\ServiceProvider",
            "Bfg\Entity\ServiceProvider" => "Bfg\\Entity\\ServiceProvider",
            "Bfg\IdeHelper\ServiceProvider" => "Bfg\\IdeHelper\\ServiceProvider",
            "Bfg\Object\ServiceProvider" => "Bfg\\Object\\ServiceProvider",
            "Bfg\Permission\ServiceProvider" => "Bfg\\Permission\\ServiceProvider",
            "Bfg\Repository\ServiceProvider" => "Bfg\\Repository\\ServiceProvider",
            "Bfg\Request\ServiceProvider" => "Bfg\\Request\\ServiceProvider",
            "Bfg\Resource\ServiceProvider" => "Bfg\\Resource\\ServiceProvider",
            "Bfg\Route\RouteServiceProvider" => "Bfg\\Route\\RouteServiceProvider",
            "Bfg\Text\ServiceProvider" => "Bfg\\Text\\ServiceProvider"
        ]
    ],
    "Bfg\Object\ServiceProvider" => [
        "index" => 5,
        "installed" => true,
        "install_complete" => true,
        "name" => "bfg/object",
        "logo" => "",
        "provider" => "Bfg\\Object\\ServiceProvider",
        "version" => "",
        "child" => "",
        "type" => "bfg-app",
        "parent" => "Bfg\\Installer\\ServiceProvider",
        "path" => "vendor/bfg/object/src/ServiceProvider.php",
        "dir" => "vendor/bfg/object/src",
        "composer_file" => "vendor/bfg/object/composer.json",
        "composer_name" => "bfg/object",
        "composer_version" => "0.0.2",
        "description" => "To work with objects and arrays",
        "extensions" => [

        ]
    ],
    "Bfg\Permission\ServiceProvider" => [
        "index" => 6,
        "installed" => false,
        "install_complete" => false,
        "name" => "bfg/permission",
        "logo" => "",
        "provider" => "Bfg\\Permission\\ServiceProvider",
        "version" => "",
        "child" => "",
        "type" => "bfg-app",
        "parent" => "Bfg\\Installer\\ServiceProvider",
        "path" => "vendor/bfg/permission/src/ServiceProvider.php",
        "dir" => "vendor/bfg/permission/src",
        "composer_file" => "vendor/bfg/permission/composer.json",
        "composer_name" => "bfg/permission",
        "composer_version" => "0.0.4",
        "description" => "The ability to create and monitor the rules for the Laravel gates",
        "extensions" => [

        ]
    ],
    "Bfg\Repository\ServiceProvider" => [
        "index" => 7,
        "installed" => true,
        "install_complete" => true,
        "name" => "bfg/repository",
        "logo" => "",
        "provider" => "Bfg\\Repository\\ServiceProvider",
        "version" => "",
        "child" => "",
        "type" => "bfg-app",
        "parent" => "Bfg\\Installer\\ServiceProvider",
        "path" => "vendor/bfg/repository/src/ServiceProvider.php",
        "dir" => "vendor/bfg/repository/src",
        "composer_file" => "vendor/bfg/repository/composer.json",
        "composer_name" => "bfg/repository",
        "composer_version" => "0.0.3",
        "description" => "Missing repositories for Eloquent models Laravel",
        "extensions" => [

        ]
    ],
    "Bfg\Request\ServiceProvider" => [
        "index" => 8,
        "installed" => true,
        "install_complete" => true,
        "name" => "bfg/request",
        "logo" => "",
        "provider" => "Bfg\\Request\\ServiceProvider",
        "version" => "",
        "child" => "",
        "type" => "bfg-app",
        "parent" => "Bfg\\Installer\\ServiceProvider",
        "path" => "vendor/bfg/request/src/ServiceProvider.php",
        "dir" => "vendor/bfg/request/src",
        "composer_file" => "vendor/bfg/request/composer.json",
        "composer_name" => "bfg/request",
        "composer_version" => "0.0.1",
        "description" => "A slight addition to the Laravel Request",
        "extensions" => [

        ]
    ],
    "Bfg\Resource\ServiceProvider" => [
        "index" => 9,
        "installed" => true,
        "install_complete" => true,
        "name" => "bfg/resource",
        "logo" => "",
        "provider" => "Bfg\\Resource\\ServiceProvider",
        "version" => "",
        "child" => "",
        "type" => "bfg-app",
        "parent" => "Bfg\\Installer\\ServiceProvider",
        "path" => "vendor/bfg/resource/src/ServiceProvider.php",
        "dir" => "vendor/bfg/resource/src",
        "composer_file" => "vendor/bfg/resource/composer.json",
        "composer_name" => "bfg/resource",
        "composer_version" => "1.0.6",
        "description" => "A small addition to the resources to the Laravel",
        "extensions" => [

        ]
    ],
    "Bfg\Route\RouteServiceProvider" => [
        "index" => 10,
        "installed" => true,
        "install_complete" => true,
        "name" => "bfg/route",
        "logo" => "",
        "provider" => "Bfg\\Route\\RouteServiceProvider",
        "version" => "",
        "child" => "",
        "type" => "bfg-app",
        "parent" => "Bfg\\Installer\\ServiceProvider",
        "path" => "vendor/bfg/route/src/RouteServiceProvider.php",
        "dir" => "vendor/bfg/route/src",
        "composer_file" => "vendor/bfg/route/composer.json",
        "composer_name" => "bfg/route",
        "composer_version" => "1.1.1",
        "description" => "Auto register routes using PHP attributes",
        "extensions" => [

        ]
    ],
    "Bfg\Text\ServiceProvider" => [
        "index" => 11,
        "installed" => true,
        "install_complete" => true,
        "name" => "bfg/text",
        "logo" => "",
        "provider" => "Bfg\\Text\\ServiceProvider",
        "version" => "",
        "child" => "",
        "type" => "bfg-app",
        "parent" => "Bfg\\Installer\\ServiceProvider",
        "path" => "vendor/bfg/text/src/ServiceProvider.php",
        "dir" => "vendor/bfg/text/src",
        "composer_file" => "vendor/bfg/text/composer.json",
        "composer_name" => "bfg/text",
        "composer_version" => "0.0.3",
        "description" => "All sorts of chips to work with the text",
        "extensions" => [

        ]
    ]
];