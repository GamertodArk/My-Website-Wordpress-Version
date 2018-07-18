<?php 
	function wpga_customizer_settings($wp_customize)
	{
		
		include 'classes/customize_textarea_control.php';


		/*----- Sections -------*/
		$wp_customize->add_section('wpga_esp_texts' ,array(
			'title' => 'Textos en español'
		));

		$wp_customize->add_section('wpga_eng_texts',array(
			'title' => 'English Texts'
		));

		$wp_customize->add_section('wpga_gen_texts', array(
			'title' => 'Textos Generales'
		));

		$wp_customize->add_section('wpga_colors_schema', array(
			'title' => 'Color Schema'
		));

		/*------- Settings --------*/
		$wp_customize->add_setting('wpga_esp_text_1', array(
			'default' => 'Hola!, soy Elvis Garcia'
		));

		$wp_customize->add_setting('wpga_esp_text_2', array(
			'default' => 'Soy desarrollador web'
		));

		$wp_customize->add_setting('wpga_eng_text_1', array(
			'default' => 'Hi!, I\'m Elvis Garcia'
		));

		$wp_customize->add_setting('wpga_eng_text_2', array(
			'default' => 'I\'m a Web Developer'
		));

		$wp_customize->add_setting('wpga_gen_text_name', array(
			'default' => 'Elvis Garcia'
		));	

		$wp_customize->add_setting('wpga_gen_text_description', array(
			'default' => 'Full Stack - Web Developer'
		));

		$wp_customize->add_setting('wpga_gen_text_footer', array(
			'default' => 'Desarrollador Web'
		));


		$wp_customize->add_setting('wpga_section_1_bg', array(
			'default' => '#ffffff',
			'type' => 'option'
		));

		$wp_customize->add_setting('wpga_section_2_bg', array(
			'default' => '#444444',
			'type' => 'option'
		));

		$wp_customize->add_setting('wpga_footer_bg', array(
			'default' => '#222222',
			'type' => 'option'
		));


		/*---------- Controls ----------*/
		$wp_customize->add_control(new wpga_customize_textarea_control(
			$wp_customize,
			'wpga_esp_text_1',
			array(
				'label' => '¿Quien Soy?',
				'section' => 'wpga_esp_texts',
				'settings' => 'wpga_esp_text_1'
			)
		));

		$wp_customize->add_control(new wpga_customize_textarea_control(
			$wp_customize,
			'wpga_esp_text_2',
			array(
				'label' => '¿Que puedo hacer?',
				'section' => 'wpga_esp_texts',
				'settings' => 'wpga_esp_text_2'
			)
		));

		$wp_customize->add_control(new wpga_customize_textarea_control(
			$wp_customize,
			'wpga_eng_text_1',
			array(
				'label' => 'Who am I?',
				'section' => 'wpga_eng_texts',
				'settings' => 'wpga_eng_text_1'
			)
		));

		$wp_customize->add_control(new wpga_customize_textarea_control(
			$wp_customize,
			'wpga_eng_text_2',
			array(
				'label' => 'What can I do?',
				'section' => 'wpga_eng_texts',
				'settings' => 'wpga_eng_text_2'
			)
		));

		$wp_customize->add_control(new wpga_text_input_control(
			$wp_customize,
			'wpga_gen_text_name',
			array(
				'label' => 'Tu nombre',
				'section' => 'wpga_gen_texts',
				'settings' => 'wpga_gen_text_name'
			)
		));

		$wp_customize->add_control(new wpga_text_input_control(
			$wp_customize,
			'wpga_gen_text_description',
			array(
				'label' => 'Descripción',
				'section' => 'wpga_gen_texts',
				'settings' => 'wpga_gen_text_description'
			)
		));

		$wp_customize->add_control(new wpga_text_input_control(
			$wp_customize,
			'wpga_gen_text_footer',
			array(
				'label' => 'Texto del footer',
				'section' => 'wpga_gen_texts',
				'settings' => 'wpga_gen_text_footer'
			)
		));


		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'wpga_section_1_bg',
			array(
				'label' => 'Fondo de la section 1',
				'section' => 'wpga_colors_schema',
				'settings' => 'wpga_section_1_bg'
			)
		));		

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'wpga_section_2_bg',
			array(
				'label' => 'Fondo de la section 2',
				'section' => 'wpga_colors_schema',
				'settings' => 'wpga_section_2_bg'
			)
		));		

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'wpga_footer_bg',
			array(
				'label' => 'Fondo del Footer',
				'section' => 'wpga_colors_schema',
				'settings' => 'wpga_footer_bg'
			)
		));		
	}
	add_action('customize_register', 'wpga_customizer_settings');

	function wpga_styles_customizer()
	{
		$footer_bg = get_option('wpga_footer_bg');
		$section_1_bg = get_option('wpga_section_1_bg');
		$section_2_bg = get_option('wpga_section_2_bg');

		?>
			<style>
				main .section-1 {
					background: <?php echo $section_1_bg ?> !important;
				}

				main .section-2 {
					background: <?php echo $section_2_bg ?> !important;
				}

				footer {
					background: <?php echo $footer_bg ?> !important;
				}
			</style>
		<?php
	}
	add_action('wp_head', 'wpga_styles_customizer');
?>