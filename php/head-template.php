<?php
if ($page == "domu") {
    $pagename = "Domů";
} elseif ($page == "o-nas") {
    $pagename = "O nás";
} elseif ($page == "kontakt") {
    $pagename = "Kontakt";
} elseif ($page == "lektori") {
    $pagename = "Lektoři";
} else {
    $pagename = "404";
}
?>
<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $pagename ?> | Teacher digital Agency</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
	<link rel="stylesheet" href="css/mdb.min.css?gsgaa" />
	<link rel="stylesheet" href="./assets/css/style.css?<?php echo rand(0, 99999); ?>">
	<script src="https://unpkg.com/@phosphor-icons/web"></script>
	<script src="./js/script.js"></script>
</head>
    <body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
				<div class="container-fluid">
					<a class="navbar-brand" href="/">
						<img src="./logo.svg" alt="Teacher digital Agency - logo" height="48px">
					</a>
					<button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Otevřít menu">
						<i class="ph ph-list"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a <?php if($page == "domu") {
                                    echo 'class="nav-link active" aria-current="page"';
                                } else {
                                    echo 'class="nav-link"';
                                } ?> href="/">Domů</a>
							</li>
							<li class="nav-item">
								<a <?php if ($page == "o-nas") {
                                    echo 'class="nav-link active" aria-current="page"';
                                } else {
                                    echo 'class="nav-link"';
                                } ?> href="/">O nás</a>
							</li>
                                    							<li class="nav-item">
								<a <?php if ($page == "lektori") {
                                    echo 'class="nav-link active" aria-current="page"';
                                } else {
                                    echo 'class="nav-link"';
                                } ?> href="/">Lektoři</a>
							</li>
                                    							<li class="nav-item">
								<a <?php if ($page == "kontakt") {
                                    echo 'class="nav-link active" aria-current="page"';
                                } else {
                                    echo 'class="nav-link"';
                                } ?> href="/">Kontakt</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>