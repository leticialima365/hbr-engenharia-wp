<?php
    /* Template Name: Fale Conosco */
?>
<?php get_header(); ?>
<div class="main p-fale-conosco">
    <div class="banner-topo-page" style="background-image: url(<?php echo TEMPLATE; ?>/dist/images/bg-banner-topo.jpg);">
		<div class="content-center">
			<div class="text">
				<h3 class="subtitle-box">Fale conosco:</h3>
				<h2 class="title-box">Contato</h2>
			</div>
		</div>
    </div>
    <div class="box-contact-full">
        <div class="part-form">
            <div class="content-center">
                <div class="flex">
                    <div class="side">
                        <h3 class="small-title"><?php echo get_field('email_e_telefones_titulo');?></h3>

                        <?php if( have_rows('repetidor_email_telefones') ): ?>
                        <div class="list-contatos">
                            <?php while( have_rows('repetidor_email_telefones') ): the_row();  
                                $itemContatoEmail = get_sub_field('item_contato_email');
                                $itemContatoTelefone = get_sub_field('item_contato_telefone');

                                if($itemContatoEmail) :
                            ?>
                            <div class="item-contato">
                                <a href="mailto:<?php echo $itemContatoEmail;?>"><?php echo $itemContatoEmail;?></a>
                            </div>
                            <?php endif;
                                if ($itemContatoTelefone) :
                            ?>
                            <div class="item-contato">
                                <a href="tel:<?php echo preg_replace('/[^\d]/', '',$itemContatoTelefone); ?>"><?php echo $itemContatoTelefone;?></a>
                            </div>
                            <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>

                        <h2 class="title-box"><?php echo get_field('titulo_formulario');?></h2>
                        <h3 class="subtitle-box"><?php echo get_field('subtitulo_formulario');?></h3>
                    </div>
                    <div class="side">
                        <?php echo do_shortcode( '[forminator_form id="259"]' ); ?>
                        <!-- <form action="">
                            <input type="text" name="Nome" placeholder="Nome">
                            <input type="email" name="Email" placeholder="Email">
                            <input type="text" name="Telefone" placeholder="Telefone">
                            <div class="textarea-space">
                                <label for="textarea">Mensagem</label>
                                <textarea name="mensagem"></textarea>
                            </div>
                            <button class="c-button" type="submite">Enviar</button>
                        </form> -->
                    </div>
                </div>
        
            </div>
        </div>
        <div class="part-localizacao">
            <div class="content-center">
                <div class="side">
                    <h2 class="title-box"><?php echo get_field('titulo_localizacao');?></h2>
                    <h3 class="subtitle-box"><?php echo get_field('subtitulo_localizacao');?></h3>

                    <?php if( have_rows('repetidor_enderecos') ): ?>
                    <?php while( have_rows('repetidor_enderecos') ): the_row();  
                        $endereco = get_sub_field('endereco');
                        $cidadeCep = get_sub_field('cidade_e_cep');
                    ?>
                    <div class="text">
                        <h3><?php echo $endereco; ?></h3>
                        <p><?php echo $cidadeCep; ?></p>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1602.1857334622111!2d-34.919921642145106!3d-8.025220746038732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab19bacdbadec7%3A0xe23e0e30af4d2de3!2sCentrex%20Proj!5e0!3m2!1spt-BR!2sbr!4v1619223775952!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>