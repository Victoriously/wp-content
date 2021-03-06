<?php
/**
 * The template file is used for displaying social media links.
 *
 * @package Starter_Theme
 */

function starter_theme_social_profiles( $wp_customize ) {
	
    $wp_customize->add_section(
        'custom_social_profiles',
        array(
            'title'             => __('Social Links', 'starter-theme'),
            'capability'        => 'edit_theme_options',
            'description'       => __('Edit your social media profiles here and they will be updated throughout the website.', 'starter-theme'),
            'priority'          => 10,
        )
    );

    /**
     *
     * Instagram
     *
     */

    $wp_customize->add_setting(
        'social_profile_instagram',
        array(
            'default' => '',
            'sanitize_callback' => 'starter_theme_customize_sanitize',
        )
    );

    $wp_customize->add_control(
        'social_profile_instagram',
        array(
            'label'     => __('Instagram Username', 'starter-theme'),
            'section'   => 'custom_social_profiles',
            'type'      => 'link',
        )
    );

    /**
     *
     * Linkedin
     *
     */

    $wp_customize->add_setting(
        'social_profile_linkedin',
        array(
            'default' => '',
            'sanitize_callback' => 'starter_theme_customize_sanitize',

        )
    );

    $wp_customize->add_control(
        'social_profile_linkedin',
        array(
            'label'         => __('Linkedin Profile', 'starter-theme'),
            'description'   => __('Full URL for your LinkedIn profile', 'starter-theme'),
            'section'       => 'custom_social_profiles',
            'type'          => 'link',
        )
    );

    /**
     *
     * Twitter
     *
     */

    $wp_customize->add_setting(
        'social_profile_twitter',
        array(
            'default' => '',
            'sanitize_callback' => 'starter_theme_customize_sanitize',

        )
    );

    $wp_customize->add_control(
        'social_profile_twitter',
        array(
            'label'         => __('Twitter Username', 'starter-theme'),
            'description'   => __('Username only (no @ symbol)', 'starter-theme'),
            'section'       => 'custom_social_profiles',
            'type'          => 'link',
        )
    );
}
add_action( 'customize_register', 'starter_theme_social_profiles' );