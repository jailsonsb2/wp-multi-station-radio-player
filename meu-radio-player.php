<?php
/*
Plugin Name: Meu Radio Player
Plugin URI:  https://jailson.es/meu-radio-player
Description: Um plugin para exibir um player de rádio no rodapé do site.
Version:     1.0.0
Author:      Jailson Bezerra
Author URI:  https://jailson.es
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: meu-radio-player
*/

// Impede o acesso direto ao arquivo
if (!defined('ABSPATH')) {
  exit;
}

// Função para registrar os scripts e estilos do plugin
function meu_radio_player_enqueue_scripts() {
  wp_enqueue_style('meu-radio-player-style', plugins_url('css/main.min.css', __FILE__));
  wp_enqueue_style('meu-radio-player-custom-style', plugins_url('custom.css', __FILE__));
  wp_enqueue_script('meu-radio-player-color-thief', 'https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js', array(), '2.3.0', true);
  wp_enqueue_script('meu-radio-player-config', plugins_url('config.js', __FILE__), array(), '1.0.0', true);
  wp_enqueue_script('meu-radio-player-script', plugins_url('js/main.js', __FILE__), array('meu-radio-player-config'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'meu_radio_player_enqueue_scripts');

// Função para exibir o player no rodapé
function meu_radio_player_footer() {
  echo '<div id="player-container">';
  include(plugin_dir_path(__FILE__) . 'player.html');
  echo '</div>';
}
add_action('wp_footer', 'meu_radio_player_footer');
?>