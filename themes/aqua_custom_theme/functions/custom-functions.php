<?php  

/***
*---------------------------------------
* FUNCIONES PERSONALIZADAS 
*---------------------------------------
***/

$options = get_option("theme_settings");

/**
* Definir si el mapa existe o no
*
**/

function exist_map()
{
	global $options;

	if( isset($options['theme_lat_coord']) && !empty($options['theme_lat_coord']) && isset($options['theme_long_coord']) && !empty($options['theme_long_coord']) ) :

	return true;
	
	else: return false; endif;
}

/**
* ---------------------------------------------------------------
* -- REDES SOCIALES
* ---------------------------------------------------------------
**/

/**
* Definir si existe facebook
**/

function exist_facebook()
{
	global $options;

	if( isset($options['theme_social_fb_text']) && !empty($options['theme_social_fb_text']) ) :

	$array = array(
		'exists' => true,
		'link'   => $options['theme_social_fb_text'],
	);

	return $array;
	
	else: return false; endif;
}

/**
* Definir si existe twitter
**/

function exist_twitter()
{
	global $options;

	if( isset($options['theme_social_twitter_text']) && !empty($options['theme_social_twitter_text']) ) :

	$array = array(
		'exists' => true,
		'link'   => $options['theme_social_twitter_text'],
	);

	return $array;
	
	else: return false; endif;
}

/**
* Definir si existe youtube
**/

function exist_youtube()
{
	global $options;

	if( isset($options['theme_social_youtube_text']) && !empty($options['theme_social_youtube_text']) ) :

	$array = array(
		'exists' => true,
		'link'   => $options['theme_social_youtube_text'],
	);

	return $array;
	
	else: return false; endif;
}


/**
* Definir si existe linkedin
**/

function exist_linkedin()
{
	global $options;

	if( isset($options['theme_social_linkedin_text']) && !empty($options['theme_social_linkedin_text']) ) :

	$array = array(
		'exists' => true,
		'link'   => $options['theme_social_linkedin_text'],
	);

	return $array;
	
	else: return false; endif;
}




/**
* Devolver Sidebar fijo de redes sociales
**/

if( !function_exists('display_social_links') ) :

function display_social_links()
{
	//Activa el almacenamiento en búfer de la salida
	ob_start(); ?>

	<!-- Menu de Redes Sociales Fijos -->
	<ul id="menu-social-links-fixed" canvas="">
		
		<?php if( exist_facebook()['exists'] ) : ?>
		<li> 
			<a href="<?= exist_facebook()['link']; ?>" target="_blank" class="fb">
				<i class="fa fa-facebook" aria-hidden="true"></i>
			</a> <!-- /link -->
		</li>
		<?php endif; ?>	
		
			
		<?php if( exist_twitter()['exists'] ) : ?>
		<li> 
			<a href="<?= exist_twitter()['link']; ?>" target="_blank" class="tw">
				<i class="fa fa-twitter" aria-hidden="true"></i>
			</a> <!-- /link -->
		</li>
		<?php endif; ?>	


		<?php if( exist_youtube()['exists'] ) : ?>
		<li> 
			<a href="<?= exist_youtube()['link']; ?>" target="_blank" class="yt">
				<i class="fa fa-youtube-play" aria-hidden="true"></i>
			</a> <!-- /link -->
		</li>
		<?php endif; ?>

	</ul> <!-- /.menu-social-links-fixed -->	

<?php

	$render_social = ob_get_contents(); ob_clean();

	echo $render_social;
}

endif;



?>