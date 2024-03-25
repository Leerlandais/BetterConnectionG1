<?php

require_once "../config.php";
require_once "../model/newsmodel.php";

try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}    

$getNews = getTheNews($db);

if (isset($getNews)) {
    include("../view/newsView.php");
}else {
    echo "Something went wrong";
}