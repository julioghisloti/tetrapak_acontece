<?php get_header(); ?>

	
		<?php if ( have_posts() ) : the_post(); ?>
			
		<?php
			$categoria = get_the_category();
			$nomeCategoria = $categoria[0]->cat_name;

			switch ($nomeCategoria) {
			case 'Segurança':
				$cat_color = "#244595";	
			break;

			case 'Acontece':
				$cat_color = "#83d0e3";	
			break;

			case 'Fique por Dentro':
				$cat_color = "#2e86c9";	
			break;

			case 'Meio Ambiente':
				$cat_color = "#2db778";	
			break;

			case 'Desenvolvimento de talentos':
				$cat_color = "#83a741";	
			break;

			case 'Capa':
				$cat_color = "#1d8643";
			break;

			case 'Inovação':
				$cat_color = "#8eaddb";
			break;

			case 'Performace Operacional':
				$cat_color = "#e9362c";
			break;

			case 'Nossa Gente':
				$cat_color = "#aca19b";
			break;

			case 'Mercado':
				$cat_color = "#efb5d4";
			break;

			case 'Entrevista':
				$cat_color = "#982629";
			break;

			case 'Saúde e Bem Estar':
				$cat_color = "#51c1be";
			break;

			case 'Cidadania':
				$cat_color = "#708a99";	
			break;

			case 'Governança Corporativa':
				$cat_color = "#7c2952";	
			break;

			case 'Comportamento':
				$cat_color = "#2a5252";
			break;

			case 'Saúde e bem estar':
				$cat_color = "#51c1be";
			break;
		}
		?>

			<!-- Graf Categoria -->
			<div class="graf-editoria-post">
				<div style="background-color: <?php  echo $cat_color; ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/build/img/graf-editorias-post.png" alt=""></div>
			</div>

			<!-- Mudando o Top -->
			<style type="text/css">.top-all{border-bottom: 3px solid <?php echo $cat_color; ?> ;}</style>	

			<section class="page __80pc">

				<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

				<?php if ( has_post_thumbnail() ) { ?>

					<section class="capa-post _100pc" style="background-image: url(<?php echo $src[0]; ?>);">
						<img src="<?php echo $src[0]; ?>" alt="" />
					</section>

				<?php } ?>

				<section class="post _col __70pc">

					<div class="post-top">

						<div class="line _top" style="border-color: <?php  echo $cat_color; ?>"></div>
						<div class="line _bottom" style="border-color: <?php  echo $cat_color; ?>"></div>

						<!-- titulo -->
						<h1 style="color:<?php echo $cat_color; ?>;"><?php the_title(); ?></h1>

						<!-- subtitulo -->
						<?php $subtitulo = get_post_meta($post->ID, 'subtitulo', true); ?>
						<h2><?php echo $subtitulo; ?></h2>

					</div>

					<?php the_content(); ?>
				</section>

				<section class="destaque _col __30pc">
					<?php $destaque = get_post_meta($post->ID, 'destaque', true); ?>
					<p style="color:<?php echo $cat_color; ?>;" class="destaque_text"><?php echo $destaque; ?></p>
				</section>
			</section>
	<?php endif; ?>

<?php get_footer(); ?>