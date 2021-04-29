<?php get_header(); ?>

<?php if( have_rows('repetidor_slider_banner') ): ?>
<div class="slide-topo owl-carousel">
    <?php while( have_rows('repetidor_slider_banner') ): the_row(); 
    $imgBanner = get_sub_field('imagem_banner');
    $subtituloBanner = get_sub_field('subtitulo_banner');
    $tituloBanner = get_sub_field('titulo_banner');
    $linkBanner = get_sub_field('link_banner');
    ?>
    <div class="item-slide" style="background-image: url('<?php echo $imgBanner; ?>">
        <?php if ($tituloBanner) : ?>
        <div class="empreendimento">
            <h3><?php echo $subtituloBanner; ?></h3>
            <h2><?php echo $tituloBanner; ?></h2>
            <a href="<?php echo $linkBanner; ?>" class="c-button">
                Veja mais
                <img src="<?php echo TEMPLATE; ?>dist/images/arrow-right-black.svg" class="arrow-btn">
            </a>
        </div>
        <?php endif; ?>
    </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>
<div class="box-text bg-balls">
    <div class="content-center">
        <div class="flex">
            <div class="side">
                <h2><?php echo the_field('subtitulo_esquerda'); ?></h2>
                <h3><?php echo the_field('titulo_esquerda'); ?></h3>
            </div>
            <div class="side s-right">
                <h2><?php echo the_field('titulo_direita'); ?></h2>
                <p>
                    <?php echo the_field('texto_direita'); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="box-projeto c-white btn-mod-wblue" style="background: #005193;">
    <div class="content-center">
        <div class="flex">
            <div class="side">
                <span class="categ">Industrial</span>
                <h2 class="title-box"><?php echo the_field('titulo_secao_azul'); ?></h2>
                <h3 class="subtitle-box"><?php echo the_field('subtitulo_secao_azul'); ?></h3>
                <p>
                    <?php echo the_field('texto_secao_azul'); ?>
                </p>
                <a href="<?php echo the_field('link_secao_azul'); ?>" class="c-button">Ver Obras</a>
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

<div class="box-projeto side-right c-black btn-mod-wblack" style="background: #FFAF13;">
    <div class="content-center">
        <div class="flex">
            <div class="side">
                <span class="categ">Comecial</span>
                <h2 class="title-box"><?php echo the_field('titulo_secao_amarela'); ?></h2>
                <h3 class="subtitle-box"><?php echo the_field('subtitulo_secao_amarela'); ?></h3>
                <p>
                    <?php echo the_field('texto_secao_amarela'); ?>
                </p>
                <a href="<?php echo the_field('link_secao_amarela'); ?>" class="c-button">Ver Obras</a>
            </div>
            <div class="figures center-horizontal">
                <figure class="big-img">
                    <img src="<?php echo the_field('imagem_grande_secao_amarela'); ?>" alt="">
                </figure>
                <figure class="small-img">
                    <img src="<?php echo the_field('imagem_pequena_secao_amarela'); ?>" alt="">
                </figure>
            </div>
        </div>
    </div>
</div>

<div class="box-projeto c-black btn-mod-bluew p-bottom" style="background: #ffffff;">
    <div class="content-center">
        <div class="flex">
            <div class="side">
                <span class="categ">Empreendimentos Imobiliários</span>
                <h2 class="title-box"><?php echo the_field('titulo_secao_branca'); ?></h2>
                <h3 class="subtitle-box"><?php echo the_field('subtitulo_secao_branca'); ?></h3>
                <p>
                    <?php echo the_field('texto_secao_branca'); ?>
                </p>
                <a href="#" class="c-button">Ver Obras</a>
            </div>
            <div class="figures bottom-left">
                <figure class="big-img">
                    <img src="<?php echo the_field('imagem_grande_secao_branca'); ?>" alt="">
                </figure>
                <figure class="small-img">
                    <img src="<?php echo the_field('imagem_pequena_secao_branca'); ?>" alt="">
                </figure>
            </div>
        </div>
    </div>
</div>

<div class="l-galeria" style="background-image: url('<?php echo TEMPLATE; ?>dist/images/bg-qualidade.jpg');">
    <div class="content-center">
        <div class="title-top">
            <p><?php echo the_field('titulo_box_galeria'); ?></p>
        </div>
        <div class="box-text">
            <h3 class="subtitle-box"><?php echo the_field('subtitulo_galeria'); ?></h3>
            <h2 class="title-box"><?php echo the_field('titulo_galeria'); ?></h2>
            <p>
                <?php echo the_field('texto_galeria'); ?>
            </p>
        </div>
    </div>
    <?php if( have_rows('repetidor_galeria') ): ?>
    <div class="position-slide">
		<div class="slide-galeria owl-carousel">
        <?php while( have_rows('repetidor_galeria') ): the_row(); 
            $imgGaleria = get_sub_field('imagem_galeria');
        ?>
			<div class="item-galeria">
				<figure>
					<img src="<?php echo $imgGaleria; ?>" alt="">
				</figure>
			</div>
        <?php endwhile; ?>
		</div>
        <a href="<?php echo the_field('link_galeria'); ?>" class="see-more" title="Ver mais Projetos" alt="Ver mais Projetos">Ver Mais</a>
    </div>
    <?php endif; ?>
</div>

<div class="nossos-clientes">
    <div class="content-center">
        <h2 class="title-box"><?php echo the_field('titulo_clientes'); ?></h2>

        <?php if( have_rows('repetidor_clientes') ): ?>
        <div class="flex">
            <?php while( have_rows('repetidor_clientes') ): the_row(); 
                $imgCliente = get_sub_field('imagem_cliente');
            ?>
            <figure>
                <img src="<?php echo $imgCliente; ?>" alt="">
            </figure>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
	
<?php get_footer(); ?>