<?php  
/**
 *  Archivo Partial que muestra las redes 
 *  sociales en la barra superior header 
**/

/**
  * Todas las funciones se encuentran en functions/custom-functions.php
  */

?>

<ul class="menu-social-link pull-sm-left">
	
	<!-- Si existe facebook -->
	<?php if( exist_facebook()['exists'] ) : ?>
		<li class="facebook">
			<a href="<?= exist_facebook()['link'] ?>" target="_blank"><i class="fa fa-facebook"></i></a>
		</li>
	<?php endif; ?>	

	<!-- Si existe twitter -->
	<?php if( exist_twitter()['exists'] ) : ?>
		<li class="twitter">
			<a href="<?= exist_twitter()['link'] ?>" target="_blank"><i class="fa fa-twitter"></i></a>
		</li>
	<?php endif; ?>

	<!-- Si existe linkedin -->
	<?php if( exist_linkedin()['exists'] ) : ?>
		<li class="linkedin">
			<a href="<?= exist_linkedin()['link'] ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
		</li>
	<?php endif; ?>

</ul> <!-- /.menu-social-link -->
                                                                                                                                        </ul>