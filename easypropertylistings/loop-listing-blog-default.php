<?php
/**
 * Loop Property Template: Default
 *
 * @package     EPL
 * @subpackage  Templates/Content
 * @copyright   Copyright (c) 2015, Merv Barrett
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
global $property;

?>

<div class="listing-loop-item">
	<div class="listing-loop-item-image">
		<?php do_action('epl_property_archive_featured_image'); ?>
	</div>
	<div class="listing-loop-item-content">
		<div class="loop-title">
			<span><?php do_action('epl_property_heading'); ?></span>
		</div>
		<div class="loop-sale-type">
			<span><?php do_action('epl_property_price'); ?></span>
		</div>
		<div class="loop-address">
			<span><?php do_action('epl_property_address'); ?></span>
		</div>
		<div class="loop-extras">
			<span>4 Bedrooms</span>
			<span>5 Bathrooms</span>
		</div>

		<div class="loop-button">
			<a href="<?php the_permalink() ?>">View Property</a>
		</div>
	</div>
</div>
