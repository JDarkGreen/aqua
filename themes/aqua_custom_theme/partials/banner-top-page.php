
<!-- Si existe el post u objecto -->
<?php if( isset($banner) || isset($banner_object) ) : ?>
	
	<!-- BANNER DE LA PAGINA -->
	<section class="pageCommon__banner">

		<div class="pageWrapperLayout">

			<!-- Título -->
			<?php $title = isset($banner_title) && !empty($banner_title) ? $banner_title : $banner->post_title; ?>
			<h2 class="title-page text-uppercase"> <?= __( $title , 'LANG' ); ?> </h2>
	
		</div> <!-- /.pageWrapperLayout -->

	</section> <!-- /.pageCommon__banner -->

<?php endif; ?>