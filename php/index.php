<?php
$page = "domu";
include("head-template.php");

?>
<div class="p-5 text-center bg-image" style="
      background-image: url('./assets/css/books.svg');
			background-position: top;
      height: 99vh;
    ">
	<div class="mask">
		<div class="d-flex justify-content-center align-items-center h-100">
			<div class="text-dark">
				<h1 class=" display-1 text-body-emphasis">Vzdělávání na nové úrovni</h1>
				<div class="col-lg-6 mx-auto about-us">
					<p class="lead mb-4">Nauč se konečně užitečné věci. S Teacher digital Agency to jde snadno, najdi si lektora podle svých možností a rozvívej svoje vědomosti.</p>
					<div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
						<button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>Domluvit lekci</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Background image -->
</header>
<hr class="hr hr-blurry my-4 invisible" />
<div class=" w-75 mx-auto d-flex flex-column">

	<div class="d-flex justify-content-between" id="cont">
		<div class="d-flex flex-column" id="col">
			<h2 class="fw-bold lh-1">O nás</h2>
			<p class="lead" style="text-align:justify;">Věříme, že kvalitní vzdělávání je klíčem k úspěchu a rozvoji. Proto pracujeme s vášní a odhodláním, abychom vám zajistili optimální zážitek při hledání a navazování spojení s těmi nejlepšími v oblasti vzdělávání.</p>
		</div>
		<img class=" rounded" src="/assets/img/tda-chat.svg" style="max-height:225px">
	</div>

	<div class="d-flex justify-content-between my-5" id="cont-reverse">
		<img class="rounded" src="/assets/img/tda-idea.svg" style="max-height:225px">
		<div class="d-flex flex-column" id="col">
			<h2 class="fw-bold lh-1">Náš cíl</h2>
			<p class="lead" style="text-align:justify;">Sledujeme aktuální trendy ve vzdělávání a neustále rozšiřujeme naši síť odborníků, abychom vám mohli poskytnout snadný přístup k těm nejlepším a nejvhodnějším profesionálům v oboru, dle vašich požadavků.</p>
		</div>

	</div>

	<div class="d-flex justify-content-between my-5" id="cont">
		<div class="d-flex flex-column" id="col">
			<h2 class="fw-bold lh-1">Naše hodnoty</h2>
			<p class="lead" style="text-align:justify;">Teacher Digital Agency je založena na hodnotách transparentnosti, profesionalizmu a individuální péče. Věříme, že kvalitní vztahy mezi učitelem a studentem jsou klíčové pro úspěch vzdělávacího procesu.</p>
		</div>
		<img class="rounded" src="/assets/img/tda-read.svg" style="max-height:225px">
	</div>

</div>


