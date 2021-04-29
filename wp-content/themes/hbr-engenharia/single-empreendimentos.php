<?php get_header(); ?>
<div class="main p-projetos-interna">
    <div class="banner-topo-page with-logo" style="background-image: url(<?php echo TEMPLATE; ?>/dist/images/bg-interna.jpg);">
		<div class="content-center">
            <div class="flex">

                <?php if (get_field('logo_do_empreendimento')): ?>
                <figure class="logo-projeto">
                    <img src="<?php echo get_field('logo_do_empreendimento');?>" alt="">
                </figure>
                <?php endif; ?>
                <div class="text">
                    <h2 class="title-box"><?php the_title();?></h2>
                    <h3 class="subtitle-box">Projetos - Empreendimentos</h3>
                </div>
            </div>
		</div>
    </div>

    <?php 
        $chekcParceirias = get_field('campo_de_parcerias');
        if($chekcParceirias) : 
    ?>          
    <div class="box-text bg-balls">
        <div class="content-center">

            <?php if( have_rows('repetidor_logos_parceiras') ): ?>
                <div class="box-figures">
                    <div class="flex-figures">
                        <?php while( have_rows('repetidor_logos_parceiras') ): the_row(); 
                        $logoParc = get_sub_field('logo_parceira');
                        ?>
                    <figure>
                        <img src="<?php echo $logoParc; ?>" alt="">
                        <span class="icon-more"></span>
                    </figure>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>

            <h4>
                <?php the_field('texto_parceria'); ?>
                <!-- A nossa parceria com a <a href="#">MaxPlural</a> garante: aqui você vai encontrar o empreendimento ideal para investir e perfeito para morar!  -->
            </h4>
        </div>
    </div>
    <?php endif;?>


    <div class="content-interna">
        <div class="content-center">
            <figure class="img-projeto">
                <img src="<?php echo get_field('imagem_empreendimento');?>" alt="">
            </figure>
            <div class="list-info">
                <?php 
                $localEmp = get_field('local_empreendimento');
                $DistEmp = get_field('distancia_empreendimento');
                $InfoEmp = get_field('informacoes_empreendimento');
                if ($localEmp):
                ?>
                <div class="item-info">
                    <img src="<?php echo TEMPLATE; ?>dist/images/icon-local-white.svg" alt="">
                    <p><?php echo $localEmp; ?></p>
                </div>
                <?php endif; ?>
                <?php if ($DistEmp): ?>
                <div class="item-info">
                    <img src="<?php echo TEMPLATE; ?>dist/images/icon-size-white.svg" alt="">
                    <p><?php echo $DistEmp; ?></p>
                </div>
                <?php endif; ?>
                <?php if ($InfoEmp): ?>
                <div class="item-info">
                    <img src="<?php echo TEMPLATE; ?>dist/images/icon-house-white.svg" alt="">
                    <p><?php echo $InfoEmp; ?></p>
                </div>
                <?php endif; ?>
            </div>
            <div class="text">  
            <?php echo get_field('texto_empreendimento');?>
                <!-- <h3>Sobre</h3>
                <p>Construção do Galpão de Webs compreendendo mais de 2.600 m² de área climatizada.
                </p> -->

            </div>
        </div>
    </div>
    <?php if( have_rows('galeria_de_imagens') ): ?>
    <div class="galeria-part">
        <div class="content-center">
            <h3 class="subtitle-box">Galeria</h3>    
        </div>
        <div class="position-slide">
            <div class="slide-galeria owl-carousel">
            <?php while( have_rows('galeria_de_imagens') ): the_row(); 
                $imgGaleria = get_sub_field('img_galeria');
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
    </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>