<?php
/**
 *******************************************************************************
 * //woocommerce/taxonomy-product_cat.php
 *******************************************************************************
 *
 * The template for displaying products in a 
 * product category. Simply includes the archive 
 * template.
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

if ( ! defined( 'ABSPATH' ) ) 
{
    exit; // Exit if accessed directly
}

wc_get_template( 'archive-product.php' );
