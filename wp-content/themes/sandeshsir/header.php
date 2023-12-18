<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>

    <!-- Included via Site Options -->
    <?php
    if (get_field("site_header_code") != "") {
        echo $get_field("site_header_code");
    }
    ?>
    <!-- End Site Options -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Roboto+Condensed:wght@400;500&family=Rubik+Doodle+Shadow&display=swap"
        rel="stylesheet">
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
</head>

<body <?php body_class(); ?>>
    <!-- Included via Site Options -->
    <?php
if (get_field("site_header_code") != "") {
    echo $get_field("site_body_code");
}
?>
    <!-- End Site Options -->
    <header class="header js-header">
        <div class="container">
            <div class="logo__container">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo__link">
                    <div class="logo__wrap">
                        <svg class="variation-svg fade-enter-done"
                            viewBox="113.59500122070312 54.36000061035156 347.80999755859375 425.35999870300293"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            style="transform: scale(1);">
                            <image height="230" width="201.8828125" y="124.36000061035156" x="186.55859375"
                                preserveAspectRatio="xMinYMin"
                                href="https://fiverr-res.cloudinary.com/image/upload/f_png,q_auto,t_makers_project_variation_preview/v1/secured-attachments/makers_project_variation/preview_file/d61790d9cf80e1e88bf92dd97b6096ff-1681818559/643e837718bdf14b020466bf.svg?__cld_token__=exp=1702842654~hmac=f6b9352be51484f3089e165c935405b948d6a2235ebf0566855d35b9eb6c5404"
                                xlink:href="https://fiverr-res.cloudinary.com/image/upload/f_png,q_auto,t_makers_project_variation_preview/v1/secured-attachments/makers_project_variation/preview_file/d61790d9cf80e1e88bf92dd97b6096ff-1681818559/643e837718bdf14b020466bf.svg?__cld_token__=exp=1702842654~hmac=f6b9352be51484f3089e165c935405b948d6a2235ebf0566855d35b9eb6c5404"
                                style="position: absolute;"></image>
                            <g><svg data-layer-type="text" y="432.3199996948242" viewBox="0 0 0 0" x="287.5" height="0"
                                    width="0" style="position: absolute;">
                                    <g data-horizontal-grow="center"
                                        style="fill: rgb(37, 161, 176); font-size: 18px; font-weight: 400; font-style: normal; font-family: Montserrat; dominant-baseline: hanging; letter-spacing: 0.05em; fill-opacity: 1;">
                                        <path d="" transform="translate(0, 0)"></path>
                                    </g>
                                </svg></g>
                            <g><svg data-layer-type="text" y="386.6800003051758"
                                    viewBox="1.1200000047683716 8.260000228881836 207.80999755859375 23.03999900817871"
                                    x="183.59500122070312" height="23.03999900817871" width="207.80999755859375"
                                    style="position: absolute;">
                                    <g data-horizontal-grow="center"
                                        style="fill: rgb(255, 255, 255); font-size: 32px; font-weight: 600; font-style: normal; font-family: Montserrat; dominant-baseline: hanging; text-transform: uppercase; letter-spacing: 0.25em; fill-opacity: 1;">
                                        <path
                                            d="M9.95 31.30L9.95 31.30Q7.33 31.30 4.93 30.54Q2.53 29.79 1.12 28.61L1.12 28.61L2.56 25.38Q3.90 26.43 5.89 27.14Q7.87 27.84 9.95 27.84L9.95 27.84Q11.71 27.84 12.80 27.46Q13.89 27.07 14.40 26.42Q14.91 25.76 14.91 24.93L14.91 24.93Q14.91 23.90 14.18 23.28Q13.44 22.66 12.27 22.29Q11.10 21.92 9.68 21.60Q8.26 21.28 6.83 20.85Q5.41 20.42 4.24 19.73Q3.07 19.04 2.34 17.89Q1.60 16.74 1.60 14.94L1.60 14.94Q1.60 13.12 2.58 11.60Q3.55 10.08 5.55 9.17Q7.55 8.26 10.62 8.26L10.62 8.26Q12.64 8.26 14.62 8.77Q16.61 9.28 18.08 10.24L18.08 10.24L16.77 13.47Q15.26 12.58 13.66 12.14Q12.06 11.71 10.59 11.71L10.59 11.71Q8.86 11.71 7.79 12.13Q6.72 12.54 6.22 13.22Q5.73 13.89 5.73 14.75L5.73 14.75Q5.73 15.78 6.45 16.40Q7.17 17.02 8.34 17.38Q9.50 17.73 10.94 18.06Q12.38 18.40 13.81 18.82Q15.23 19.23 16.40 19.90Q17.57 20.58 18.29 21.73Q19.01 22.88 19.01 24.64L19.01 24.64Q19.01 26.43 18.03 27.95Q17.06 29.47 15.04 30.38Q13.02 31.30 9.95 31.30ZM32.26 30.98L27.97 30.98L38.05 8.58L42.14 8.58L52.26 30.98L47.90 30.98L39.23 10.78L40.90 10.78L32.26 30.98ZM46.94 25.79L32.61 25.79L33.73 22.53L45.82 22.53L46.94 25.79ZM67.23 30.98L63.10 30.98L63.10 8.58L66.53 8.58L80.58 25.82L78.88 25.82L78.88 8.58L83.01 8.58L83.01 30.98L79.58 30.98L65.54 13.73L67.23 13.73L67.23 30.98ZM106.82 30.98L97.02 30.98L97.02 8.58L106.82 8.58Q110.46 8.58 113.22 9.98Q115.97 11.39 117.50 13.89Q119.04 16.38 119.04 19.78L119.04 19.78Q119.04 23.14 117.50 25.65Q115.97 28.16 113.22 29.57Q110.46 30.98 106.82 30.98L106.82 30.98ZM101.18 12.10L101.18 27.46L106.62 27.46Q109.15 27.46 110.99 26.50Q112.83 25.54 113.84 23.81Q114.85 22.08 114.85 19.78L114.85 19.78Q114.85 17.44 113.84 15.73Q112.83 14.02 110.99 13.06Q109.15 12.10 106.62 12.10L106.62 12.10L101.18 12.10ZM135.30 21.31L135.30 17.89L146.43 17.89L146.43 21.31L135.30 21.31ZM135.62 12.06L135.62 27.49L148.26 27.49L148.26 30.98L131.46 30.98L131.46 8.58L147.81 8.58L147.81 12.06L135.62 12.06ZM167.84 31.30L167.84 31.30Q165.22 31.30 162.82 30.54Q160.42 29.79 159.01 28.61L159.01 28.61L160.45 25.38Q161.79 26.43 163.78 27.14Q165.76 27.84 167.84 27.84L167.84 27.84Q169.60 27.84 170.69 27.46Q171.78 27.07 172.29 26.42Q172.80 25.76 172.80 24.93L172.80 24.93Q172.80 23.90 172.06 23.28Q171.33 22.66 170.16 22.29Q168.99 21.92 167.57 21.60Q166.14 21.28 164.72 20.85Q163.30 20.42 162.13 19.73Q160.96 19.04 160.22 17.89Q159.49 16.74 159.49 14.94L159.49 14.94Q159.49 13.12 160.46 11.60Q161.44 10.08 163.44 9.17Q165.44 8.26 168.51 8.26L168.51 8.26Q170.53 8.26 172.51 8.77Q174.50 9.28 175.97 10.24L175.97 10.24L174.66 13.47Q173.15 12.58 171.55 12.14Q169.95 11.71 168.48 11.71L168.48 11.71Q166.75 11.71 165.68 12.13Q164.61 12.54 164.11 13.22Q163.62 13.89 163.62 14.75L163.62 14.75Q163.62 15.78 164.34 16.40Q165.06 17.02 166.22 17.38Q167.39 17.73 168.83 18.06Q170.27 18.40 171.70 18.82Q173.12 19.23 174.29 19.90Q175.46 20.58 176.18 21.73Q176.90 22.88 176.90 24.64L176.90 24.64Q176.90 26.43 175.92 27.95Q174.94 29.47 172.93 30.38Q170.91 31.30 167.84 31.30ZM204.77 30.98L204.77 8.58L208.93 8.58L208.93 30.98L204.77 30.98ZM193.18 8.58L193.18 30.98L189.02 30.98L189.02 8.58L193.18 8.58ZM205.09 17.82L205.09 21.38L192.83 21.38L192.83 17.82L205.09 17.82Z"
                                            transform="translate(0, 0)"></path>
                                    </g>
                                </svg></g>
                        </svg>
                    </div>
                    <meta itemprop="name" content="<?php bloginfo('name'); ?>">
                </a>
            </div>
            <a href="#" class="mobileNav__toggle js-nav-toggle">
                <span class="accessible-text">Click to toggle navigation menu.</span>
                <div class="menuBar__container">
                    <span class="menuBar"></span>
                    <span class="menuBar"></span>
                    <span class="menuBar"></span>
                </div>
            </a>
            <?php
        $menuArgs = array(
            'container' => false,
            'menu' => 'Main Navigation',
            'menu_class' => 'primaryNav'
        );
        wp_nav_menu($menuArgs);
        ?>
        </div>
    </header>