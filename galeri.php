<?php
if (isset($_GET['id'])){
  $query = mysql_fetch_array(mysql_query("select * from galeri where id = '$_GET[id]'"));
  echo "<h2><a href=\"?page=galeri\">Galeri</a> - $query[judul]</h2>";
  echo "<img src=\"galeri/$query[gambar]\" style=\"border: 1px dashed #999; width: 100%\" />";
  echo "<p style=\"margin: 20px 0 0 0;align=justify;color:black;\">$query[deskripsi]</p>";
  echo "<br>";
  echo "<a href=$query[url]>Galeri Selengkapnya Klik Disini</a>";
} else {
  echo "<h2>Galeri Dinas Kesehatan Kota Bandung</h2>";
  $query = mysql_query("select * from galeri order by id desc");
  while ($galeri = mysql_fetch_array($query)){
    echo "<div class=\"gallery\">";
    echo "<img class=\"myImg\" src=\"galeri/$galeri[gambar]\" style=\"margin: 0 20px 25px 0; float: left; height: auto\" />";
    echo "<div class=\"desc\">";
    echo "<a href=\"?page=galeri&id=$galeri[id]\" title=\"$galeri[judul]\">$galeri[judul]</a>";
    echo "</div>";
    echo "</div>";
  }
}
?>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<style>
.myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

.myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)}
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $('.myImg');
var modalImg = $("#img01");
var captionText = document.getElementById("caption");
$('.myImg').click(function(){
  modal.style.display = "block";
  var newSrc = this.src;
  modalImg.attr('src', newSrc);
  captionText.innerHTML = this.alt;
});

// pause slider
$(window).load(function(){
  $('#slider').nivoSlider({
   animSpeed: 500,
   pauseTime: 4000,
   effect : 'boxRain',
   directionNav : false,
   controlNav: false,
  });
  jQuery('#slider').data('nivoslider').stop();
  setTimeout("jQuery(#slider').data('nivoslider').start()",5000);
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
