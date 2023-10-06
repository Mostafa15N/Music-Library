<?php
// Ontvang en verwerk zoekopdracht hier
// Filter de $musicSingles array op basis van de zoekopdracht
?>

<!DOCTYPE html>
<html>
<head>
    <title>Zoekresultaten</title>
</head>
<body>
    <h1>Zoekresultaten</h1>
    
    <!-- Terug naar overzicht -->
    <a href="index.php">Terug naar overzicht</a>

    <!-- Lijst van zoekresultaten -->
    <ul>
        <?php foreach ($searchResults as $result): ?>
            <li>
                <a href="detail.php?id=<?= $result['id']; ?>">
                    <?= $result['title']; ?> - <?= $result['artist']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
