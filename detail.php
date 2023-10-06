<?php

include('data.php');


$id = $_GET['id'];


$single = null;
foreach ($musicSingles as $musicSingle) {
    if ($musicSingle['id'] == $id) {
        $single = $musicSingle;
        break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $single['title']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?= $single['title']; ?></h1>
    <p>Naam van de artiest: <?= $single['artist']; ?></p>
    <p>Genre: <?= $single['genre']; ?></p>
    <p>Duur van het nummer: <?= $single['duration']; ?></p>
    <p>Release Datum: <?= $single['release_date']; ?></p>

    <h2>Lijst met nummers van <?= $single['artist']; ?></h2>
    <ul>
        <?php 
        function getOtherSongsByArtist($musicSingles, $currentArtist, $currentId) {
            $otherSongs = [];
        
            foreach ($musicSingles as $single) {
                if ($single['artist'] == $currentArtist && $single['id'] != $currentId) {
                    $otherSongs[] = $single;
                }
            }
        
            return $otherSongs;
        }

        $otherSongs = getOtherSongsByArtist($musicSingles, $single['artist'], $single['id']);
        foreach ($otherSongs as $song): ?>
            <li><a href="detail.php?id=<?= $song['id']; ?>"><?= $song['title']; ?></a></li>
        <?php endforeach; ?>
    </ul>

    <img src="<?= $single['image']; ?>" alt="<?= $single['title']; ?>">


    <a href="index.php">Terug naar overzicht</a>
</body>
</html>
