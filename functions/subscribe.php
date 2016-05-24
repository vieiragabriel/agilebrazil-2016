<?php
// Creating the widget
class subscribe_widget extends WP_Widget{

	function __construct(){
		parent::__construct(
			'wpb_widget',// Base ID of your widget
			__('Agile Brazil 2016 - Subscribe', 'subscribe_widget_domain'),// Widget name will appear in UI
			array('description' => __('Subscribe', 'subscribe_widget_domain'),)// Widget description
		);
	}

	// Creating widget front-end
	// This is where the action happens
	public function widget($args, $instance){
		$title = apply_filters('widget_title', $instance['title']);
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if (!empty($title))
			//echo $args['before_title'] . $title . $args['after_title'];

			// This is where you run the code and display the output
			echo __(subscribe_function(), 'subscribe_widget_domain');
		echo $args['after_widget'];
	}

	// Widget Backend
	public function form($instance)	{
		if (isset($instance['title'])) {
			$title = $instance['title'];
		} else {
			$title = __('New title', 'subscribe_widget_domain');
		}
		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
			       name="<?php echo $this->get_field_name('title'); ?>" type="text"
			       value="<?php echo esc_attr($title); ?>"/>
		</p>
		<?php
	}

	// Updating widget replacing old instances with new
	public function update($new_instance, $old_instance){
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		return $instance;
	}
} // Class wpb_widget ends here

// Register and load the widget
function subscribe_load_widget(){
	register_widget('subscribe_widget');
}

add_action('widgets_init', 'subscribe_load_widget');


function subscribe_function(){ ?>
	<section id="newsletter" class="section">
		<div class="container">
			<h1><?php _e("Signup for our newsletter", 'ab2016')?></h1>
			<div class="info">
				<div class="form"><form id="formEmail" action="<?php echo get_template_directory_uri(); ?>/add_subscriber.php" method="post">
						<ul>
							<li class="required"><input id="name" class="inputLarge" name="name" required="" type="text" value="" placeholder="Seu nome" /></li>
							<li class="required"><input id="email" class="inputLarge" name="email" required="" type="email" value="" placeholder="Seu e-mail" /></li>
							<li class="submitEmail"><input id="lang" name="lang" type="hidden" value="pt" />
								<input id="submit" class="btnBase" name="submit" type="button" value="Assinar" /></li>
						</ul>
						<div class="notice"><span id="formMessage" class="notice" aria-hidden="true"></span></div>
					</form></div>
				<div class="text">
					<h4><?php _e("Don't miss out on anything that is happening in Agile Brazil. Sign up for our newsletter and receive all the information in your email!", 'ab2016')?></h4>
				</div>
			</div>
		</div>
	</section>
	<?php
}

add_shortcode('subscribe', 'subscribe_function');