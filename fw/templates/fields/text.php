<?php
	$classes = array();
	$size = $field->config( 'size' );
	$full = $field->config( 'full' );
	$link = $field->config( 'link' );
	$value = $field->value();
	$handle = $field->handle();
	$style = $field->config( 'style' );
	$style = (array) $style;

	if ( $full === true ) {
		$classes[] = 'brix-field-input-size-full';
	}

	if ( ! empty( $style ) ) {
		$style_class = 'brix-field-text-style-';

		foreach ( $style as $s ) {
			$classes[] = $style_class . $s;
		}
	}

	$text_value = $value;
	$handle_suffix = '';

	if ( is_array( $value ) || $link !== false ) {
		$text_value = '';

		if ( isset( $value['text'] ) || empty( $value ) ) {
			if ( isset( $value['text'] ) ) {
				$text_value = $value['text'];
			}

			$handle_suffix = '[text]';
		}
	}
?>

<?php if ( $link !== false ) : ?>
	<span class="brix-field-text-link-wrapper <?php if ( $full === true ) : ?>brix-field-input-size-full<?php endif; ?>">
<?php endif; ?>

<input type="text" class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>" size="<?php echo esc_attr( $size ); ?>" name="<?php echo esc_attr( $handle . $handle_suffix ); ?>" value="<?php echo esc_attr( $text_value ); ?>">

<?php if ( $link !== false ) : ?>
	<?php brix_link_partial( $handle, $value ); ?>
	</span>
<?php endif; ?>
