<?php
/* Template Name: Coming Soon Page */
/**
 * @package SINCO
 * @author  TemplatePath
 * @version 1.0
 */
?>
<?php 

get_header('') ;

while (have_posts()): the_post();
     the_content(); 
endwhile; 

get_footer('coming-soon') ; 

?>
