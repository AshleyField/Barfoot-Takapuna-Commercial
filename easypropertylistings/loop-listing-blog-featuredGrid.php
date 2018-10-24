<?php
/**
 * Loop Property Template: Slim home open list
 *
 * @package     EPL
 * @subpackage  Templates/Content
 * @copyright   Copyright (c) 2015, Merv Barrett
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<!-- <div class="swiper-container">
	<div class="swiper-wrapper"> -->

			
<div class="home-featured-item">
	<div class="home-featured-item-image">
		<?php do_action('epl_property_archive_featured_image'); ?>
	</div>
	<div class="home-featured-item-content">
		<div class="home-title">
			<span><?php do_action('epl_property_heading'); ?></span>
		</div>
		<div class="home-sale-type">
			<span><?php do_action('epl_property_price'); ?></span>
		</div>
		<div class="home-address">
			<span><?php do_action('epl_property_address'); ?></span>
		</div>
		<div class="home-extras">
			<?php do_action('epl_property_tab_section'); ?>
		</div>

		<div class="home-button">
			<a href="<?php the_permalink() ?>">View Property</a>
		</div>
	</div>
</div>

		

