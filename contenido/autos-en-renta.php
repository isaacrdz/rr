<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Autos en Renta</h2>


<?
		$sql = mysql_query("SELECT * FROM unidades   ");
		while ($row = mysql_fetch_array($sql)){
?>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<? echo $row['imagen1'] ?>" alt="" />
											<p class="upper"><? echo $row['marca']." ".$row['modelo']." ".$row['anio'] ?></p>
											<a href="auto-solo.php?n=<? echo $row['slug'] ?>" class="btn btn-default add-to-cart"><i class=""></i>Cotizar</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<p class="upper"><? echo $row['marca']." ".$row['modelo']." ".$row['anio'] ?></p>
												<a href="auto-solo.php?n=<? echo $row['slug'] ?>" class="btn btn-default add-to-cart"><i class=""></i>Cotizar</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
<?
	}
?>