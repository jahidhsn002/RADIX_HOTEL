<?php
 
class Feature extends hub_AdminPageFramework_PostType {
        
    public function setUp() {
 
        $this->setArguments(
            array( 
				'labels' => array(
                    'name'               => 'Feature',
                    'add_new_item'       => __( 'Add Feature' ),
                    'plugin_action_link' => __( 'Feature Posts' ),
                ),
                'supports'          => array( 'title', 'editor', 'thumbnail' ),
                'public'            => true,
                'menu_icon'         => 'dashicons-images-alt',
            )    
        );
 
    }
    
}
 
new Feature( 'feature' ); 


class Facility extends hub_AdminPageFramework_PostType {
        
    public function setUp() {
		
		$this->setArguments(
            array(
				'labels' => array(
                    'name'               => 'Facility',
                    'add_new_item'       => __( 'Add Facility' ),
                    'plugin_action_link' => __( 'Facility Posts' ),
                ),
                'supports'          => array( 'title', 'editor' ),
                'public'            => true,
                'menu_icon'         => 'dashicons-images-alt',
            )   
        );
 
    }
    
}
 
new Facility( 'facility' );

class Gallery extends hub_AdminPageFramework_PostType {
        
    public function setUp() {
		
		$this->setArguments(
            array(
				'labels' => array(
                    'name'               => 'Gallery',
                    'add_new_item'       => __( 'Add Image' ),
                    'plugin_action_link' => __( 'Gallery Images' ),
                ),
                'supports'          => array( 'thumbnail' ),
                'public'            => true,
                'menu_icon'         => 'dashicons-images-alt',
            )   
        );
 
    }
    
}
 
new Gallery( 'gallery' );

class Service extends hub_AdminPageFramework_PostType {
        
    public function setUp() {
		
		$this->setArguments(
            array(
				'labels' => array(
                    'name'               => 'Service',
                    'add_new_item'       => __( 'Add Service' ),
                    'plugin_action_link' => __( 'Our Service' ),
                ),
                'supports'          => array( 'title', 'editor', 'thumbnail' ),
                'public'            => true,
                'menu_icon'         => 'dashicons-images-alt',
            )   
        );
 
    }
    
}
 
new Service( 'service' );

class Package extends hub_AdminPageFramework_PostType {
        
    public function setUp() {
		
		$this->setArguments(
            array(
				'labels' => array(
                    'name'               => 'Package',
                    'add_new_item'       => __( 'Add Package' ),
                    'plugin_action_link' => __( 'Our Package' ),
                ),
                'supports'          => array( 'title', 'editor', 'thumbnail' ),
                'public'            => true,
                'menu_icon'         => 'dashicons-images-alt',
            )   
        );
 
    }
    
}
 
new Package( 'package' );

class Awards extends hub_AdminPageFramework_PostType {
        
    public function setUp() {
		
		$this->setArguments(
            array(
				'labels' => array(
                    'name'               => 'Awards',
                    'add_new_item'       => __( 'Add Awards' ),
                    'plugin_action_link' => __( 'Our Awards' ),
                ),
                'supports'          => array( 'title', 'editor' ),
                'public'            => true,
                'menu_icon'         => 'dashicons-images-alt',
            )   
        );
 
    }
    
}
 
new Awards( 'awards' );

class Team extends hub_AdminPageFramework_PostType {
        
    public function setUp() {
		
		$this->setArguments(
            array(
				'labels' => array(
                    'name'               => 'Team',
                    'add_new_item'       => __( 'Add Team' ),
                    'plugin_action_link' => __( 'Our Team' ),
                ),
                'supports'          => array( 'title', 'editor', 'thumbnail' ),
                'public'            => true,
                'menu_icon'         => 'dashicons-images-alt',
            )   
        );
 
    }
	
    
}
 
new Team( 'team' );

class Room extends hub_AdminPageFramework_PostType {
        
    public function setUp() {
		
		$this->setArguments(
            array(
				'labels' => array(
                    'name'               => 'Room',
                    'add_new_item'       => __( 'Add Room' ),
                    'plugin_action_link' => __( 'Our Room' ),
                ),
                'supports'          => array( 'title', 'editor', 'thumbnail' ),
                'public'            => true,
                'menu_icon'         => 'dashicons-images-alt',
            )   
        );
		
		$this->addTaxonomy(
            'type',
            array(                 
                'labels'                => array(
                    'name'          => __( 'Room Type' ),
                    'add_new_item'  => __( 'Add Room  Type' ),
                    'new_item_name' => __( 'New Room Type' )
                ),
                'show_ui'               => true,
                'show_tagcloud'         => false,
                'hierarchical'          => true,
                'show_admin_column'     => true,
                'show_in_nav_menus'     => true,
                'show_table_filter'     => true,
                'show_in_sidebar_menus' => true, 
            )
        );
 
    }
    
}
 
new Room( 'room' );