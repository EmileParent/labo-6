<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-epc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme-epc' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="https://img.icons8.com/plumpy/50/000000/beefburger.png"width="32" height="32"/></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$theme_fm_description = get_bloginfo( 'description', 'display' );
			if ( $theme_fm_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $theme_fm_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<?php 
			if ( is_front_page()):
		?>
		<section class="carrousel">
			<div><a href="#"><img class="imgCarrousel" src="https://www.ccbcmd.edu/~/media/CCBC/Programs%20and%20Courses/Professional%20Development/Computers%20and%20Information%20technology/Images/0822.ashx?la=en" alt="ImgVideo"></a></div>
			<div><a href="#"><img class="imgCarrousel" src="https://blogs.missouristate.edu/computerscience/files/2018/03/new-computer-lab.jpg" alt="imgJeu"></a></div>
			<div><a href="#"><img class="imgCarrousel" src="https://www.concordia.ca/content/concordia/en/academics/graduate/computer-science-mcompsc.img.png/1601320399077.jpg" alt="img3D"></a></div>
		</section>	

		<button id="un">1</button>
		<button id="deux">2</button>
		<button id="trois">3</button>
	<?php endif ?>
	</header><!-- #masthead -->
</div>