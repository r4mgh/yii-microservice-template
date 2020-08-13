<?php
return [
    "id" => "app",
    // the basePath of the application will be the `micro-app` directory
    "basePath" => dirname(__DIR__),
    // this is where the application will find all controllers
    "controllerNamespace" => "app\controllers",
    // set an alias to enable autoloading of classes from the "micro" namespace
    "aliases" => [
        "@app" => dirname(__DIR__),
    ],
    "components" => [
        "db" => [
            "class" => "yii\db\Connection",
            "dsn" => "mysql:host=localhost;dbname=db",
            "username" => "root",
            "password" => "",
            "charset" => "utf8",
        ],
        "urlManager" => [
            'class' => 'yii\web\UrlManager',
            "enablePrettyUrl" => true,
            "showScriptName" => false,
            "enableStrictParsing" => true,
            'rules' => [
                "" => "site/index"
            ]
        ],

    ]
];