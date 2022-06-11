<?php
session_start();
include_once "classes/anime.php";
$anime = new Anime();
$anime->setAnimId($_GET['id']);
$resultDb = $anime->findById()['0'];
if ($_SESSION['usu_id'] && $resultDb->anim_id_usuario == $_SESSION['usu_id']) {
    $anime->deleteAnime();
    header('Location: listagem_animes.php');
} else {
    header('Location: login.php');
}

?>
<html>

</html>