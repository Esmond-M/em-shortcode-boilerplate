<?php

   if ( !class_exists( 'Em_Wp_Shortcode_Boilerplate' ) ) {
     class Em_Wp_Shortcode_Boilerplate {  //begin class
        
     private static $instance;

     private function __construct() {
      
     add_action( 'wp_enqueue_scripts', array($this, 'em_enqueue_scripts_styles') );
     add_shortcode( 'test_shortcode', array($this, 'shortcode_content') );
 
    }

    public static function instance() {
       if (!isset(self::$instance)) {
          $className = __CLASS__;
          self::$instance = new $className;
       }
       return self::$instance;
    }
    
    public function em_enqueue_scripts_styles() {
     $ss_version = rand(1,1000);
     //$ss_version = '15.0';
     //Styles
     $plugin_url = plugin_dir_url( __FILE__ );
     wp_enqueue_style('shortcodes-label',$plugin_url . '/css/style.css', array(), $ss_version);
      
    }
     
    public function shortcode_content( $atts ) {
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
   }
    Em_Wp_Shortcode_Boilerplate::instance();
 //-----------------------end class
}
