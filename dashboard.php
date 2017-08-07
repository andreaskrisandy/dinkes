<?php
    ob_start();
	error_reporting(0);
	include("include/mysql.php");
	include("include/date.php");
	$today = idDate(date("Y-m-d"));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Dinas Kesehatan Kota Bandung</title>
		<meta name="keywords" content="Dinas Kesehatan Kota Bandung" />
		<meta name="description" content="Dinas Kesehatan Kota Bandung" />
		<link rel="shortcut icon" href="images/bandung.png">
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/nivo.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/sexy-icon.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/table.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
		<link rel="stylesheet" type="text/css" href="css/dropdownmenu.css" />
		<link rel="stylesheet" type="text/css" href="css/jsdatepick.css" />
		<link rel="stylesheet" type="text/css" href="css/jsdatepick.css" />
		<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
		<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
		<script type="text/javascript" src="js/jsdatepick.js"></script>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		<script language="javascript" type="text/javascript">
			window.onload = function(){
				g_globalObject2 = new JsDatePick({
					useMode:1,
					isStripped:true,
					target:"jsCalendar",
					cellColorScheme:"#eaeaea"
				});
			};
			function clearText(field)
			{
				if (field.defaultValue == field.value) field.value = '';
				else if (field.value == '') field.value = field.defaultValue;
			};
			ddsmoothmenu.init({
				mainmenuid: "templatemo_menu",
				orientation: 'h',
				classname: 'ddsmoothmenu',
				contentsource: "markup"
			});
		</script>
	</head>
	<body>
		<div id="templatemo_wrapper">
			<div id="templatemo_header">
				<div id="site_title">
				</div>
				<div class="cleaner"></div>
			</div>

			<div id="templatemo_menu" class="ddsmoothmenu">
				<ul class="top-level-menu">
					<li><a href="?page=main">Beranda</a></li>
					<li><a href="#">Profil</a>
						<ul class="second-level-menu">
							<span></span>
							<li><a href="?page=sejarah">Sejarah</a></li>
							<li><a href="?page=visi-misi">Visi &amp; Misi</a></li>
							<li><a href="?page=struktur-organisasi">Struktur Organisani</a></li>
							<li><a href="?page=profil-kepala-sekolah">Tugas Pokok dan Fungsi</a></li>
							<span></span>
						</ul>
					</li>
					<li><a href="#">UPT Dinas</a>
						<ul class="second-level-menu">
							<span></span>
							<li><a href="?page=informasi-kurikulum">Puskesmas</a></li>
							<li><a href="?page=rumahsakit">Rumah Sakit</a></li>
							<li><a href="?page=labkesda">Lab Kesda</a></li>
							<li><a href="?page=yankesmob">Yankesmob</a></li>
							<!--<li><a href="#">Tambahan</a>
								<ul style="width: 100%; margin-top: 90px; border-radius: 5px; border-bottom: none">
									<?php
										$qkelas = mysql_query("select * from kelas order by kelas_id desc");
										while ($dkelas = mysql_fetch_array($qkelas)){
											echo "<li><a style=\"margin: 0; padding: 0 0 0 5px; width: 100% !important; border-radius: 3px\" href=\"?page=jadwal-pelajaran&kelas=$dkelas[kelas_id]\">$dkelas[kelas_name]</a></li>";
										}
									?>
								</ul>
							</li>-->
							<span></span>
						</ul>
					</li>
					<li><a href="?page=galeri">Galeri</a></li>
          <li><a href="#">Download</a>
						<ul class="second-level-menu">
							<span></span>
							<!-- <li><a href="?page=non-akademik&hal=pengurus-osis">Permenkes</a></li> -->
							<li><a href="?page=permenkes">Permenkes</a></li>
							<!-- <li><a href="?page=non-akademik&hal=program-kerja-osis">Profil Dinas</a></li> -->
							<li><a href="?page=profildinas">Profil Dinas</a></li>
              				<li><a href="?page=anggaran">Anggaran</a></li>
							<span></span>
						</ul>
					</li>
          <!-- <li><a href="?page=psc119">PSC 119</a></li> -->
          <li><a href="#">PPID Pembantu</a>
						<ul class="second-level-menu">
							<span></span>
							<li><a href="#">Keuangan</a>
								<ul class="third-level-menu">
									<li><a href="?page=neraca">Neraca</a></li>
									<li><a href="?page=laparuskas">Lap Arus Kas &amp; Catatan Keu</a></li>
									<li><a href="?page=daftaraset">Daftar Aset dan Investasi</a></li>
								</ul>
							</li>
							<li><a href="#">Kesga &amp; Gizi</a>
								<ul class="third-level-menu">
									<li><a href="?page=germas">Germas</a></li>
								</ul>
							</li>
							<li><a href="#">Yankes</a>
								<ul class="third-level-menu">
									<li><a href="?page=layad">Layad Rawat</a></li>
								</ul>
							</li>
							<li><a href="#">Bina Program</a>
								<ul class="third-level-menu">
									<li><a href="?page=laprealisasi">Laporan Realisasi I dan II</a></li>
									<li><a href="?page=pptk">PPTK</a></li>
								</ul>
							</li>
              <li>
                <a href="?page=layanan_informasi_publik">Layanan Informasi Publik</a>
							</li>
							<span></span>
						</ul>
					</li>
          <li><a href="?page=buku-tamu">Kontak Kami</a></li>
				</ul>
				<br style="clear: left" />
			</div>

			<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
			<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
			<script type="text/javascript">
				$(window).load(function() {
				$('#slider').nivoSlider();
				});
			</script>

			<div id="templatemo_slider_wrapper">

				<div id="slider" class="nivoSlider">
          <a href="?page=germas"><img src="images/slider/slider1.jpg" alt="Slider 05" /></a>
          <a href="?page=main"><img src="images/slider/slide2.jpg" alt="Slider 05" /></a>
          <a href="?page=artikelkesehatan&id=4"><img src="images/slider/slide3.jpg" alt="Slider 05" /></a>
          <a href="?page=yankesmob"><img src="images/slider/slide4.jpg" alt="Slider 05" /></a>
          <a href="?page=promosikesehatan&id=2"><img src="images/slider/slide5.jpg" alt="Slider 05" /></a>
				</div>

				<div id="htmlcaption" class="nivo-html-caption">
				</div>

			</div>

			<div id="templatemo_main">

				<div class="col_left float_l">
					<?php
						if (isset($_GET['page'])){
							$page = $_GET['page'];
							if ($page == 'main'){
								include('main.php');
							} elseif ($page == 'visi-misi'){
								include('visimisi.php');
							} elseif ($page == 'sejarah'){
								include('sejarah.php');
							} elseif ($page == 'struktur-organisasi'){
								include('struktur.php');
							} elseif ($page == 'profil-kepala-sekolah'){
								include('kepsek.php');
							} elseif ($page == 'informasi-kurikulum'){
								include('kurikulum.php');
							} elseif ($page == 'kelas'){
								include('kelas.php');
							} elseif ($page == 'guru'){
								include('guru.php');
							} elseif ($page == 'anggaran'){
								include('anggaran.php');
							} elseif ($page == 'profildinas'){
								include('profildinas.php');
							} elseif ($page == 'permenkes'){
								include('permenkes.php');
							} elseif ($page == 'labkesda'){
								include('labkesda.php');
							} elseif ($page == 'jadwal-pelajaran'){
								include('jadwal.php');
							} elseif ($page == 'non-akademik'){
								include('non-akademik.php');
							} elseif ($page == 'rumahsakit'){
								include('rumahsakit.php');
							} elseif ($page == 'neraca'){
								include('neraca.php');
							}elseif ($page == 'laparuskas'){
								include('laparuskas.php');
							}elseif ($page == 'laprealisasi'){
								include('laprealisasi.php');
							}elseif ($page == 'daftaraset'){
								include('daftaraset.php');
							}elseif ($page == 'pptk'){
								include('pptk.php');
							}elseif ($page =='galeri'){
								include('galeri.php');
							} elseif ($page == 'buku-tamu'){
								include('tamu.php');
							} elseif ($page == 'kontak'){
								include('kontak.php');
              } elseif ($page == 'yankesmob'){
                include('yankesmob.php');
							} elseif ($page == 'germas'){
                include('germas.php');
							} elseif ($page == 'layad'){
                include('layad.php');
							} elseif ($page == 'pengumuman'){
                include('pengumuman.php');
							} elseif ($page == 'artikelkesehatan'){
                include('artikelkesehatan.php');
							} elseif ($page == 'promosikesehatan'){
                include('promosikesehatan.php');
							} elseif ($page == 'layanan_informasi_publik'){
                include('layanan_informasi_publik.php');
							} elseif ($page == 'admin'){
								header("location: admin/index.php");
							} else {
								header('location: index.php');
							}
						} else {
							header('location: index.php');
						}
					?>
				</div>
				<div class="col_right float_r">
					<h2><center><?php echo $today; ?></center></h2>
					<br class="cleaner" />
					<div id="jsCalendar"></div>
					<h2 id="soConnector"><center>Web Statistik</center></h2>
					<br class="cleaner" />
					<div id="webstat"><?php include("include/counter.php"); ?></div>
          <br class="cleaner" />
          <div>
            <a class="twitter-timeline" data-width="250" data-height="250" data-theme="light" href="https://twitter.com/Bandung_Dinkes">Tweets by Bandung_Dinkes</a>
          </div>
          <br class="cleaner" />
          <h2><center>Website Terkait</center></h2>
          <div id="otherWeb" style="height:40px;">
            <a href="http://www.depkes.go.id/" target="_blank" class="link one">
              <div style="height:auto;">
                <img style="margin-left:2%;float:left;height:40px;width:40px;" src="images/kemenkes.png" alt="">
                <div style="margin-left:60px;">
                  Kementrian Kesehatan Republik Indonesia
                </div>
              </div>
            </a>
          </div>
          <br class="cleaner" />
          <div id="otherWeb" style="height:40px;">
            <a href="http://www.diskes.jabarprov.go.id/" target="_blank" class="link one">
              <div style="height:auto;">
                <img style="margin-left:2%;float:left;height:40px;width:40px;" src="images/provjab.png" alt="">
                <div style="margin-left:60px;">
                  Dinkes Provinsi Jawa Barat
                </div>
              </div>
            </a>
          </div>
          <br class="cleaner" />
          <div id="otherWeb" style="height:40px;">
            <a href="http://www.bandung.go.id/" target="_blank" class="link one">
              <div style="height:auto;">
                <img style="margin-left:2%;float:left;height:35px;width:40px;" src="images/bandung.png" alt="">
                <div style="margin-left:60px;">
                  Portal Kota Bandung
                </div>
              </div>
            </a>
          </div>
          <br class="cleaner" />
          <div id="otherWeb" style="height:40px;">
            <a href="https://twitter.com/Bdgemergency/media" target="_blank" class="link one">
              <div style="height:auto;">
                <img style="margin-left:2%;float:left;height:40px;width:40px;" src="images/spgdt.png" alt="">
                <div style="margin-left:60px;">
                  SPGDT 119
                </div>
              </div>
            </a>
          </div>
				</div>
				<br class="cleaner" />
			</div>
		</div>
		<div id="templatemo_cr_bar_wrapper">
			<div id="templatemo_cr_bar">
				<strong>Copyright © 2017</strong> <a href="?page=main">Dinas Kesehatan Kota Bandung</a><strong></strong></a><br>
        <strong>Jl. Supratman No 73 Citarum Bandung, Tlp 022-7202210, Cihapit, Bandung Wetan, Bandung City, West Java 40114</strong>
        <div class="footer-social-icons">
          <strong>Ikuti Kami di Social Media</strong>
          <ul class="social-icons">
            <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
            <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
            <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
            <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
			</div>
		</div>
	</body>
</html>
