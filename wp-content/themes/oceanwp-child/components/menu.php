<header id="header">
    <nav>     
        <?php if (wp_is_mobile()) : ?> 
            <div class="mobile">
                <a href="<?php echo get_home_url(); ?>">    
                    <?= wp_get_attachment_image(1127, 'full', '', ['class' => 'logomobile']); ?>
                </a>
                <?php if(is_user_logged_in()) : ?>
                    <?php wp_nav_menu([ 
                        'theme_location' => 'Menu admin',
                        'container' => '',
                        'menu_class' => 'd-wrap' ]) ?>    
                <?php else: ?>
                    <?php wp_nav_menu([ 
                        'theme_location' => 'Menu principal',
                        'container' => '',
                        'menu_class' => 'd-wrap' ]) ?>    
                <?php endif; ?>                                                                                                                                           
            </div>
        <?php else: ?>
            <div class="nav">
                <a href="<?php echo get_home_url(); ?>"> 
                    <?= wp_get_attachment_image(1127, 'full', '', ['class' => 'logo']); ?>
                </a>
                <?php if(is_user_logged_in()) : ?>
                    <?php wp_nav_menu([ 
                        'theme_location' => 'Menu admin',
                        'container' => '',
                        'menu_class' => 'd-wrap' ]) ?>    
                <?php else: ?>
                    <?php wp_nav_menu([ 
                        'theme_location' => 'Menu principal',
                        'container' => '',
                        'menu_class' => 'd-wrap' ]) ?>    
                <?php endif; ?>   
            </div>   
        <?php endif; ?>
    </nav>
</header>
