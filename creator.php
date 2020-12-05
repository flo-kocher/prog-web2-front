<?php

$src = "/creator.php";

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

$css = "css/creator.css";
include('php/head.php');

?>

<body>
    <?php 
        $home_link = "/index.php";
        $recipes_link = "/recipes.php";
        $creation_link = "/";
        include('php/header.php');
    ?>

    <section>
        <h2><?= $creation ?></h2>

        <form action="http://localhost:8000/form.php" method="post">

            <!-- Le formulaire se crée ici avec form.js -->

        </form>

        <button id="add_formular"><?= $add ?></button>
        <button id="create_recipe"type="submit"><?= $new ?></button>

    </section>
    <h2><?= $get ?></h2>
    <section id = "recipes">
        <article>
            <ul>
                <!-- Listes des ingredients -->
            </ul>
        </article>
        <button id="more"><?= $more ?></button>
        <!-- Appel AJAX -->

    </section>

</body>
<script src="js/form.js"></script>
<script src="js/recipes.js"></script>

</html>