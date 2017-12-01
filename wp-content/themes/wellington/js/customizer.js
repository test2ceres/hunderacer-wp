/**
 * Customizer Live Preview
 *
 * Reloads changes on Theme Customizer Preview asynchronously for better usability
 *
 * @package Wellington
 */

( function( $ ) {

	// Site Title textfield.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	// Site Description textfield.
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Site Title checkbox.
	wp.customize( 'wellington_theme_options[site_title]', function( value ) {
		value.bind( function( newval ) {
			if ( false === newval ) {
				hideElement( '.site-title' );
			} else {
				showElement( '.site-title' );
			}
		} );
	} );

	// Site Description checkbox.
	wp.customize( 'wellington_theme_options[site_description]', function( value ) {
		value.bind( function( newval ) {
			if ( false === newval ) {
				hideElement( '.site-description' );
			} else {
				showElement( '.site-description' );
			}
		} );
	} );

	// Sidebar Position.
	wp.customize( 'wellington_theme_options[layout]', function( value ) {
		value.bind( function( newval ) {
			if ( 'left-sidebar' === newval && false === $( 'body' ).hasClass( 'no-sidebar' ) ) {
				$( 'body' ).addClass( 'sidebar-left' );
			} else {
				$( 'body' ).removeClass( 'sidebar-left' );
			}
		} );
	} );

	// Blog Layout.
	wp.customize( 'wellington_theme_options[post_layout]', function( value ) {
		value.bind( function( newval ) {
			if ( 'two-columns' === newval ) {
				$( 'body' ).addClass( 'post-layout-two-columns post-layout-columns' );
				$( 'body' ).removeClass( 'post-layout-one-column' );
			} else {
				$( 'body' ).addClass( 'post-layout-one-column' );
				$( 'body' ).removeClass( 'post-layout-two-columns post-layout-columns' );
			}
		} );
	} );

	// Blog Title textfield.
	wp.customize( 'wellington_theme_options[blog_title]', function( value ) {
		value.bind( function( to ) {
			$( '.blog-header .blog-title' ).text( to );
		} );
	} );

	// Blog Description textfield.
	wp.customize( 'wellington_theme_options[blog_description]', function( value ) {
		value.bind( function( to ) {
			$( '.blog-header .blog-description' ).text( to );
		} );
	} );

	// Post Date checkbox.
	wp.customize( 'wellington_theme_options[meta_date]', function( value ) {
		value.bind( function( newval ) {
			if ( false === newval ) {
				$( 'body' ).addClass( 'date-hidden' );
			} else {
				$( 'body' ).removeClass( 'date-hidden' );
			}
		} );
	} );

	// Post Author checkbox.
	wp.customize( 'wellington_theme_options[meta_author]', function( value ) {
		value.bind( function( newval ) {
			if ( false === newval ) {
				$( 'body' ).addClass( 'author-hidden' );
			} else {
				$( 'body' ).removeClass( 'author-hidden' );
			}
		} );
	} );

	// Post Category checkbox.
	wp.customize( 'wellington_theme_options[meta_category]', function( value ) {
		value.bind( function( newval ) {
			if ( false === newval ) {
				hideElement( '.type-post .entry-footer .entry-categories' );
			} else {
				showElement( '.type-post .entry-footer .entry-categories' );
			}
		} );
	} );

	// Post Tags checkbox.
	wp.customize( 'wellington_theme_options[meta_tags]', function( value ) {
		value.bind( function( newval ) {
			if ( false === newval ) {
				hideElement( '.type-post .entry-footer .entry-tags' );
			} else {
				showElement( '.type-post .entry-footer .entry-tags' );
			}
		} );
	} );

	// Post Navigation checkbox.
	wp.customize( 'wellington_theme_options[post_navigation]', function( value ) {
		value.bind( function( newval ) {
			if ( false === newval ) {
				hideElement( '.type-post .entry-footer .post-navigation' );
			} else {
				showElement( '.type-post .entry-footer .post-navigation' );
			}
		} );
	} );

	function hideElement( element ) {
		$( element ).css({
			clip: 'rect(1px, 1px, 1px, 1px)',
			position: 'absolute',
			width: '1px',
			height: '1px',
			overflow: 'hidden'
		});
	}

	function showElement( element ) {
		$( element ).css({
			clip: 'auto',
			position: 'relative',
			width: 'auto',
			height: 'auto',
			overflow: 'visible'
		});
	}

} )( jQuery );
