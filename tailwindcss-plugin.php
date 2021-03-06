<?php
/*
 * Plugin Name: Talwindcss
 */

function admin_style_tailwindcss() {
	wp_enqueue_style('admin-style-tailwindcss', plugins_url( 'build/tailwindcss.css', __FILE__ ));
}
add_action('admin_enqueue_scripts', 'admin_style_tailwindcss');


function tailwindcss_admin_menu() {
	add_menu_page('Tailwindcss', 'Tailwindcss', 'edit_others_posts', 'tailwindcss', 'tailwindcss_print_page');
}
add_action('admin_menu', 'tailwindcss_admin_menu');

function tailwindcss_print_page() {
	echo '<div class="wrap tailwindcss"><h2>Tailwindcss</h2><button type="button" class="inline text-center bg-blue-500 hover:bg-blue-600 text-white rounded px-8 py-4">Primary</button></div>';
}