<?php
// Creating the widget
class place_widget extends WP_Widget{

	function __construct(){
		parent::__construct(
			'wpb_widget',// Base ID of your widget
			__('Agile Brazil 2016 - Place', 'place_widget_domain'),// Widget name will appear in UI
			array('description' => __('Place', 'place_widget_domain'),)// Widget description
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
			echo __(place_function(), 'place_widget_domain');
		echo $args['after_widget'];
	}

	// Widget Backend
	public function form($instance)	{
		if (isset($instance['title'])) {
			$title = $instance['title'];
		} else {
			$title = __('New title', 'place_widget_domain');
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
function place_load_widget(){
	register_widget('place_widget');
}

add_action('widgets_init', 'place_load_widget');


function place_function(){ ?>
	<section class="place">
		<div class="container">
			<h1 class="place-title">Como chegar?</h1>
			<p class="place-description">
				Esse ano o Agile Brazil é em Porto de Galinhas. Descubra como chegar,
				saiba mais sobre a cidade e o local do evento.
			</p>
			<a class="buttonPrimary" href="localizacao.html">Hospedagem e Reservas</a>
		</div>
	</section>
	<?php
}

add_shortcode('place', 'place_function');