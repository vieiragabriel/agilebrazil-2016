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
	<section id="subscribe-form">
		<div class="subscribe-form">
			<p>Preencha o formulário para receber novidades por email.</p>

			<form id="formEmail" action="add_subscriber.php" method="post">
				<ul>
					<li class="required">
						<label for="name">Nome</label>
						<input type="text" class="inputLarge" name="name" id="name" value="" required placeholder="Nome"/>
					</li>
					<li class="required">
						<label for="email">Email</label>
						<input type="email" class="inputLarge" name="email" id="email" value="" required
						       placeholder="Email"/>
					</li>
					<li class="submitEmail">
						<input type="hidden" name="lang" id="lang" value="pt">
						<input type="button" class="buttonAction" name="submit" id="submit" value="Assinar"/>
					</li>
				</ul>
				<div class="notice">
					<span id="formMessage" class="notice" aria-hidden="true"/>
				</div>
			</form>

		</div>
	</section>
	<?php
}

add_shortcode('subscribe', 'subscribe_function');