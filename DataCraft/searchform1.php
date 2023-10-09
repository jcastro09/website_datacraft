<?php
/**
 * Search Form template
 *
 * @package DataCraft
 * @author Template Path
 * @version 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <input type="text" name="s"  value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr__( 'Search Keyword....', 'sinco' ); ?>">
</form>