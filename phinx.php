<?php

return array(
    "paths" => array(
        "migrations" => __DIR__."/migrations"
    ),
    "environments" => array(
        "default_migration_table" => "phinxlog",
        "default_database" => "development",
        "development" => array(
            "adapter" => "mysql",
            "host" => "127.0.0.1",
            "name" => "phinx_migration_example",
            "user" => "root",
            "pass" => "",
            "port" => "3306",
            "charset" => "utf8",
        )
    )
);
?>

