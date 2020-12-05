<header>
    <nav>
        <div id="title-subtitle">
            <h1><?= $title ?></h1>
            <h3><?= $subtitle ?></h3>
        </div>
        <div id="buttons">
            <div id="link">
                <a href=<?= $home_link ?>><?= $home ?></a>
                <a href=<?= $recipes_link ?>><?= $recipes ?></a>
                <a href=<?= $creation_link ?>><?= $create_recipe ?></a>
            </div>
            <div id="language_translation">
                <a href="<?= $src ?>?language=fr">
                    <img src="img/france-flag.png" alt="france's flag"/>
                </a>
                <a href="<?= $src ?>?language=en">
                    <img src="img/english-flag.png" alt="england's flag" />
                </a>
                <a href="<?= $src ?>?language=de">
                    <img src="img/german-flag.png" alt="germany's flag" />
                </a>
            </div>
        </div>
    </nav>
</header>
