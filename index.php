<?php get_header(); ?>	
	<div class="main">
		<div class="container">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()): the_post(); ?>
				<h3>
				<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
				</a>
				</h3>
				<div class="meta">
				Created By <?php the_author(); ?> on <?php the_date(); ?>
				</div>
				<?php the_content(); ?>
			<?php endwhile?>
		<?php else : ?>
			<?php echo wpautop('add some posts, nothing found'); ?>
		<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>