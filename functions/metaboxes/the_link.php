<?php
/**
 * Metabox for entering the url on link category posts
 */
function corenominal_add_metabox_link()
{
	add_meta_box(
		'corenominal_metabox_link', // id
		'The Link URL', // title
		'corenominal_metabox_link_callback', //callback function
		'post', // post type
		'normal', // context - placement i.e. 'side', 'normal', 'advanced'
		'high' // priority - i.e. 'high', 'core', 'default', 'low'
		);
}
add_action( 'add_meta_boxes', 'corenominal_add_metabox_link' );

/**
 * The metabox callback
 */
function corenominal_metabox_link_callback( $post )
{
	wp_nonce_field( basename( __FILE__ ), 'metabox_nonce' );
	$post_meta = get_post_meta( $post->ID ); 
	?>

	<div>
		<div class="meta-row">
			<input placeholder="http://..." class="code the_link" name="the_link" id="the_link" value="<?php if ( ! empty ( $post_meta['the_link'] ) ) echo esc_attr( $post_meta['the_link'][0] ); ?>" type="text">
		</div>
	</div>

	<?php
}

/**
 * Save the link
 */
function corenominal_metabox_link_save( $post_id )
{
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['metabox_nonce'] ) && wp_verify_nonce( $_POST['metabox_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exit script depending on save status
	if ($is_autosave || $is_revision || !$is_valid_nonce)
	{
		return;
	}

	if ( isset( $_POST['the_link'] ) )
	{
		update_post_meta( $post_id, 'the_link', sanitize_text_field( $_POST['the_link'] ) );
	}

}
add_action( 'save_post', 'corenominal_metabox_link_save' );

/**
 * Enqueue CSS and JavaScript
 */
function corenominal_metabox_link_enqueue_scripts( $hook )
{
	if( 'post.php' == $hook || 'post-new.php' == $hook )
	{
	
		wp_register_style( 'corenominal_metabox_link_css', get_template_directory_uri() . '/functions/metaboxes/css/corenominal_metabox_link.css', array(), '0.0.1', 'all' );
		wp_enqueue_style( 'corenominal_metabox_link_css' );

		wp_register_script( 'corenominal_metabox_link_js', get_template_directory_uri() . '/functions/metaboxes/js/corenominal_metabox_link.js', array('jquery'), '0.0.1', true );
		wp_enqueue_script( 'corenominal_metabox_link_js' );
	}
}
add_action( 'admin_enqueue_scripts', 'corenominal_metabox_link_enqueue_scripts' );
