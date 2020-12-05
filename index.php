<?php

$src = "/";

switch($_GET['language']){
    case 'fr':
        include('php/lang/french.php');
        break;
    case 'en':
        include('php/lang/english.php');
        break;
    case 'de':
        include('php/lang/german.php');
        break;
    default:
        include('php/lang/french.php');
}

$css = "css/style.css";
include('php/head.php');

?>

<body>
    <?php 
        $home_link = "/";
        $recipes_link = "/recipes.php";
        $creation_link = "/creator.php";
        include('php/header.php');
    ?>

    <section>
        <h2><?= $title2 ?></h2>
        <p>
            <?= $presentation ?>
        </p>
    </section>
    <hr>
    <h2><?= $title3 ?></h2>
    <section id="popular_recipes">
        <article>
            <img src="img/pain.jpg" alt="picture of bread" />
            <p>
                <?= $bread_desc ?>
            </p>
        </article>
        <article>
            <img src="img/tiramisu.jpg" alt="picture of tiramisu" />
            <p>
                <?= $tiramisu_desc ?>
            </p>
        </article>
        <article>
            <img src="img/apple-pie.jpg" alt="picture of an apple pie" />
            <p>
                <?= $pie_desc ?>
            </p>
        </article>
    </section>

</body>

</html>