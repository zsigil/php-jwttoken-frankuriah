<?php
    $database_config = [
        "driver"=>"mysql",
        "database"=>"slim4_frankuriah",
        "host"=>"127.0.0.1",
        "username"=>"root",
        "password"=>"",
        "charset"=>"utf8",
        "collision"=>"utf8_unicode_ci",
        "prefix"=>""
    ];

    $capsule = new Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($database_config);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
?>