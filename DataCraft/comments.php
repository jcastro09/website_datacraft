<?php
/**
 * Comments Main File.
 *
 * @package DataCraft
 * @author  Template Path
 * @version 1.0
 */
?>
<?php
if ( post_password_required() ) {
	return;
}
?>
<?php $count = wp_count_comments(get_the_ID()); ?>

<?php if ( have_comments() ) : ?>
	
<div class="blog-comment-area mt-80">
    <h5 class="blog-inner-title pb-15">
	<?php $comments_number = get_comments_number();
        if ( '1' === $comments_number ) {
            /* translators: %s: post title */
            printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'DataCraft' ), get_the_title() );
        } else {
            printf(
                /* translators: 1: number of comments, 2: post title */
                _nx(
                    '%1$s Reply to &ldquo;%2$s&rdquo;',
                    '%1$s Replies to &ldquo;%2$s&rdquo;',
                    $comments_number,
                    'comments title',
                    'DataCraft'
                ),
                number_format_i18n( $comments_number ),
                get_the_title()
            );
        } ?>
    </h5>
    
	<?php
        wp_list_comments( array(
            'style'       => 'div',
            'short_ping'  => true,
            'avatar_size' => 70,
            'callback'    => 'DataCraft_list_comments',
        ) );
    ?>
    	
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <nav class="navigation comment-navigation" role="navigation">
        <h1 class="screen-reader-text section-heading">
            <?php esc_html_e( 'Comment navigation', 'DataCraft' ); ?>
        </h1>
        <div class="nav-previous">
            <?php previous_comments_link( esc_html__( '&larr; Older Comments', 'DataCraft' ) ); ?>
        </div>
        <div class="nav-next">
            <?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'DataCraft' ) ); ?>
        </div>
    </nav><!-- .comment-navigation -->
    <?php endif; ?>
    
	<?php if ( ! comments_open() && get_comments_number() ) : ?>
    <p class="no-comments">
        <?php esc_html_e( 'Comments are closed.', 'DataCraft' ); ?>
    </p>
	<?php endif; ?>

</div>
<?php endif; ?>

<?php if(DataCraft_comment_form()): ?>
	<?php DataCraft_comment_form(); ?>
<?php endif; ?>