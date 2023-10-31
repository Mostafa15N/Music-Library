<?php
    include_once("source/database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Muziek Singles</title>
    <style>

    </style>
        <link rel="stylesheet" href="style.css">
        <script src="js\main.js"></script>

</head>
<body>
<header class="header">

</header>



    <section class="muziekSingles">

        <ul>
        <?php

        $sql = 'SELECT * FROM singles ORDER BY id ASC';
        $result = $conn->query($sql);

        while ($single_item = $result->fetch_assoc()){
            include "source/singel.php";
        }
        ?>
        </ul>
        

    </section>
</body>
</html>
