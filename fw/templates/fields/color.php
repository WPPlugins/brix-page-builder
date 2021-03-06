<?php

$multiple = $field->config( 'multiple' );
$opacity  = $field->config( 'opacity' );
$value    = $field->value();
$handle   = $field->handle();
$style    = $field->config( 'style' );

if ( $multiple !== false && is_array( $multiple ) ) {

	foreach ( $multiple as $k => $field_label ) {
		$field_value = $value;

		if ( is_array( $field_value ) && isset( $field_value[$k] ) ) {
			$field_value = $field_value[$k];
		}

		$field_handle = $handle . '[' . $k . ']';

		echo '<div class="brix-color-input-wrapper">';
			echo '<span class="brix-sub-label">' . esc_html( $field_label ) . '</span>';

			echo '<div class="brix-color-inner-wrapper">';
				brix_color( $field_handle, $field_value, $opacity, $style );
			echo '</div>';
		echo '</div>';
	}

}
else {
	echo '<div class="brix-color-inner-wrapper">';
		brix_color( $handle, $value, $opacity, $style );
	echo '</div>';
}