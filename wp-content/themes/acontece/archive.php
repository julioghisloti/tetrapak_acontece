<?php get_header(); ?>
a
	<?php if ( have_posts() ) : ?>    

		<style type="text/css">.top-all{border-bottom: 3px solid #2d529a; margin-bottom: 50px;}</style>

			<?php while (have_posts()) : the_post(); ?>
				<section class="page __80pc">

					<!-- Post -->
					<div class="post-text">

						<!-- Titulo -->
						<h1 style="color: <?php  echo $cat_color; ?>">
							<a style="color: <?php  echo $cat_color; ?>" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h1>

						<?php the_content('Leia mais'); ?></div>

					<!-- Thumbnail -->
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="post_list-thumbnail"><?php the_post_thumbnail(); ?></div>
					<?php } ?>

				</section>
			<?php endwhile; ?>

		</section>

	<?php endif; ?>  
    
<?php get_footer(); ?>