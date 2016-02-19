<?php
/**
 * Create "Recent" widget for posts - provides a custom style to match other corenominal widgets
 */
class corenominal_recent_posts_widget extends WP_Widget{
	
	function __construct()
	{
		parent::__construct(
			'corenominal_recent_posts_widget', // Base ID
			'corenominal - Recent Posts', // Name
			array('description' => __( 'Displays your latest posts. Shows the title and date per link.' ))
		   );
	}

	function update( $new_instance, $old_instance )
	{
			$instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['numberOfPosts'] = strip_tags($new_instance['numberOfPosts']);
			return $instance;
	}

	function form( $instance )
	{
		if( $instance )
		{
			$title = esc_attr( $instance['title'] );
			$numberOfPosts = esc_attr( $instance['numberOfPosts'] );
		}
		else
		{
			$title = '';
			$numberOfPosts = '';
		}
		?>
			<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'corenominal_recent_posts_widget'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
			</p>
			<p>
			<label for="<?php echo $this->get_field_id('numberOfPosts'); ?>"><?php _e('Number of Links:', 'corenominal_recent_posts_widget'); ?></label>
			<select id="<?php echo $this->get_field_id('numberOfPosts'); ?>"  name="<?php echo $this->get_field_name('numberOfPosts'); ?>">
				<?php for($x=1;$x<=10;$x++): ?>
				<option <?php echo $x == $numberOfPosts ? 'selected="selected"' : '';?> value="<?php echo $x;?>"><?php echo $x; ?></option>
				<?php endfor;?>
			</select>
			</p>
		<?php
	}

	function widget( $args, $instance )
	{
		extract( $args );
		$title = apply_filters('widget_title', $instance['title']);
		$numberOfPosts = $instance['numberOfPosts'];
		echo $before_widget;
		if ( $title )
		{
			echo $before_title . $title . $after_title;
		}
		$this->get_corenominal_links($numberOfPosts);
		echo $after_widget;
	}

	function get_corenominal_links( $numberOfPosts )
	{
		global $post;
		$links = new WP_Query();
		$links->query( 'category_name=posts&posts_per_page=' . $numberOfPosts );
		if( $links->found_posts > 0)
		{
			echo '<ul class="recent_posts_widget recent">';
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
			echo '<p class="allposts"><a href="' . site_url( 'category/posts' ) . '"><i class="fa fa-chevron-right"></i> Browse All Posts</a></p>';
			wp_reset_postdata();
		}
		else
		{
			echo '<p>No posts found!</p>';
		}
	}

}

function register_corenominal_recent_posts_widget()
{
    register_widget('corenominal_recent_posts_widget');
}
add_action('widgets_init', 'register_corenominal_recent_posts_widget');
