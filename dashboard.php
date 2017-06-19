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
		<meta name="keywords" content="SMK, negeri, 1,lebong, selatan" />
		<meta name="description" content="SMK Negeri 1 Lebong Selatan" />
		<link rel="shortcut icon" href="images/icon.jpg">
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/nivo.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/table.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
		<link rel="stylesheet" type="text/css" href="css/jsdatepick.css" />
		<link rel="stylesheet" type="text/css" href="css/jsdatepick.css" />
		<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
		<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
		<script type="text/javascript" src="js/jsdatepick.js"></script>
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
				<ul>
					<li><a href="?page=main">Beranda</a></li>
					<li><a href="#">Profil</a>
						<ul>
							<span></span>
							<li><a href="?page=sejarah">Sejarah</a></li>
							<li><a href="?page=visi-misi">Visi &amp; Misi</a></li>
							<li><a href="?page=struktur-organisasi">Struktur Organisani</a></li>
							<li><a href="?page=profil-kepala-sekolah">Tugas Pokok dan Fungsi</a></li>
							<span></span>
						</ul>
					</li>
					<li><a href="#">UPT Dinas</a>
						<ul>
							<span></span>
							<li><a href="?page=informasi-kurikulum">UPT Dinas</a></li>
							<li><a href="?page=guru">Puskesmas</a></li>
							<li><a href="?page=siswa">Laboratorium</a></li>
							<li><a href="#">Tambahan</a>
								<ul style="width: 100%; margin-top: 90px; border-radius: 5px; border-bottom: none">
									<?php
										$qkelas = mysql_query("select * from kelas order by kelas_id desc");
										while ($dkelas = mysql_fetch_array($qkelas)){
											echo "<li><a style=\"margin: 0; padding: 0 0 0 5px; width: 100% !important; border-radius: 3px\" href=\"?page=jadwal-pelajaran&kelas=$dkelas[kelas_id]\">$dkelas[kelas_name]</a></li>";
										}
									?>
								</ul>
							</li>
							<span></span>
						</ul>
					</li>
					<li><a href="#">Non Akademik</a>
						<ul>
							<span></span>
							<li><a href="?page=non-akademik&hal=pengurus-osis">Pengurus OSIS</a></li>
							<li><a href="?page=non-akademik&hal=program-kerja-osis">Program Kerja OSIS</a></li>
              <li><a href="?page=non-akademik&hal=ekstrakurikuler">Ekstrakurikuler</a></li>
							<span></span>
						</ul>
					</li>
					<li><a href="?page=galeri">Galeri</a></li>
					<li><a href="?page=buku-tamu">Buku Tamu</a></li>
          <li><a href="?page=psc119">PSC 119</a></li>
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
          <a href="#"><img src="images/slider/slider1.jpg" alt="Slider 05" /></a>
          <a href="#"><img src="images/slider/slide2.jpg" alt="Slider 05" /></a>
          <a href="#"><img src="images/slider/slide3.jpg" alt="Slider 05" /></a>
          <a href="#"><img src="images/slider/slide4.jpg" alt="Slider 05" /></a>
				</div>

				<div id="htmlcaption" class="nivo-html-caption">
					<strong>This</strong> is an example of a HTML caption with <a href="#">a link</a>.
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
							} elseif ($page == 'siswa'){
								include('siswa.php');
							} elseif ($page == 'jadwal-pelajaran'){
								include('jadwal.php');
							} elseif ($page == 'non-akademik'){
								include('non-akademik.php');
							} elseif ($page =='galeri'){
								include('galeri.php');
							} elseif ($page == 'buku-tamu'){
								include('tamu.php');
							} elseif ($page == 'kontak'){
								include('kontak.php');
              } elseif ($page == 'psc119'){
                include('psc199.php');
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
          <div id="otherWeb">
            <a href="http://www.depkes.go.id/" target="_blank" class="link one">
              <div class="row">
                <div>
                  <img style="margin-left:90px;height:50px;width:50px;" src="images/kemenkes.png" alt="">
                  <div style="margin-left:0px;">
                    Kementrian Kesehatan Republik Indonesia
                  </div>
                </div>
              </div>
            </a>
          </div>
          <br class="cleaner" />
          <div id="otherWeb">
            <a href="http://www.diskes.jabarprov.go.id/" target="_blank" class="link one">
              <div class="row">
                <div>
                  <img style="margin-left:90px;height:50px;width:50px;" src="images/provjab.png" alt="">
                  <div style="margin-left:40px;">
                    Dinkes Provinsi Jawa Barat
                  </div>
                </div>
              </div>
            </a>
          </div>
          <br class="cleaner" />
          <div id="otherWeb">
            <a href="http://www.bandung.go.id/" target="_blank" class="link one">
              <div class="row">
                <div>
                  <img style="margin-left:90px;height:40px;width:50px;" src="images/bandung.png" alt="">
                  <div style="margin-left:90px;">
                    Bandung
                  </div>
                </div>
              </div>
            </a>
          </div>
          <br class="cleaner" />
          <div id="otherWeb">
            <a href="#" target="_blank" class="link one">
              <div class="row">
                <div>
                  <img style="margin-left:90px;height:60px;width:50px;" src="images/spgdt.png" alt="">
                  <div style="margin-left:80px;">
                    SPGDT 119
                  </div>
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
			</div>
		</div>
	</body>
</html>
