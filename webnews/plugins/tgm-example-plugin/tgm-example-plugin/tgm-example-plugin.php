<?php
/**
 * TGM Example Plugin.
 *
 * Example plugin to demonstrate the ability to handle bundled plugins with the
 * TGM Plugin Activation library.
 *
 * @package     WordPress\Plugins\TGM Example Plugin
 * @author      Thomas Griffin <thomas@thomasgriffinmedia.com>
 * @link        https://github.com/thomasgriffin/TGM-Plugin-Activation
 * @version     1.0.1
 * @copyright   2011-2016 Thomas Griffin
 * @license     http://creativecommons.org/licenses/GPL/3.0/ GNU General Public License, version 3 or higher
 *
 * @wordpress-plugin
 * Plugin Name: TGM Example Plugin
 * Plugin URI:  http://tgmpluginactivation.com/
 * Description: This is an example plugin to going along with the TGM Plugin Activation class.
 * Author:      Thomas Griffin
 * Author URI:  http://thomasgriffinmedia.com/
 * Version:     1.0.1
 * Text Domain: tgm-example-plugin
 * Domain Path: /languages
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 3, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Avoid direct calls to this file.
if ( ! function_exists( 'add_action' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! function_exists( 'tgm_php_mysql_versions' ) ) {

	add_action( 'rightnow_end', 'tgm_php_mysql_versions', 9 );

	/**
	 * Displays the current server's PHP and MySQL versions right below the WordPress version
	 * in the Right Now dashboard widget.
	 *
	 * @since 1.0.0
	 */
	function tgm_php_mysql_versions() {
		echo wp_kses(
			sprintf(
				/* TRANSLATORS: %1 = php version nr, %2 = mysql version nr. */
				__( '<p>You are running on <strong>PHP %1$s</strong> and <strong>MySQL %2$s</strong>.</p>', 'tgm-example-plugin' ),
				phpversion(),
				$GLOBALS['wpdb']->db_version()
			),
			array(
				'p' => array(),
				'strong' => array(),
			)
		);
	}
}
