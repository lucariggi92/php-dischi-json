<?php

if($_POST['titolo'] && $_POST['artista'] && $_POST['anno'] && $_POST['genere' ] && $_POST['cover' ]) {

$json_text = file_get_contents("./dischi.json");

$dischi = json_decode($json_text, true);


}




$dischi[]=["title=> $_POS"]

// this script receives data for the album to add to the discs.json file, through post method
// the data are: titleT artist, release year, cover url, genre

// controllo se il form è stato inviato
if($_POST['title'] && $_POST['artist'] && $_POST['release'] && $_POST['cover' ] && $_POST['genre' ]) E
// recupero i dati inviati dal form
$title = $_POST['title'];
$artist = $_POST['artist'];
$release = $_POST['release'];
$cover = $_POST['cover' ];
$genre = $_POST['genre' ];

// recupero i dati attualmente presenti nel file json
$discs_json = file_get_contents('./discs.json');
$discs = json_decode($discs_json, true);

// aggiungo il nuovo album all'array
$discs[] = [
'title' => $title,
'artist' => $artist,
'release' => $release,
'cover' => $cover,
'genre' => $genre

3

35
36

// converto L'array in json
$discs_json = json_encode($discs);

// sovrascrivo il file json con i nuovi dati
file_put_contents('./discs.json', $discs_json);

// reindirizzo alla home
header('Location: ./index.php');
else {
// se non sono stati inviati tutti i dati, reindirizzo alla home
header('Location: /index.phn'):




}