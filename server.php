<?php

if($_POST['titolo'] && $_POST['artista'] && $_POST['anno'] && $_POST['genere' ] && $_POST['cover' ]) {

$json_text = file_get_contents("./dischi.json");

$dischi = json_decode($json_text, true);

$titolo = $_POST['titolo'];
$artista = $_POST['artista'];
$cover = $_POST['cover' ];
$anno = $_POST['anno'];
$genere = $_POST['genere' ];


$dischi[] = [
'titolo' => $titolo,
'artista' => $artista,
'cover' => $cover,
'anno' => $anno,
'genere' => $genere];



$json_text_updated = json_encode($dischi);

file_put_contents("./dischi.json", $json_text_updated);

header("Location: ./index.php");
exit;

}


