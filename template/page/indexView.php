<?php require_once("../template/partial/header.php"); ?>

	<main>

		<h1>Le super blog de la piscine</h1>

		<h2>Les derniers articles</h2>

		<?php foreach($articles as $article) { ?>

			<article>
				<h2><?php echo $article['title']; ?></h2>
			</article>

		<?php } ?>

	</main>

<?php require_once("../template/partial/footer.php"); ?>