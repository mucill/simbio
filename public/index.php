<?php
require __DIR__.'/../vendor/autoload.php';
$simbio = new Simbio\Simbio;
try {
    $simbio->route();
} catch (Exception $error) {
    exit('Error : '.$error->getMessage());
}
