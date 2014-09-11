<?php

// Run this with:
// php -S localhost:8080 native.php

require '../vendor/autoload.php';

$keyDB = new ArrayObject(array(
    'EscherExample'  => 'TheBeginningOfABeautifulFriendship',
));
$escher = Escher::create('escher_request');

switch($_SERVER["SCRIPT_NAME"]) {
    case "/":
        echo "Escher Example";
        break;
    case "/validate_request":
        try {
            $escher->validateRequest($keyDB);
            echo "OK";
        } catch (EscherException $ex) {
            echo 'ERR: ' . $ex->getMessage();
        }
        break;
}
