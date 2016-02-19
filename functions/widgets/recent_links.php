<?php
/**
 * Create "Recent" widget for custom post type - 'link'
 */
class corenominal_recent_links_widget extends WP_Widget{
	
	function __construct()
	{
		parent::__construct(
			'corenominal_custom_post_link_widget', // Base ID
			'corenominal - Recent Links', // Name
			array('description' => __( 'Displays your latest links. Shows the title and date per link.' ))
		   );
	}

	function update( $new_instance, $old_instance )
	{
			$instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['numberOfLinks'] = strip_tags($new_instance['numberOfLinks']);
			return $instance;
	}

	function form( $instance )
	{
		if( $instance )
		{
			$title = esc_attr( $instance['title'] );
			$numberOfLinks = esc_attr( $instance['numberOfLinks'] );
		}
		else
		{
			$title = '';
			$numberOfLinks = '';
		}
		?>
			<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'corenominal_custom_post_link_widget'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
			</p>
			<p>
			<label for="<?php echo $this->get_field_id('numberOfLinks'); ?>"><?php _e('Number of Links:', 'corenominal_custom_post_link_widget'); ?></label>
			<select id="<?php echo $this->get_field_id('numberOfLinks'); ?>"  name="<?php echo $this->get_field_name('numberOfLinks'); ?>">
				<?php for($x=1;$x<=10;$x++): ?>
				<option <?php echo $x == $numberOfLinks ? 'selected="selected"' : '';?> value="<?php echo $x;?>"><?php echo $x; ?></option>
				<?php endfor;?>
			</select>
			</p>
		<?php
	}

	function widget( $args, $instance )
	{
		extract( $args );
		$title = apply_filters('widget_title', $instance['title']);
		$numberOfLinks = $instance['numberOfLinks'];
		echo $before_widget;
		if ( $title )
		{
			echo $before_title . $title . $after_title;
		}
		$this->get_corenominal_links($numberOfLinks);
		echo $after_widget;
	}

	function get_corenominal_links( $numberOfLinks )
	{
		global $post;
		$links = new WP_Query();
		$links->query( 'category_name=links&posts_per_page=' . $numberOfLinks );
		if( $links->found_posts > 0)
		{
			echo '<ul class="recent_links_widget recent">';
				while ($links->have_posts())
				{
					$links->the_post();
					$listItem = '<li>';
					$listItem .= '<a href="' . get_permalink() . '">';
					$listItem .= get_the_title() . '</a><br>';
					$listItem .= '<span class="meta"><i class="fa fa-calendar"></i> <span class="sr-only">Added: </span> ' . get_the_date() . '</span></li>';
					echo $listItem;
				}
			echo '</ul>';
			echo '<p class="alllinks"><a href="' . site_url( 'category/links' ) . '"><i class="fa fa-chevron-right"></i> Browse All Links</a></p>';
			wp_reset_postdata();
		}
		else
		{
			echo '<p>No links found!</p>';
		}
	}

}

function register_corenominal_recent_links_widget()
{
    register_widget('corenominal_recent_links_widget');
}
add_action('widgets_init', 'register_corenominal_recent_links_widget');
