<?php require_once("../template/partial/header.php"); ?>

	<main>



		<h1>Le super blog de la piscine</h1>

		<h2>Les derniers articles</h2>

		<?php foreach($articles as $article) { ?>

			<article>
				<h2><?php echo $article['title']; ?></h2>
                <!-- génère un lien pour accéder à la page qui affiche un article, en ajoutant l'id de l'article à la fin de l'url -->

                <a href="http://localhost:8888/piscine-blog/public/show-article?id=<?php echo $article['id']; ?>">Afficher l'article</a>

                <a href="http://localhost:8888/piscine-blog/public/delete-article?id=<?php echo $article['id']; ?>">Supprimer l'article</a>

            </article>

		<?php } ?>

	</main>

<?php require_once("../template/partial/footer.php"); ?>