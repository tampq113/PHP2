<?php
require_once 'vendor/autoload.php';
spl_autoload_register(function ($class){
   include $class.'.php';
});

use App\Database as DB;
$db = new DB();
$db->hello();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Hello Tam</h1>
</body>
</html>
