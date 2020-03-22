<?php

declare(strict_types=1);
namespace EmWpShortcodeBoilerplate;

if (!class_exists('EmWpShortcodeBoilerplate')) {


    /**
    Declaring class

    @category Wordpress_Plugin
    @package  Esmond-M
    @author   Esmond Mccain <esmondmccain@gmail.com>
    @license  https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License
    @link     esmondmccain.com
    @return
     */
    class EmWpShortcodeBoilerplate
    {

        /**
        Declaring constructor
         */
        public function __construct()
        {
            add_action(
                'wp_enqueue_scripts',
                [$this, 'emEnqueueScriptsStyles']
            );
            add_shortcode(
                'test_shortcode',
                [$this, 'shortcodeContent']
            );
 
        }
        /**
        Loading styles and scripts

        @return void
         */
        public function emEnqueueScriptsStyles()
        {
            $ss_version = rand(1, 1000);
            //$ss_version = '15.0';
            //Styles
            $plugin_url = plugin_dir_url(__FILE__);
            wp_enqueue_style(
                'shortcodes-label',
                $plugin_url .
                '/css/style.css', [], $ss_version
            );
        }
        /**
        Loading styles and scripts

        @param $atts

        @return void
         */
        public function shortcodeContent($atts)
        {
            $a = shortcode_atts(
                [
                'class' => ' '
                ],
                $atts
            );
            ob_start();
            ?>
    <div class="<?php echo  $a['class']; ?>">
    <form>
      <label class="shortcode-label">First name:
      </label> <input type="text" name="first_name" />
      <br>
      <label class="shortcode-label">Last name:
      </label> <input type="text" name="last_name" />
    </form>
    </div>
            <?php
             $shortcode_html = ob_get_clean();
             return $shortcode_html;
        }
    }
}
