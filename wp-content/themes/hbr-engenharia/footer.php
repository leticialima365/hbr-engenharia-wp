<div class="contato-footer">
    <div class="content-center">

        <figure class="logo-hbr">
            <img src="<?php echo the_field('logo_footer','option'); ?>" title="HBR Engenharia" alt="HBR Engenharia">
        </figure>

        <h2 class="title-box">
            <?php echo the_field('titulo_contato','option'); ?>
        </h2>
        <div class="list-contact line-b">
            <!-- email -->
            <?php if( have_rows('repetidor_email','option') ): ?>
            <div class="item-contact">
                <p class="tt-item"><?php echo the_field('titulo_email','option'); ?></p>
                <?php while( have_rows('repetidor_email','option') ): the_row();  
                    $email = get_sub_field('email','option');
                ?>
                <a href="mailto:<?php echo $email; ?>" class="txt-item"><?php echo $email; ?></a>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <!-- telefone -->
            <?php if( have_rows('repetidor_telefone','option') ): ?>
            <div class="item-contact">
                <p class="tt-item"><?php echo the_field('titulo_telefone','option'); ?></p>
                <?php while( have_rows('repetidor_telefone','option') ): the_row();  
                    $telefone = get_sub_field('telefone','option');
                ?>
                <a href="tel:<?php echo preg_replace('/[^\d]/', '',$telefone); ?>" class="txt-item"><?php echo $telefone; ?></a>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <!-- endereço  -->
            <div class="item-contact">
                <p class="tt-item"><?php echo the_field('titulo_endereco','option'); ?></p>
                <a href="#" class="txt-item">
                    <?php echo the_field('endereco','option'); ?>
                </a>
            </div>
        </div>

        <!-- Certificação -->
        <h2 class="title-box">
        <?php echo the_field('titulo_certificacao','option'); ?>
            <p><?php echo the_field('subtitulo_certificacao','option'); ?></p>
        </h2>
        <?php if( have_rows('repetidor_certificados','option') ): ?>
        <div class="l-item">
            <?php while( have_rows('repetidor_certificados','option') ): the_row();  
                $arquivo = get_sub_field('arquivo_certificacao','option');
                if( $arquivo ):
            ?>

            <a href="<?php echo $arquivo['url']; ?>" class="txt-item">
                <img src="<?php echo TEMPLATE; ?>dist/images/down-arrow.svg" alt="">
                <p><?php echo $arquivo['filename']; ?></p> 
            </a>
            <?php endif; ?>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<footer>
    <div class="content-center">
        <div class="flex">
            <p>
                Copyright © <?php echo date('Y'); ?>| HBR Engenharia
            </p>
            <a href="https://atacama.digital/" title="Atacama Digital" alt="Atacama Digital">
                <figure class="logo-footer">
                    <img src="<?php echo TEMPLATE; ?>dist/images/atacama.svg" title="Atacama Digital" alt="Atacama Digital">
                </figure>
            </a>
        </div>
    </div>
</footer>


<script src="<?php echo TEMPLATE; ?>dist/javascripts/vendor/vendor.js"></script>
<script src="<?php echo TEMPLATE; ?>dist/javascripts/app.js"></script>
	
<script>
    $(document).ready(function(){
        App.init();
    });
</script>

<?php wp_footer(); ?>
</body>
</html>