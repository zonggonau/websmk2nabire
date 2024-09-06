<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url() ?>">
			<!-- <img style="max-width:250px;" src="<?= base_url('img/identitas/logo.png') ?>"> -->
			<b>
				<h4>SMK NEGRI 2 NABIRE</h4>
			</b>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item <?php if ($title == 'Beranda') echo "active"; ?>">
					<a class="nav-link" href="<?= base_url() ?>">Beranda</a>
				</li>
				<li class="nav-item dropdown <?php if ($title == 'Sejarah' || $title == 'Visi & Misi' || $title == 'Struktur' || $title == 'Fasilitas') echo "active"; ?>">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Profil
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<!-- <a class="dropdown-item" href="<?= base_url('profil/sejarah') ?>">Sejarah</a> -->
						<a class="dropdown-item" href="<?= base_url('profil/visimisi') ?>">Visi & Misi</a>
						<a class="dropdown-item" href="<?= base_url('profil/struktur') ?>">Struktur Organisasi</a>
						<a class="dropdown-item" href="<?= base_url('profil/fasilitas') ?>">Fasilitas</a>
					</div>
				</li>
				<li class="nav-item dropdown <?php if ($title == 'Administrasi Perkantoran' || $title == 'Akutansi' || $title == 'Pemasaran') echo "active"; ?>">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Jurusan
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="<?= base_url('jurusan/tkp') ?>">Teknik Konstruksi dan Perumahan</a>
						<a class="dropdown-item" href="<?= base_url('jurusan/titl') ?>">Teknik Instalasi Tenaga Listrik</a>
						<a class="dropdown-item" href="<?= base_url('jurusan/tav') ?>">Teknik Audio Video</a>
						<a class="dropdown-item" href="<?= base_url('jurusan/tsm') ?>">Teknik Sepeda Motor</a>
						<a class="dropdown-item" href="<?= base_url('jurusan/tkj') ?>">Teknik Komputer dan Jaringan</a>
						<a class="dropdown-item" href="<?= base_url('jurusan/tkro') ?>">Teknik Kendaraan Ringan Otomotif</a>
					</div>
				</li>
				<li class="nav-item <?php if ($title == 'Tata Tertib') echo "active"; ?>">
					<a class="nav-link" href="<?= base_url('tatatertib') ?>">Tata Tertib</a>
				</li>
				<li class="nav-item <?php if ($title == 'Agenda') echo "active"; ?>">
					<a class="nav-link" href="<?= base_url('agenda') ?>">Agenda</a>
				</li>
				<li class="nav-item <?php if ($title == 'Berita') echo "active"; ?>">
					<a class="nav-link" href="<?= base_url('blog') ?>">Berita</a>
				</li>
			</ul>
		</div>
	</div>
</nav>