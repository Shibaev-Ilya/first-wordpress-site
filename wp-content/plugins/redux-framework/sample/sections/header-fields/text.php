<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('Site info', 'loscotletos'),
        'id' => 'lc-header-title-field',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
            array(
                'id' => 'lc-header-title',
                'type' => 'text',
                'title' => esc_html__('Website name', 'loscotletos'),
                'default' => 'LosCotletos',
            ),
            array(
                'id' => 'lc-email',
                'type' => 'text',
                'title' => __('Email address', 'redux_docs_generator'),
                'placeholder' => __('example@example.com', 'redux_docs_generator'),
                'validate' => 'email'
            ),
            array(
                'id' => 'lc-phone',
                'type' => 'text',
                'title' => __('Phone number', 'redux_docs_generator'),
                'placeholder' => __('+7 777 777 77 77', 'redux_docs_generator'),
//                'validate' => 'no_special_chars'
            )
        ),
    )
);
