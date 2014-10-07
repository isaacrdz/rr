<footer id="footer"><!--Footer-->
<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2>Rivero Renta</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.jpg" alt="" />
										<img src="" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.jpg" alt="" />
										<img src="" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.jpg" alt="" />
										<img src="" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>Ave.Miguel Alemán 5400, Col. Torres de Linda Vista, CP 67138,Monterrey, Nuevo León, Tel 01 81 1160-8666</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Autos</h2>
							<ul class="nav nav-pills nav-stacked">
							<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'auto' ORDER BY modelo LIMIT 4  ");
		while ($row = mysql_fetch_array($sql)){
?>
								<li><a class="upper" href="auto-solo.php?n=<? echo $row['slug'] ?>"> <? echo $row['marca']." ".$row['modelo']." ".$row['anio']; ?></a></li>
<? 
	}
?>								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Camionetas <!-- Shop --></h2>
							<ul class="nav nav-pills nav-stacked">
	<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'camioneta' ORDER BY modelo LIMIT 4  ");
		while ($row = mysql_fetch_array($sql)){
?>
								<li><a class="upper" href="auto-solo.php?n=<? echo $row['slug'] ?>"> <? echo $row['marca']." ".$row['modelo']." ".$row['anio']; ?></a></li>
<? 
	}
?>								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Camiones</h2>
							<ul class="nav nav-pills nav-stacked">
<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'camion' ORDER BY modelo LIMIT 4  ");
		while ($row = mysql_fetch_array($sql)){
?>
								<li><a class="upper" href="auto-solo.php?n=<? echo $row['slug'] ?>"> <? echo $row['marca']." ".$row['modelo']." ".$row['anio']; ?></a></li>
<? 
	}
?>								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Estaquitas</h2>
							<ul class="nav nav-pills nav-stacked">
							<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'estacas' ORDER BY modelo LIMIT 4  ");
		while ($row = mysql_fetch_array($sql)){
?>
								<li><a class="upper" href="auto-solo.php?n=<? echo $row['slug'] ?>"> <? echo $row['marca']." ".$row['modelo']." ".$row['anio']; ?></a></li>
<? 
	}
?>								
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Rivero Renta</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Obtener la información actualizada de nuestro sitio</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2014 Rivero Renta. All rights reserved.</p>
					<p class="pull-right">Diseñado <a target="_blank" href="#">zackRdz</a></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer--> 
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>