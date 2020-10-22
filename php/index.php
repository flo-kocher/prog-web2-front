<?php include 'form.php'; ?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="recipe_creator_page_style.css" />
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
                    <a href="homepage.html">Accueil</a>
                    <a href="recipepage.html">Recettes</a>
                </div>
                <div id="language_translation">
                    <img src="france-flag.png" alt="france's flag" />
                    <svg height="100" width="100">
                             <polygon points="100,0 0,0 50,100"/>
                        </svg>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <h2>Création de recette</h2>

        <!--ALORS FLORENTIN,,,,,, CREER/FAIRE LE FORMULAIRE TOUT EN JAVASCRIPT
car lorsque on va creer une nouvelle ligne pour y mettre un nouvel ingrédient,
l'id sera toujours le même pour chaque ligne, donc on aura plusieurs id pour des ingredients
différents, en faisant le fomulaire en javascript on va utiliser une variable i
pour faire des quantity_1 quantity_2 etc etc...

quand on ajoute un nouvel ingrédient, on rajoute une div avec combo(quantité,unité,nom) on ne cr&er pas
un nouveau formulaire
-->


        <form>
            <!--
            <div>
                <div>
                    <label for="quantity">Quantité</label>
                    <input type="number" id="quantity" name="quantity" min="0" step="0.1" />
                </div>
                <div>
                    <label for="unity">Unité de mesure</label>
                    <select id="unity" name="unity">
                        <option value="gram">Gramme(s)</option>
                        <option value="liter">Litre(s)</option>
                        <option value="tablespoon">Cuillère à soupe</option>
                        <option value="teaspoon">Cuillère à café</option>
                    </select>
                </div>
                <div>
                    <label for="ingredient">Ingrédient</label>
                    <input type="texte" id="ingredient" name="ingredient" />
                </div>
                

            </div>
            -->
        </form>
        <button id="add_formular">Ajout d'un nouvel ingrédient</button>
        <button id="create_recipe"type="submit">Enregistrer nouvelle recette</button>



    </section>
    <footer>Contacts</footer>

</body>
<script src="recipe_creator_page_script.js"></script>

</html>