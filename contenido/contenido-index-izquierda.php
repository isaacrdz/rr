<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">

					<img class="img-responsive-1 border-radius" src="images/promociones/banner-chofer.jpg" alt="" /> <hr>

						<h2>Autos en Rentas</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->




							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Autos
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'auto' ORDER BY modelo ");
		while ($row = mysql_fetch_array($sql)){
?>
											<li><a href="auto-solo.php?n=<? echo $row['slug'] ?>"><? echo $row['marca']." ".$row['modelo']." ".$row['anio'] ?></a>
											</li>
											
<? } ?>
										</ul>
									</div>
								</div>
							</div>





							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Camionetas
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'camioneta' ORDER BY modelo ");
		while ($row = mysql_fetch_array($sql)){
?>
											<li><a href="auto-solo.php?n=<? echo $row['slug'] ?>"><? echo $row['marca']." ".$row['modelo']." ".$row['anio'] ?></a></li>
											
<? } ?>
									
										</ul>
									</div>
								</div>
							</div>

	<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Camiones
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											
<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'camion' ORDER BY modelo ");
		while ($row = mysql_fetch_array($sql)){
?>
											<li><a href="auto-solo.php?n=<? echo $row['slug'] ?>"><? echo $row['marca']." ".$row['modelo']." ".$row['anio'] ?></a></li>
											
<? } ?>
										</ul>
									</div>
								</div>
							</div>








							
						</div><!--/category-products-->
					
					
						
						<div class=" panel-heading"><!--shipping-->
							<p class="caps">unidades en renta</p>

						<?
							$sql_mostrar_etiquetas = mysql_query(" SELECT * FROM etiquetas");
							while($row = mysql_fetch_array($sql_mostrar_etiquetas)){


							
						?>

								<p class="caps"><a href="autos.php?tag=<? echo  $row['id']; ?>"><? echo $row['nombre']; ?></a></p>
						<?
							 }
						?>
						<hr>
							
						</div><!--/shipping-->
					
					</div>
				</div>