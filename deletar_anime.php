<html>
<?php
include_once "classes/anime.php";
$anime = new Anime();
$anime->setAnimId($_GET['id']);
$anime->deleteAnime();
header('Location: listagem_animes.php');
?>

</html>