</div>
<div class="container">
	<!-- Default dropright button -->
	<div class="btn-group dropend">
		<button type="button" class="btn btn-primary dropdown-toggle" data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
			<i class="ph ph-funnel"></i> Seřadit dle
		</button>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="#">Nejlépe hodnocené</a></li>
			<li><a class="dropdown-item" href="#">Nejlevnější</a></li>
			<li><a class="dropdown-item" href="#">Nejdražší</a></li>
			<li><a class="dropdown-item" href="#">Nejnovější</a></li>
		</ul>
	</div><br><br>

	<div class="accordion shadow-2 border border-0" id="valentin">
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingOne">
				<button data-mdb-collapse-init class="accordion-button" type="button" data-mdb-toggle="collapse" data-mdb-target="#valentin_collapseOne" aria-expanded="true" aria-controls="valentin_collapseOne">
					<div class="d-flex align-items-center" style="gap:10px;">
						<img src="./assets/img/Valentin.jpg" alt='Mgr. Petra "Swil" Plachá MBA' height="96px" style="border-radius:35px">
						<div class="d-flex flex-column">
							<h5 class="card-title fw-bold">Valentin Ilchev</h5>
							<p class="card-text fw-bold">
								<i class="ph ph-phone"></i> +420 773 133 950<br>
								<i class="ph ph-envelope"></i> vilchev@spskt.cz
							</p>
						</div>
					</div>
				</button>
			</h2>
			<div id="valentin_collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-mdb-parent="#valentin">
				<div class="accordion-body">
					<h4 class="fw-bolder">
						<i class="ph ph-coins"></i> 700,- Kč na hodinu
					</h4>
					<span class="badge rounded-pill badge-dark">Autorství</span>
					<span class="badge rounded-pill badge-dark">Jazyky</span>
					<span class="badge rounded-pill badge-dark">Lekce psaní fantasy a sci-fi přiběhů</span>
					<span class="badge rounded-pill badge-dark">Angličtina</span>
					<span class="badge rounded-pill badge-dark">Němčina</span>
					<span class="badge rounded-pill badge-dark">Francouzština</span>
					<span class="badge rounded-pill badge-dark">Literatura</span><br><br>
					<p class="card-text fst-italic fw-light">
						Zima přichází
					</p>
					<p class="card-text" style="border-left:#333333 2px solid; padding-left: 7px; border-radius: 2px;">
					<p>Moje životní moto je dělat vše s vášní a užívat si to. Vytvořit něco originálního a svýho je to čím se zabývám. Rád tvořím světy a dávám postavám duši, dávám jim příběh, rodinu a cestu, kterou projedou ve svém životě. Hodně lidí si myslí, že psaní příběhů je ztráta času, to co tyhle lidí ale neví je že vytvářením fiktivních světů jste o tolikrát víc člověkem. Prožít tolik životů a tolik postav, všechen ten úspěch, muka, utrpení a vítězství je důvodem proč bojovat a říct si-ještě jeden krok.</p>
				</div>
			</div>
		</div>
	</div><br>
	<div class="accordion shadow-2 border border-0" id="michal">
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingOne">
				<button data-mdb-collapse-init class="accordion-button" type="button" data-mdb-toggle="collapse" data-mdb-target="#michal_collapseOne" aria-expanded="true" aria-controls="michal_collapseOne">
					<div class="d-flex align-items-center" style="gap:10px;">
						<img src="./assets/img/Michal.jpg" alt='Mgr. Petra "Swil" Plachá MBA' height="96px" style="border-radius:35px">
						<div class="d-flex flex-column">
							<h5 class="card-title fw-bold">Michal Janeček</h5>
							<p class="card-text fw-bold">
								<i class="ph ph-phone"></i> +420 607 144 012<br>
								<i class="ph ph-envelope"></i> mjanecek@spskt.cz
							</p>
						</div>
					</div>
				</button>
			</h2>
			<div id="michal_collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-mdb-parent="#michal">
				<div class="accordion-body">
					<h4 class="fw-bolder">
						<i class="ph ph-coins"></i> 1300,- Kč na hodinu
					</h4>
					<span class="badge rounded-pill badge-dark">Dobrovolnictví</span>
					<span class="badge rounded-pill badge-dark">Soucit</span>
					<span class="badge rounded-pill badge-dark">Mimoškolní aktivity</span>
					<span class="badge rounded-pill badge-dark">Logické myšlení</span>
					<span class="badge rounded-pill badge-dark">Mimoškolní aktivity</span>
					<span class="badge rounded-pill badge-dark">Cílevědomost</span>
					<span class="badge rounded-pill badge-dark">Ekonomika</span>
					<span class="badge rounded-pill badge-dark">Vytváření webových stránek</span>
					<span class="badge rounded-pill badge-dark">HTML</span>
					<span class="badge rounded-pill badge-dark">CSS</span>
					<span class="badge rounded-pill badge-dark">JS</span><br><br>
					<p class="card-text fst-italic fw-light">
						Aktivní student / Skvělý manažér
					</p>
					<p class="card-text" style="border-left:#333333 2px solid; padding-left: 7px; border-radius: 2px;">
					<p>Přesnost, jasnost, dobrý grafický design a responsivita jsou mé životní přísahy. Pro mě je nejdůležitější koukat se z praktické stránky a brát i nejmenší detaily na vědomí. Nezastavím se dokud nedosáhnu vyžadovaný výsledek. I přes disciplinovaný a precizní životní styl rád jezdím na kole a dělám vše ve svých silách, aby nebylo nic, žádný zážitek nebo možnost vynechána.</p>
					</p>
				</div>
			</div>
		</div>
	</div><br>
	<div class="accordion shadow-2 border border-0" id="daniel">
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingOne">
				<button data-mdb-collapse-init class="accordion-button" type="button" data-mdb-toggle="collapse" data-mdb-target="#daniel_collapseOne" aria-expanded="true" aria-controls="daniel_collapseOne">
					<div class="d-flex align-items-center" style="gap:10px;">
						<img src="./assets/img/Daniel.jpg" alt='Mgr. Petra "Swil" Plachá MBA' height="96px" style="border-radius:35px">
						<div class="d-flex flex-column">
							<h5 class="card-title fw-bold">Daniel Šebesta</h5>
							<p class="card-text fw-bold">
								<i class="ph ph-phone"></i> +420 720 448 255<br>
								<i class="ph ph-envelope"></i> dsebesta@spskt.cz
							</p>
						</div>
					</div>
				</button>
			</h2>
			<div id="daniel_collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-mdb-parent="#daniel">
				<div class="accordion-body">
					<h4 class="fw-bolder">
						<i class="ph ph-coins"></i> 450,- Kč na hodinu
					</h4>
					<span class="badge rounded-pill badge-dark">Programování</span>
					<span class="badge rounded-pill badge-dark">HTML</span>
					<span class="badge rounded-pill badge-dark">CSS</span>
					<span class="badge rounded-pill badge-dark">JS</span>
					<span class="badge rounded-pill badge-dark">PHP</span><br><br>
					<p class="card-text fst-italic fw-light">
						Snažím se dělat funkční kód
					</p>
					<p class="card-text" style="border-left:#333333 2px solid; padding-left: 7px; border-radius: 2px;">
					<p>Ve volném čase zkouším programovat, různé programovací jazyky, hlavně PHP. Dále studuji a rád chodím do přírody.</p>
					</p>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
<br>

<?php
include("footer-template.php");
?>
<script type="text/javascript" src="js/mdb.umd.min.js"></script>
</body>

</html