<?php
// Creating the widget
class sponsor_widget extends WP_Widget{

	function __construct(){
		parent::__construct(
			'wpb_widget',// Base ID of your widget
			__('Agile Brazil 2016 - Sponsors', 'sponsor_widget_domain'),// Widget name will appear in UI
			array('description' => __('Sponsors', 'sponsor_widget_domain'),)// Widget description
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
			echo __(sponsor_function(), 'sponsor_widget_domain');
		echo $args['after_widget'];
	}

	// Widget Backend
	public function form($instance)	{
		if (isset($instance['title'])) {
			$title = $instance['title'];
		} else {
			$title = __('New title', 'sponsor_widget_domain');
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
function sponsor_load_widget(){
	register_widget('sponsor_widget');
}

add_action('widgets_init', 'sponsor_load_widget');


function sponsor_function(){ ?>
	<section class="wrap-supporter">
		<h1 class="supporter-title">Patrocinador Title</h1>
		<div class="supporter-enclosure">
			<ul class="supporter">
				<li class="supporter-item title">
					<figure>
						<a href="http://www.adaptworks.com.br/" target="_blank" rel="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor/adaptworks.png" alt="Logo da Adptworks"></a>
					</figure>
				</li>
			</ul>
		</div>

		<h1 class="supporter-title">Patrocinador Diamond</h1>
		<div class="supporter-enclosure">
			<ul class="supporter">
				<li class="supporter-item diamond">
					<figure>
						<a href="http://ca.com/agile" target="_blank" rel="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor/CA_Rally.png" alt="Logo da CA | Rally"></a>
					</figure>
				</li>
			</ul>
		</div>

		<h1 class="supporter-title">Patrocinador Gold</h1>
		<div class="supporter-enclosure">
			<ul class="supporter">
				<li class="supporter-item gold">
					<figure>
						<a href="http://www.happymelly.com" target="_blank" rel="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/virada/happymelly_black.png" alt="Logo da Happy Melly"></a>
					</figure>
				</li>
				<li class="supporter-item gold">
					<figure>
						<a href="https://www.serpro.gov.br/" target="_blank" rel="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor/serpro.png" alt="SERPRO"></a>
					</figure>
				</li>
			</ul>
		</div>

		<h1 class="supporter-title">Patrocinador Prata</h1>
		<div class="supporter-enclosure">
			<ul class="supporter">
				<li class="supporter-item silver">
					<figure>
						<a href="http://www.ines.org.br/" target="_blank" rel="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor/logoInes.jpg" alt="Logo do Instituto Nacional para Engenharia de Software"></a>
					</figure>
				</li>
				<li class="supporter-item silver">
					<figure>
						<a href="http://www.objective.com.br/" target="_blank" rel="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor/objective.png" alt="Logo da Objective"></a>
					</figure>
				</li>
			</ul>
		</div>

		<h1 class="supporter-title">Patrocinador Bronze</h1>
		<div class="supporter-enclosure">
			<ul class="supporter">
				<li class="supporter-item bronze">
					<figure>
						<a href="http://www.digithobrasil.com.br/" target="_blank" rel="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor/digithobrasil.png" alt="Logo da Digitho Brasil"></a>
					</figure>
				</li>
			</ul>
		</div>

		<h1 class="supporter-title">Patrocinador On-Line</h1>
		<div class="supporter-enclosure">
			<ul class="supporter">
				<li class="supporter-item online">
					<figure>
						<a href="http://www.cesar.org.br" target="_blank" rel="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor/cesar.png" alt="CESAR"></a>
					</figure>
				</li>
				<li class="supporter-item online">
					<figure>
						<a href="https://www.thoughtworks.com/pt/" target="_blank" rel="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/virada/tw-logo.png" alt="Logo da Thought Works"></a>
					</figure>
				</li>
			</ul>
		</div>

		<br>
		<h1 class="supporter-title">Apoiadores</h1>
		<div class="supporter-enclosure">
			<ul class="supporter">
				<li class="supporter-item">
					<figure>
						<a href="http://agilidaderecife.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/supporter/logoAgilidadeRecife.jpg" alt="Logo da Agilidade Recife"></a>
					</figure>
				</li>
				<li class="supporter-item">
					<figure>
						<a href="http://www.recifecvb.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/supporter/logoRcvb.jpg" alt="Logo do Recife Convetion & Visitors Bureau"></a>
					</figure>
				</li>
				<li class="supporter-item">
					<figure>
						<a href="http://www.sbc.org.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/supporter/logoSbc.png" alt="Logo do Sociedade Brasileira de Computação"></a>
					</figure>
				</li>
				<li class="supporter-item">
					<figure>
						<a href="http://www2.cin.ufpe.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/supporter/logoCinUfpe.jpg" alt="Logo do Centro de Informática UFPE"></a>
					</figure>
				</li>
				<li class="supporter-item">
					<figure>
						<a href="http://www.portodigital.org/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/supporter/logoPortoDigital.jpg" alt="Logo do Porto Digital"></a>
					</figure>
				</li>
				<li class="supporter-item">
					<figure>
						<a href="http://www.recife.softex.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/supporter/logoSoftexRecife.jpg" alt="Logo da SoftexRecife"></a>
					</figure>
				</li>
				<li class="supporter-item">
					<figure>
						<a href="http://www.deinfo.ufrpe.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/supporter/logoDeinfo.jpg" alt="Logo do Departamento de Estática e Matemática UFRPE"></a>
					</figure>
				</li>
				<li class="supporter-item">
					<figure>
						<a href="http://agiletrendsbr.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/supporter/logoAgiletrends.png" alt="Logo do Agile Trends"></a>
					</figure>
				</li>
				<li class="supporter-item">
					<figure>
						<a href="http://tasafo.wordpress.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/supporter/logoTaSafo.png" alt="Logo do Tá Safo!"></a>
					</figure>
				</li>
				<li class="supporter-item">
					<figure>
						<a href="http://www.socialbase.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/supporter/logoSocialBase.jpg" alt="Social Base"></a>
					</figure>
				</li>
				<li class="supporter-item">
					<figure>
						<a href="http://www.globo.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/supporter/logoGlobo.jpg" alt="Globo.com"></a>
					</figure>
				</li>
			</ul>
		</div>
	</section>
	<?php
}

add_shortcode('sponsor', 'sponsor_function');


// Creating the widget
class cta_sponsor_widget extends WP_Widget{

	function __construct(){
		parent::__construct(
			'wpb_widget',// Base ID of your widget
			__('Agile Brazil 2016 - CTA Sponsor', 'cta_sponsor_widget_domain'),// Widget name will appear in UI
			array('description' => __('CTA Sponsor', 'cta_sponsor_widget_domain'),)// Widget description
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
			echo __(cta_sponsor_function(), 'cta_sponsor_widget_domain');
		echo $args['after_widget'];
	}

	// Widget Backend
	public function form($instance)	{
		if (isset($instance['title'])) {
			$title = $instance['title'];
		} else {
			$title = __('New title', 'cta_sponsor_widget_domain');
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
function cta_sponsor_load_widget(){
	register_widget('cta_sponsor_widget');
}

add_action('widgets_init', 'cta_sponsor_load_widget');


function cta_sponsor_function(){ ?>
	<section class="sponsorship">
		<div class="container">
			<div class="row">
				<div class="sponsorship-info col-sm-6 col-sm-push-5">
					<h1 class="sponsorship-info-title">Divulgue sua Marca</h1>
					<p class="sponsorship-info-description">Atraia os olhares de especialistas em agilidade e conecte-se com uma comunidade altamente capacitada.</p>
					<a href="patrocinio.html" class="buttonAction">Patrocine!</a>
				</div>
			</div>
		</div>
	</section>
	<?php
}

add_shortcode('cta_sponsor', 'cta_sponsor_function');