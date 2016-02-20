<?php
/**
 * Include all files in metaboxes dir
 */
foreach ( glob( get_template_directory() . '/functions/metaboxes/*.php' ) as $metabox )
{
    require_once( $metabox );
}
