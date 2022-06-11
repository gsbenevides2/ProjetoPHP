<?php
include_once "classes/db.php";
function autentica($login, $senha)
{
    $sql = "SELECT * FROM usuarios WHERE usu_login = '$login' AND usu_senha = '$senha' AND usu_status = 'ativo'";
    $stmt = DB::prepare($sql);
    $stmt->execute();
    $linhas = $stmt->rowCount();
    if ($linhas) return TRUE;
    else return FALSE;
}
