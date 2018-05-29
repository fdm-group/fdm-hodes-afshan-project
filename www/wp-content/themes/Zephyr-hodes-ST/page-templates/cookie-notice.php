<?php /* Template Name: Cookie Notice */ ?>

<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * The template for displaying pages
 *
 * Please do not overload this file directly. Instead have a look at framework/templates/page.php: you should find all
 * the needed hooks there.
 */
$us_layout = US_Layout::instance();
get_header();
//us_load_template( 'templates/titlebar' );
?>
<div class="l-main">
		<div class="l-main-h i-cf">

			<main class="l-content" itemprop="mainContentOfPage">
				<section class="l-section">
					<div class="l-section-h i-cf">
						<form method="post" action="">
						<?php
							the_content();
							?>
							<input type="submit" name="accept_cookies" value="<?php echo __('Accept');?>">
						</form>
					</div>
				</section>
			</main>
		</div>
</div>

<?php get_footer() ?>
