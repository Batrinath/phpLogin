<?php

require __DIR__ . '\dev.php';


// env file loading
use Dev\DotEnv;

(new DotEnv('.env'))->load();

$dbhost = getenv('USERNAME');


// print
function print_data($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    exit;
}