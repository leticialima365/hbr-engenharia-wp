<?php
    /* Template Name: A HBR */
?>
<?php get_header(); ?>
<div class="main p-a-hbr">
    <div class="banner-topo-page" style="background-image: url(<?php echo TEMPLATE; ?>/dist/images/bg-banner-topo.jpg);">
		<div class="content-center">
			<div class="text">
				<h3 class="subtitle-box"><?php echo the_field('subtitulo_pagina'); ?></h3>
				<h2 class="title-box"><?php echo the_field('titulo_pagina'); ?></h2>
			</div>
		</div>
    </div>
	<div class="box-projeto b-1 c-white btn-mod-wblue">
		<div class="content-center">
			<div class="flex">
				<div class="side">
					<h3 class="subtitle-box"><?php echo the_field('subtitulo_sobre'); ?></h3>
					<h2 class="title-box">
						<?php echo the_field('titulo_sobre'); ?>
					</h2>
					<p>
						<?php echo the_field('texto_sobre'); ?>
					</p>
				</div>
				<div class="figures center-vertical">
					<figure class="big-img">
						<img src="<?php echo the_field('imagem_sobre'); ?>" alt="">
					</figure>
				</div>
			</div>
		</div>
	</div>
	<div class="box-projeto b-2 btn-mod-bluew p-bottom">
		<div class="content-center">
			<div class="flex">
				<div class="side">
					<h2 class="title-box"><?php echo the_field('titulo_cerfificacoes'); ?></h2>
					<h3 class="subtitle-box">
						<?php echo the_field('subtitulo_certificacoes'); ?>

					</h3>
					<?php if( have_rows('repetidor_certificados','option') ): ?>
					<div class="list-downloads">
						<?php while( have_rows('repetidor_certificados','option') ): the_row();  
							$arquivo = get_sub_field('arquivo_certificacao','option');
							$arquivoTexto = get_sub_field('texto_certificacao','option');
							if( $arquivo ):
						?>

						<a href="<?php echo $arquivo['url']; ?>" class="item-download">
							<div class="tt-item">
								<img src="<?php echo TEMPLATE; ?>dist/images/down-arrow-b.svg" alt="">
								<p><?php echo $arquivo['filename']; ?></p> 
							</div>
							<p><?php echo $arquivoTexto; ?></p>
						</a>
					
						<?php endif; ?>
						<?php endwhile; ?>
						<!-- <a href="#" class="item-download">
							<div class="tt-item">
								<img src="<?php echo TEMPLATE; ?>dist/images/down-arrow-b.svg" alt="">
								<p>ISO 9001 2015</p> 
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat commodo enim quis molestie. Ut a molestie orci.
							</p>
						</a> -->
					</div>
					<?php endif; ?>
				</div>
				<div class="figures bottom-left">
					<figure class="big-img">
						<img src="<?php echo the_field('imagem_certificacoes'); ?>" alt="">
					</figure>
				</div>
			</div>
		</div>
	</div>
	<div class="box-projeto b-3 side-right c-white btn-mod-wblack">
		<div class="content-center">
			<div class="flex">
				<div class="side">
					<?php echo the_field('texto_missao_e_valores'); ?>
					
				</div>
				<div class="figures center-vertical">
					<figure class="big-img">
						<img src="<?php echo the_field('imagem_grande'); ?>" alt="">
					</figure>
					<figure class="small-img">
						<img src="<?php echo the_field('imagem_pequena'); ?>" alt="">
					</figure>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>