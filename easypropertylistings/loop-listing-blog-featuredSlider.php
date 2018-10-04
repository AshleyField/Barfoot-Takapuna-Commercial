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

			
		<div class="swiper-slide">
			<?php do_action('epl_property_loop_before_content'); ?>
    		<div class="property-area-outer">

				<div class="property-area">

					<div class="property-area-heading">
						<span><a href="<?php the_permalink() ?>"><?php do_action('epl_property_heading'); ?></a></span>
					</div>

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="property-area-image">
							<a href="<?php the_permalink(); ?>" class="featured-property-image-link">
								<?php echo the_post_thumbnail() ?>
							</a>
						</div>
					<?php endif; ?>

					<?php //the_excerpt(); ?>

					<div class="property-area-info">
						<div class="property-area-info-heading">
							<span>
								<?php do_action('epl_property_secondary_heading'); ?>
							</span>
						</div>
						<div class="property-area-info-price">
							<span><?php do_action('epl_property_price'); ?>
								
							</span>
						</div>
						<div class="property-area-info-address">
							<span>
								<?php do_action('epl_property_tab_address'); ?>
							</span>
						</div>
						<div class="property-area-info-description">
							<span>
								<?php echo the_excerpt(); ?>
							</span>
						</div>
					</div>

					<div class="property-area-info-second">
						<?php do_action('epl_property_tab_section'); ?>
						<?php do_action('epl_property_tab_section_after'); ?>
					</div>
						<!-- Home Open -->
						<?php do_action('epl_property_inspection_times'); ?>

					<!-- Property Featured Icons -->
					<div class="property-feature-icons">
						<?php do_action('epl_property_icons'); ?>
					</div>
				</div>
				<?php do_action('epl_property_loop_after_content'); ?>
			</div>
		</div>

		

