<!-- /template/header-banner.php -->
<?php $show_video = ( $background_video && ! Hodes\FDM\get_mobile_detect()->isMobile() ); ?>
<section <?= $show_video ? "" : 'style="background-image:url(' . $background_image['url'] . ')"' ?> class="fdm-header-banner"<?php if( $call_to_actions) { ?> data-num-ctas="<?= count( $call_to_actions ); ?>"<?php } ?>>

	<?php if( $show_video ) { ?>
		<div class="background-video">
			<video data-mute="muted" loop="loop" preload="auto" autoplay="autoplay">
				<source type="video/mp4" src="<?= $background_video['url']; ?>">
			</video>
		</div>
	<?php } ?>

	<div class="overlay">

		<?php if( $youtube_link ) { ?>
			<a class="youtube-link popup-youtube" href="<?= $youtube_link; ?>">
				<svg viewBox="0 0 100 100">
					<path d="M85.4,14.6c-19.5-19.5-51.2-19.5-70.7,0c-19.5,19.5-19.5,51.2,0,70.7s51.2,19.5,70.7,0C104.9,65.8,104.9,34.2,85.4,14.6z
	 				M45.4,71.6c-1.2,1.2-3.5,1-4.7-0.2c-1.2-1.2-1.5-3.5-0.2-4.7l18.8-18.8L40.8,29.4c-1.2-1.2-1.4-3.1-0.1-4.4
					c1.2-1.2,3.1-1.1,4.4,0.1l20.9,20.9c0.6,0.6,1.1,1.5,1.1,2.3c0,0.8-0.1,1.7-0.7,2.3L45.4,71.6z"/>
				</svg>
			</a>
		<?php } ?>

		<?php if ( $heading ) { ?>
			<h1 class="banner-heading"><?= $heading; ?></h1>
		<?php } ?>

	</div>

	<?php if ( $call_to_actions ) {

		$n = count( $call_to_actions );
		if ( $n > 3 ) {
			// more than 3, split into 2 lines
			$cta_rows = [
				array_slice( $call_to_actions, 0, ceil( $n / 2 ) ),
				array_slice( $call_to_actions, ceil( $n / 2 ) ),
			];
		} else {
			// 3 or less, leave on a single row
			$cta_rows = [
				$call_to_actions,
			];
		}

		?>
		<div class="call-to-actions">
			<?php
			foreach( $cta_rows as $cta_row ) {
				?>
				<div>
					<?php foreach( $cta_row as $cta ) {
						Hodes\FDM\fdm_output_button( $cta['link'], $cta['label'] );
					} ?>
				</div>
			<?php } ?>
		</div>

	<?php } ?>

	<?php if ( $show_we_work_with_carousel ) { ?>

		<div class="client-carousel-heading"><?= $carousel_heading; ?></div>

	<?php } ?>

</section>

<?php if ( $show_we_work_with_carousel ) { ?>

	<div class="client-carousel-container">
		<div class="viewport">
			<div class="track">
				<?php
					$clients = array_map( function( $c ) {
						return '<span class="client-name carousel-part">' . $c['client'] . '</span>';
					}, $clients_list );

					echo implode( '<span class="divider"></span>', $clients );
				?>
			</div>
		</div>
		<button type="button" aria-label="Previous" title="Previous" class="carousel-arrow prev"><i class="material-icons">chevron_left</i></button>
		<button type="button" role="button" aria-label="Next" title="Next" class="carousel-arrow next"><i class="material-icons">chevron_right</i></button>
	</div>

<?php } ?>
