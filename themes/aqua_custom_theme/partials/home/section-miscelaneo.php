<?php  
/**
  * ARCHIVO PARTIAL QUE MUESTRA LAS ENTRADAS DEL BLOG DE LA WEB
***/

?>

<section class="pageInicioMiscelaneo">

	<!-- Wrapper de Contenido / Contenedor Layout -->
	<div class="pageWrapperLayout containerRelative">

		<div class="row">
			
			<div class="col-xs-12 col-sm-8">

				<!-- Título -->
				<h2 class="title"> <span>Blog</span> </h2>

				<?php  
					//Obtener entradas recientes
					$args = array(
						'order'          => 'DESC',
						'orderby'        => 'date',
						'post_status'    => 'publish',
						'post_type'      => 'post',
						'posts_per_page' => 2,
					);

					$entradas = get_posts( $args );

					foreach( $entradas as $entrada  ) :

					if( has_post_thumbnail( $entrada->ID ) ):
				?>

				<!-- Article Preview -->
				<article class="itemPreviewPost">

					<!-- Imagen -->
					<figure class="featured-image">
						<?= get_the_post_thumbnail( $entrada->ID , 'full' , array('class'=>'img-fluid m-x-auto d-block') ); ?>
					</figure> <!-- /. -->

					<!-- Título -->
					<h2 class=""> <?= $entrada->post_title; ?> </h2>

					<!-- Extracto -->
					<?php  
						$content = $entrada->post_content;
						$excerpt = wp_trim_words( $content , 46 , '' );
						echo apply_filters( 'the_content ' , $excerpt  );
					?>

					<a href="<?= get_permalink( $entrada->ID ); ?>" class="read-more"> Leer Más </a>
					
				</article> <!-- /.itemPreviewPost -->

				<?php endif; endforeach; ?>

			</div> <!-- /.col-xs-12 col-sm-8 -->

			
			<div class="col-xs-12 col-sm-4">

				<!-- Título -->
				<h2 class="title"> <span>Facebook</span> </h2>
				
				<!-- Facebook  -->
				<?php include( locate_template('partials/fan-page-facebook.php') ) ?>
				
			</div> <!-- /.col-xs-12 col-sm-4 -->

		</div> <!-- /.row -->
	
	</div> <!-- /pageWrapperLayout containerRelative -->
	
</section> <!-- /.pageInicioBlog -->