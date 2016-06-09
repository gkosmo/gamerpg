<?php

define('USER', 'gkosmo');
define('PASSWORD', '2016');
define('DSN', 'mysql:host=localhost;dbname=rpg;charset=UTF8');

try {
    $dbh = new PDO(DSN, USER, PASSWORD);
} catch (PDOException $exception) {
    echo "Erreur ! : " . $exception->getMessage() . "<br/>";
    die();
}
?>
