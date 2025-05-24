<?php
// filepath: /home/glitching0ut/Documents/university/projects/index.php
define('BASE_PATH', dirname(__DIR__));

require_once BASE_PATH . '/vendor/autoload.php';

//echo "Welcome to Your Web Programming Journey!";
//echo "<p><a href='public/read.php'>View Records</a></p>";
$request = new Request(

    $_GET,
    $_POST,
    $_SERVER,
    $_FILES,
    $_COOKIE

);


//HENDLER
$kernel = new Kernel(
    $request,
    new Router(),
    new Response(),
    new View()
);

$response = $kernel->handle($request);
//SEND RESPONSE
$response->send();



?>