<?php
$db = array(
    "default" => array(
        "server" => getenv('DEFAULT_SERVER'),
        "user" => getenv('DEFAULT_USER'),
        "pass" => getenv('DEFAULT_PASS'),
        "dbname" => getenv('DEFAULT_DBNAME'),
        "driver" => getenv('DEFAULT_DRIVER'),
        "port" => getenv('DEFAULT_PORT')
    )
);
