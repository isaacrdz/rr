<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Tambien te puede interesar</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">

<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'auto'  LIMIT 3  ");
		while ($row = mysql_fetch_array($sql)){
?>

			
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
										<img src="<? echo $row['imagen1'] ?>" alt="" />
													
													
													<p><? echo $row['marca']." ".$row['modelo']." ".$row['anio'] ?></p>
													<a href="auto-solo.php?n=<? echo $row['slug'] ?>" class="btn btn-default add-to-cart"><i class=""></i>Cotizar</a>
												</div>
												
											</div>
										</div>
									</div>


<?
 }
?>
								


								</div>


								<div class="item">	

<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'camioneta'  LIMIT 3  ");
		while ($row = mysql_fetch_array($sql)){
?>


									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
										<img src="<? echo $row['imagen1'] ?>" alt="" />
													
													
													<p><? echo $row['marca']." ".$row['modelo']." ".$row['anio'] ?></p>
													<a href="auto-solo.php?n=<? echo $row['slug'] ?>" class="btn btn-default add-to-cart"><i class=""></i>Cotizar</a>
												</div>
												
											</div>
										</div>
									</div>
<?
 }
?>
								

									
									
								</div>
								<div class="item">	

<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'camion'  LIMIT 3  ");
		while ($row = mysql_fetch_array($sql)){
?>


									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
										<img src="<? echo $row['imagen1'] ?>" alt="" />
													
													
													<p><? echo $row['marca']." ".$row['modelo']." ".$row['anio'] ?></p>
													<a href="auto-solo.php?n=<? echo $row['slug'] ?>" class="btn btn-default add-to-cart"><i class=""></i>Cotizar</a>
												</div>
												
											</div>
										</div>
									</div>
<?
 }
?>
								

									
									
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->