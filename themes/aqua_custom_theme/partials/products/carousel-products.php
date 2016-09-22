<?php  
/**
  * ARCHIVO PARTIAL QUE MUESTRA 
  * CAROUSEL DE ULTIMOS PRODUCTOS
***/
?>

<section class="sectionPreviewProducts">
	
	<!-- Wrapper de Contenido / Contenedor Layout -->
	<div class="pageWrapperLayout containerRelative">

		<!-- Título -->
		<h2 class="titleCommon__section text-xs-center"> <span> Últimos Productos </span> </h2>

		<?php  
			/**
			  * Extraer los ultimos productos seteados
			  */

			$limit_products = 6;

			$args = array(
				'order'          => 'DESC',
				'orderby'        => 'date',
				'post_status'    => 'publish',
				'post_type'      => 'theme-products',
				'posts_per_page' => $limit_products,
			);

			$last_products = get_posts( $args );

		?>

		<!-- Carousel Galeria de Clientes -->
		<div id="carousel-last-products" class="js-carousel-gallery" data-items="4" data-items-responsive="1" data-margins="10" data-dots="false" data-autoplay="true" data-timeautoplay="5000">
		
			<?php foreach( $last_products as $last_product ) : ?>
				
				<!-- Articulo PREVIEW  -->
				<article class="itemProductPreview">
					
					<!-- Imágen -->
					<figure class="featured-image">
						<?php if( has_post_thumbnail($last_product->ID) ) : ?>
							
							<?= get_the_post_thumbnail( $last_product->ID , 'full' , array('class'=>'img-fluid d-block m-x-auto') ); ?>

						<?php else: ?>
							
							<img src="https://unsplash.it/215/255" alt="<?= $last_product->post_name; ?>" class="img-fluid d-block m-x-auto" />

						<?php endif; ?>
						
						<!-- Link to producto -->
						<div class="content-detail">
							
							<a href="<?= get_permalink( $last_product->ID ); ?>" class="btn-to-link"> <?= __( 'Detalle' , LANG ); ?></a>

						</div> <!-- /.content-detail -->

					</figure> <!-- /.featured-image -->

					<!-- Content Text -->
					<div class="content-text text-xs-center">

						<h2 class="text-uppercase"> <?= $last_product->post_title; ?> </h2>

						<?php 
							$current_price = get_post_meta( $last_product->ID , 'product_price' , true  ); 

							$class_price = !empty($current_price['offer']) ? 'strike-text' : '';
						?>
						
						<span class="price-normal <?= $class_price; ?>"> 
							<?= !empty($current_price['normal']) ? $current_price['normal'] : '' ?>
						</span> <!--  -->

						<span class="price-offer"> <?= !empty($current_price['offer']) ? $current_price['offer'] : ''; ?></span> <!--  -->

						<!-- Limpiar floats --> <div class="clearfix"></div>

					</div> <!-- /.content-text -->

				</article> <!-- /.itemProductPreview -->

			<?php endforeach; ?>

		</div> <!-- /#carousel-last-products -->


		<!-- Boton ver más productos -->
		<a href="" class="pull-xs-right btn-show-more text-uppercase"> ver más </a>

		<div class="clearfix"></div>

	</div> <!-- /.pageWrapperLayout containerRelative -->

</section> <!-- /.sectionPreviewProducts -->
