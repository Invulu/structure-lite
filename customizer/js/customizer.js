( function( $ ) {

	"use strict";

	/**
	 * Real-time preview of the site title and description text.
	 */
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).html( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).html( to );
		} );
	} );

	/**
	 * Real-time preview of the site title color
	 */
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' == to ) {
				$( '#masthead' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '#masthead' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
			}
		} );
	} );

	/**
	 * Real-time preview of the site background color.
	 */
	wp.customize( 'background_color', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'background-color', to );
		} );
	} );

})( jQuery );
