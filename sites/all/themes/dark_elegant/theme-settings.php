<?php

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function dark_elegant_form_system_theme_settings_alter(&$form, &$form_state) {

    $form['dark_elegant_settings'] = array(
        '#type' => 'fieldset',
        '#title' => t('Dark Elegant Settings'),
        '#collapsible' => FALSE,
        '#collapsed' => FALSE,
    );

    $form['dark_elegant_settings']['layout'] = array(
        '#type' => 'fieldset',
        '#title' => t('Layout'),
        '#weight' => -2,
        '#description' => t("Select a layout for the Sidebar."),
    );

    $form['dark_elegant_settings']['layout']['sidebar_layout'] = array(
        '#type' => 'select',
        '#title' => t('Sidebar'),
        '#default_value' => theme_get_setting('sidebar_layout', 'dark_elegant'),
        '#description' => t('Select a layout for the Sidebar to be displayed (Right hand side or Left hand side).'),
        '#options' => array(
            'right_sidebar' => t('Right Sidebar'),
            'left_sidebar' => t('Left Sidebar'),
        ),
    );
    $form['dark_elegant_settings']['breadcrumbs'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show breadcrumbs in a page'),
        '#default_value' => theme_get_setting('breadcrumbs', 'dark_elegant'),
        '#description' => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
    );
    $form['dark_elegant_settings']['slideshow'] = array(
        '#type' => 'fieldset',
        '#title' => t('Front Page Slideshow'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );
    $form['dark_elegant_settings']['slideshow']['slideshow_display'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show slideshow'),
        '#default_value' => theme_get_setting('slideshow_display', 'dark_elegant'),
        '#description' => t("Check this option to show Slideshow in front page. Uncheck to hide."),
    );
    $form['dark_elegant_settings']['slideshow']['slide'] = array(
        '#markup' => t('You can change the description and URL of each slide in the following Slide Setting fieldsets.'),
    );
    $form['dark_elegant_settings']['slideshow']['slide1'] = array(
        '#type' => 'fieldset',
        '#title' => t('Slide 1'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
    );
    $form['dark_elegant_settings']['slideshow']['slide1']['slide1_head'] = array(
        '#type' => 'textfield',
        '#title' => t('Slide Headline'),
        '#default_value' => theme_get_setting('slide1_head', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide1']['slide1_desc'] = array(
        '#type' => 'textarea',
        '#title' => t('Slide Description'),
        '#default_value' => theme_get_setting('slide1_desc', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide1']['slide1_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Slide URL'),
        '#default_value' => theme_get_setting('slide1_url', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide2'] = array(
        '#type' => 'fieldset',
        '#title' => t('Slide 2'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
    );
    $form['dark_elegant_settings']['slideshow']['slide2']['slide2_head'] = array(
        '#type' => 'textfield',
        '#title' => t('Slide Headline'),
        '#default_value' => theme_get_setting('slide2_head', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide2']['slide2_desc'] = array(
        '#type' => 'textarea',
        '#title' => t('Slide Description'),
        '#default_value' => theme_get_setting('slide2_desc', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide2']['slide2_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Slide URL'),
        '#default_value' => theme_get_setting('slide2_url', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide3'] = array(
        '#type' => 'fieldset',
        '#title' => t('Slide 3'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
    );
    $form['dark_elegant_settings']['slideshow']['slide3']['slide3_head'] = array(
        '#type' => 'textfield',
        '#title' => t('Slide Headline'),
        '#default_value' => theme_get_setting('slide3_head', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide3']['slide3_desc'] = array(
        '#type' => 'textarea',
        '#title' => t('Slide Description'),
        '#default_value' => theme_get_setting('slide3_desc', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide3']['slide3_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Slide URL'),
        '#default_value' => theme_get_setting('slide3_url', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide4'] = array(
        '#type' => 'fieldset',
        '#title' => t('Slide 4'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
    );
    $form['dark_elegant_settings']['slideshow']['slide4']['slide4_head'] = array(
        '#type' => 'textfield',
        '#title' => t('Slide Headline'),
        '#default_value' => theme_get_setting('slide4_head', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide4']['slide4_desc'] = array(
        '#type' => 'textarea',
        '#title' => t('Slide Description'),
        '#default_value' => theme_get_setting('slide4_desc', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide4']['slide4_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Slide URL'),
        '#default_value' => theme_get_setting('slide4_url', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide5'] = array(
        '#type' => 'fieldset',
        '#title' => t('Slide 5'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
    );
    $form['dark_elegant_settings']['slideshow']['slide4']['slide5_head'] = array(
        '#type' => 'textfield',
        '#title' => t('Slide Headline'),
        '#default_value' => theme_get_setting('slide5_head', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide5']['slide5_desc'] = array(
        '#type' => 'textarea',
        '#title' => t('Slide Description'),
        '#default_value' => theme_get_setting('slide5_desc', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slide5']['slide5_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Slide URL'),
        '#default_value' => theme_get_setting('slide5_url', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['slideshow']['slideimage'] = array(
        '#markup' => t('To change the Slide Images, Replace the slide-image-1.jpg, slide-image-2.jpg and slide-image-3.jpg in the images folder of the Professional theme folder.'),
    );
    $form['dark_elegant_settings']['slideshow']['intro_text'] = array(
        '#type' => 'textfield',
        '#title' => t('Intro Text'),
        '#default_value' => theme_get_setting('intro_text', 'dark_elegant'),
    );
    $form['dark_elegant_settings']['socialicon'] = array(
        '#type' => 'fieldset',
        '#title' => t('Social Icon'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );
    $form['dark_elegant_settings']['socialicon']['socialicon_display'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show Social Icon'),
        '#default_value' => theme_get_setting('socialicon_display', 'dark_elegant'),
        '#description' => t("Check this option to show Social Icon. Uncheck to hide."),
    );
    $form['dark_elegant_settings']['socialicon']['twitter_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Twitter Profile URL'),
        '#default_value' => theme_get_setting('twitter_url', 'dark_elegant'),
        '#description' => t("Enter your Twitter Profile URL. Leave blank to hide."),
    );
    $form['dark_elegant_settings']['socialicon']['facebook_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Facebook Profile URL'),
        '#default_value' => theme_get_setting('facebook_url', 'dark_elegant'),
        '#description' => t("Enter your Facebook Profile URL. Leave blank to hide."),
    );
    $form['dark_elegant_settings']['socialicon']['google_plus_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Google Plus Address'),
        '#default_value' => theme_get_setting('google_plus_url', 'dark_elegant'),
        '#description' => t("Enter your Google Plus URL. Leave blank to hide."),
    );
    $form['dark_elegant_settings']['socialicon']['pinterest_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Pinterest Address'),
        '#default_value' => theme_get_setting('pinterest_url', 'dark_elegant'),
        '#description' => t("Enter your Pinterest URL. Leave blank to hide."),
    );
}
