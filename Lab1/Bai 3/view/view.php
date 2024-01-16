<?
global $user;
if (isset($user['phone'])) {
    echo $user['phone'];
} else {
    echo '';
}
?>

<form method="post">
    <input type="text" name="User"/>
    <input type="submit" VALUE="Gui"/>
</form>
