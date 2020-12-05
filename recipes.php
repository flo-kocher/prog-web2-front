<?php

$src = "/recipes.php";

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

$css = "css/recipes.css";
include('php/head.php');

?>


<body>
    <?php 
        $home_link = "/index.php";
        $recipes_link = "/";
        $creation_link = "/creator.php";
        include('php/header.php');
    ?>

    <section class="recipe">
        <div>
            <img src="img/pain.jpg" alt="picture of bread" />
        </div>
        <article>Quisque eget nulla at ipsum ultricies dignissim. Fusce tortor augue, vestibulum et sem eget, varius cursus ex. Phasellus eros nisi, cursus a accumsan eu, scelerisque a mi. Fusce quis sodales leo. Nulla nulla augue, egestas in ligula eu, pulvinar
            rhoncus dolor. Quisque cursus commodo arcu at ultrices. Nulla iaculis condimentum nibh, ut dignissim neque finibus ac. Nam consectetur iaculis molestie.
        </article>
    </section>
    <section class="recipe_reversed">
        <article>Curabitur et mi maximus, auctor diam non, egestas dui. Nulla facilisi. Phasellus et consequat velit. Nulla urna nisi, dignissim vitae cursus facilisis, vulputate id leo. Vestibulum pulvinar commodo dignissim.
        </article>
        <div>
            <img src="img/apple-pie.jpg" alt="picture of an apple pie" />
        </div>
    </section>
    <section class="recipe">
        <div>
            <img src="img/tiramisu.jpg" alt="picture of a tiramisu" />
        </div>
        <article>Aenean id felis eu enim convallis imperdiet et quis lectus. Ut sed nibh a nulla ultrices auctor. Donec ac diam pharetra, dignissim velit sed, elementum urna. Nam eget maximus justo. Duis sed metus sem. Nam vel tortor porta, aliquam tortor vel,
            pharetra velit. Nam condimentum ante a augue imperdiet, et tristique tortor porttitor. Mauris cursus magna in metus posuere aliquam. Quisque finibus aliquet erat nec placerat.
        </article>
    </section>
    <section class="recipe_reversed">
        <article>Curabitur et mi maximus, auctor diam non, egestas dui. Nulla facilisi. Phasellus et consequat velit. Nulla urna nisi, dignissim vitae cursus facilisis, vulputate id leo. Vestibulum pulvinar commodo dignissim.
        </article>
        <div>
            <img src="img/apple-pie.jpg" alt="picture of an apple pie" />
        </div>
    </section>
    <section class="recipe">
        <div>
            <img src="img/tiramisu.jpg" alt="picture of a tiramisu" />
        </div>
        <article>Aenean id felis eu enim convallis imperdiet et quis lectus. Ut sed nibh a nulla ultrices auctor. Donec ac diam pharetra, dignissim velit sed, elementum urna. Nam eget maximus justo. Duis sed metus sem. Nam vel tortor porta, aliquam tortor vel,
            pharetra velit. Nam condimentum ante a augue imperdiet, et tristique tortor porttitor. Mauris cursus magna in metus posuere aliquam. Quisque finibus aliquet erat nec placerat.
        </article>
    </section>
    <section class="recipe_reversed">
        <article>Curabitur et mi maximus, auctor diam non, egestas dui. Nulla facilisi. Phasellus et consequat velit. Nulla urna nisi, dignissim vitae cursus facilisis, vulputate id leo. Vestibulum pulvinar commodo dignissim.
        </article>
        <div>
            <img src="img/apple-pie.jpg" alt="picture of an apple pie" />
        </div>
    </section>
    <section class="recipe">
        <div>
            <img src="img/tiramisu.jpg" alt="picture of a tiramisu" />
        </div>
        <article>Aenean id felis eu enim convallis imperdiet et quis lectus. Ut sed nibh a nulla ultrices auctor. Donec ac diam pharetra, dignissim velit sed, elementum urna. Nam eget maximus justo. Duis sed metus sem. Nam vel tortor porta, aliquam tortor vel,
            pharetra velit. Nam condimentum ante a augue imperdiet, et tristique tortor porttitor. Mauris cursus magna in metus posuere aliquam. Quisque finibus aliquet erat nec placerat.
        </article>
    </section>
    <section class="recipe_reversed">
        <article>Curabitur et mi maximus, auctor diam non, egestas dui. Nulla facilisi. Phasellus et consequat velit. Nulla urna nisi, dignissim vitae cursus facilisis, vulputate id leo. Vestibulum pulvinar commodo dignissim.
        </article>
        <div>
            <img src="img/apple-pie.jpg" alt="picture of an apple pie" />
        </div>
    </section>
    
</body>
<script src="js/recipes.js"></script>

</html>