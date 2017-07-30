<?php
    session_start();
    ob_start();
	error_reporting(0);
    if (!isset($_SESSION['MODGOD'])){
        ob_end_clean();
        header('location: ./');
    } else {
        include("include/mysql.php");
        include("include/seal.php");
		include("include/thumb.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<link rel="shortcut icon" href="img/bandung.png">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<h2 id="admin" >Admin Panel</h2>
			</div>
			<div class="right">
				<p><strong><?php echo $_SESSION['name']; ?></strong> [ <a href="?module=logout">Logout</a> ]</p>
			</div>
		</div>
		<div id="nav">
			<ul>
				<li class="upp"><a href="?module=main">Berita Terbaru</a></li>
        <li class="upp"><a href="#">Dashboard</a>
					<ul>
						<!-- <li>&#8250; <a href="?module=non-akademik&id=1">Pengumuman</a></li>
						<li>&#8250; <a href="?module=non-akademik&id=2">Artikel Kesehatan</a></li>
						<li>&#8250; <a href="?module=non-akademik&id=3">Promosi Kesehatan</a></li> -->
						<li>&#8250; <a href="?module=pengumuman">Pengumuman</a></li>
						<li>&#8250; <a href="?module=artikelkesehatan">Artikel Kesehatan</a></li>
						<li>&#8250; <a href="?module=promosikesehatan">Promosi Kesehatan</a></li>
					</ul>
				</li>
				<li class="upp"><a href="#">Profil</a>
					<ul>
						<li>&#8250; <a href="?module=history">Sejarah</a></li>
						<li>&#8250; <a href="?module=vision">Visi &amp; Misi</a></li>
						<li>&#8250; <a href="?module=struktur">Struktur Organisasi</a></li>
						<li>&#8250; <a href="?module=kepsek">Tugas Pokok</a></li>
					</ul>
				</li>
				<li class="upp"><a href="#">UPT Dinas</a>
					<ul>
						<li>&#8250; <a href="?module=kurikulum">Puskesmas</a></li>
						<li>&#8250; <a href="?module=rumahsakit">Rumah Sakit</a></li>
						<li>&#8250; <a href="?module=laboratorium">Laboratorium</a></li>
						<li>&#8250; <a href="?module=yankesmob">Yankesmob</a></li>
						<!-- <li>&#8250; <a href="?module=kelas">Data Kelas</a></li> -->
						<!-- <li>&#8250; <a href="?module=jadwal">Jadwal Pelajaran</a></li> -->
					</ul>
				</li>
				<li class="upp"><a href="#">Download</a>
					<ul>
						<li>&#8250; <a href="?module=permenkes">Permenkes</a></li>
						<li>&#8250; <a href="?module=profildinas">Profil Dinas</a></li>
						<li>&#8250; <a href="?module=anggaran">Anggaran</a></li>
						<!-- <li>&#8250; <a href="?module=kelas">Data Kelas</a></li> -->
						<!-- <li>&#8250; <a href="?module=jadwal">Jadwal Pelajaran</a></li> -->
					</ul>
				</li>
				<li class="upp"><a href="#">PPID</a>
						<ul>
							<li>&#8250;<a href="#">Keuangan</a>
								<ul>
									<li><a href="#">Neraca</a></li>
									<li><a href="#">Laporan Arus Kas &amp; Catatan di Keuangan</a></li>
									<li><a href="#">Daftar Aset dan Investasi</a></li>
								</ul>
							</li>
							<li>&#8250;<a href="#">Kesga &amp; Gizi</a></li>
							<li>&#8250;<a href="#">Yankes</a></li>
							<li>&#8250;<a href="#">Bina Program</a></li>
						</ul>
					</li>
				<!-- <li class="upp"><a href="#">Non Akademik</a>
					<ul>
						<li>&#8250; <a href="?module=non-akademik&id=1">Pengurus OSIS</a></li>
						<li>&#8250; <a href="?module=non-akademik&id=2">Program Kerja OSIS</a></li>
						<li>&#8250; <a href="?module=non-akademik&id=3">Ekstrakurikuler</a></li>
					</ul>
				</li> -->
				<li class="upp"><a href="?module=galeri">Galeri</a></li>
				<li class="upp"><a href="?module=inbox">Buku Tamu</a></li>
				<li class="upp"><a href="?module=admin">Admin</a></li>
			</ul>
		</div>
	</div>
	<div id="content">
		<div id="main">
			<?php
				if (isset($_GET['module'])){
					$module = $_GET['module'];
					if ($module == 'main'){
						include("module/main/main.php");
					} elseif ($module == 'history'){
						include("module/history/history.php");
					} elseif ($module == 'vision'){
						include("module/vision/vision.php");
          } elseif ($module == 'kepsek'){
						include("module/kepsek/kepsek.php");
					} elseif ($module == 'struktur'){
						include("module/struktur/struktur.php");
					} elseif ($module == 'contact'){
						include("module/contact/contact.php");
					} elseif ($module == 'kurikulum'){
						include("module/kurikulum/kurikulum.php");
					} elseif ($module == 'kelas'){
						include("module/kelas/kelas.php");
					} elseif ($module == 'jadwal'){
						include("module/jadwal/jadwal.php");
					} elseif ($module == 'permenkes'){
						include("module/download/b_permenkes.php");
					}elseif ($module == 'profildinas'){
						include("module/download/b_profildinas.php");
					}elseif ($module == 'anggaran'){
						include("module/download/b_anggaran.php");
					}elseif ($module == 'pengumuman'){
						include("module/dashboard/pengumuman.php");
					}elseif ($module == 'promosikesehatan'){
						include("module/dashboard/promosikesehatan.php");
					}elseif ($module == 'artikelkesehatan'){
						include("module/dashboard/artikelkesehatan.php");
					}elseif ($module == 'rumahsakit'){
						include("module/uptdinas/b_rumahsakit.php");
					}elseif ($module == 'laboratorium'){
						include("module/uptdinas/b_lab.php");
					}elseif ($module == 'yankesmob'){
						include("module/yankesmob/yankesmob.php");
					}elseif ($module == 'non-akademik'){
						include("module/non-akademik/non-akademik.php");
					}elseif ($module == 'teacher'){
						include("module/teacher/teacher.php");
					} elseif ($module == 'student'){
						include("module/student/student.php");
					} elseif ($module == 'galeri'){
						include("module/galeri/galeri.php");
					} elseif ($module == 'inbox'){
						include("module/inbox/inbox.php");
					} elseif ($module == 'admin'){
						include("module/admin/admin.php");
					} elseif ($module == 'logout'){
						session_destroy();
						ob_end_clean();
						header("location: ../");
					} else {
						header('location: index.php');
					}
				} else {
					header('location: index.php');
				}
			?>
		</div>
	</div>
	<div id="footer">
		<div class="left">
			<p><strong>Copyright &copy; 2017</strong> - All Rights Reserved</p>
		</div>
		<div class="right">
			<p><strong><a href="?module=main">Admin Panel</a></strong></p>
		</div>
	</div>
</div>
</body>
</html>
<?php
    }
?>
