<?php 
include ('get-forum.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>FKBM-IK</title>
	<meta name="author" content="FKBMFIK"/>
	<meta name="description" content="">
	<meta name="keywords" content=" ">
	<meta name="developer" content="rsha">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" media="screen and (max-height: 640px)" href="css/phablet.css">
	<link rel="stylesheet" href="forum/core/skin/base.css" >
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<script>
    $(document).ready(function(){
	    $("#this").click(function(){
	        $("#expand").toggle();
	    });
	});
	</script>
</head>
<body>
	<div class="menu">
		<div class="logottl">
			<img src="img/logominifkbm.png" style="width: 5%; float: left; position: absolute; margin: -1%;">
			<a id="webtitle" href="index.php">FKBM-IK</a>
		</div>
		<nav id="linkbro" style="position:relative;" >
			<a href="index.php">Home</a>
			<a href="#about">About</a>
			<a href="#organisasi">Organisasi</a>
			<a href="forum" target="_blank">Forum</a>
		</nav>
	</div>
	<div id="expand" class="mobilenav">
		<nav>
			<li><a href="index.php">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="index.php">Contact</a></li>
			<li><a href="blog">Blog</a></li>
			<li><a href="forum">Forum</a></li>
		</nav>	
	</div>
	<div class="trigger">
		<nav>
			<img src="img/logominifkbm.png" style="width: 12%; float: left;">
			<a id="mobile-title" href="index.php">FKBM-IK</a>
			<i id="this" class="fa fa-bars fa-1x" aria-hidden="true" ></i>
		</nav>
	</div>

	<div class="headimg">
		<div class="ss">
			  <img src="img/IMG_2359.jpg" style="width:100%">
		</div>

		<div class="ss">
			  <img src="img/IMG_2162.jpg" style="width:100%">

		</div>

		<div class="ss">
			  <img src="img/IMG_2285.jpg" style="width:100%">

		</div>
		<a class="jumper" href="#about"><i class="fa fa-angle-double-down fa-2x faa-bounce animated" aria-hidden="true"></i></a>
		<div class="buttonss">
			<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)">❮</a>
			<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">❯</a>
		</div>
	</div>

	<div id="about" class="content">
		<div class="post1">
			<h1 id="title">Sejarah FKBM-IK</h1>
			<img src="img/logominifkbm.png">
			<p style="text-align: justify; word-spacing: 1px;">FKBM-IK (FORUM KELUARGA BESAR MAHASISWA ILMU KOMPUTER) diresmikan pada tanggal 22 maret 2012. Pada awalnya FKBM diadakan di Jakarta, melihat peluang di masing-masing UPN “Veteran” Jakarta, UPN “Veteran” Jogyakarta dan UPN “Veteran” Jawa Timur, khususnya Ilmu Komputer yang memiliki kelebihan dan kekurangan sehingga dengan diadakannya FKBM-IK ini dapat memajukan fakultasnya masing-masing serta menjalin relasi dan kerjasama antar UPN “Veteran” dalam hal pekerjaan, organisasi, dan sharing ilmu. FKBM-IK sudah dilaksanakan sebanyak 4 kali yaitu bertempat di Jakarta, Surabaya, Jogjakarta, dan terakhir diadakan kembali di Jakarta.</p>
		</div>
		<div class="post2">
			<h1 id="title">Tujuan FKBM-IK</h1>
			<div class="post-list">
				<li>Tujuan diselenggarakannya acara Forum Keluarga Besar Mahasiswa – Ilmu Komputer (FKBM-IK) UPN “Veteran” ini adalah :<br> </li>
				<li>1.	Diskusi tukar pendapat, sharing ilmu dan membentuk forum komunikasi antar 3 (Ttiga) UPN “Veteran”.</li>
				<li>2.	Untuk dapat membangkitkan kreatifitas dan inovasi mahasiswa UPN “Veteran” dalam perkembangan ICT.</li>
				<li>3.	Memperkenalkan UPN “Veteran” Jakarta, UPN “Veteran” Jogyakarta dan UPN “Veteran” Jawa Timur tentang organisasi (Himpunan, BEM, dan Senat), fasilitas kampus, sistem pengajaran, dan kurikulum akademik.</li>
				<li>4.	Mempererat tali silaturahmi antara 3 (tiga) UPN “Veteran” khususnya Ilmu Komputer.</li>
				<li>5.	Menghasilkan sebuah relasi yang kuat antar Alumni dan mahasiswa UPN “Veteran” se-Indonesia.</li>
			</div>
		</div>
	</div>
	<div id="organisasi" class="organisasi">
		<h1 id="title-org" style="text-align:center;">Organisasi Di FKBM-IK</h1><br>
		<div class="res-org">
			<div class="card">
				<img class="card-img-top" src="img/logo-bemfik.jpg" alt="logo bemfik upnvj">
				<div class="card-block">
					<h4 class="card-title">BEM-FIK UPNVJ</h4>
					<p class="card-text">Badan Eksekutif Mahasiswa <br> Fakultas Ilmu Komputer<br> UPN Veteran Jakarta.</p>
					<a href="p.php#sejarah" class="btn btn-primary">Read More</a>
				</div>
			</div>
			<div class="card">
				<img id="resize2" class="card-img-top" src="img/logo-himasifo.png" alt="logo himasifo upn veteran">
				<div class="card-block">
					<h4 class="card-title">HIMASIFO</h4>
					<p class="card-text">Himpunan Mahasiswa Sistem Informasi<br>UPN Veteran Jawa Timur.</p>
					<a href="#" class="btn btn-primary">Read More</a>
				</div>
			</div>
			<div id="spc2" class="card">
				<img id="resize3" class="card-img-top" src="img/logo-himatifa.jpg" alt="logo himasifa upn veteran">
				<div class="card-block">
					<h4 class="card-title">HIMASIFA</h4>
					<p class="card-text">Himpunan Mahasiswa Teknik Informatika<br>UPN Veteran Jawa Timur. </p>
					<a href="#" class="btn btn-primary">Read More</a>
				</div>
			</div>
			<div id="spc" class="card">
				<img id="resize" class="card-img-top" src="img/logo-hm-1.png" alt="logo bemfik upnvj">
				<div class="card-block">
					<h4 class="card-title">IF INFORMATIKA</h4>
					<p class="card-text">Himpunan Mahasiswa Teknik Informatika<br>UPN Veteran Yogyakarta. </p>
					<a href="#" class="btn btn-primary">Read More</a>
				</div>
			</div>
		</div>
	</div>
	<div class="forumpost">
		<h1 style="text-align: center">Forum updates</h1>
			<div id=''>
				<?php echo $contentfrm ?>
			</div>
		</div>
	</div>
	<div class="footer">
		<p>footer</p>
	</div>


















<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("ss");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("ss");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 20000); // Change image every n seconds
}
</script>

<script>
    $(window).scroll(function() {

	    if ($(this).scrollTop()>0)
	     {
	        $('.w3-btn-floating').fadeOut();
	        $('.jumper').fadeOut();
	     }
	    else
	     {
	      $('.w3-btn-floating').fadeIn();
	      $('.jumper').fadeIn();
	     }
 	});
</script>

</body> 
</html>