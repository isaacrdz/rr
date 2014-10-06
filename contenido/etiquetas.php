<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">unidades en renta </h2>
<?
if(!isset($_GET['tag'])){
	echo "Sin resultados";
}else{ 

?>


<?		$tag = intval((quitar($_GET['tag'])));
		$sql = mysql_query("SELECT * FROM unidades WHERE etiquetas = '$tag '  ");
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

<?
	}

?>

