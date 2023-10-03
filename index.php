<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <!-- Voeg inhoud toe aan de header indien nodig -->
    </header>

    <section class="muziekSingles">
        <Ul>
            <?php
            for ($i = 0; $i < 12; $i++) {
                echo '
                <li class="singles">
                <figure class="singelImg"></figure>
                <h2 class="titel">titel</h2>
                <div>
                <h3 class="artiest">artiest</h3>
                <h3 class="genre">genre</h3>
                </div>
                </li>
                ';
            }
            ?>
        </Ul>
    </section>


</body>
</html>
