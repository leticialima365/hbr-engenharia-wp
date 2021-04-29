<?php
    /* Template Name: HBR Metal */
?>
<?php get_header(); ?>
    <div class="main p-hbr-metal">
        <div class="banner-topo-page" style="background-image: url(<?php echo TEMPLATE; ?>/dist/images/bg-banner-topo.jpg);">
            <div class="content-center">
                <div class="text">
                    <h3 class="subtitle-box">Conheça a</h3>
                    <h2 class="title-box">HBR Metal</h2>
                </div>
            </div>
        </div>
      
        <div class="content-center">

            <?php if( have_rows('repetidor_tabs',23) ): ?>
            <div class="content-tabs-full">
                <ul class="tabs">
                <?php while( have_rows('repetidor_tabs',23) ): the_row();  
                    $tituloTab = get_sub_field('titulo_tab',23);
                    $stituloTab = sanitize_title($tituloTab);
                    $txtTab = get_sub_field('texto_tab',23);
                    $imgTab = get_sub_field('imagem_tab',23);
                ?>
                    <li class="tab-link" data-tab="<?php echo $stituloTab;?>">
                        <?php echo $tituloTab;?>
                    </li>
                    <?php wp_reset_query(); ?>
                    <?php endwhile; ?>
                </ul>


                <?php while( have_rows('repetidor_tabs',23) ): the_row();  ?>
                <div id="<?php echo sanitize_title($tituloTab);?>" class="tab-content">
                    <figure class="img-tabs">
                        <img src="<?php echo $imgTab;?>" alt="">
                    </figure>
                    <div class="text">
                        <h3 class="subtitle-box"><?php echo $tituloTab;?></h3>
                        <p>
                            <?php echo $txtTab;?>
                        </p>
                    </div>
                </div>
                <?php endwhile; ?>
              
            </div>
            <?php endif; ?>

        </div>
        <?php 
            $args = array (  
            'post_type' => 'hbr-metal',
            'order' => 'ASC',
            'posts_per_page' => -1
            );
            $hbrMetal = new WP_Query( $args );

            if ( $hbrMetal->have_posts() ) :
        ?>
        <div class="content-empreendimentos">
            <div class="content-center">
                <h3 class="subtitle-box">Projetos</h3>
                <div class="p-projetos">
                    <div class="flex-cards">
                        <?php while ($hbrMetal->have_posts() ) : $hbrMetal->the_post();
                            $imgHbrmetal = get_field('imagem_hbr_metal');
                            $textHbrmetal = get_field('texto_thumb');
                        ?>
                        <a href="<?php the_permalink();?>" class="item-card">
                            <figure>
                                <img src="<?php echo $imgHbrmetal;?>" alt="">
                            </figure>
                            <div class="info">
                                <h3><?php the_title();?></h3>
                                <div class="list-info">
                                    <div class="item-info">
                                        <p><?php echo $textHbrmetal;?></p>
                                    </div>
                                    <div class="item-info">
                                        <img src="<?php echo TEMPLATE; ?>dist/images/icon-local-g.svg" alt="">
                                        <p><?php echo get_field('local_projeto')?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php wp_reset_query(); ?>
                        <?php endwhile; ?>
                        <!-- <a href="projetos-interna.php" class="item-card">
                            <figure>
                                <img src="https://via.placeholder.com/388x388" alt="">
                            </figure>
                            <div class="info">
                                <h3>Fante Destilados do Nordest</h3>
                                <div class="list-info">
                                    <div class="item-info">
                                        <p>Expansão da unidade industrial</p>
                                    </div>
                                    <div class="item-info">
                                        <img src="<?php echo TEMPLATE; ?>dist/images/icon-local-g.svg" alt="">
                                        <p>Porto de Galinhas - PE</p>
                                    </div>
                                </div>
                            </div>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php get_footer(); ?>