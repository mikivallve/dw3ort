<?php
// Carga primero el CSS de Astra (tema padre) y después el del hijo.
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'astra-parent', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'reserva-child', get_stylesheet_uri(), array( 'astra-parent' ) );
} );
