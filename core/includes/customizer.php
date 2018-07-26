<?php 
	function wpga_customizer_settings($wp_customize)
	{
		
		include 'classes/customize_textarea_control.php';

		/*----- Sections -------*/
		$sections[] = array(
			'id' => 'wpga_esp_texts',
			'title' => 'Textos en español'
		);

		$sections[] = array(
			'id' => 'wpga_eng_texts',
			'title' => 'English Texts'			
		);

		$sections[] = array(
			'id' => 'wpga_gen_texts',
			'title' => 'Textos Generales'			
		);

		$sections[] = array(
			'id' => 'wpga_colors_schema',
			'title' => 'Color Schema'			
		);


		foreach ($sections as $section) {
			$wp_customize->add_section($section['id'], array(
				'title' => $section['title']
			));
		}

		/*------- Settings --------*/
		$settings[] = array(
			'type' => null,
			'id' => 'wpga_esp_text_1',
			'default' => 'Hola!, soy Elvis Garcia'
		);

		$settings[] = array(
			'type' => null,
			'id' => 'wpga_esp_text_2',
			'default' => 'Soy desarrollador web'			
		);

		$settings[] = array(
			'type' => null,
			'id' => 'wpga_eng_text_1',
			'default' => 'Hi!, I\'m Elvis Garcia'			
		);

		$settings[] = array(
			'type' => null,
			'id' => 'wpga_eng_text_2',
			'default' => 'I\'m a Web Developer'			
		);

		$settings[] = array(
			'type' => null,
			'id' => 'wpga_gen_text_name',
			'default' => 'Elvis Garcia'			
		);

		$settings[] = array(
			'type' => null,
			'id' => 'wpga_gen_text_description',
			'default' => 'Full Stack - Web Developer'			
		);

		$settings[] = array(
			'type' => null,
			'id' => 'wpga_gen_text_footer',
			'default' => 'Desarrollador Web'			
		);


		$settings[] = array(
			'type' => 'option',
			'id' => 'wpga_section_1_bg',
			'default' => '#ffffff'			
		);

		$settings[] = array(
			'type' => 'option',
			'id' => 'wpga_section_2_bg',
			'default' => '#444444'			
		);

		$settings[] = array(
			'type' => 'option',
			'id' => 'wpga_footer_bg',
			'default' => '#222222'			
		);


		foreach ($settings as $setting) {
			$wp_customize->add_setting($setting['id'], array(
				'default' => $setting['default'],
				'type' => $setting['type']
			));
		}

		/*---------- Controls ----------*/
		$textareas[] = array(
			'label' => '¿Quien Soy?',
			'setting' => 'wpga_esp_text_1',
			'section' => 'wpga_esp_texts'
		);

		$textareas[] = array(
			'label' => '¿Que puedo hacer?',
			'setting' => 'wpga_esp_text_2',
			'section' => 'wpga_esp_texts'

		);

		$textareas[] = array(
			'label' => 'Who am I?',
			'setting' => 'wpga_eng_text_1',
			'section' => 'wpga_eng_texts'
		);

		$textareas[] = array(
			'label' => 'What can I do?',
			'setting' => 'wpga_eng_text_2',
			'section' => 'wpga_eng_texts'

		);

		foreach ($textareas as $textarea) {

			$wp_customize->add_control(new wpga_customize_textarea_control(
				$wp_customize,
				$textarea['setting'],
				array(
					'label' => $textarea['label'],
					'section' => $textarea['section'],
					'settings' => $textarea['setting']
				)
			));				
		}

		// Input Control
		$inputs[] = array(
			'setting' => 'wpga_gen_text_name',
			'label' => 'Tu nombre'
		);

		$inputs[] = array(
			'setting' => 'wpga_gen_text_description',
			'label' => 'Descripción'			
		);

		$inputs[] = array(
			'setting' => 'wpga_gen_text_footer',
			'label' => 'Texto del footer'			
		);

		foreach ($inputs as $input) {

			$wp_customize->add_control(new wpga_text_input_control(
				$wp_customize,
				$input['setting'],
				array(
					'label' => $input['label'],
					'section' => 'wpga_gen_texts',
					'settings' => $input['setting']
				)
			));			

		}

		// Color Schema
		$colors[] = array(
			'setting' => 'wpga_section_1_bg',
			'label' => 'Fondo de la section 1',			
		); 

		$colors[] = array(
			'setting' => 'wpga_section_2_bg',
			'label' => 'Fondo de la section 2',			
		); 

		$colors[] = array(
			'setting' => 'wpga_footer_bg',
			'label' => 'Fondo del Footer',						
		);

		foreach ($colors as $color) {

			$wp_customize->add_control(new WP_Customize_Color_Control(
				$wp_customize,
				$color['setting'],
				array(
					'label' => $color['label'],
					'section' => 'wpga_colors_schema',
					'settings' => $color['setting']
				)
			));						
		}
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