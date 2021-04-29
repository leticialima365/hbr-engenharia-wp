<!DOCTYPE html>
<?php $title = 'HBR - Engenharia'; ?>
<html lang="pt-BR" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo get_bloginfo('name') . ' | ' . get_bloginfo('description');?></title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Agência Ópera"/>
        <link rel="canonical" href="<?php echo get_permalink(); ?>">

        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:description" content="">
        <meta property="og:title" content="<?php echo get_bloginfo('name'); ?>">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>">
        <meta property="og:image" content="">
        <meta property="fb:app_id" content="">

        <link rel="icon" href="<?php echo TEMPLATE; ?>dist/images/favicon-32x32.png" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php echo TEMPLATE; ?>dist/images/favicon-32x32.png" type="image/x-icon" />

        <link rel="stylesheet" href="<?php echo TEMPLATE; ?>dist/styles/styles.min.css">

        <?php wp_head(); ?>
    </head>
    <header>
        <div class="content-center">
            <div class="flex">
            <?php 
                $imageLogo = get_field('logo_menu_topo','option');    
                if( !empty( $imageLogo ) ): ?>
                    <a href="index.php" class="logo">
                        <img src="<?php echo esc_url($imageLogo['url']); ?>" alt="<?php echo esc_attr($imageLogo['alt']); ?>">
                    </a>
                <?php endif; ?>
                <figure class="menu-mobile">
                    <img src="<?php echo TEMPLATE; ?>dist/images/menu-mob.svg">
                </figure>

                <nav class="menu-line">
                    <?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
                    <!-- <ul>
                        <li>
                            <a href="a-hbr.php">A HBR</a>
                        </li>
                        <li>
                            <a href="empreendimentos.php">Empreendimentos</a>
                        </li>
                        <li class="submenu">
                            <a>Portfólio e Serviços</a>
                            <ul>
                                <li>
                                    <a href="projetos.php">Projetos</a>
                                </li>
                                <li>
                                    <a href="hbr-metal.php">HBR Metal</a>
                                </li>
                            </ul>
                        </li>
                    </ul> -->
                </nav>
                <!-- <a href="fale-conosco.php" class="c-button">Contato</a> -->
            </div>
        </div>
    </header>