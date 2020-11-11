<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Site name', 'loscotletos' ),
		'id'               => 'lc-header-title-field',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'lc-header-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Title logo', 'loscotletos' ),
				'subtitle' => esc_html__( 'Main website name', 'loscotletos' ),
				'default'  => 'LosCotletos',
			),
		),
	)
);
