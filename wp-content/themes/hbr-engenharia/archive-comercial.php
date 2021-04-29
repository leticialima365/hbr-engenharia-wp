<?php get_header(); ?>
<div class="main p-projetos">
    <div class="banner-topo-page" style="background-image: url(<?php echo TEMPLATE; ?>/dist/images/bg-banner-topo.jpg);">
		<div class="content-center">
			<div class="text">
				<h3 class="subtitle-box">Conheça Nossos</h3>
				<h2 class="title-box">Projetos</h2>
			</div>
		</div>
    </div>
    
    <?php 
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $args = array (  
        'post_type' => 'comercial',
        'order' => 'ASC',
        'posts_per_page' => 6
        );
        $comercial = new WP_Query( $args );

        if ( $comercial->have_posts() ) :
    ?>
    <div class="content-center">
        <div class="buttons-cat flex">
            <a href="../industrial/" class="c-button">Industrial</a>
            <a href="../comercial" class="c-button active">Comercial</a>
            <a href="../empreendimentos/" class="c-button">Empreendimentos</a>
            <a href="../hbr-metal" class="c-button">HBR Metal</a>
        </div>
        <div class="flex-cards">
            <?php while ($comercial->have_posts() ) : $comercial->the_post();
                $imgComercial = get_field('imagem_comercial');
                $textComercial = get_field('texto_thumb');
            ?>
            <a href="<?php the_permalink();?>" class="item-card">
                <figure>
                    <img src="<?php echo $imgComercial;?>" alt="">
                </figure>
                <div class="info">
                    <h3><?php the_title();?></h3>
                    <div class="list-info">
                        <div class="item-info">
                            <p><?php echo $textComercial;?></p>
                        </div>
                        <?php 
                            $localCom = get_field('local_projeto');
                            if ($localCom):
                        ?>
                        <div class="item-info">
                            <img src="<?php echo TEMPLATE; ?>dist/images/icon-local-g.svg" alt="">
                            <p><?php echo $localCom; ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </a>
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
            </a>
            <a href="projetos-interna.php" class="item-card">
                <figure>
                    <img src="https://via.placeholder.com/388x388" alt="">
                </figure>
                <div class="info">
                    <h3>LM Wind Power</h3>
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
            </a>
            <a href="projetos-interna.php" class="item-card">
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
            </a>
            <a href="projetos-interna.php" class="item-card">
                <figure>
                    <img src="https://via.placeholder.com/388x388" alt="">
                </figure>
                <div class="info">
                    <h3>LM Wind Power</h3>
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
            </a>
            <a href="projetos-interna.php" class="item-card">
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
            
         
            <?php wp_reset_query(); ?>
            <?php endwhile; ?>
        </div>
    </div>
   
    <?php endif; ?>
    <?php wp_pagenavi( array( 'query' => $comercial )); ?>
   
</div>
<?php get_footer(); ?>