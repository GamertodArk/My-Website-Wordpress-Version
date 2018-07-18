<?php  
	class wpga_customize_textarea_control extends WP_Customize_Control
	{
	
		public $type = 'textarea';

		public function render_content()
		{
			echo '<label class="customize-control-title" for="'. $this->id .'">'. esc_html($this->label) .'</label>';
			echo '<textarea  id="'. $this->id .'" rows="2" style ="width: 100%;"';
			$this->link();
			 echo '>' . esc_textarea($this->value()) . '</textarea>';

		}

	}

	class wpga_text_input_control extends WP_Customize_Control
	{
		
		public $type = 'input';

		public function render_content()
		{
			echo '<label for="'. $this->id .'"><strong>'. esc_html($this->label) .'</strong></label>';
			echo '<input id="'. esc_attr($this->id) .'" value="'. esc_attr($this->value()) .'" type="text"';
				$this->link();
			echo '>';	
		}
	}
?>