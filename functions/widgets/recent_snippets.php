<?php
/**
 * Create "Recent" widget for custom post type - 'snippet'
 */
class corenominal_recent_snippets_widget extends WP_Widget{
	
	function __construct()
	{
		parent::__construct(
			'corenominal_custom_post_snippet_widget', // Base ID
			'corenominal - Recent Snippets', // Name
			array('description' => __( 'Displays your latest snippets. Shows the title and date per snippet.' ))
		   );
	}

	function update( $new_instance, $old_instance )
	{
			$instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['numberOfSnippets'] = strip_tags($new_instance['numberOfSnippets']);
			return $instance;
	}

	function form( $instance )
	{
		if( $instance )
		{
			$title = esc_attr( $instance['title'] );
			$numberOfSnippets = esc_attr( $instance['numberOfSnippets'] );
		}
		else
		{
			$title = '';
			$numberOfSnippets = '';
		}
		?>
			<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'corenominal_custom_post_snippet_widget'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
			</p>
			<p>
			<label for="<?php echo $this->get_field_id('numberOfSnippets'); ?>"><?php _e('Number of Snippets:', 'corenominal_custom_post_snippet_widget'); ?></label>
			<select id="<?php echo $this->get_field_id('numberOfSnippets'); ?>"  name="<?php echo $this->get_field_name('numberOfSnippets'); ?>">
				<?php for($x=1;$x<=10;$x++): ?>
				<option <?php echo $x == $numberOfSnippets ? 'selected="selected"' : '';?> value="<?php echo $x;?>"><?php echo $x; ?></option>
				<?php endfor;?>
			</select>
			</p>
		<?php
	}

	function widget( $args, $instance )
	{
		extract( $args );
		$title = apply_filters('widget_title', $instance['title']);
		$numberOfSnippets = $instance['numberOfSnippets'];
		echo $before_widget;
		if ( $title )
		{
			echo $before_title . $title . $after_title;
		}
		$this->get_corenominal_snippets($numberOfSnippets);
		echo $after_widget;
	}

	function get_corenominal_snippets( $numberOfSnippets )
	{
		global $post;
		$snippets = new WP_Query();
		$snippets->query( 'category_name=snippets&posts_per_page=' . $numberOfSnippets );
		if( $snippets->found_posts > 0)
		{
			echo '<ul class="recent_snippets_widget recent">';
				while ($snippets->have_posts())
				{
					$snippets->the_post();
					$listItem = '<li>';
					$listItem .= '<a href="' . get_permalink() . '">';
					$listItem .= get_the_title() . '</a><br>';
					$listItem .= '<span class="meta"><i class="fa fa-calendar"></i> <span class="sr-only">Added: </span> ' . get_the_date() . '</span></li>';
					echo $listItem;
				}
			echo '</ul>';
			echo '<p class="allsnippets"><a href="' . site_url( 'category/snippets' ) . '"><i class="fa fa-chevron-right"></i> Browse All Snippets</a></p>';
			wp_reset_postdata();
		}
		else
		{
			echo '<p>No snippets found!</p>';
		}
	}

}

function register_corenominal_recent_snippets_widget()
{
    register_widget('corenominal_recent_snippets_widget');
}
add_action('widgets_init', 'register_corenominal_recent_snippets_widget');
