<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory') ?>/build/img/favicon.ico"><![endif]-->
	<link rel="icon" href="<?php bloginfo('stylesheet_directory') ?>/build/img/favicon.ico">

	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>


								   <!-- Verifica Pagina -->
	<?php if( is_home()    ){ ?>   <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/build/css/home.css"> 			  <?php } ?>
	<?php if( is_category()){ ?>   <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/build/css/page.css">    		  <?php } ?>
	<?php if( is_single()  ){ ?>   <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/build/css/post.css"> 			  <?php } ?>
	<?php if( is_search()  ){ ?>   <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/build/css/page.css"> 			  <?php } ?>
	<?php if( is_page()    ){ ?>   <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/build/css/page.css"> 			  <?php } ?>
	<?php if( is_single()  ){ ?>   <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/build/css/facebox.css">         <?php } ?>

								   <!-- Script All -->
								   <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
								   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
								   <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/build/js/main.js"></script>

								   <!-- Scripts -->
	<?php if( is_home()   ){  ?>   <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/build/js/jquery.cycle.min.js"></script>   <?php } ?>
	<?php if( is_home()   ){  ?>   <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/build/js/home.js"></script>			   <?php } ?>
	<?php if( is_page()   ){  ?>   <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/build/js/page.js"></script>			   <?php } ?>
	<?php if( is_single() ){  ?>   <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/build/js/facebox.js"></script>	           <?php } ?>
	<?php if( is_single() ){  ?>   <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/build/js/post.js"></script>			   <?php } ?>


</head>
<body>

	<!-- [topo] -->
		<header class="top-all">
			<div class="top __80pc">
				
				<!-- [top left] -->
					<div class="block-left _col __60pc">
						
						<!-- Logo -->
						<div class="logo">
							<a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/build/img/logo_.png" width="300" alt="" /></a>
						</div>
						
						<!-- Menu Mobile -->
						<form action="#">	
							<section class="menu-mob">
								<select class="menu-mob-select" onChange="mob_menu(this.value)" name="menu_mob" id="menu_mob">
									<option value="<?php echo get_site_url(); ?>category/seguranca_atual">Editorial</option>
									<option value="<?php echo get_site_url(); ?>/expediente_">Expediente</option>
									<option value="">Editorias</option>
										<option value="<?php echo get_site_url(); ?>/category/seguranca_atual"> - Segurança</option>
										<option value="<?php echo get_site_url(); ?>/category/acontece_atual"> - Acontece</option>
										<option value="<?php echo get_site_url(); ?>/category/fique-por-dentro_atual"> - Fique por Dentro</option>
										<option value="<?php echo get_site_url(); ?>/category/meio-ambiente_atual"> - Meio Ambiente</option>
										<option value="<?php echo get_site_url(); ?>/category/desenvolvimento-de-talentos_atual"> - Desenvolvimento de Talentos</option>
										<option value="<?php echo get_site_url(); ?>/category/capa_atual"> - Matéria de Capa</option>
										<option value="<?php echo get_site_url(); ?>/category/inovacao_atual"> - Inovação</option>
										<option value="<?php echo get_site_url(); ?>/category/performace-operacional_atual"> - Performace Operacional</option>
										<option value="<?php echo get_site_url(); ?>/category/nossa-gente_atual"> - Nossa Gente</option>
										<option value="<?php echo get_site_url(); ?>/category/mercado_atual"> - Mercado</option>
										<option value="<?php echo get_site_url(); ?>/category/entrevista_atual"> - Entrevista</option>
										<option value="<?php echo get_site_url(); ?>/category/saude-bem-estar_atual"> - Saúde e Bem Estar</option>
										<option value="<?php echo get_site_url(); ?>/category/cidadania_atual"> - Cidadania</option>
										<option value="<?php echo get_site_url(); ?>/category/governanca-corporativa_atual"> - Governança Corporativa</option>
										<option value="<?php echo get_site_url(); ?>/category/comportamento_atual"> - Comportamento</option>
								</select>
							</section>
						</form>

						<!-- Arquivos Blog -->
						<div class="arquivos">
							<ul>
								<!-- pega a data do ultimo post -->
								<span class="arquivos_list">
									<?php
										//foreach (get_the_category() as $cat) {
										//	$parent = get_category($cat->category_parent);
										//	$parent_name = $parent->cat_name;
										//	echo $parent_name;
										//}
									?>
										
									<?php //wp_get_archives( array( 'type' => 'monthly', 'limit' => 1 ) ); ?>
									<a href="<?php echo get_site_url(); ?>/category/edicao-atual/">JAN/FEV &nbsp;&nbsp; 2014</a>
									<ul class="arquivos_drop-list">
										<li><a href="<?php echo get_site_url(); ?>/outras-edicoes/">Outras Edições</a></li>
									</ul>

								</span>

							</ul>
						</div>

					</div>
				<!-- [/top left] -->

				<!-- [top right] -->
					<div class="block-right _col __40pc">

						<ul>

							<li>

								<!-- Busca -->
								<div class="busca-all">
									<?php get_search_form();?>
								</div>

							</li>

							<li>
								<!-- Menu -->
								<nav>
									<ul class="menu">
										<li><a href="<?php echo get_site_url(); ?>/gotta-be-great/">Editorial</a></li>
										
										<li class="editoria-drop">
											<a href="#">Editorias</a>

											<ul class='editoria-drop-content'>
												<li><a href="<?php echo get_site_url(); ?>/category/seguranca_atual">Segurança</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/acontece_atual">Acontece</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/fique-por-dentro_atual">Fique por Dentro</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/meio-ambiente_atual">Meio Ambiente</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/desenvolvimento-de-talentos_atual">Desenvolvimento de Talentos</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/capa_atual">Matéria de Capa</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/inovacao_atual">Inovação</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/performace-operacional_atual">Performace Operacional</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/nossa-gente_atual">Nossa Gente</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/mercado_atual">Mercado</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/entrevista_atual">Entrevista</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/saude-bem-estar_atual">Saúde e Bem Estar</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/cidadania_atual">Cidadania</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/governanca-corporativa_atual">Governança Corporativa</a></li>
												<li><a href="<?php echo get_site_url(); ?>/category/comportamento_atual">Comportamento</a></li>
											</ul>

											<?php
												//$cats = explode("<br />",wp_list_categories('title_li=&echo=0&depth=1&style=none'));
												//$cat_n = count($cats) - 1;
												//echo "<ul class='editoria-drop-content'>";
												//for ($i=0;$i< $cat_n;$i++)
												//{
												//    echo "<li>".$cats[$i]."</li>";           
												//}
												//echo "</ul>";
											?>

										</li>
										<li><a href="<?php echo get_site_url(); ?>/expediente_">Expediente</a></li>
									</ul>
								</nav>

							</li>

						</ul>
						
						

					</div>
				<!-- [/top right] -->

			</div>
		</header>
	<!-- [/topo] -->

 	<?php if( is_home() ) {?>
	<!-- [slider] -->
		<section class="slider-all" id="">

			<div id="nav"></div>

			<!--<div class="seta-left" id="next"><img src="<?php bloginfo('stylesheet_directory')?>/build/img/seta-left.png" /></div>-->
			<!--<div class="seta-right" id="prev"><img src="<?php bloginfo('stylesheet_directory')?>/build/img/seta-right.png" /></div>-->

			<ul class="sequence-canvas">
				
				<li>
				
					<!-- Titulo Slide -->
					<div class="slide-title">
						
							<h1 style="color: #000;"><a href="http://tetrapakacontece.com.br/temp/gotta-be-o-novo-mandato/">Gotta Be O Novo Mandato</a></h1>
						
					</div>

					<!-- Text Slide -->
					<div class="slide-text">
						<a href="http://tetrapakacontece.com.br/temp/gotta-be-o-novo-mandato/">
							<p style="color: #000;">
								Uma das últimas realizações da Tetra Pak® em 2013 foi o lançamento do programa Gotta Be, que, em uma tradução livre, significa “Temos que Ser”. Essa expressão passou a ser o novo “mantra” dos colaboradores da empresa que, alinhado com a estratégia 2020, ajudaraé garantir o crescimento lucrativo e sustentável da companhia.
							</p>
						</a>
					</div>

					<!-- BG slide 1 -->
					<div class="slider-img" 
						 style="background-image:url(<?php bloginfo('stylesheet_directory')?>/build/img/capa.jpg);">
					</div>

				</li>
				

			</ul>

			

		</section>
	<!-- [/slider] -->

	<!-- [editorias] -->
	<div class="editorias-all">
		<section class="editorias __80pc">
			<div class="garf-editoria">
				<img src="<?php bloginfo('stylesheet_directory') ?>/build/img/graf-editorias.png" alt="">
				<h1>Editorias</h1>
			</div>

			<div class="editorias-lista _col __100pc">

				<ul>
					<li class="seguranca"><a href="category/seguranca_atual">Segurança</a></li>
					<li class="acontece"><a href="category/acontece_atual">Acontece</a></li>
					<li class="fique-por-dentro"><a href="category/fique-por-dentro_atual">Fique por Dentro</a></li>
					<li class="meio-ambiente"><a href="category/meio-ambiente_atual">Meio Ambiente</a></li>
					<li class="desenvolvimento"><a href="category/desenvolvimento-de-talentos_atual">Desenvolvimento de Talentos</a></li>
					<li class="materia-de-capa"><a href="category/capa_atual">Matéria de Capa</a></li>
					<li class="inovacao"><a href="category/inovacao_atual">Inovação</a></li>
					<li class="performace-operacional"><a href="category/performace-operacional_atual">Performace Operacional</a></li>
					<li class="nossa-gente"><a href="category/nossa-gente_atual">Nossa Gente</a></li>
					<li class="mercado"><a href="category/mercado_atual">Mercado</a></li>
					<li class="entrevista"><a href="category/entrevista_atual">Entrevista</a></li>
					<li class="saude-bem-estar"><a href="category/saude-bem-estar_atual">Saúde e Bem Estar</a></li>
					<li class="cidadania"><a href="category/cidadania_atual">Cidadania</a></li>
					<li class="governanca-corporativa"><a href="category/governanca-corporativa_atual">Governança Corporativa</a></li>
					<li class="comportamento"><a href="category/comportamento_atual">Comportamento</a></li>
				</ul>

				<?php

					/*
					$cats = explode("<br />",wp_list_categories('title_li=&echo=0&depth=1&style=none'));
					$cat_n = count($cats) - 1;
					echo "<ul>";
					for ($i=0;$i< $cat_n;$i++)
					{
					    echo "<li>".$cats[$i]."</li>";           
					}
					echo "</ul>";
					*/
				?>
			</div>
		</section>
		</div>
		
	<!-- [/editorias] -->
	<?php } ?>