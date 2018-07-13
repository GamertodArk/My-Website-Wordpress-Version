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

		/*------- Settings --------*/
		$wp_customize->add_setting('wpga_esp_text_1', array(
			'default' => 'Hola!, soy Elvis Garcia'
		));

		$wp_customize->add_setting('wpga_esp_text_2', array(
			'default' => 'Soy desarrollador web'
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

	}
	add_action('customize_register', 'wpga_customizer_settings');
?>