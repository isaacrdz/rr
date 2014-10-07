<?php require_once 'comunes/config.php' ?>

<header id="header"><!--header-->
		<!-- 
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						hola Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quibusdam quod eveniet sint earum commodi ipsam dolorem alias pariatur harum, optio amet, voluptatibus vero beatae quidem, ex fugiat id repellat?
					</div>
					<div class="col-sm-4">
						hola Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quibusdam quod eveniet sint earum commodi ipsam dolorem alias pariatur harum, optio amet, voluptatibus vero beatae quidem, ex fugiat id repellat?
					</div>
					<div class="col-sm-4">
						hola Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quibusdam quod eveniet sint earum commodi ipsam dolorem alias pariatur harum, optio amet, voluptatibus vero beatae quidem, ex fugiat id repellat?
					</div>
				</div>
			</div>

		</div>
		
		 -->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
						<img class="logo-position" src="images/elprimo.png" width="50" alt=""> 
							<a href="index.php" class="text-big">Rivero Renta</a>
						</div>
						
					</div>


					
				</div>
			</div>

					

		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Inicio</a></li>
									<li class="dropdown"><a href="#">Autos<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'auto' ORDER BY modelo ");
		while ($row = mysql_fetch_array($sql)){
?>
		
                                        <li><a class="upper " href="auto-solo.php?n=<? echo $row['slug'] ?>"><? echo $row['marca']." ".$row['modelo']." ".$row['anio']; ?></a></li>	
<?
	 }
?>								
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Camionetas<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'camioneta' ORDER BY modelo ");
		while ($row = mysql_fetch_array($sql)){
?>
		
                                        <li><a class="upper " href="auto-solo.php?n=<? echo $row['slug'] ?>"><? echo $row['marca']." ".$row['modelo']." ".$row['anio']; ?></a></li>	
<?
	 }
?>								
                                    </ul>
                                </li>  
								 
								<li class="dropdown"><a href="#">Camiones<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
<?
		$sql = mysql_query("SELECT * FROM unidades WHERE tipo = 'camion' ORDER BY modelo ");
		while ($row = mysql_fetch_array($sql)){
?>
		
                                        <li><a class="upper " href="auto-solo.php?n=<? echo $row['slug'] ?>"><? echo $row['marca']." ".$row['modelo']." ".$row['anio']; ?></a></li>	
<?
	 }
?>								
                                    </ul>
                                </li>  
								<li><a href="camiones.php">Estacas</a></li> 
								<li><a href="camiones.php">Servicios</a></li> 
								<li><a href="camiones.php">Quienes Somos</a></li> 
								<!-- 
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
 -->
								<li><a href="contacto.php">Contacto</a></li>
							</ul>
						</div>
					</div>
					<!-- 
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
					 -->
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->