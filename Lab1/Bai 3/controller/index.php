
<?php
include './model/model.php';

$username = isset($_POST['User']) ? $_POST['User'] :'';
if (isset($username)){
    echo'Tài Khoản'.$username.' Sdt: ';
}else{
    echo'';
}

$user = checkuser($username);

include './view/view.php';
