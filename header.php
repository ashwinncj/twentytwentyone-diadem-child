<?php
$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="ddp-header">
	<div id="ddp-site-branding" class="pure-g">
		<div id="ddp-logo" class="pure-u-1-2">
			<?php if ( has_custom_logo() ) : ?>
				<div class="site-logo"><?php the_custom_logo(); ?></div>
			<?php endif; ?>
			<?php if ( $show_title ) : ?>
				<h3><?php echo $blog_info; ?></h3>
				<p><?php echo $description; ?></p>
			<?php endif; ?>
		</div>
		<div id="ddp-header-subscribe" class="pure-u-1-2">
		</div>
	</div>
	<div id="ddp-header-sticky-nav" class="pure-g">

	</div>
</div>
