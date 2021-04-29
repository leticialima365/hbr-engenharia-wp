<?php get_header(); ?>
<div class="main p-projetos-interna">
    <div class="banner-topo-page with-logo" style="background-image: url(<?php echo TEMPLATE; ?>/dist/images/bg-interna.jpg);">
		<div class="content-center">
            <div class="flex">

                <?php if (get_field('logo_do_projeto')): ?>
                <figure class="logo-projeto">
                    <img src="<?php echo get_field('logo_do_projeto');?>" alt="">
                </figure>
                <?php endif; ?>
                <div class="text">
                    <h2 class="title-box"><?php the_title();?></h2>
                    <h3 class="subtitle-box">Projetos - HBR Metal</h3>
                </div>
            </div>
		</div>
    </div>

    <div class="content-interna">
        <div class="content-center">
            <figure class="img-projeto">
                <img src="<?php echo get_field('imagem_hbrmetal');?>" alt="">
            </figure>
            <div class="list-info">
                <?php 
                $localProj = get_field('local_projeto');
                if ($localProj):
                ?>
                <div class="item-info">
                    <img src="<?php echo TEMPLATE; ?>dist/images/icon-local-white.svg" alt="">
                    <p><?php echo $localProj; ?></p>
                </div>
                <?php endif; ?>
            </div>
            <div class="text">  
            <?php echo get_field('texto_hbrmetal');?>
                <!-- <h3>Sobre</h3>
                <p>Construção do Galpão de Webs compreendendo mais de 2.600 m² de área climatizada.
                </p> -->

            </div>
        </div>
    </div>
    <?php if( have_rows('galeria_de_imagens_hbrmetal') ): ?>
    <div class="galeria-part">
        <div class="content-center">
            <h3 class="subtitle-box">Galeria</h3>    
        </div>
        <div class="position-slide">
            <div class="slide-galeria owl-carousel">
            <?php while( have_rows('galeria_de_imagens_hbrmetal') ): the_row(); 
                $imgGaleria = get_sub_field('imagem_galeria');
            ?>
                <div class="item-galeria">
                    <figure>
                        <img src="<?php echo $imgGaleria; ?>" alt="">
                    </figure>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>