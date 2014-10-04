
<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Autos</h2>
<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'auto'   ");
		while ($row = mysql_fetch_array($sql)){
?>
					<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src=" <? echo $row['imagen1'] ?>" alt="" />
										
										<p><? echo $row['marca']." ".$row['modelo']." ".$row['anio'] ?></p>
										<a href="auto-solo.php?n=<? echo $row['slug'] ?>" class="btn btn-default add-to-cart"><i class=""></i>Cotizar</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<p><? echo $row['marca']." ".$row['modelo']." ".$row['anio'] ?></p>
											<a href="auto-solo.php?n=<? echo $row['slug'] ?>" class="btn btn-default add-to-cart"><i class=""></i>Cotizar</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
<?
	 }
?>	



						<ul class="pagination">
							<li class="active"><a href="auto-solo.php">1</a></li>
							<li><a href="auto-solo.php">2</a></li>
							<li><a href="auto-solo.php">3</a></li>
							<li><a href="auto-solo.php">&raquo;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

