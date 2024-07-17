<?php require_once("../template/partial/header.php"); ?>

    <main>

        <h1>Ajouter un article</h1>


        <form method="post" >

            <label>
                Titre
                <input type="text" name="title" />
            </label>

            <label>
                Contenu
                <input type="text" name="content" />
            </label>

            <input type="submit" />

        </form>


        <?php if ($isRequestOK) { ?>

            <p>L'article a bien été enregistré en BDD</p>

        <?php } ?>

    </main>

<?php require_once("../template/partial/footer.php"); ?>