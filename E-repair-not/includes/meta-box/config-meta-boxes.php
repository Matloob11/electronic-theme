<?php
/**
 * File Name: config-meta-boxes.php
 *
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 *
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'CAR_';

global $meta_boxes;

$meta_boxes = array();

// 2nd meta box
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'gallery-meta-box',

    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => __('Gallery Images','framework'),

    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array( 'portfolio' ),

    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',

    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',

    // List of meta fields
    'fields' => array(
        array(
            'name'             => __('Upload Gallery Images','framework'),
            'id'               => "{$prefix}gallery",
            'desc' => __('Images should have minimum width of 830px and minimum height of 323px, Bigger size images will be cropped automatically.','framework'),
            'type'             => 'image_advanced',
            'max_file_uploads' => 100
        )
    )
);


/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function REAL_HOMES_register_meta_boxes()
{
    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if ( !class_exists( 'RW_Meta_Box' ) )
        return;

    global $meta_boxes;
    foreach ( $meta_boxes as $meta_box ){
        new RW_Meta_Box( $meta_box );
    }
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'REAL_HOMES_register_meta_boxes' );

?>