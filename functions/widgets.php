<?php
/**
 * Register widgets areas for the Theme
 */
if ( function_exists( 'register_sidebar' ) ) {

	register_sidebar( array(
		'name' => 'Aside Column One',
		'id'   => 'corenominal-aside-column-one-widget',
		'description'   => 'First column in default aside.',
		'before_widget' => '<div id="%1$s" class="aside widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );

	register_sidebar( array(
		'name' => 'Aside Column Two',
		'id'   => 'corenominal-aside-column-two-widget',
		'description'   => 'Second column in default aside.',
		'before_widget' => '<div id="%1$s" class="aside widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );

	register_sidebar( array(
		'name' => 'Aside Column Three',
		'id'   => 'corenominal-aside-column-three-widget',
		'description'   => 'Third column in default aside.',
		'before_widget' => '<div id="%1$s" class="aside widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );

}
/**
 * Include all files in widgets dir
 */
foreach ( glob( get_template_directory() . '/functions/widgets/*.php' ) as $widget )
{
    require_once( $widget );
}
