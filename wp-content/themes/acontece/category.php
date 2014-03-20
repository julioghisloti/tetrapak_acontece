<?php get_header(); ?>

	<?php 

		$categ = $_SERVER['REQUEST_URI'];
		$categoria = eregi_replace('\/','',$categ);
		$cat = "category";

		$cat_atual = '_a';
		if(strpos($categoria, '_atual')){ 
			$cat_atual = "_atual";
		}

		switch ($categoria) {
			case $cat.'seguranca'.$cat_atual:
				$cat_color = "#244595";
				$cat_tilte = "Segurança";	
			break;

			case $cat.'acontece'.$cat_atual:
				$cat_color = "#83d0e3";
				$cat_tilte = "Acontece";	
			break;

			case $cat.'fique-por-dentro'.$cat_atual:
				$cat_color = "#2e86c9";
				$cat_tilte = "Fique por Dentro";	
			break;

			case $cat.'meio-ambiente'.$cat_atual:
				$cat_color = "#2db778";
				$cat_tilte = "Meio Ambiente";	
			break;

			case $cat.'desenvolvimento-de-talentos'.$cat_atual:
				$cat_color = "#83a741";
				$cat_tilte = "Desenvolvimento de Talentos";	
			break;

			case $cat.'capa'.$cat_atual:
				$cat_color = "#1d8643";
				$cat_tilte = "Matéria de Capa";	
			break;

			case $cat.'inovacao'.$cat_atual:
				$cat_color = "#8eaddb";
				$cat_tilte = "Inovação";	
			break;

			case $cat.'performace-operacional'.$cat_atual:
				$cat_color = "#e9362c";
				$cat_tilte = "Performace Operacional";	
			break;

			case $cat.'nossa-gente'.$cat_atual:
				$cat_color = "#aca19b";
				$cat_tilte = "Nossa Gente";	
			break;

			case $cat.'mercado'.$cat_atual:
				$cat_color = "#efb5d4";
				$cat_tilte = "Mercado";	
			break;

			case $cat.'entrevista'.$cat_atual:
				$cat_color = "#982629";
				$cat_tilte = "Entrevista";	
			break;

			case $cat.'saude-bem-estar'.$cat_atual:
				$cat_color = "#51c1be";
				$cat_tilte = "Saúde e Bem Estar";	
			break;

			case $cat.'cidadania'.$cat_atual:
				$cat_color = "#708a99";
				$cat_tilte = "Cidadania";	
			break;

			case $cat.'governanca-corporativa'.$cat_atual:
				$cat_color = "#7c2952";
				$cat_tilte = "Governança Corporativa";	
			break;

			case $cat.'comportamento'.$cat_atual:
				$cat_color = "#2a5252";
				$cat_tilte = "Comportamento";	
			break;

			default:
				$cat_color = "#2d529a";
			break;
		}

	?>
	
	<?php if (!strpos($categ, '_atual')){ ?>

		<?php query_posts('category_name='.$categ.'&showposts=-1'); ?>
		<section class="old-category-all __80pc">

			<ul class="old-category">
				<?php wp_list_categories('orderby=name&title_li&show_count=1'); ?>
			</ul>

		</section>

	<?php } ?>


	<?php query_posts('category_name='.$categ.'&showposts=-1'); ?>
		<?php if( is_category() ){ ?> 

			<!-- Mudando o Top -->
			<style type="text/css">.top-all{border-bottom: 3px solid <?php echo $cat_color; ?> ;}</style>

			<!-- Graf Categoria -->
			<div class="graf-editoria-page">
				<div style="background-color: <?php  echo $cat_color; ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/build/img/graf-editorias-all.png" alt=""></div>
				<h1 style="color: <?php  echo $cat_color; ?>"><?php echo $cat_tilte; ?></h1>
			</div>

		<?php } ?>	

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section style="border-left: 3px solid <?php  echo $cat_color; ?>;" class="page __80pc">

				<!-- Thumbnail -->
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="post_list-thumbnail"><?php the_post_thumbnail(); ?></div>
				<?php } ?>

				<!-- Post -->
				<div class="post-text">

					<!-- Titulo -->
					<h1 style="color: <?php  echo $cat_color; ?>">
						<a style="color: <?php  echo $cat_color; ?>" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						</a>
					</h1>

					<?php the_content('Leia mais'); ?>

				</div>


			</section>

		<?php endwhile; ?>
	<?php endif; ?>


<?php get_footer(); ?>
