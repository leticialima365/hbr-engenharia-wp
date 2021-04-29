<?php get_header(); ?>
<div class="main p-empreendimentos">
    <div class="banner-topo-page" style="background-image: url(<?php echo TEMPLATE; ?>/dist/images/bg-banner-topo.jpg);">
		<div class="content-center">
			<div class="text">
				<h3 class="subtitle-box">Nossos</h3>
				<h2 class="title-box">Empreendimentos</h2>
			</div>
		</div>
    </div>
    <!-- <div class="box-text bg-balls">
        <div class="content-center">
            <div class="box-figures">
                <div class="flex-figures">
                    <figure>
                        <img src="<?php echo TEMPLATE; ?>dist/images/logo1.png" alt="">
                        <span class="icon-more"></span>
                    </figure>
                    <figure>
                        <img src="<?php echo TEMPLATE; ?>dist/images/logo1.png" alt="">
                        <span class="icon-more"></span>
                    </figure>

                </div>
            </div>
            <h4>
                A nossa parceria com a <a href="#">MaxPlural</a> garante: aqui você vai encontrar o empreendimento ideal para investir e perfeito para morar! 
            </h4>
        </div>
    </div> -->
    <?php 
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $args = array (  
        'post_type' => 'empreendimentos',
        'order' => 'ASC',
        'posts_per_page' => -1
        );
        $empreendimentos = new WP_Query( $args );

        if ( $empreendimentos->have_posts() ) :
    ?>
    <div class="content-center">
        <div class="buttons-cat flex">
            <a href="../industrial/" class="c-button">Industrial</a>
            <a href="../comercial" class="c-button">Comercial</a>
            <a href="../empreendimentos/" class="c-button active">Empreendimentos</a>
            <a href="../hbr-metal" class="c-button">HBR Metal</a>
        </div>
    </div>
    <div class="box-cards-info">
        <div class="content-center">
            <div class="center">
                <div class="flex-cards">
                <?php while ($empreendimentos->have_posts() ) : $empreendimentos->the_post();
                            $imgEmpreendimento = get_field('imagem_empreendimento');
                            $textEmpreendimento = get_field('texto_empreendimento');
                            $terms = wp_get_post_terms($post->ID, 'categoria-empreendimento');
                    ?>
                    <a href="<?php the_permalink();?>" class="item-card">
                        <figure>
                            <img src="<?php echo $imgEmpreendimento;?>" alt="">
                        </figure>
                        <div class="info">
                            <h3><?php the_title();?></h3>

                            <div class="list-info">
                                <?php 
                                $localEmp = get_field('local_empreendimento');
                                $DistEmp = get_field('distancia_empreendimento');
                                $InfoEmp = get_field('informacoes_empreendimento');
                                if ($localEmp):
                                ?>
                                <div class="item-info">
                                    <img src="<?php echo TEMPLATE; ?>dist/images/icon-local.svg" alt="">
                                    <p><?php echo $localEmp; ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if ($DistEmp): ?>
                                <div class="item-info">
                                    <img src="<?php echo TEMPLATE; ?>dist/images/icon-size.svg" alt="">
                                    <p><?php echo $DistEmp; ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if ($InfoEmp): ?>
                                <div class="item-info">
                                    <img src="<?php echo TEMPLATE; ?>dist/images/icon-house.svg" alt="">
                                    <p><?php echo $InfoEmp; ?></p>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                     <?php wp_reset_query(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?> 
    <?php wp_pagenavi( array( 'query' => $empreendimentos )); ?>
</div>
<?php get_footer(); ?>