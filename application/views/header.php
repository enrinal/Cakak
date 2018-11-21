<?php ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>">
      <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
     #logo {
        margin-left: 20px;
        float :left;
        position: fixed;
      }

      /* Optional: Makes the sample page fill the window. */
      
    </style>
    <link rel="icon" href="<?php echo base_url().'theme/images/s.png'?>" type="image/gif">
	<style type="text/css">
		#header {
		height: 100%;
        width: 20%;
        float :left;
        margin: 30px;
        position: fixed;
        overflow: auto;
		}
	</style>
</head>
	<body>
		<div id="logo"><a href="<?php echo base_url().''?>"> <img id="logo" src="<?php echo base_url().'theme/images/LOGO.png'?>" width="100" height="101" alt=""/> </a></div>
		<div id="header">		
				
		  		<div id="fh5co-page">
					<header id="fh5co-header" role="banner">
						<div class="container">
							<div class="header-inner">
								<nav role="navigation">
									<h2>Rute Angkot :</h2>
								    <h4>
								        <a href="http://localhost/cakak/Map/angkot/1"><img src="<?php echo base_url().'theme/images/rajabasa.png'?>" width="50" height="23" alt="">  </a> &nbsp; <a href="http://localhost/cakak/Map/angkot/1"> Tanjungkarang - Rajabasa </a><br> <br>
								        <a href="http://localhost/cakak/Map/angkot/2"><img src="<?php echo base_url().'theme/images/wayhalim.png'?>" width="50" height="23" alt="">  </a> &nbsp; <a href="http://localhost/cakak/Map/angkot/2">Tanjungkarang - Way Halim </a><br> <br>
								        <a href="http://localhost/cakak/Map/angkot/3"><img src="<?php echo base_url().'theme/images/kemiling.png'?>" width="50" height="23" alt=""> </a> &nbsp; <a href="http://localhost/cakak/Map/angkot/3">Tanjungkarang - Kemiling </a><br> <br>
								        <a href="http://localhost/cakak/Map/angkot/4"><img src="<?php echo base_url().'theme/images/samratulangi.png'?>" width="50" height="23" alt=""> </a> &nbsp; <a href="http://localhost/cakak/Map/angkot/4">Tanjungkarang - Sam Ratulangi </a><br> <br>
								        <a href="http://localhost/cakak/Map/angkot/5"><img src="<?php echo base_url().'theme/images/sukarame.png'?>" width="50" height="23" alt="">  </a> &nbsp; <a href="http://localhost/cakak/Map/angkot/5">Tanjungkarang - Sukarame </a><br> <br>
								        <a href="http://localhost/cakak/Map/angkot/6"><img src="<?php echo base_url().'theme/images/permatabiru.png'?>" width="50" height="23" alt=""> </a> &nbsp; <a href="http://localhost/cakak/Map/angkot/6">Tanjungkarang - Permata</a> <br> <br>
								        <a href="http://localhost/cakak/Map/angkot/7"><img src="<?php echo base_url().'theme/images/irsutami.png'?>" width="50" height="23" alt=""> </a>&nbsp; <a href="http://localhost/cakak/Map/angkot/7">Tanjungkarang - Ir Sutami </a><br> <br>
								        <a href="http://localhost/cakak/Map/angkot/8"><img src="<?php echo base_url().'theme/images/garuntang.png'?>" width="50" height="23" alt="">  </a>&nbsp;<a href="http://localhost/cakak/Map/angkot/8"> Tanjungkarang - Garuntang </a><br><br>
								        <a href="http://localhost/cakak/Map/angkot/9"><img src="<?php echo base_url().'theme/images/Untitled-1.png'?>" width="50" height="23" alt="">  </a> &nbsp;<a href="http://localhost/cakak/Map/angkot/9"> Tanjungkarang - Teluk Betung </a><br> <br>
								    </h4>
								</nav>
							</div>
						</div>
					</header>
				</div>
				<!-- <div>
				    <h2>Rute Angkot :</h2>
				    <h4>
				        <a href="http://localhost/cakak/Map/angkot/1"><img src="<?php echo base_url().'theme/images/rajabasa.png'?>" width="50" height="23" alt="">  </a> &nbsp; <a href="http://localhost/cakak/Map/angkot/1"> Tanjungkarang - Rajabasa </a><br> <br>
				        <a href="http://localhost/cakak/Map/angkot/2"><img src="<?php echo base_url().'theme/images/wayhalim.png'?>" width="50" height="23" alt="">  </a> &nbsp; <a href="http://localhost/cakak/Map/angkot/2">Tanjungkarang - Way Halim </a><br> <br>
				        <a href="http://localhost/cakak/Map/angkot/3"><img src="<?php echo base_url().'theme/images/kemiling.png'?>" width="50" height="23" alt=""> </a> &nbsp; <a href="http://localhost/cakak/Map/angkot/3">Tanjungkarang - Kemiling </a><br> <br>
				        <a href="http://localhost/cakak/Map/angkot/4"><img src="<?php echo base_url().'theme/images/samratulangi.png'?>" width="50" height="23" alt=""> </a> &nbsp; <a href="http://localhost/cakak/Map/angkot/4">Tanjungkarang - Sam Ratulangi </a><br> <br>
				        <a href="http://localhost/cakak/Map/angkot/5"><img src="<?php echo base_url().'theme/images/sukarame.png'?>" width="50" height="23" alt="">  </a> &nbsp; <a href="http://localhost/cakak/Map/angkot/5">Tanjungkarang - Sukarame </a><br> <br>
				        <a href="http://localhost/cakak/Map/angkot/6"><img src="<?php echo base_url().'theme/images/permatabiru.png'?>" width="50" height="23" alt=""> </a> &nbsp; <a href="http://localhost/cakak/Map/angkot/6">Tanjungkarang - Permata</a> <br> <br>
				        <a href="http://localhost/cakak/Map/angkot/7"><img src="<?php echo base_url().'theme/images/irsutami.png'?>" width="50" height="23" alt=""> </a>&nbsp; <a href="http://localhost/cakak/Map/angkot/7">Tanjungkarang - Ir Sutami </a><br> <br>
				        <a href="http://localhost/cakak/Map/angkot/8"><img src="<?php echo base_url().'theme/images/garuntang.png'?>" width="50" height="23" alt="">  </a>&nbsp;<a href="http://localhost/cakak/Map/angkot/8"> Tanjungkarang - Garuntang </a><br><br>
				        <a href="http://localhost/cakak/Map/angkot/9"><img src="<?php echo base_url().'theme/images/Untitled-1.png'?>" width="50" height="23" alt="">  </a> &nbsp;<a href="http://localhost/cakak/Map/angkot/9"> Tanjungkarang - Teluk Betung </a><br> <br>
				    </h4>
				 </div> -->
		</div>
	</body>
</html>