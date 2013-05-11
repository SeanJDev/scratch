<?php get_header()?>

<div id="left">
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
		<h4>Posted on <?php the_time('F jS, Y') ?></h4>
		<p>Written by: <?php the_author_link(); ?></p>
    	<p><?php the_content(__('(Continue Reading)')); ?></p>
    <hr>
   		<?php endwhile; else: ?>
   		 <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>

<?php get_sidebar()?>
<?php get_footer()?>
