<?php 
	
class dash extends hub_AdminPageFramework {

    public function setUp() {

        $this->setRootMenuPage( 'Hub Advance' ); 

        $this->addSubMenuItem(

            array(
				'title'     => 'Theme',
                'page_slug' => 'hub_theme'
            )
		);
		
		$this->addSettingSections(
            'hub_theme',
            array(
                'section_id' => 'main',
                'title' => 'Sites Advance controll',
                'description' => 'Sites Logo, Google map, Contact & Info editing.',
            )
        );
		
		$this->addSettingFields(
            'main',
            array(
                'field_id' => 'logo',
                'type' => 'image',
                'title' => 'Site Logo',
                'default' => get_stylesheet_directory_uri() . '/images/logo.png'
            ),
			array(
                'field_id' => 'image',
                'type' => 'image',
                'title' => 'Social Logo',
                'default' => get_stylesheet_directory_uri() . '/images/logo.png'
            ),
            array(
                'field_id' => 'title',
                'type' => 'text',
                'title' => 'Social Title',
                'default' => bloginfo('name')
            ),
			array(
                'field_id' => 'details',
                'type' => 'text',
                'title' => 'Social Description',
                'default' => 'Details'
            ),
			array(
                'field_id' => 'cf7',
                'type' => 'textarea',
                'title' => 'Contact Form 7 form ShortCode',
                'default' => '[contact-form-7 id="117" title="Contact form 1"]'
            ),
            array(
                'field_id' => 'map',
                'type' => 'textarea',
                'title' => 'Google Map',
                'default' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424396.3176723366!2d150.92243255000002!3d-33.7969235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1431587453420"></iframe>'
            ),
            array(
                'field_id' => 'key',
                'type' => 'textarea',
                'title' => 'SEO Keyword',
                'default' => 'Hotel'
            ),
            array(
                'field_id' => 'description',
                'type' => 'textarea',
                'title' => 'SEO Description',
                'default' => 'Details'
            )
        );
		
    }


	
	

}

new dash;