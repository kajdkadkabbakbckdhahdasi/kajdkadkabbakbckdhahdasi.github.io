<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portofolio Saya</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Beranda</a></li>
				<li><a href="#">Tentang Saya</a></li>
				<li><a href="#">Proyek</a></li>
				<li><a href="#">Kontak</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class="hero">
			<h1>Portofolio Saya</h1>
			<p>Selamat datang di portofolio saya. Saya seorang pelaja yang hanya bisa menghabiskan uang oarang tua saya.</p>
			<a href="#" class="cta">Pelajari Lebih Lanjut</a>
		</section>
		<section class="about">
			<h2>Tentang Saya</h2>
			<p>Saya adalah seorang pelajar smk berpengalaman dengan keahlian dalam hidup, masyarakat, dan lingkungan.</p>
		</section>
		<section class="projects">
			<h2>Proyek Terbaru</h2>
			<ul>
				<li>
					<a href="portofolio.php">
						<img src="admin/img/heh.png" alt="Project 1">
						<h3>Proyek 1 Mengenai Nama Nama Guru Yang mengajar di Sekolah Menengah Kejuruan Negeri 2 Padang Panjang</h3>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="admin/img/hih.png" alt="Project 2">
						<h3>Proyek 2 Adalah Suatu Data kota Di Mana Terdapat ID Kota, Nama Kota, Dan keterangan</h3>
					</a>
				</li>
			</ul>
		</section>
		<section class="contact">
			<h2>Kontak Saya</h2>
			<form action="#">
				<label for="name">Nama:</label>
				<input type="text" id="name" name="name">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email">
				<label for="message">Pesan:</label>
				<textarea id="message" name="message"></textarea>
				<button type="submit">Kirim</button>
			</form>
		</section>
	</main>
	<footer>
		<p>Hak Cipta &copy; 2023 | Portofolio Muhammad Doni</p>
	</footer>
</body>
</html>