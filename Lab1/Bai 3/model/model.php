<?php
function checkuser($username)
{
    global $connect;
    require_once 'conect.php';
    $sql = "SELECT * FROM user where user_name = ? ";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row;
    }
    $connect->close();
}


