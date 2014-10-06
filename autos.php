<!DOCTYPE html>
<html lang="en">
<? include "comunes/head.php" ?>

<body>
<? include "comunes/header.php" ?>
	
	<!-- banner -->
	<section id="advertisement">
		<div class="container">
		<!-- 
			<img src="images/shop/advertisement.jpg" alt="" />
		 -->
		</div>
	</section>
	<!-- banner end -->
	
	<section>



		<? include "contenido/contenido-index-izquierda.php" ?>


		<? 

			if(isset($_GET['n']))
				{
					include 'contenido/contenido-producto-derecha.php';
				}


		elseif (isset($_GET['tag']))
				{
					include 'contenido/etiquetas.php';

				}



			else
				{
					include 'contenido/contenido-producto-derecha.php';
				}

		?>
				
			
	</section>
	
<? include "comunes/footer.php" ?>
</body>
</html>