<?php
/**
 * lancenter Theme Customizer
 *
 * @package lancenter
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lancenter_customize_register($wp_customize)
{
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
  $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

  if (isset($wp_customize->selective_refresh)) {
    $wp_customize->selective_refresh->add_partial(
      'blogname',
      array(
        'selector' => '.site-title a',
        'render_callback' => 'lancenter_customize_partial_blogname',
      )
    );
    $wp_customize->selective_refresh->add_partial(
      'blogdescription',
      array(
        'selector' => '.site-description',
        'render_callback' => 'lancenter_customize_partial_blogdescription',
      )
    );
  }

  $wp_customize->add_section('lancenter_contact', array(
    'title' => __('Liên hệ', 'lancenter'),
    'priority' => 160,
    'description' => 'Contact config',
  ));

  $wp_customize->add_setting('contact_form', array(
    'default' => '',
  ));
  $wp_customize->add_control('contact_form', [
    'settings' => 'contact_form',
    'label' => __('Contact form', 'lancenter'),
    'section' => 'lancenter_contact',
    'type' => 'text',
  ]);
}

add_action('customize_register', 'lancenter_customize_register');


function lancenter_my_customize_register($wp_customize)
{
  $wp_customize->add_section('lancenter_contact', array(
    'title' => __('Contact config', 'lancenter'),
    'priority' => 160,
    'description' => 'Contact config',
  ));

  $wp_customize->add_setting('contact_form', array(
    'default' => '',
  ));
  $wp_customize->add_control('contact_form', [
    'settings' => 'contact_form',
    'label' => __('Contact form', 'lancenter'),
    'section' => 'lancenter_contact',
    'type' => 'text',
  ]);
}

add_action('customize_register', 'lancenter_my_customize_register');
/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function lancenter_customize_partial_blogname()
{
  bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function lancenter_customize_partial_blogdescription()
{
  bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function lancenter_customize_preview_js()
{
  wp_enqueue_script('lancenter-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}

add_action('customize_preview_init', 'lancenter_customize_preview_js');
