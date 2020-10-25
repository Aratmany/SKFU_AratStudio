<?php


$header_old = Kirki::get_option('workscout','pp_old_header');
$header_type = (Kirki::get_option('workscout','pp_old_header') == true) ? 'old' : '' ;
$header_type = apply_filters('workscout_header_type',$header_type);
get_header($header_type); ?>

	<!-- Titlebar
	================================================== -->
	<div id="titlebar" class="single submit-page">
		<div class="container">

			<div class="sixteen columns">
				<h1><?php esc_html_e( 'Страница не найдена', 'workscout' ); ?></h1>
			</div>

		</div>
	</div>

	<div class="container full-width">
		<article id="post-404">
			<section id="not-found" class="center margin-top-50 margin-bottom-25">
				<h2><?php esc_html_e('404','workscout') ?> <i class="icon-line-awesome-question-circle"></i></h2>

			</section>

			
		</article>
	</div>
<?php get_footer(); ?>