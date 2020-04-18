<?php

/**
Main plugin file.
PHP version 7.3

@category Wordpress_Plugin
@package  Esmond-M
@author   Esmond Mccain <esmondmccain@gmail.com>
@license  https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License
@link     esmondmccain.com
@return
 */
declare(strict_types=1);
namespace EmWpShortcodeBoilerplate;
/**
 * Plugin Name: EM-WP-Shortcodes
 * Plugin URI: https://esmondmccain.com
// phpcs:disable
 * Description: Wordpress plugin boilerplate for adding shortcode to clients website. Currently this plugin adds a generic form using a shortcode "[test_shortcode]".
// phpcs:enable
 * Version: 1.0
 * Author: Esmond Mccain
 * Author URI: https://esmondmccain.com
 */
defined('ABSPATH') or die();
/**
 * Define global constants

 * @param $constant_name
 * @param $value
 *
 * @return array
 */
function emWpShortcodesConstants($constant_name, $value)
{
    $constant_name_prefix = 'EM_WP_Shortcodes_Constants_';
    $constant_name = $constant_name_prefix . $constant_name;
    if (!defined($constant_name))
        define($constant_name, $value);
}
emWpShortcodesConstants('DIR', dirname(plugin_basename(__FILE__)));
emWpShortcodesConstants('BASE', plugin_basename(__FILE__));
emWpShortcodesConstants('URL', plugin_dir_url(__FILE__));
emWpShortcodesConstants('PATH', plugin_dir_path(__FILE__));
emWpShortcodesConstants('SLUG', dirname(plugin_basename(__FILE__)));
require  EM_WP_Shortcodes_Constants_PATH
    . 'includes/classes/EmWpShortcodeBoilerplate.php';
use EmWpShortcodeBoilerplate\EmWpShortcodeBoilerplate;

new EmWpShortcodeBoilerplate;



