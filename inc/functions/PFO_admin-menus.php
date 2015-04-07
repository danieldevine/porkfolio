<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    PFO_admin-menus.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/inc/functions/PFO_admin-menus.php
  *
  * set up the user options page for the theme
  *
  */

add_action( 'admin_menu', 'PFO_add_admin_menu' );
add_action( 'admin_init', 'PFO_settings_init' );


function PFO_add_admin_menu(  ) {

	add_options_page( 'Porkfolio', 'Porkfolio', 'manage_options', 'porkfolio', 'PFO_options_page' );

}


function PFO_settings_init(  ) {

	register_setting( 'pluginPage', 'PFO_settings' );

	add_settings_section(
		'PFO_pluginPage_section',
		__( 'Your section description', 'wordpress' ),
		'PFO_settings_section_callback',
		'pluginPage'
	);

	add_settings_field(
		'PFO_text_field_0',
		__( 'Settings field description', 'wordpress' ),
		'PFO_text_field_0_render',
		'pluginPage',
		'PFO_pluginPage_section'
	);

	add_settings_field(
		'PFO_text_field_1',
		__( 'Settings field description', 'wordpress' ),
		'PFO_text_field_1_render',
		'pluginPage',
		'PFO_pluginPage_section'
	);


}


function PFO_text_field_0_render(  ) {

	$options = get_option( 'PFO_settings' );
	?>
	<input type='text' name='PFO_settings[PFO_text_field_0]' value='<?php echo $options['PFO_text_field_0']; ?>'>
	<?php

}


function PFO_text_field_1_render(  ) {

	$options = get_option( 'PFO_settings' );
	?>
	<input type='text' name='PFO_settings[PFO_text_field_1]' value='<?php echo $options['PFO_text_field_1']; ?>'>
	<?php

}


function PFO_settings_section_callback(  ) {

	echo __( 'This section description', 'wordpress' );

}


function PFO_options_page(  ) {

	?>
	<form action='options.php' method='post'>

		<h2>Porkfolio</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}

?>
