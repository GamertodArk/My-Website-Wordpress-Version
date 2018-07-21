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