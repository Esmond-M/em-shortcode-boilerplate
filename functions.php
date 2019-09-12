<?php


function em_enqueue_scripts_styles() {
     $ss_version = rand(1,1000);
     //$ss_version = '15.0';
    //Styles
    $plugin_url = plugin_dir_url( __FILE__ );
    wp_enqueue_style('shortcodes-label',$plugin_url . '/css/style.css', array(), $ss_version);
  
  }
  add_action('wp_enqueue_scripts','em_enqueue_scripts_styles');


function shortcode_content( $atts ) {
	$a = shortcode_atts( array(
		'class' => ' '
	 ), $atts );
	ob_start();
?>
<div class="<?php echo  $a['class']; ?>">
<form>
         <label class="shortcode-label">First name:</label> <input type="text" name="first_name" />
         <br>
         <label class="shortcode-label">Last name:</label> <input type="text" name="last_name" />
</form>
</div>
<?php 
$shortcode_html = ob_get_clean();
return $shortcode_html;
 }
 
 add_shortcode( 'test_shortcode', 'shortcode_content' );