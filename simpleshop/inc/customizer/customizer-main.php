<?php

// define('SIMPLESHOP_CUSTOMIZER_CONFIG_ID', 'simpleshop_customizer_settings');
define('SIMPLESHOP_CUSTOMIZER_PANEL_ID', 'simpleshop_customizer_panel');


if (class_exists('Kirki')) {

   new \Kirki\Panel(
      SIMPLESHOP_CUSTOMIZER_PANEL_ID,
      [
         'priority'         => 200,
         'title'            => esc_html__('SimpleShop', 'simpleshop'),
         'description'      => esc_html__('Simpleshop Settings', 'simpleshop'),
      ]
   );
   new \Kirki\Section(
      'simpleshop_homepage',
      [
         'title'            => esc_html__('Homepage Settings', 'simpleshop'),
         'panel'            => SIMPLESHOP_CUSTOMIZER_PANEL_ID,
         'priority'         => 160,
         'active_callback'  => function () {
            return is_page_template('page-templates/homepage.php'); // To Show Homepage setting section only in homepage.php
         }
      ]
   );

   // ::::::: Homepage Category Product Section Starts ::::::::
   new \Kirki\Field\Checkbox_Switch(
      [
         'settings'    => 'simpleshop_homepage_display_categories',
         'label'       => esc_html__('Display Category Section', 'simpleshop'),
         'section'     => 'simpleshop_homepage',
         'default'     => 'on',
         'choices'     => [
            'on'  => esc_html__('Show', 'simpleshop'),
            'off' => esc_html__('Hide', 'simpleshop'),
         ],
      ]
   );
   new \Kirki\Field\Text(
      [
         'settings'         => 'simpleshop_homepage_category_title',
         'label'            => esc_html__('Category Title', 'simpleshop'),
         'section'          => 'simpleshop_homepage',
         'default'          => esc_html__('Shop By Category', 'simpleshop'),
         'priority'         => 10,
         'active_callback'  => [
            [
               'setting'   => 'simpleshop_homepage_display_categories',
               'operator'  => '==',
               'value'     => true
            ]
         ]
      ]
   );
   
   // Homepage categories column and product count
   new \Kirki\Field\Checkbox_Switch(
      [
         'settings'    => 'simpleshop_homepage_display_categories_number',
         'label'       => esc_html__('Display Category With Numbers', 'simpleshop'),
         'section'     => 'simpleshop_homepage',
         'default'     => '1',
         'choices'     => [
            'on'  => esc_html__('Show', 'simpleshop'),
            'off' => esc_html__('Hide', 'simpleshop'),
         ],
         'active_callback'  => [
            [
               'setting'   => 'simpleshop_homepage_display_categories',
               'operator'  => '==',
               'value'     => true
            ]
         ]
      ]
   );
   new \Kirki\Field\Text(
      [
         'settings'         => 'simpleshop_homepage_categories_col',
         'label'            => esc_html__('Category Column Numbers', 'simpleshop'),
         'section'          => 'simpleshop_homepage',
         'default'          => 3,
         'priority'         => 10,
         'active_callback'  => [
            [
               'setting'   => 'simpleshop_homepage_display_categories',
               'operator'  => '==',
               'value'     => true
            ]
         ]
      ]
   );
   // ::::::: Homepage Category Product Section Ends ::::::::

   // ::::::: Homepage New Arrival Section Starts ::::::::
   new \Kirki\Field\Checkbox_Switch(
      [
         'settings'    => 'simpleshop_homepage_display_newarrival',
         'label'       => esc_html__('Display New Arrival Section', 'simpleshop'),
         'section'     => 'simpleshop_homepage',
         'default'     => 'on',
         'choices'     => [
            'on'  => esc_html__('Show', 'simpleshop'),
            'off' => esc_html__('Hide', 'simpleshop'),
         ],
      ]
   );
   new \Kirki\Field\Text(
      [
         'settings'         => 'simpleshop_homepage_newarrival_title',
         'label'            => esc_html__('New Arrival Title', 'simpleshop'),
         'section'          => 'simpleshop_homepage',
         'default'          => esc_html__('New Arrival', 'simpleshop'),
         'priority'         => 10,
         'active_callback'  => [
            [
               'setting'   => 'simpleshop_homepage_display_newarrival',
               'operator'  => '==',
               'value'     => true
            ]
         ]
      ]
   );
   new \Kirki\Field\Text(
      [
         'settings'         => 'simpleshop_homepage_newarrival_subtitle',
         'label'            => esc_html__('New Arrival Subtitle', 'simpleshop'),
         'section'          => 'simpleshop_homepage',
         'default'          => esc_html__('37 New fashion products arrived recently in our showroom for this winter', 'simpleshop'),
         'priority'         => 10,
         'active_callback'  => [
            [
               'setting'   => 'simpleshop_homepage_display_newarrival',
               'operator'  => '==',
               'value'     => true
            ]
         ]
      ]
   );
   // ::::::: Homepage New Arrival Section Ends ::::::::

   // ::::::: Homepage Promo Section Starts ::::::::
   new \Kirki\Field\Checkbox_Switch(
      [
         'settings'    => 'simpleshop_homepage_display_promo',
         'label'       => esc_html__('Display Promo Section', 'simpleshop'),
         'section'     => 'simpleshop_homepage',
         'default'     => 'on',
         'choices'     => [
            'on'  => esc_html__('Show', 'simpleshop'),
            'off' => esc_html__('Hide', 'simpleshop'),
         ],
      ]
   );
   new \Kirki\Field\Text(
      [
         'settings'         => 'simpleshop_homepage_promo_title',
         'label'            => esc_html__('Promo Title', 'simpleshop'),
         'section'          => 'simpleshop_homepage',
         'default'          => esc_html__('Up to 50% Off', 'simpleshop'),
         'priority'         => 10,
         'active_callback'  => [
            [
               'setting'   => 'simpleshop_homepage_display_promo',
               'operator'  => '==',
               'value'     => true
            ]
         ]

      ]
   );
   // ::::::: Homepage Promo Section Ends ::::::::

   // ::::::: Homepage Popular Products Section Starts ::::::::
   new \Kirki\Field\Checkbox_Switch(
      [
         'settings'    => 'simpleshop_homepage_display_popular_products',
         'label'       => esc_html__('Display Popular Products Section', 'simpleshop'),
         'section'     => 'simpleshop_homepage',
         'default'     => 'on',
         'choices'     => [
            'on'  => esc_html__('Show', 'simpleshop'),
            'off' => esc_html__('Hide', 'simpleshop'),
         ],
      ]
   );
   new \Kirki\Field\Text(
      [
         'settings'         => 'simpleshop_homepage_popular_products_title',
         'label'            => esc_html__('Popular Products Title', 'simpleshop'),
         'section'          => 'simpleshop_homepage',
         'default'          => esc_html__('Popular Product', 'simpleshop'),
         'priority'         => 10,
         'active_callback'  => [
            [
               'setting'   => 'simpleshop_homepage_display_popular_products',
               'operator'  => '==',
               'value'     => true
            ]
         ]
      ]
   );
   // ::::::: Homepage Popular Products Section Ends ::::::::

   // ::::::: Homepage Offer Section Starts ::::::::
   new \Kirki\Field\Checkbox_Switch(
      [
         'settings'    => 'simpleshop_homepage_display_offer',
         'label'       => esc_html__('Display Offer Section', 'simpleshop'),
         'section'     => 'simpleshop_homepage',
         'default'     => 'on',
         'choices'     => [
            'on'  => esc_html__('Show', 'simpleshop'),
            'off' => esc_html__('Hide', 'simpleshop'),
         ],
      ]
   );
   // ::::::: Homepage Offer Section Ends ::::::::

   // ::::::: Homepage Flickr Section Starts ::::::::
   new \Kirki\Field\Checkbox_Switch(
      [
         'settings'    => 'simpleshop_homepage_display_flickr',
         'label'       => esc_html__('Display Flickr Section', 'simpleshop'),
         'section'     => 'simpleshop_homepage',
         'default'     => 'on',
         'choices'     => [
            'on'  => esc_html__('Show', 'simpleshop'),
            'off' => esc_html__('Hide', 'simpleshop'),
         ],
      ]
   );
   new \Kirki\Field\Text(
      [
         'settings'         => 'simpleshop_homepage_flickr_title',
         'label'            => esc_html__('Flickr Title', 'simpleshop'),
         'section'          => 'simpleshop_homepage',
         'default'          => esc_html__('Simple Shop on Flickr', 'simpleshop'),
         'priority'         => 10,
         'active_callback'  => [
            [
               'setting'   => 'simpleshop_homepage_display_flickr',
               'operator'  => '==',
               'value'     => true
            ]
         ]
      ]
   );
   // ::::::: Homepage Flickr Section Ends ::::::::

}
