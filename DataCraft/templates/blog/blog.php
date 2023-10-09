<?php

/**
 * Blog Content Template
 *
 * @package    WordPress
 * @subpackage DataCraft
 * @author     Template Path
 * @version    1.0
 */

if ( class_exists( 'DataCraft_Resizer' ) ) {
	$img_obj = new DataCraft_Resizer();
} else {
	$img_obj = array();
}

$options = DataCraft_WSH()->option();

$allowed_tags = wp_kses_allowed_html('post');
global $post;
?>
<div <?php post_class(); ?>>
	
    <article class="blog-meta-three tran3s mt-45">
    	<?php if(has_post_thumbnail()){ ?>
        <figure class="post-img m0">
        	<a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>" class="w-100 d-block">
        		<div class="w-100 tran4s">
            		 <?php the_post_thumbnail('DataCraft_1170x440'); ?>
                </div>
         	</a>
        </figure>
        <?php } ?>
        
        <div class="post-data">
            <div class="post-meta">
                <div class="date"><?php echo esc_attr(get_the_date()); ?></div>
                <ul>
                    <li><?php esc_html_e('By:', 'DataCraft'); ?> <?php the_author(); ?>  /  <?php if(has_category()){?><?php the_category(' '); ?> /<?php } ?> <?php comments_number( wp_kses(__('0 Comments' , 'DataCraft'), true), wp_kses(__('1 Comment' , 'DataCraft'), true), wp_kses(__('% Comments' , 'DataCraft'), true)); ?></li>
                </ul>
            </div>
            
			<a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>" class="blog-title"><h4><?php the_title(); ?></h4></a>
            <?php the_excerpt(); ?>
            <a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>" class="read-btn tran3s mt-2"><?php esc_html_e('Read More', 'DataCraft'); ?></a>
        </div> <!-- /.post-data -->
    </article>
        
</div>