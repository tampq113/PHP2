
<?php
require 'vendor/autoload.php';
spl_autoload_register(function ($class){
    require_once $class.".php";
});

use App\Controller\BaseControl as ler;
use App\Core\Route as rou;
use App\Model\BaseModel as mo;
$MO = new mo;
$CT = new ler;
$ru = new rou;

$MO ->ModelClass();
$CT ->Control();
$ru ->Route();
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
<h1>Hello</h1>
</body>
</html>
