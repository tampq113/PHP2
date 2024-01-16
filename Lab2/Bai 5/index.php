<?php
require_once 'App/product.php';
use App\home as DB;
$user = new DB(1,'product',15);
$user->getname();
?>