<?php if ( ! defined( 'BRIX' ) ) die( 'Forbidden' );

/**
 * Archives widget block.
 *
 * @since 1.2.5
 */
class BrixBuilderArchivesWidgetBlock extends BrixBuilderWidgetBlock {

	/**
	 * Constructor for the archives widget content block.
	 *
	 * @since 1.2.5
	 */
	public function __construct()
	{
		$this->_widget_id         = 'widget-archives';
		$this->_widget_class_name = 'WP_Widget_Archives';
		$this->_widget_class_path = ABSPATH . WPINC . '/widgets/class-wp-widget-archives.php';
		$this->_widget_css_class  = 'widget_archive';
		$this->_title             = __( 'Archives widget', 'brix' );

		parent::__construct();
	}

}

/**
 * Add the widget area content block to the registered content blocks.
 *
 * @since 1.2.5
 * @param array $types An array containing the registered content blocks.
 * @return array
 */
function brix_register_archives_widget_content_block( $blocks ) {
	$blocks['widget-archives'] = array(
		'class'       => 'BrixBuilderArchivesWidgetBlock',
		'label'       => __( 'Archives widget', 'brix' ),
		'icon'        => BRIX_URI . 'blocks/widget/i/widgets_icon.svg',
		'icon_path'   => BRIX_FOLDER . 'blocks/widget/i/widgets_icon.svg',
		'description' => __( 'A monthly archive of your site&#8217;s Posts.', 'brix' ),
		'group'       => __( 'WordPress', 'brix' )
	);

	return $blocks;
}

add_filter( 'brix_get_blocks', 'brix_register_archives_widget_content_block' );
add_filter( 'brix_block_classes[type:widget-archives]', 'brix_widget_block_css_classes', 10, 3 );