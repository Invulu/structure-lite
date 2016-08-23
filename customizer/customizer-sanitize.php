<?php
/**
 * Theme customizer sanitization
 *
 * @package Structure Lite
 * @since Structure Lite 1.0
 */

/**
 * Sanitize Categories.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_categories( $input ) {
	$categories = get_terms( 'category', array( 'fields' => 'ids', 'get' => 'all' ) );

	if ( in_array( $input, $categories, true ) ) {
		return $input;
	} else {
		return '';
	}
}

/**
 * Sanitize Pages.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_pages( $input ) {
	$pages = get_all_page_ids();

	if ( in_array( $input, $pages, true ) ) {
			return $input;
	} else {
		return '';
	}
}

/**
 * Sanitize Slideshow Transition Interval.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_transition_interval( $input ) {
	 $valid = array(
			 '2000' 		=> esc_html__( '2 Seconds', 'structure-lite' ),
			 '4000' 		=> esc_html__( '4 Seconds', 'structure-lite' ),
			 '6000' 		=> esc_html__( '6 Seconds', 'structure-lite' ),
			 '8000' 		=> esc_html__( '8 Seconds', 'structure-lite' ),
			 '10000' 	=> esc_html__( '10 Seconds', 'structure-lite' ),
			 '12000' 	=> esc_html__( '12 Seconds', 'structure-lite' ),
			 '20000' 	=> esc_html__( '20 Seconds', 'structure-lite' ),
			 '30000' 	=> esc_html__( '30 Seconds', 'structure-lite' ),
			 '60000' 	=> esc_html__( '1 Minute', 'structure-lite' ),
			 '999999999'	=> esc_html__( 'Hold Frame', 'structure-lite' ),
	 );

	 if ( array_key_exists( $input, $valid ) ) {
			 return $input;
		} else {
			 return '';
		}
}

/**
 * Sanitize Slideshow Transition Style.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_transition_style( $input ) {
	 $valid = array(
			 'fade' 		=> esc_html__( 'Fade', 'structure-lite' ),
			 'slide' 	=> esc_html__( 'Slide', 'structure-lite' ),
	 );

	 if ( array_key_exists( $input, $valid ) ) {
			 return $input;
		} else {
			 return '';
		}
}

/**
 * Sanitize Columns.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_columns( $input ) {
	 $valid = array(
			 'one' 		=> esc_html__( 'One Column', 'structure-lite' ),
			 'two' 		=> esc_html__( 'Two Columns', 'structure-lite' ),
			 'three' 	=> esc_html__( 'Three Columns', 'structure-lite' ),
			 'four' 	=> esc_html__( 'Four Columns', 'structure-lite' ),
			 'five' 	=> esc_html__( 'Five Columns', 'structure-lite' ),
	 );

	 if ( array_key_exists( $input, $valid ) ) {
			 return $input;
		} else {
			 return '';
		}
}

/**
 * Sanitize Alignment.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_align( $input ) {
	 $valid = array(
			 'left' 		=> esc_html__( 'Left Align', 'structure-lite' ),
			 'center' 		=> esc_html__( 'Center Align', 'structure-lite' ),
			 'right' 	=> esc_html__( 'Right Align', 'structure-lite' ),
	 );

	 if ( array_key_exists( $input, $valid ) ) {
			 return $input;
		} else {
			 return '';
		}
}

/**
 * Sanitize Colors.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_title_color( $input ) {
	 $valid = array(
			 'black' 	=> esc_html__( 'Black', 'structure-lite' ),
			 'white' 	=> esc_html__( 'White', 'structure-lite' ),
	 );

	 if ( array_key_exists( $input, $valid ) ) {
			 return $input;
		} else {
			 return '';
		}
}

/**
 * Sanitize Checkboxes.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return 1;
	} else {
		return '';
	}
}

/**
 * Sanitize Text Input.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_text( $input ) {
	 return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * Sanitize Colors.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_color( $input ) {
	if ( preg_match( '/^#[a-f0-9]{6}$/i', $input ) ) {
		return $input;
	} else {
		return '';
	}
}
