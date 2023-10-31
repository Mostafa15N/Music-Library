<?php
include_once("source/database.php");

$id = $_GET['id'];

$single = null;
$sql = "SELECT * FROM singles WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $single = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $single['titel']; ?></title>
    <link rel="stylesheet" href="style.css">
    <script src="js/main.js"></script>
</head>
<body>
    <header class="header">
    </header>

    <h1><?= $single['titel']; ?></h1>
    <p>Naam van de artiest: <?= $single['artist']; ?></p>
    <p>Genre: <?= $single['genre']; ?></p>
    <p>Duur van het nummer: <?= $single['duration']; ?></p>
    <p>Release Datum: <?= $single['releas_date']; ?></p>

    <h2>Lijst met nummers van <?= $single['artist']; ?></h2>
    <ul>
        <?php
        $otherSongs = [];
        $sql = "SELECT * FROM singles WHERE artist = '{$single['artist']}' AND id != $id";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $otherSongs[] = $row;
        }
        foreach ($otherSongs as $song) : ?>
            <li><a href="detail.php?id=<?= $song['id']; ?>"><?= $song['titel']; ?></a></li>
        <?php endforeach; ?>
    </ul>

    <!-- <img src="<?= $single['image']; ?>" alt="<?= $single['titel']; ?>"> -->

    <a href="index.php">Terug naar overzicht</a>
</body>
</html>
