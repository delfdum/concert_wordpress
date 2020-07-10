<?php

function delfConcert_customize_register($wp_customize) {

  $wp_customize->add_section(
  'banner',
    array(
      'title'         => 'Bannière',
      'description'   => 'Description de la section'
    )
  );

  $wp_customize->add_setting(
  'banner_image',
    array(
      'default'       => get_template_directory() . '/assets/images/alex-bracken-unsplash.jpg',
      'type'          => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'banner_image',
      array(
        'label'      => 'Image de fond',
        'section'    => 'banner',
        'setting'    => 'banner_image'
      )
    )
  );

/////////////////////////////////////////////
// pour la page front-page.php-1ere partie

  $wp_customize->add_panel(
    'front_page',
    array(
      'title'         => 'Page d\'accueil principale'
    )
  );
//1er contenair image
  $wp_customize->add_section(
    'fp_container',
    array(
      'title'         => 'Conteneur image',
      'description'   => 'Réglages du conteneur de la page d\'accueil principale',
      'panel'         => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_container_image',
    array(
      'default'       => get_template_directory() . '/assets/images/alex-bracken- unsplash.jpg',
      'type'          => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'fp_container_image',
      array(
        'label'       => 'Image de fond',
        'description' => 'Image de fond du conteneur de la page d\'accueil',
        'section'     => 'fp_container',
        'setting'     => 'fp_container_image'
      )
    )
  );
//effet boxy
  $wp_customize->add_setting(
    'fp_container_boxy',
    array(
    'default'       => false,
    'type'          => 'theme_mod'
    )
  );

  $wp_customize->add_control(
      'fp_container_boxy',
      array(
        'label'       => 'Affichage avec effet boxy',
        'description' => 'Style du conteneur de la page d\'accueil.',
        'section'     => 'fp_container',
        'setting'     => 'fp_container_boxy',
        'type'        => 'checkbox'
      )
  );
//1er titre sur le contenair image
  $wp_customize->add_section(
    'fp_texts',
    array(
      'title'       => 'Textes et styles',
      'description' => 'Réglages pour les textes de la page d\'accueil principale.',
      'panel'       => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title',
    array(
      'default'   => 'Bientôt en concert!',
      'type'      => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title',
    array(
      'label'          => 'Titre principal',
      'description'    => 'Texte du titre principal',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title_size',
    array(
    'default'     => 90,
    'type'        => 'theme_mod'
    )
  );
   //contrôleur choix de la taille du titre
  $wp_customize->add_control(
    'fp_texts_title_size',
    array(
      'label'          => 'Taille du titre',
      'description'    => 'Taille du texte du titre principal',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title_size',
      'type'           => 'number'
    )
  );
// 1er bouton
  $wp_customize->add_section(
    'fp_button',
    array(
      'title'         => 'Bouton',
      'description'   => 'Bouton pour la réservation des billets de la page d\'accueil principale',
      'panel'         => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_button_text',
    array(
      'default'     => 'Réserver mon billet',
      'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_text',
    array(
      'label'       => 'Button',
      'description' => 'Texte du bouton',
      'section'     => 'fp_button',
      'setting'     => 'fp_button_text',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
    'fp_button_url',
    array(
      'default' => '',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_url',
    array(
      'label'       => 'Lien',
      'description' => 'Adresse URL du bouton',
      'section'     => 'fp_button',
      'setting'     => 'fp_button_url',
      'type'        => 'url'
    )
  );

  $wp_customize->add_setting(
    'fp_button_style',
    array(
      'default' => 'btn-style-1',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_style',
    array(
      'label'       => 'Style',
      'description' => 'Style du bouton',
      'section'     => 'fp_button',
      'setting'     => 'fp_button_style',
      'type'        => 'radio',
      'choices'     => array(
        'btn-style-1' => 'Style 1',
        'btn-style-2' => 'Style 2',
        'btn-style-3' => 'Style 3'
      )
    )
  );
////ACTUALITES///////////////////////////////////////

//image
  $wp_customize->add_section(
    'custom_image',
    array(
      'title'       => 'Image partie actualités',
      'description' => 'Réglages du conteneur de la page d\'accueil principale',
      'panel'       => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'custom_container_image',
    array(
      'default'     => get_template_directory() . '/assets/images/yannis-papanastasopoulos-unsplash.jpg',
      'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'custom_container_image',
      array(
        'label'       => 'Image partie actus',
        'description' => 'Image d\'illustration de la partie actus de la page d\'accueil',
        'section'     => 'custom_image',
        'setting'     => 'custom_container_image'
      )
    )
  );
//texte
  $wp_customize->add_section(
    'custom_texts',
    array(
      'title'         => 'Textes et styles partie actus',
      'description'   => 'Réglages pour les textes de la page d\'accueil principale partie Actus.',
      'panel'         => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'custom_texts_title',
    array(
      'default'     => 'Un super groupe de musique',
      'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_texts_title',
    array(
      'label'       => 'Titre secondaire',
      'description' => 'Texte du titre secondaire',
      'section'     => 'custom_texts',
      'setting'     => 'custom_texts_title',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
    'custom_texts_title_size',
    array(
      'default'   => 50,
      'type'      => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_texts_title_size',
    array(
      'label'       => 'Taille du titre secondaire',
      'description' => 'Taille du texte du titre secondaire',
      'section'     => 'custom_texts',
      'setting'     => 'custom_texts_title_size',
      'type'        => 'number'
    )
  );

  $wp_customize->add_setting(
    'custom_texts_description',
    array(
      'default'     => 'Texte actualité personnalisé.',
      'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_texts_description',
    array(
      'label'       => 'Texte',
      'description' => 'Texte actus',
      'section'     => 'custom_texts',
      'setting'     => 'custom_texts_description',
      'type'        => 'textarea'
    )
  );
//button
  $wp_customize->add_section(
    'custom_button',
    array(
      'title'       => 'Bouton actus',
      'description' => 'Réglages pour le bouton 2 partie actus de la page d\'accueil principale',
      'panel'       => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'custom_button_text',
    array(
      'default'     => 'En savoir plus',
      'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_button_text',
    array(
      'label'       => 'Bouton actus',
      'description' => 'Texte du bouton actualité',
      'section'     => 'custom_button',
      'setting'     => 'custom_button_text',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
    'custom_button_url',
    array(
      'default'   => '',
      'type'      => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_button_url',
    array(
      'label'       => 'Lien bouton actus',
      'description' => 'Lien vers page du site du bouton actus',
      'section'     => 'custom_button',
      'setting'     => 'custom_button_url',
      'type'        => 'dropdown-pages'
    )
  );

  $wp_customize->add_setting(
    'custom_button_style',
    array(
      'default'   => 'btn-style-1',
      'type'      =>'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_button_style',
    array(
      'label'       => 'Style',
      'description' => 'Style du bouton actus',
      'section'     => 'custom_button',
      'type'        => 'radio',
      'choices'     => array(
        'btn-style-1' => 'Style 1',
        'btn-style-2' => 'Style 2',
        'btn-style-3' => 'Style 3'
      )
    )
  );
///PICTO ET Textes

  $wp_customize->add_section(
    'fp_picto_1',
    array(
      'title'       => 'Picto 1',
      'description' => 'Réglages du picto 1 de la page d\'accueil principale',
      'panel'       => 'front_page'
    )
  );
  $wp_customize->add_setting(
    'fp_container_picto_1',
    array(
    'default'   => get_template_directory() . '/assets/images/picto_candles.png',
    'type'      => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'fp_container_picto_1',
      array(
        'label'       => 'Picto 1',
        'description' => 'Picto 1 du conteneur de la page d\'accueil',
        'section'     => 'fp_picto_1',
        'setting'     => 'fp_container_picto_1'
      )
    )
  );

  $wp_customize->add_section(
    'fp_texts_col_1',
    array(
      'title'       => 'Texte et style 1',
      'description' => 'Réglages pour le texte 1 de la page d\'accueil principale',
      'panel'       => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title_col_1',
    array(
      'default'   => 'Concert célébration',
      'type'      => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title_col_1',
    array(
      'label'       => 'Titre 1',
      'description' => 'Texte du titre 1',
      'section'     => 'fp_texts_col_1',
      'setting'     => 'fp_texts_title_col_1',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title_size_col_1',
    array(
      'default' => 20,
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title_size_col_1',
    array(
      'label'       => 'Taille du titre 1',
      'description' => 'Taille du texte du titre 1',
      'section'     => 'fp_texts_col_1',
      'setting'     => 'fp_texts_title_size_col_1',
      'type'        => 'number'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_description_col_1',
    array(
      'default' => 'Texte 1',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_texts_description_col_1',
    array(
      'label'       => 'Texte',
      'description' => 'Texte colonne',
      'section'     => 'fp_texts_col_1',
      'setting'     => 'fp_texts_description_col_1',
      'type'        => 'textarea'
    )
  );

// 2eme PICTO ET TEXTE

    $wp_customize->add_section(
      'fp_picto_2',
      array(
        'title'       => 'Picto 2',
        'description' => 'Réglages du picto 2 du contenair de la page d\'accueil principale',
        'panel'       => 'front_page'
      )
    );

    $wp_customize->add_setting(
      'fp_container_picto_2',
      array(
        'default' => get_template_directory() . '/assets/images/picto_sound.png',
        'type'    => 'theme_mod'
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Image_control(
        $wp_customize,
        'fp_container_picto_2',
        array(
          'label'       => 'Picto 2',
          'description' => 'Picto 2 de la page d\'accueil',
          'section'     => 'fp_picto_2',
          'setting'     => 'fp_container_picto_2'
        )
      )
    );

    $wp_customize->add_section(
      'fp_texts_col_2',
      array(
        'title'       => 'Texte et style 2',
        'description' => 'Réglages pour le texte 2 de la page d\'accueil principale',
        'panel'       => 'front_page'
      )
    );

    $wp_customize->add_setting(
      'fp_texts_title_col_2',
      array(
        'default'     => 'L\'amour de la musique',
        'type'        => 'theme_mod'
      )
    );

    $wp_customize->add_control(
      'fp_texts_title_col_2',
      array(
        'label'       => 'Titre 2',
        'description' => 'Texte du titre 2',
        'section'     => 'fp_texts_col_2',
        'setting'     => 'fp_texts_title_col_2',
        'type'        => 'text'
      )
    );

    $wp_customize->add_setting(
      'fp_texts_title_size_col_2',
      array(
        'default'   => 20,
        'type'      => 'theme_mod'
      )
    );

    $wp_customize->add_control(
      'fp_texts_title_size_col_2',
      array(
        'label'       => 'Taille du titre 2',
        'description' => 'Taille du texte du titre 2',
        'section'     => 'fp_texts_col_2',
        'setting'     => 'fp_texts_title_size_col_2',
        'type'        => 'number'
      )
    );

    $wp_customize->add_setting(
      'fp_texts_description_col_2',
      array(
        'default'   => 'Texte 2',
        'type'      => 'theme_mod'
      )
    );

    $wp_customize->add_control(
      'fp_texts_description_col_2',
      array(
        'label'       => 'Texte',
        'description' => 'Texte colonne',
        'section'     => 'fp_texts_col_2',
        'setting'     => 'fp_texts_description_col_2',
        'type'        => 'textarea'
      )
    );

//3e PICTO ET TEXTE

      $wp_customize->add_section(
        'fp_picto_3',
        array(
          'title'       => 'Picto 3',
          'description' => 'Réglages du picto 3 du contenair la page d\'accueil principale',
          'panel'       => 'front_page'
        )
      );

      $wp_customize->add_setting(
        'fp_container_picto_3',
        array(
          'default'   => get_template_directory() . '/assets/images/picto_ticket.png',
          'type'      => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        new WP_Customize_Image_control(
          $wp_customize,
          'fp_container_picto_3',
          array(
            'label'       => 'Picto 3',
            'description' => 'Picto 3 de la page d\'accueil',
            'section'     => 'fp_picto_3',
            'setting'     => 'fp_container_picto_3'
          )
        )
      );

      $wp_customize->add_section(
        'fp_texts_col_3',
        array(
          'title'       => 'Texte et style 3',
          'description' => 'Réglages pour le texte 3 de la page d\'accueil principale',
          'panel'       => 'front_page'
        )
      );

      $wp_customize->add_setting(
        'fp_texts_title_col_3',
        array(
          'default'   => '+ 3000 tickets en vente',
          'type'      => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        'fp_texts_title_col_3',
        array(
          'label'       => 'Titre 3',
          'description' => 'Texte du titre 3',
          'section'     => 'fp_texts_col_3',
          'setting'     => 'fp_texts_title_col_3',
          'type'        => 'text'
        )
      );

      $wp_customize->add_setting(
        'fp_texts_title_size_col_3',
        array(
          'default' => 20,
          'type'    => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        'fp_texts_title_size_col_3',
        array(
          'label'       => 'Taille du titre 3',
          'description' => 'Taille du texte du titre 3',
          'section'     => 'fp_texts_col_3',
          'setting'     => 'fp_texts_title_size_col_3',
          'type'        => 'number'
        )
      );

      $wp_customize->add_setting(
        'fp_texts_description_col_3',
        array(
          'default'   => 'Texte 3',
          'type'      => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        'fp_texts_description_col_3',
        array(
          'label'       => 'Texte',
          'description' => 'Texte colonne',
          'section'     => 'fp_texts_col_3',
          'setting'     => 'fp_texts_description_col_3',
          'type'        => 'textarea'
        )
      );



//CITATION///////////////////////////
  $wp_customize->add_section(
    'fp_quote',
    array(
      'title'       => 'Citation',
      'description' => 'Réglages pour la citation de la page d\'accueil principale',
      'panel'       => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_quote_text',
    array(
      'default' => 'Ce qui se conçoit bien s\'énonce clairement et les mots pour le dire arrivent aisément.',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_quote_text',
    array(
      'label'       => 'Citation',
      'description' => 'Texte de la citation',
      'section'     => 'fp_quote',
      'setting'     => 'fp_quote_text',
      'type'        => 'textarea'
    )
  );

  $wp_customize->add_setting(
    'fp_quote_source',
    array(
      'default' => 'Boileau',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_quote_source',
    array(
      'label'       => 'Source',
      'description' => 'Nom de l\'auteur de la citation',
      'section'     => 'fp_quote',
      'setting'     => 'fp_quote_source',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
        'fp_quote_style',
        array(
          'default' => 'fp-quote-style-1',
          'type'    => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        'fp_quote_style',
        array(
          'label'       => 'Style',
          'description' => 'Style de la citation',
          'section'     => 'fp_quote',
          'type'        => 'radio',
          'choices'     => array(
            'custom-quote-style-1' => 'Style 1',
            'custom-quote-style-2' => 'Style 2',
            'custom-quote-style-3' => 'Style 3'
          )
        )
      );

  $wp_customize->add_setting(
    'fp_quote_background',
    array(
      'default' => 'custom-quote',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
        new WP_Customize_Color_control(
          $wp_customize,
          'fp_quote_background',
          array(
            'label'       => 'Couleur',
            'description' => 'Couleur de fond du bloc de citation',
            'section'     => 'fp_quote',
            'setting'     => 'fp_quote_background'
          )
        )
      );

//Zone de widgets latérale
$wp_customize->add_section(
   'widget-sidebar',
   array(
     'title'       => 'Zone de widgets latérale',
     'description' => 'Masquer la zone de widgets latérale',
     'panel'       => 'front_page'
   )
 );

 $wp_customize->add_setting(
   'widgets-sidebar',
   array(
   'default'     => false,
   'type'        => 'theme_mod'
   )
 );

 $wp_customize->add_control(
   'widgets-sidebar',
   array(
     'label'       => 'Zone de widgets latérale',
     'description' => 'Masquer la zone de widgets latérale',
     'section'     => 'widget-sidebar',
     'setting'     => 'widgets-sidebar',
     'type'        => 'checkbox'
   )
 );

 // Section Footer pour "tous droits réservés en bas de page"
       $wp_customize->add_section(
       'footer',
         array(
           'title'         => 'Footer',
           'description'   => 'Personnalisation du bas de page'
         )
       );

       $wp_customize->add_setting(
         'copyright_text',
         array(
           'default'      => 'Tous droits réservés',
           'type'         => 'theme_mod'
         )
       );

       $wp_customize->add_control(
         'copyright_text',
         array(
           'label'        => 'Texte copyright',
           'description'  => 'Texte du champ copyright',
           'section'      => 'footer',
           'setting'      => 'copyright_text',
           'type'         => 'text'
         )
       );




//BOUTON PAGE 4040
  $wp_customize->add_section(
    'fp_button_3',
    array(
      'title'       => 'Bouton',
      'description' => 'Bouton Retourner à l\'accueil du site',
      'panel'       => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_button_text_3',
    array(
      'default' => 'Retourner à l\'accueil du site',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_text_3',
    array(
      'label'       => 'Button',
      'description' => 'Texte du bouton',
      'section'     => 'fp_button_3',
      'setting'     => 'fp_button_text',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
    'fp_button_url_3',
    array(
      'default' => '',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_url_3',
    array(
      'label'       => 'Lien',
      'description' => 'Adresse URL du bouton',
      'section'     => 'fp_button_3',
      'setting'     => 'fp_button_url',
      'type'        => 'url'
    )
  );

  $wp_customize->add_setting(
    'fp_button_style_3',
    array(
      'default' => 'btn-style-2',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_style_3',
    array(
      'label'       => 'Style',
      'description' => 'Style du bouton',
      'section'     => 'fp_button_3',
      'type'        => 'radio',
      'choices'     => array(
        'btn-style-1' => 'Style 1',
        'btn-style-2' => 'Style 2',
        'btn-style-3' => 'Style 3'
      )
    )
  );



  $wp_customize->add_section( 'delfConcert_search_options', array(
		'panel'     => 'delfConcert_theme_options',
		'title'     => esc_html__( 'Search Options', 'delfConcert' ),
	) );

	delfConcert_register_option( $wp_customize, array(
			'name'              => 'delfConcert_search_text',
			'default'           => esc_html__( 'Search', 'delfConcert' ),
			'sanitize_callback' => 'sanitize_text_field',
			'label'             => esc_html__( 'Search Text', 'delfConcert' ),
			'section'           => 'delfConcert_search_options',
			'type'              => 'text',
		)
	);






}
add_action('customize_register', 'delfConcert_customize_register');

 ?>
