<?php
require_once "controllers/ProductController.php";
$url = isset($_GET["url"]) ? $_GET["url"] : "/";

switch ($url) {
    case '/' :
        // controller se goi ra day
        getProduct();
        break;
       //route add-product , edit-product , remove-product
}

