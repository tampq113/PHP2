<?php
function getname()
{
    global $connect;
    require_once '../model/conect.php';
    $sql = "SELECT * FROM user";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result;
    $connect->close();

}
