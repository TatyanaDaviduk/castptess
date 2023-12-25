<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <?php wp_head();?>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    
    <header class="header">
        <div class="header__inner">


            <nav class="header__nav">
                <div class="header__logo">
                  
                        <?php
                            if( has_custom_logo(  ) ){
                                echo get_custom_logo();
                            }
                        ?>
                      
                
                </div>

                <?php 
                    wp_nav_menu( [
                        'theme_location'  => 'header',
                        'container'       => false,
                        'menu_class'      => 'header__menu',
                        'menu_id'         => false,
                        'echo'            => true,
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ] );
                ?>

                <ul class="header__menu">
                    <li class="header__menu-item header__menu-item-list ">
                        <button class="header__menu-btn ">Episodes</button>
    
                        <ul class="header__menu-list list ">
                            <li class="list__item"><a href="" class="list__link">Season 1</a></li>
                            <li class="list__item"><a href="" class="list__link">Season 2</a></li>
                            <li class="list__item"><a href="" class="list__link">Season 3</a></li>
                            
                        </ul>
                    </li>
                    <li class="header__menu-item"><a href="#" class="header__menu-link">Blog</a></li>
                    <li class="header__menu-item"><a href="#" class="header__menu-link">Contact</a></li>
                    <li class="header__menu-item ">
                        
                            <svg xmlns="http://www.w3.org/2000/svg" xMidYMid width="12" height="11" viewBox="0 0 13 12" >
                                <path  clip-rule="evenodd" d="M6.48649 1.3427C7.23803 0.519074 8.29096 0.0347259 9.40541 0C11.3757 0 12.973 1.59725 12.973 3.56757C12.973 5.90026 10.3798 8.45677 8.8246 9.99004C8.68458 10.1281 8.55298 10.2578 8.43243 10.3784L6.95351 11.8573C6.86237 11.9486 6.73871 11.9999 6.60973 12H6.36324C6.23426 11.9999 6.11061 11.9486 6.01946 11.8573L4.54054 10.3784C4.42 10.2578 4.28839 10.1281 4.14837 9.99004C2.59314 8.45677 0 5.90026 0 3.56757C0 1.59725 1.59725 0 3.56757 0C4.68201 0.0347259 5.73494 0.519074 6.48649 1.3427ZM6.48542 10.4886L7.91244 9.08099C9.2292 7.78369 11.6746 5.35774 11.6746 3.56747C11.6746 2.96197 11.4328 2.38155 11.0028 1.95523C10.5728 1.52891 9.99035 1.29201 9.38488 1.2972C8.37643 1.39082 7.46612 1.94035 6.91352 2.78909C6.85162 2.86997 6.75591 2.91783 6.65407 2.91882H6.36217C6.21062 2.91841 6.06746 2.84922 5.97298 2.73072C5.42916 1.91325 4.54429 1.38615 3.5665 1.2972C2.31266 1.2972 1.29623 2.31364 1.29623 3.56747C1.29623 5.35774 3.74163 7.78369 5.05839 9.08099L6.48542 10.4886Z" />
                            </svg>
                        
                        <a href="#" class="header__menu-link header__menu-link--accent">
    
                        Donate</a></li>
                    <li class="header__menu-item"><a href="#" class="header__menu-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.331 11.0715L15.8859 14.6313C16.0447 14.8079 16.0368 15.0783 15.8681 15.2454L15.246 15.8684C15.1626 15.9526 15.049 16 14.9305 16C14.812 16 14.6985 15.9526 14.615 15.8684L11.0601 12.3085C10.9618 12.21 10.8726 12.1028 10.7935 11.9881L10.127 11.0982C9.02413 11.9801 7.6546 12.4602 6.24327 12.4598C3.33502 12.4699 0.807867 10.461 0.157951 7.62231C-0.491966 4.78365 0.90881 1.87288 3.53098 0.613257C6.15315 -0.646363 9.29689 0.0813446 11.101 2.36555C12.9052 4.64977 12.8882 7.88086 11.0601 10.1459L11.9489 10.76C12.0877 10.849 12.2159 10.9535 12.331 11.0715ZM1.79968 6.23008C1.79968 8.68763 3.78915 10.6799 6.24329 10.6799C7.42181 10.6799 8.55206 10.2111 9.3854 9.37656C10.2187 8.54206 10.6869 7.41024 10.6869 6.23008C10.6869 3.77252 8.69743 1.78027 6.24329 1.78027C3.78915 1.78027 1.79968 3.77252 1.79968 6.23008Z" fill="#222222"/>
                        </svg>
                    </a></li>
                </ul>
                <div class="burger-menu">
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>