<?php include 'form.php';?>

<!-- SI JE VEUX RAJOUTER LE SYSTEME DE NOM DE RECETTE JE PEUX FAIRE UNE
VARIABLE GLOBALE QUE JE METS EN PHP COMME CA
php $global = 0 php et plus tard je l'incrémente de la meme manière -->

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/creator.css" />
    <link rel="icon" href="chef-hat.png">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <title>Les recettes de Licht</title>
</head>

<body>
    <header>
        <nav>
            <div id="title-subtitle">
                <h1>Les Recettes de Licht</h1>
                <h3>Maître en gourmandises</h3>
            </div>
            <div id="buttons">
                <div id="link">
                    <a href="index.php">Accueil</a>
                    <a href="recipes.php">Recettes</a>
                    <a href="/">Crééer recette</a>
                </div>
                <div id="language_translation">
                    <img src="img/france-flag.png" alt="france's flag" />
                </div>
            </div>
        </nav>
    </header>
    <section>
        <h2>Création de recette</h2>

        <!-- RAJOUTER action = "http://localhost:8000/form.php" pour lier les deux -->
        <form action="http://localhost:8000/form.php" method="post">

            <!-- Le formulaire se crée ici avec form.js -->

        </form>

        <button id="add_formular">Ajout d'un nouvel ingrédient</button>
        <button id="create_recipe"type="submit">Enregistrer nouvelle recette</button>

    </section>
    <h2>Recettes créés</h2>
    <section id = "recipes">

        

    </section>

</body>
<script src="js/form.js"></script>
<script src="js/recipes.js"></script>

</html>