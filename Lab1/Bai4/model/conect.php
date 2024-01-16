<?php

$connect = new mysqli('localhost', 'root', 'mysql', 'php2');


if ($connect->connect_error) {
    die('Kết nối không thành công: ' . $connect->connect_error);
}