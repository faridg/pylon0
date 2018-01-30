<?php get_header(); ?>	
<div class="container">
	<div class="main">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()): the_post(); ?>
				<article class="post">
					<h3>
					<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
					</a>
					</h3>
					<div class="meta">
					Created By <?php the_author(); ?> on <?php the_date(); ?>
					</div>
					<?php if(has_post_thumbnail()) : ?>
					<div class="post-thumbnail">
					<?php the_post_thumbnail(); ?>
					</div>
					<?php endif; ?>
					<?php the_content(); ?>
				</article>
			<?php endwhile?>
		<?php else : ?>
			<?php echo wpautop('add some posts, nothing found'); ?>
		<?php endif; ?>
		<?php comments_template(); ?>
	</div>
		<div class="sidebar">
			<?php if(is_active_sidebar('sidebar')) : ?>
				<?php dynamic_sidebar('sidebar'); ?>
			<?php endif; ?>
		</div>
		<div class="clear"></div>
	
</div>
<?php get_footer(); ?>