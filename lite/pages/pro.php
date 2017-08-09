<?php if ( ! defined( 'ABSPATH' ) ) die( 'Forbidden' );

/**
 * Render the Docs page content.
 *
 * @since 1.1.2
 */
function brix_pro_page() {
	echo '<div class="brix-admin-page-content brix-admin-pro-promo">';
		brix_pro_page_content();
	echo '</div>';
}

add_action( 'brix_admin_page_content[page:brix_pro]', 'brix_pro_page' );

/**
 * Render the Docs page.
 *
 * @since 1.1.2
 */
function brix_pro_page_content() {
	?>
		<div class="brix-admin-page-side-content">
			<h2><?php esc_html_e( 'Why upgrade to the premium version?', 'brix' ); ?></h2>
			<p><?php esc_html_e( 'The Brix premium version includes the amazing Live frontend editing, advanced controls, more content blocks and assets, and is the perfect tool to get the most out of the plugin, both in terms of power and effectiveness.', 'brix' ); ?></p>

			<h3><?php esc_html_e( 'Features', 'brix' ); ?></h3>
			<ul>
				<li><?php esc_html_e( 'Frontend live editing', 'brix' ); ?></li>
				<li><?php esc_html_e( 'Premium support', 'brix' ); ?></li>
				<li><?php esc_html_e( 'Full-blown responsive mode', 'brix' ); ?></li>
					<ul>
						<li><?php esc_html_e( 'Custom breakpoints', 'brix' ); ?></li>
						<li><?php esc_html_e( 'Precise columns behavior', 'brix' ); ?></li>
						<li><?php esc_html_e( 'Responsive backgrounds', 'brix' ); ?></li>
						<li><?php esc_html_e( 'Carousel module control', 'brix' ); ?></li>
					</ul>
				<li><?php esc_html_e( 'Enhanced backgrounds', 'brix' ); ?></li>
					<ul>
						<li><?php esc_html_e( 'Parallax', 'brix' ); ?></li>
						<li><?php esc_html_e( 'Gradients', 'brix' ); ?></li>
					</ul>
				<li><?php esc_html_e( 'WooCommerce blocks', 'brix' ); ?></li>
				<li><?php esc_html_e( 'More content blocks', 'brix' ); ?></li>
					<ul>
						<li><?php esc_html_e( 'Team member', 'brix' ); ?></li>
						<li><?php esc_html_e( 'Counter', 'brix' ); ?></li>
						<li><?php esc_html_e( 'Progress bar', 'brix' ); ?></li>
						<li><?php esc_html_e( 'Advanced list', 'brix' ); ?></li>
					</ul>
				<li><?php esc_html_e( 'Advanced grid features', 'brix' ); ?></li>
				<li><?php esc_html_e( 'Enhanced column carousels', 'brix' ); ?></li>
				<li><?php esc_html_e( 'Custom templates import/export', 'brix' ); ?></li>
				<li><?php esc_html_e( 'Several built-in templates ready for use', 'brix' ); ?></li>
				<li><?php esc_html_e( 'More icon sets (2200+ icons)', 'brix' ); ?></li>
			</ul>

			<a href="<?php echo esc_attr( 'https://www.brixbuilder.com?ref=upgradebrixlite' ); ?>" class="brix-promo-action"><?php esc_html_e( 'Upgrade to premium', 'brix' ); ?></a>
		</div>
		<div class="brix-admin-page-features-content">
			<div class="brix-admin-page-feature-box brix-admin-page-feature-box-highlighted">
				<div class="brix-admin-page-feature-box-highlighted-inner-wrapper">
					<span class="brix-highlighted-badge">NEW</span>
					<span class="dashicons dashicons-admin-customizer"></span>
					<div class="brix-admin-page-feature-box-inner">
						<h3><?php esc_html_e( 'Introducing frontend live editing!', 'brix' ); ?></h3>
						<div class="brix-admin-page-feature-box-content">
							<p><?php esc_html_e( 'With the premium version of Brix, the plugin will be showing you a live and high fidelity preview of the changes you\'re making to the page layout and content, displaying it exactly how a visitor would see it.', 'brix' ); ?></p>
							<p><?php esc_html_e( 'You\'ll be able to add content, drag & drop blocks around your page and get a precise feeling of how your design is coming along in just seconds.', 'brix' ); ?></p>
							<p><?php esc_html_e( 'Live editing supports all of the features that make Brix so great, including templates management, undo/redo, and even automatic save & publish of your data.', 'brix' ); ?></p>

							<p><a class="brix-admin-page-feature-box-action" href="http://goo.gl/1BHeIU" target="_blank"><?php esc_html_e( 'Try the live demo!', 'brix' ); ?></a></p>
						</div>

						<iframe width="640" height="360" src="https://www.youtube.com/embed/videoseries?list=PLP2JkJpnBbLgAop9zznu6u3LNRYSVaU70" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="brix-admin-page-feature-box brix-admin-page-feature-box-new-feature">
				<div class="brix-admin-page-feature-box-new-feature-inner-wrapper">
					<span class="brix-highlighted-badge">NEW</span>

					<span class="dashicons dashicons-cart"></span>
					<div class="brix-admin-page-feature-box-inner">
						<h3><?php esc_html_e( 'WooCommerce integration', 'brix' ); ?></h3>
						<p><?php esc_html_e( 'All the WooCommerce shortcodes and widgets are now available as Brix blocks so you can create amazing custom pages for your online shop.', 'brix' ); ?></p>
					</div>
				</div>
			</div>


			<div class="brix-admin-page-feature-box">
				<span class="dashicons dashicons-sos"></span>
				<div class="brix-admin-page-feature-box-inner">
					<h3><?php esc_html_e( 'Premium support and automatic updates', 'brix' ); ?></h3>
					<p><?php esc_html_e( 'Every now and then everyone encounters a bump, but fear not, you’ll never be left behind!', 'brix' ); ?></p>
					<p><?php esc_html_e( 'With Brix, our amazing support will be available to get your issues solved.', 'brix' ); ?></p>
				</div>
			</div>

			<div class="brix-admin-page-feature-box">
				<span class="dashicons dashicons-smartphone"></span>
				<div class="brix-admin-page-feature-box-inner">
					<h3><?php esc_html_e( 'Responsive', 'brix' ); ?></h3>
					<p><?php esc_html_e( 'Brix takes responsive management to the next level, allowing you to deeply customize the responsive features of the plugin according to the theme you\'re using.', 'brix' ); ?></p>

					<a class="brix-admin-page-feature-box-action" href="#"><?php esc_html_e( 'View responsive options', 'brix' ); ?></a>

					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/custom-breakpoints.png" data-width="890" data-height="234" data-title="<?php esc_attr_e( 'You will be able to create custom breakpoints, to match exactly the ones used by the theme of your choice, and get exactly the desired results you want.', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/responsive-col.png" data-width="910" data-height="459" data-title="<?php esc_attr_e( 'Instead of falling back to 100% width, columns can be told to behave differently for the various breakpoints defined. You can even choose to hide a column on a specific breakpoint!', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/responsive-bg.png" data-width="497" data-height="513" data-title="<?php esc_attr_e( 'Section and column backgrounds are responsive as well, being able to change depending on the screen width.', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/responsive-carousel.png" data-width="813" data-height="415" data-title="<?php esc_attr_e( 'Column carousels can change their module, or even deactivate themselves, according to the current breakpoint.', 'brix' ); ?>"></span>
				</div>
			</div>

			<div class="brix-admin-page-feature-box">
				<span class="dashicons dashicons-admin-appearance"></span>
				<div class="brix-admin-page-feature-box-inner">
					<h3><?php esc_html_e( 'Backgrounds', 'brix' ); ?></h3>
					<p><?php esc_html_e( 'Backgrounds in Brix are even more flexible and feature advanced options such as parallax effects and gradients.', 'brix' ); ?></p>

					<a class="brix-admin-page-feature-box-action" href="#"><?php esc_html_e( 'View background options', 'brix' ); ?></a>

					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/bg-parallax.png" data-width="730" data-height="417" data-title="<?php esc_attr_e( 'You can add a cool parallax effect to both image backgrounds and videos, precisely controlling its shift as you scroll in the page.', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/bg-gradients.png" data-width="580" data-height="221" data-title="<?php esc_attr_e( 'Backgrounds support gradients, linear or radial, with opacity controls, for both the background itself as well as its overlay.', 'brix' ); ?>"></span>
				</div>
			</div>

			<div class="brix-admin-page-feature-box">
				<span class="dashicons dashicons-screenoptions"></span>
				<div class="brix-admin-page-feature-box-inner">
					<h3><?php esc_html_e( 'More content blocks', 'brix' ); ?></h3>
					<p><?php esc_html_e( 'Brix gives more solutions in terms of content creation thanks to the availability of more content blocks today, and more added in the future.', 'brix' ); ?></p>

					<a class="brix-admin-page-feature-box-action" href="#"><?php esc_html_e( 'Discover the additional content blocks', 'brix' ); ?></a>

					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/block-progress.png" data-width="1044" data-height="808" data-title="<?php esc_attr_e( 'Premium content block: Progress bars', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/block-team.png" data-width="1039" data-height="803" data-title="<?php esc_attr_e( 'Premium content block: Team member', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/block-counter.png" data-width="1036" data-height="805" data-title="<?php esc_attr_e( 'Premium content block: Counter', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/block-list.png" data-width="1032" data-height="800" data-title="<?php esc_attr_e( 'Premium content block: Lists support advanced controls for individual list items', 'brix' ); ?>"></span>
				</div>
			</div>

			<div class="brix-admin-page-feature-box">
				<span class="dashicons dashicons-slides"></span>
				<div class="brix-admin-page-feature-box-inner">
					<h3><?php esc_html_e( 'Carousel', 'brix' ); ?></h3>
					<p><?php esc_html_e( 'Column carousels are even more powerful, introducing advanced options such as autoplay, adaptive height and infinite loops.', 'brix' ); ?></p>
				</div>
			</div>

			<div class="brix-admin-page-feature-box">
				<span class="dashicons dashicons-tagcloud"></span>
				<div class="brix-admin-page-feature-box-inner">
					<h3><?php esc_html_e( 'Grid', 'brix' ); ?></h3>
					<p><?php esc_html_e( 'Brix adds advanced controls that will allow to create more elaborated grid solutions in no time, allowing you to alter section heights and rows alignments.', 'brix' ); ?></p>

					<a class="brix-admin-page-feature-box-action" href="#"><?php esc_html_e( 'Discover the advanced grid controls', 'brix' ); ?></a>

					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/special-sections.png" data-width="805" data-height="219" data-title="<?php esc_attr_e( 'Special sections extend for the whole height of the page, allowing you to create multiple sidebars.', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/section-advanced.png" data-width="418" data-height="381" data-title="<?php esc_attr_e( 'When using special sections, the areas of the layout can be automatically made of the same height.', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/vertical-align.png" data-width="882" data-height="480" data-title="<?php esc_attr_e( 'Super cool: the blocks inside a column can be automatically aligned at the top, center or bottom of it.', 'brix' ); ?>"></span>
				</div>
			</div>

			<div class="brix-admin-page-feature-box">
				<span class="dashicons dashicons-admin-generic"></span>
				<div class="brix-admin-page-feature-box-inner">
					<h3><?php esc_html_e( 'Advanced', 'brix' ); ?></h3>
					<p><?php esc_html_e( 'More advanced features are available in Brix that will improve your workflow, from templates management and limiting Brix to specific user roles.', 'brix' ); ?></p>

					<a class="brix-admin-page-feature-box-action" href="#"><?php esc_html_e( 'Discover the advanced features', 'brix' ); ?></a>

					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/templates.png" data-width="1041" data-height="503" data-title="<?php esc_attr_e( 'Import and export template files and share or re-use them across different projects!', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/user-roles.png" data-width="504" data-height="219" data-title="<?php esc_attr_e( 'Allow only certain roles to be able to edit pages with Brix.', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/advanced.png" data-width="636" data-height="539" data-title="<?php esc_attr_e( 'Advanced section and column controls, allowing you to have custom IDs, class attributes, and a more strict control over the generated markup.', 'brix' ); ?>"></span>
				</div>
			</div>

			<div class="brix-admin-page-feature-box">
				<span class="dashicons dashicons-smiley"></span>
				<div class="brix-admin-page-feature-box-inner">
					<h3><?php esc_html_e( 'Icons', 'brix' ); ?></h3>
					<p><?php esc_html_e( 'More and more icon packs are available in Brix.', 'brix' ); ?></p>

					<a class="brix-admin-page-feature-box-action" href="#"><?php esc_html_e( 'Discover the additional icon packs', 'brix' ); ?></a>

					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/icn-entypo.png" data-width="868" data-height="495" data-title="<?php esc_attr_e( 'Premium icon pack: Entypo', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/icn-foundation.png" data-width="869" data-height="495" data-title="<?php esc_attr_e( 'Premium icon pack: Foundation', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/icn-linea.png" data-width="868" data-height="493" data-title="<?php esc_attr_e( 'Premium icon pack: Linea', 'brix' ); ?>"></span>
					<span data-img data-src="<?php echo BRIX_URI ?>lite/i/icn-material.png" data-width="864" data-height="494" data-title="<?php esc_attr_e( 'Premium icon pack: Material', 'brix' ); ?>"></span>
				</div>
			</div>
		</div>

	<?php
}