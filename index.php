<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Je suis développeur spécialisé dans l'intégration web, le développement d'applications Web & Mobile avec React - React native">
	<meta name="author" content=" Gladston Aristoverne">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto:400,700&display=swap">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

	<link rel="icon" href="/favicon.png">
	<title>Gladston Aristoverne | Développeur Web Frontend</title>
	<!-- font-awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<!-- css -->
	<link rel="stylesheet" href="./css/styles.css" />
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145066482-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-145066482-2');
	</script>
</head>

<body>
	<main class="container">
		<div class="container__wrappe">
			<!-- navbar -->
			<nav class="nav" id="nav">
				<div class="nav__wrappe">
					<div class="logo">
						<img src="./images/logo.png" alt="Gladston Aristoverne">
					</div>
					<ul>
						<!-- wait for it-->
					</ul>
				</div>
			</nav>
			<!-- end of navbar -->
			<!-- header -->
			<header class="section section__header">
				<div class="section__header--wrappe">
					<div class="content">
						<div class="hero-image">
							<img src="./images/glad.jpg" alt="Gladston Aristoverne">
						</div>
						<article class="hero-info">
							<h1>GLADSTON ARISTOVERNE</h1>
							<h2>Intégrateur, Développeur Web & Mobile!</h2>
							<div style="width: 100%; min-height: 200px;">
								<div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
									<i class="fab fa-html5 service-icon"></i>
									<i class="fab fa-css3 service-icon"></i>
									<i class="fab fa-js-square service-icon"></i>
									<i class="fab fa-react service-icon"></i>
									<i class="fab fa-vuejs service-icon"></i>
									<i class="fab fa-node-js service-icon""></i>
									<i class="fab fa-wordpress service-icon"></i>
									<i class="fab fa-git service-icon"></i>
									<i class="fab fa-github service-icon"></i>
								</div>
							</div>
						</article>
						
					</div>
				</div>
			</header>
			<!-- end of header -->
			<!-- SKILLS -->
			<section id="service" class="section section__services">
				<div class="section__services--wrappe">
					<div class="title">
						<h2>Ce que je sais faire?</h2>
						<div class="underline"></div>
					</div>
					<div class="content">
						<article class="card">
							<i class="fas fa-laptop-code service-icon"></i>
							<h3>Applications Web</h3>
							<div class="underline"></div>
							<p>
								<!-- Création de sites Web Wordpress ou sur mesure! -->
							</p>
						</article>
						<article class="card">
							<i class="fas fa-shopping-cart service-icon"></i>
							<h3>E-commerce</h3>
							<div class="underline"></div>
							<p>
								<!-- Création de site e-commerce avec <a href="https://wordpress.com/fr/">WordPress ET Woocommerce</a> -->
							</p>
						</article>
						<article class="card">
							<i class="fas fa-chart-line service-icon"></i>
							<h3>SEO</h3>
							<div class="underline"></div>
							<p>
							<!-- 	J'intègre dans mon travail toutes les bonnes pratiques afin d'optimiser le rérérencement naturel du site web -->
							</p>
						</article>
					</div>
				</div>
			</section>
			<!-- end of services -->
			<!-- Portfolio -->
			<section id="portfolio" class="section section__portfolio">
				<div class="section__portfolio--wrappe">
					<!-- section title -->
					<div class="title">
						<h2>Voir quelques unes de mes réalisations</h2>
						<div class="underline"></div>
					</div>
					<!--end of section title -->
					<div class="content content-projects-js">
						<!-- DISPLAY DATA FROM JAVASCRIPT-->
					</div>
				</div>
			</section>
			<!-- Portfolio end -->
			<!-- section contact -->
			<section id="contact" class="section section__contact">
				<div class="section__contact--wrappe">
					<div class="title">
						<h2>Vous voulez m'écrire un petit message? <br> Allez y j'adore ça!</h2>
						<div class="underline"></div>
					</div>
					<form action="contact.php" method="post" class="form-contact">
						<div class="row">
							<div class="col-md-3">
								<label for="name"></label>
								<input id="name" type="text" name="name" class="form-control" placeholder="Nom">
							</div>
							<div class="col-md-3">
								<label for="firstname"></label>
								<input id="firstname" type="text" name="fisrtname" class="form-control" placeholder="Prénom">
							</div>
							<div class="col-md-6">
								<label for="email"></label>
								<input id="email" type="email" name="email" class="form-control" placeholder="E-mail">
							</div>
							<div class="col-md-6">
								<label for="object"></label>
								<input id="object" type="text" name="object" class="form-control" placeholder="Objet de votre message">
							</div>
							<div class="col-md-12">
								<textarea id="message" name="message" class="form-control" placeholder="Votre Message"
									rows="4"></textarea>
							</div>
							<div class="col-md-12">
								<input id="submit" type="submit" name="submit" class="btn btn-submit" value="Envoyer">
							</div>
						</div>
					</form>
				</div>
			</section>
			<!-- section contact end -->
			<!-- footer -->
			<footer class="section section__footer">
				<div>
					<p>&copy; <span id="date"></span> Gladston Aristoverne - tous droits réservés</p>
				</div>
			</footer>
			<!-- footer end-->
		</div>
	</main>
	<script src="./js/app.js"></script>
</body>

</html>