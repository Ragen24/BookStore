<?php

use Bookstore\Domain\Customer\CustomerFactory;
use Bookstore\Utils\Config;

function __autoload($classname) {
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/src/' . $directory . '.php';
    require_once($filename);
}
    CustomerFactory::factory('basic', 2, 'mary', 'poppins',
        'mary@poppins.com');
    CustomerFactory::factory('premium', 3, 'james', 'bond',
        'james@bond.com');

    $config = Config::getInstance();
    $dbConfig = $config->get('db');


    $addTaxes = function (array &$book, $index, $percentage) {
        $book['price'] += round($percentage * $book['price'], 2);
    };

    $books = [
        ['title' => '1984', 'price' => 8.15],
        ['title' => 'Don Quijote', 'price' => 12.00],
        ['title' => 'Odyssey', 'price' => 3.55]
    ];
    array_walk($books, $addTaxes, 0.16);
    var_dump($books);
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <title>Bookstore init</title>
    </head>
    <body>
        <p>sdgsdgsdg</p>
    </body>
</html>