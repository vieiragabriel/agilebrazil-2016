<?php
// Creating the widget
class program_widget extends WP_Widget{

	function __construct(){
		parent::__construct(
			'wpb_widget',// Base ID of your widget
			__('Agile Brazil 2016 - Program', 'program_widget_domain'),// Widget name will appear in UI
			array('description' => __('Program', 'program_widget_domain'),)// Widget description
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
			echo __(program_function(), 'program_widget_domain');
		echo $args['after_widget'];
	}

	// Widget Backend
	public function form($instance)	{
		if (isset($instance['title'])) {
			$title = $instance['title'];
		} else {
			$title = __('New title', 'program_widget_domain');
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
function program_load_widget(){
	register_widget('program_widget');
}

add_action('widgets_init', 'program_load_widget');


function program_function(){ ?>
	<section class="program">
		<div class="container">
			<div class="row">
				<div class="program-info col-sm-6 col-sm-push-5">
					<h1 class="program-info-title">Programa</h1>
					<p class="program-info-description">
						Estamos trabalhando para avaliar as 300 submissões que recebemos e montar a programação final.
					</p>
					<p class="program-info-description"><strong>
							Quer saber como o Programa é feito?<br>
							Preparamos um infográfico para você!
						</strong></p>

					<a href="como-o-programa-funciona.html" class="buttonAction">Entenda!</a>
				</div>
			</div>
		</div>
	</section>
	<?php
}

add_shortcode('program', 'program_function');