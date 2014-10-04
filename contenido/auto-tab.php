	<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								
								<li class="active"><a href="#autos" data-toggle="tab">Autos</a></li>
								<li><a href="#camioneta" data-toggle="tab">Camionetas</a></li>
								<li><a href="#camion" data-toggle="tab">Camiones</a></li>
							
							</ul>
						</div>
						<div class="tab-content">
<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo= 'auto'");
		while ($row = mysql_fetch_array($sql)){
?>
							<div class="tab-pane fade active in" id="autos" >
								<div class="col-sm-3">
							
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">

												<img src="<? echo $row['imagen1']; ?>" alt="" />					
												<p><? echo $row['marca']; ?></p>
												<a href="auto-solo.php?n=<? echo $row['slug'] ?>" class="btn btn-default add-to-cart"><i class=""></i>Cotizar</a>

											</div>
										</div>
									</div>
								</div>						

							</div>
<?
	 }
?>
											
							<!-- empienza camiones -->
<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo= 'camioneta'");
		while ($row = mysql_fetch_array($sql)){
?>
							<div class="tab-pane fade" id="camioneta" >					

								<div class="col-sm-3">
							
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">

												<img src="<? echo $row['imagen1']; ?>" alt="" />					
												<p><? echo $row['marca']; ?></p>
												<a href="auto-solo.php?n=<? echo $row['slug'] ?>" class="btn btn-default add-to-cart"><i class=""></i>Cotizar</a>

											</div>
										</div>
									</div>
								</div>						

							</div>

<?
	 }
?>
									

						

							<!-- Comienza camionetas -->
<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo= 'camion'");
		while ($row = mysql_fetch_array($sql)){
?>
							
							<div class="tab-pane fade" id="camion" >

								

								<div class="col-sm-3">
							
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">

												<img src="<? echo $row['imagen1']; ?>" alt="" />					
												<p><? echo $row['marca']; ?></p>
												<a href="auto-solo.php?n=<? echo $row['slug'] ?>" class="btn btn-default add-to-cart"><i class=""></i>Cotizar</a>

											</div>
										</div>
									</div>
								</div>
<?
	 }
?>
	

								

								

							</div>

							<!-- Comienza otros -->
							
							<div class="tab-pane fade" id="camiones" >
								
								
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
										<img src="images/home/3.png" alt="" />
												
												<h2>$56</h2>
												<p>Chevrolet Matiz 2015</p>
												<a href="#" class="btn btn-default add-to-cart"><i class=""></i>Cotizar</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
										<img src="images/home/3.png" alt="" />
												
												<h2>$56</h2>
												<p>Chevrolet Matiz 2015</p>
												<a href="auto-solo.php?n=<? echo $row['slug'] ?>" class="btn btn-default add-to-cart"><i class=""></i>Cotizar</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="poloshirt" >

								

							
								
								
							</div>
						</div>
	</div><!--/category-tab-->