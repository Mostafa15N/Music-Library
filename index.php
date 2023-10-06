<?php

include('data.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Muziek Singles</title>
    <style>

    </style>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">

    </header>


    <section class="muziekSingles">

        <ul>
            <?php foreach ($musicSingles as $single): ?>
                <a href="detail.php?id=<?= $single['id']; ?>">
                <li class="singles">
                        <figure class="singleImg">
                            <img src="<?= $single['image']; ?>" alt="<?= $single['title']; ?>">
                        </figure>
                        <h2 class="titel"><?= $single['title']; ?></h2>
                        <div>
                            <h3 class="artiest"><?= $single['artist']; ?></h3>
                            <h3 class="genre"><?= $single['genre']; ?></h3>
                        </div>
                
                </li>
            </a>
            <?php endforeach; ?>
        </ul>

    </section>
</body>
</html>
