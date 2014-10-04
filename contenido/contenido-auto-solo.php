<?
$id=quitar($_GET['n']);
$sql = mysql_query("SELECT * FROM unidades WHERE slug='$id'");
$numero= mysql_num_rows($sql);
if ($numero==0){
    echo "No se ha encontrado el post";
}else{


$row = mysql_fetch_array($sql);



?>

<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<? echo $row['imagen1'] ?>" alt="" />
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="<? echo $row['imagen1'] ?>" width="70" alt=""></a>
										  <a href=""><img src="<? echo $row['imagen2'] ?>" width="70" alt=""></a>
										  <a href=""><img src="<? echo $row['imagen3'] ?>" width="70" alt=""></a>
										</div>
																				
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2 class="first-mayus"><? echo $row['marca']." ".$row['modelo']." ".$row['anio']; ?></h2>
								
								
								<p><b>Marca:</b> <? echo $row['marca'] ?></p>
								<p><b>Modelo:</b> <? echo $row['modelo'] ?></p>
								<p><b>Puertas:</b> <? echo $row['puertas'] ?></p>
								<p><b>Transmisión:</b> <? echo $row['transmision'] ?></p>
								<p><b>Clima:</b> <? echo $row['clima'] ?></p>
								<p><b>Motor:</b> <? echo $row['motor'] ?></p>
								<p><b>Sonido:</b><? echo $row['sonido'] ?></p>
								<p><b>Cilindro:</b>  <? echo $row['cilindro'] ?></p>
								<p><b>Rin:</b> <? echo $row['rin'] ?></p>
								<p><b>No. Pasajeros:</b> <? echo $row['pasajeros'] ?></p>
								<p><b>Capacidad Tanque:</b> <? echo $row['tanque'] ?></p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active" ><a href="#details" data-toggle="tab">Tarifa</a></li>
								<li ><a href="#reviews" data-toggle="tab">Cotización</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
									
								
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<p>Por Hora</p>
												<h2>$<? echo $row['hora'] ?></h2>
												
												
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<p>Por Día</p>
												<h2>$<? echo $row['dia'] ?></h2>
												
												
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<p>7 Días</p>
												<h2>$<? echo $row['semana'] ?></h2>
												
												
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<p>30 o Más</p>
												<h2>$<? echo $row['mes'] ?></h2>
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							
							<div class="tab-pane fade  " id="reviews" >
								<div class="col-sm-12">
									
									<p>Aqui puedes enviarnos un correo para enviarte la cotización de la unidad.</p>
									<p><b>Pide tu cotización</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Nombre Completo"/>
											<input type="email" placeholder="Email "/>
										</span>
										<textarea name="" placeholder="Comentario"></textarea>
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->

<?
}
?>
					
					<? include "contenido/te-puede-interesar.php" ?>
					
				</div>
			</div>
		</div>