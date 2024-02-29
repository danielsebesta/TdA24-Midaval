<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Přihlásit se | Administrace | Teacher digital Agency</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Lalezar&family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
		rel="stylesheet">
	<link rel="apple-touch-icon" sizes="120x120" href="../assets/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/icons/favicon-16x16.png">
	<link rel="manifest" href="../assets/icons/site.webmanifest">
	<link rel="mask-icon" href="../assets/icons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="../assets/icons/favicon.ico">
	<meta name="msapplication-TileColor" content="#7fc6d2">
	<meta name="msapplication-config" content="../assets/icons/browserconfig.xml">
	<meta name="theme-color" content="#7fc6d2">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="../css/mdb.min.css?gsgaa" />
	<link rel="stylesheet" href="../assets/css/style.css?814521">
	<script src="https://unpkg.com/@phosphor-icons/web"></script>
	<script src="../js/script.js"></script>
</head>

<body>
	<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img src="../logo.svg" alt="Teacher digital Agency - logo" height="48px">
				</a>
				<button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarTogglerDemo02"
					aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Otevřít menu">
					<i class="ph ph-list"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="/">Domluvené lekce</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/">Archiv lekcí</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/">Zpět na web</a>
						</li>
					</ul>
				</div>
     <div class="dropdown">
        <a
          data-mdb-dropdown-init
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          aria-expanded="false"
        >
          <img
            src="https://cdn.muni.cz/media/3580701/_dsc0370-medium.jpeg?mode=crop&center=0.40,0.54&rnd=133425676220000000&heightratio=1&width=278"
            class="rounded-circle"
            height="50"
            alt="Petra Plachá"
            loading="lazy"
          />
    						<div style="margin-left: 0.5em;" class="userName">Petra Plachá</div>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">Nastavení</a>
          </li>
          <li>
            <a class="dropdown-item text-danger" href="#">Odhlásit se</a>
          </li>
        </ul>
      </div>
		</nav>
		<div class="p-5" style="height: 99vh;">
				<div class="d-flex justify-content-center align-items-center flex-column h-100 container">
    <h1 class="display-2">Domluvené lekce</h1>
				<div class="row">
  <div class="col-4">
    <div class="list-group list-group-light" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active fw-bold px-3 border-0" id="list-home-list"
        data-mdb-list-init href="#list-home" role="tab" aria-controls="list-home">Jan Salák <span class="badge rounded-pill badge-primary">20. února 2024</span><br><span class="text-muted">salak@example.com</span></a>

      <a class="list-group-item list-group-item-action px-3 border-0 fw-bold" id="list-profile-list"
        data-mdb-list-init href="#list-profile" role="tab" aria-controls="list-profile">Zikmund Zima <span class="badge rounded-pill badge-secondary">21. února 2024</span><br><span class="text-muted">z.zima@example.org</span>     </a>
      <a class="list-group-item list-group-item-action px-3 border-0 fw-bold" id="list-messages-list"
        data-mdb-list-init href="#list-messages" role="tab" aria-controls="list-messages">Andrej Sokol <span class="badge rounded-pill badge-secondary">4. března 2024</span><br><span class="text-muted">andy07sok0l@example.cz</span></a>
      <a class="list-group-item list-group-item-action px-3 border-0 fw-bold" id="list-settings-list"
        data-mdb-list-init href="#list-settings" role="tab" aria-controls="list-settings">Petr Nový <span class="badge rounded-pill badge-warning">Momentálně žádný termín</span><br<span class="text-muted">petr.novy@example.com</span></a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel"
        aria-labelledby="list-home-list">
        <h2>Jan Salák</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus accusamus doloribus sequi? Maiores, ut odit! Optio qui eius numquam incidunt, omnis delectus asperiores quo reprehenderit, cum amet magni vero ut.</p>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        <h2>Zikmund Zima</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus accusamus doloribus sequi? Maiores, ut odit! Optio qui eius numquam incidunt, omnis delectus asperiores quo reprehenderit, cum amet magni vero ut.</p>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        <h2>Andrej Sokol</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus accusamus doloribus sequi? Maiores, ut odit! Optio qui eius numquam incidunt, omnis delectus asperiores quo reprehenderit, cum amet magni vero ut.</p>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <h2>Petr Nový</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus accusamus doloribus sequi? Maiores, ut odit! Optio qui eius numquam incidunt, omnis delectus asperiores quo reprehenderit, cum amet magni vero ut.</p>
      </div>
    </div>
  </div>
</div>
			</div>
		</div>
		<!-- Background image -->
	</header>
	<footer class="text-center text-lg-start bg-body-tertiary text-muted">
		<section
			class="container d-flex justify-content-center flex-column align-items-center justify-content-lg-between p-4 border-top">
			<h3 class="footer-title">Chceš být informován o novinkách?</h3>
			<h5 class="footer-title">Zapiš se do našeho newsletteru!</h5><br>
			<div class="w-25 form-outline" data-mdb-input-init>
				<input type="email" id="typeEmail" class="form-control" />
				<label class="form-label" for="typeEmail">Vaše e-mailová adresa</label>
			</div>
		</section>

		<section class="">
			<div class="container text-center text-md-start mt-5">

				<div class="row mt-3">

					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

						<h6 class="text-uppercase fw-bold mb-4">
							<i class="fas fa-gem me-3"></i>TEACHER DIGITAL AGENCY
						</h6>
						<p>
							V Teacher Digital Agency se nebojíme vyzkoušet nové věci. Jako mladá parta jsme společně uspořádali
							spoustu akcí a pomohli několika stovkám šikovných studentů objevit svůj skrytý talent. S námi mohli začít
							rozvíjet své dovednosti a vstoupit do světa zábavného učení.
						</p>
					</div>
					<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
						<h6 class="text-uppercase fw-bold mb-4">
							SLEDUJ NÁS NA SÍTÍCH
						</h6>
						<p>
							<a href="#!" class="text-reset"><i class="ph-fill ph-instagram-logo"></i> Instagram</a>
						</p>
						<p>
							<a href="#!" class="text-reset"><i class="ph-fill ph-facebook-logo"></i> Facebook</a>
						</p>
						<p>
							<a href="#!" class="text-reset"><i class="ph-fill ph-discord-logo"></i> Discord</a>
						</p>
						<p>
							<a href="#!" class="text-reset"><i class="ph-fill ph-twitter-logo"></i> Twitter (X)</a>
						</p>
					</div>
				</div>
		</section>

		<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
			© 2024 Teacher digital Agency<br>
			Tento web vyrobil se <i class="ph-fill ph-heart"></i> a hodně <i class="ph-fill ph-coffee"></i> tým <span
				class="fw-bold">Midaval</span>
		</div>
	</footer>
	<script type="text/javascript" src="../js/mdb.umd.min.js"></script>
</body>

</html>