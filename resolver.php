<?php

$resolver = new MVC\Resolver;

$resolver['PDO'] = function ($r) {
    return new PDO('mysql:host=localhost;dbname=php_mvc', 'admin', 'admin123', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
};

return $resolver;