<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="CM Freelancing">
    <meta name="description" content="Ingwenya: The experts in mineral processing technology.">
    <meta name="keywords" content="mineral, mining, processing, technology, mpteq, minerals">
    <link rel="icon" href="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Small-Logo.jpg">
    <title>Ingwenya</title>
    <script src="https://kit.fontawesome.com/5633037ef4.js" data-auto-replace-svg="nest"></script>
    <?php wp_head()?>
</head>

<body>
    <div id="navbar">
        <header class="design" id="design3" style="display: block">
            <button id="nav-toggle">X</button>
            <nav>
                <div>
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Logo.jpg" alt="logo">
                    <div class="circle"></div>
                </div>
                <?php wp_nav_menu(array(
                "menu" => "Primary Menu",
                "container" => False,
                "items_wrap" => '<ol id="%1$s" class="%2$s">%3$s</ol>'
            ));?>
            </nav>
            <?php if(is_front_page()):?>
            <div id="header">
                <div id="wrap">
                    <div class="slide">
                        <img src='<?php bloginfo('wpurl')?>/wp-content/uploads/2020/01/Ingwenya.jpg'>
                        <div class="info">
                            <h1>INGWENYA MINERAL PROCESSING OPERATIONS AND MAINTENANCE PARTNER OF CHOICE</h1>
                            <div class="background"></div>
                        </div>
                    </div>
                    <div class="slide">
                        <img src='<?php bloginfo('wpurl')?>/wp-content/uploads/2020/01/ING0529-1-scaled.jpg'>
                        <div class="info">
                            <h1>OPERATIONS OF FACILITIES MINERAL PROCESSING FACILITIES</h1>
                            <div class="background"></div>
                        </div>
                    </div>
                    <div class="slide">
                        <img src='<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/Plant2.jpg'>
                        <div class="info">
                            <h1>FEASIBILITY AND DUE DILIGENCE STUDIES</h1>
                            <div class="background"></div>
                        </div>
                    </div>
                    <div class="slide">
                        <img src='<?php bloginfo('wpurl')?>/wp-content/uploads/2020/01/Kiepersol-8th-Nov-2011-026.jpg'>
                        <div class="info">
                            <h1>ENGINEERING DESIGN AND FABRICATION</h1>
                            <div class="background"></div>
                        </div>
                    </div>
                    <div class="slide">
                        <img src='<?php bloginfo('wpurl')?>/wp-content/uploads/2020/01/ING0646-1-scaled.jpg'>
                        <div class="info">
                            <h1>DESIGN AND BUILD OF COAL PROCESSING PLANTS</h1>
                            <div class="background"></div>
                        </div>
                    </div>
                </div>
                <div id="header-controls">
                    <input checked type="radio" id="-1">
                    <input type="radio" id="0">
                    <input type="radio" id="1">
                    <input type="radio" id="2">
                    <input type="radio" id="3">
                </div>
                <div class="circle"></div>
            </div>
            <?php endif?>
        </header>
    </div>