<?php
/**
 * Include custom taxonomies
 */
foreach ( glob( get_template_directory() . '/functions/taxonomies/*.php' ) as $taxonomy )
{
    require_once( $taxonomy );
}