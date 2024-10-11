<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?= site_url('/'); ?>">
			<img src="<?= base_url('/front/images/binsani_logo_full.png'); ?>" class="navbar-img" alt="Logo">
		</a>
		<a class="btn btn-outline-dark ms-2" href="<?= site_url('/transaksi/register/43'); ?> ">Donasi</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url('/donasi'); ?>">Program</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url('/artikel'); ?>">Artikel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url('/profil'); ?>">Profil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url('/laporan'); ?>">Laporan</a>
				</li>
				<li class="nav-item">
					<form class="d-flex w-100 px-2" role="search" action="<?= site_url('/search'); ?>" method="GET">
						<input class="form-control flex-grow-1" type="search" name="query" placeholder="Cari" aria-label="Search">
					</form>
				</li>
			</ul>
		</div>
	</div>
</nav>