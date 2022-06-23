<?php global $asset_uri; ?>
<?php $asset_uri = get_theme_file_uri('assets'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo $asset_uri;?>/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

</head>
<?php wp_head(); ?>
<body>
    <div class="body_wrap">
        <header id="header">
            <ul class="wrap">
                <li class="burger">
                    <div class="line"><img src="<?php echo $asset_uri;?>/img/burger1.svg" id="line"></div>
                    <div class="ball"><img src="<?php echo $asset_uri;?>/img/burger2.svg" id="ball"></div>
                </li>

                <li class="logo"><img src="<?php echo $asset_uri;?>/img/max_logo_blk.svg" id="logo"></li>

                <li class="back">
                    <img src="<?php echo $asset_uri;?>/img/back.svg" id="back">
                </li>
            </ul>
            <ul class="fix_menu">
                <li>About us</li>
                <li>&#124;</li>
                <li>Photo</li>
                <li>&#124;</li>
                <li>Video</li>
                <li>&#124;</li>
                <li>Mini Game</li>
            </ul>
            
        </header>

        <div class="nav" id="nav">
            <ul id="nav_text">
                <ul>
                    <li>About us</li>
                    <li>Photo</li>
                    <li>Video</li>
                    <li>Mini Game</li>
                    <div class="insta">
                        <a href="https://instagram.com/max_ketball?igshid=NWRhNmQxMjQ="><img src="img/insta.svg"></a>
                        <div class="email">kimwc97@gmail.com</div>
                    </div>
                </ul>
            </ul>
            
        </div>
        <div class="close" id="close_btn"></div>
