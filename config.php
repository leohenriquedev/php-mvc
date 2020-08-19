<?php

define("BASE_API", "");

define("BASE_DIR", explode("/", $_SERVER["REQUEST_URI"])[1]);

define("JWT_KEY", "my_key");

define ("TOKEN_TEST", "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9leGFtcGxlLm9yZyIsImF1ZCI6Imh0dHA6XC9cL2V4YW1wbGUuY29tIiwiaWF0IjoxMzU2OTk5NTI0LCJuYmYiOjEzNTcwMDAwMDB9.TYBbb0PDX-PZOyPlc090V4uRwe_ftVSvOWrYLTvvJxU");

define("JWT_PAYLOAD", [
    "iss" => "http://example.org",
    "aud" => "http://example.com",
    "iat" => 1356999524,
    "nbf" => 1357000000
]);

define("DATABASE", [
    "hostname" => "localhost",
    "database" => "php-mvc",
    "username" => "root",
    "password" => ""
]);

?>