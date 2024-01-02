<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Petra Plachá | Teacher digital Agency</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lalezar&family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="120x120" href="/assets/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
	<link rel="manifest" href="/assets/icons/site.webmanifest">
	<link rel="mask-icon" href="/assets/icons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/assets/icons/favicon.ico">
	<meta name="msapplication-TileColor" content="#7fc6d2">
	<meta name="msapplication-config" content="/assets/icons/browserconfig.xml">
	<meta name="theme-color" content="#7fc6d2">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="./assets/css/style.css?<?php echo rand(0, 99999); ?>">
	<script src="https://unpkg.com/@phosphor-icons/web"></script>
	<script src="./assets/js/script.js?gdsgd" defer></script>
</head>

<body>
	<div id="loadingscreen">
		<script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/bouncy.js"></script>
		<l-bouncy size="128" speed="1.75" color="#333"></l-bouncy>
	</div>
	<script>
		function hideLoadingScreen() {
			const loadingScreen = document.getElementById("loadingscreen");

			// Gradually reduce opacity
			let opacity = 1;
			const fadeInterval = setInterval(function() {
				opacity -= 0.05; // Adjust the step size as needed
				loadingScreen.style.opacity = opacity;

				if (opacity <= 0) {
					clearInterval(fadeInterval);
					loadingScreen.style.display = "none";
				}
			}, 50); // Adjust the interval as needed
		}
		document.addEventListener("DOMContentLoaded", function() {
			hideLoadingScreen();
		});
	</script>
	<main>

		<div class="navbar2 animate__slideInDown animate__animated fixed-top">
			<header class="d-flex flex-wrap justify-content-center py-3 mb-4 nav-itemy">
				<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
					<img src="./TdA_LOGO/TeacherDigitalAgency_LOGO_black.svg" height="96">
				</a>

				<ul class="nav align-items-center">
					<li class="nav-item"><a href="#" class="nav-link active">Domů</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Lektoři</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Kontakt</a></li>
				</ul>
			</header>
		</div>
		<div class="container d-flex justify-content-center align-items-center" style="height:70dvh; ">
			<div class=" px-4 py-5 my-5 text-center ">
				<h1 class=" display-1 text-body-emphasis">Vzdělávání na nové úrovni</h1>
				<div class="col-lg-6 mx-auto">
					<p class="lead mb-4">Už žádné zdlouhavé hledání. Teacher Digital Agency je vaším průvodcem k špičkovým učitelům a lektorům.</p>
					<div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
						<button type="button" class="btn btn-primary btn-lg px-4 gap-3 rounded-pill">Vyzkoušet</button>
					</div>
				</div>
			</div>
		</div>
		<div class="wave-img"></div>
		<div class="row justify-content-center" style="background:#74c8d0;">
			<div class="card mb-3 rounded-3" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-md-4 align-items-center d-flex">
						<img src="./assets/img/placha.webp" class="img-fluid rounded-circle" alt='Mgr. Petra "Swil" Plachá MBA'>
					</div>
					<div class="col-md-8">
					<div class="card-body">
							<h5 class="card-title">Mgr. Petra "Swil" Plachá MBA</h5>
							<p class="card-text text-secondary"><i class="ph ph-map-pin"></i> Brno</p>
							<p class="card-text text-secondary">Aktivní studentka / Předsedkyně spolku / Projektová manažerka</p>
							<p class="card-text"><span class="badge">Dobrovolnictví</span>
								<span class="badge">Prezentační dovednosti</span>
								<span class="badge">Fundraising pro neziskové studentské projekty</span>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="card mb-3 rounded-3" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-md-4 align-items-center d-flex">
						<img src="./assets/img/placha.webp" class="img-fluid rounded-circle" alt='Mgr. Petra "Swil" Plachá MBA'>
					</div>
					<div class="col-md-8">
					<div class="card-body">
							<h5 class="card-title">Mgr. Petra "Swil" Plachá MBA</h5>
							<p class="card-text text-secondary"><i class="ph ph-map-pin"></i> Brno</p>
							<p class="card-text text-secondary">Aktivní studentka / Předsedkyně spolku / Projektová manažerka</p>
							<p class="card-text"><span class="badge">Dobrovolnictví</span>
								<span class="badge">Prezentační dovednosti</span>
								<span class="badge">Fundraising pro neziskové studentské projekty</span>
							</p>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row justify-content-center" style="background:#74c8d0;">
			<div class="card mb-3 rounded-3" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-md-4 align-items-center d-flex">
						<img src="./assets/img/placha.webp" class="img-fluid rounded-circle" alt='Mgr. Petra "Swil" Plachá MBA'>
					</div>
					<div class="col-md-8">
					<div class="card-body">
							<h5 class="card-title">Mgr. Petra "Swil" Plachá MBA</h5>
							<p class="card-text text-secondary"><i class="ph ph-map-pin"></i> Brno</p>
							<p class="card-text text-secondary">Aktivní studentka / Předsedkyně spolku / Projektová manažerka</p>
							<p class="card-text"><span class="badge">Dobrovolnictví</span>
								<span class="badge">Prezentační dovednosti</span>
								<span class="badge">Fundraising pro neziskové studentské projekty</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		</div>
		<div class="wave-img wave-img2"></div>
		<div class="container">
			<h1 class="display-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quod quo veniam aspernatur consectetur nobis numquam alias doloribus necessitatibus sunt optio fuga nostrum animi nulla, saepe eum non dignissimos. Recusandae.</h1>
		</div>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html