<!DOCTYPE html>
<html lang="jp">
<head <?php if( isset( $fbadmins )){ if( function_exists( 'ogp_prefix' ) ) ogp_prefix(); } ?>>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<meta name="keywords" content="">
<meta name="description" content="兵庫県神戸市のITが得意な行政書士！とり行政書士事務所">
<meta name="author" content="いつでもとなりに。全国対応のオンライン専門行政書士事務所" />
<meta name="copyright" content="Copyright © 2021 とり行政書士事務所" />
<meta name="robots" content="index,follow">
<meta http-equiv="imagetoolbar" content="no">
<title>
<?php
if ( is_front_page() || is_home() ) {
  echo get_bloginfo( 'name' );
} else {
  wp_title( '|', true, 'right' );
  echo bloginfo( 'name' );
}
?>
</title>

<!-- Global site tag (gtag.js) - Google Analytics --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152629330-1"></script> 
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-152629330-1');
</script> 

<!-- English font -->
<link rel="stylesheet" href="https://use.typekit.net/vqp8skx.css">
<?php wp_head(); ?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo T_DIRE_URI; ?>/assets/css/style.css">
<link rel="icon" href="<?php echo T_DIRE_URI; ?>/assets/img/common/favicon.ico">
<?php
$twuser = ''; // twitterのユーザー名
$twcard = 'summary_large_image'; // twitter card の　表示方法
if ( isset( $fbadmins ) )load_ogp( $fbadmins, $og_title, $og_description, $og_sitename ); /* OGPの出力 */
load_twcard( $twuser, $twcard ); /* twitter cardの出力 */
?>
</head>

<body>
<div id="spMenu" class="c-overlay">
  <div class="content"> <a href="<?php echo HOME; ?>" class="logo"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/top/fv_logo.svg" alt=""> </a>
    <div class="list"> <a href="<?php echo HOME;?>#about" class="item"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/icon_book_white.svg" alt="" width="15.6px" height="24px">
      <p>当事務所について</p>
      </a> <a href="<?php echo HOME.'service';?>" class="item"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/icon_computer_white.svg" alt="" width="27px" height="24px">
      <p>業務内容</p>
      </a> <a href="<?php echo HOME.'profile';?>" class="item"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/icon_peng_white.svg" alt="" width="24px" height="24px">
      <p>代表紹介</p>
      </a> <a href="<?php echo HOME.'blog';?>" class="item"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/icon_bird_white.svg" alt="" width="25px" height="24px">
      <p>とりログ</p>
      </a> </div>
    <div class="followSns">
      <p class="followSns__txt">Please Follow me! </p>
      <div class="followSns__icons"> <a href="https://www.facebook.com/torigyo/" target="_blank" class="followSns__icon"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/icon_twitter_white.svg" alt=""> </a> <a href="https://twitter.com/yttm130" target="_blank" class="followSns__icon"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/icon_face_white.svg" alt=""> </a> </div>
    </div>
    <div class="contact"> <a href="<?php echo HOME.'#contact';?>"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/icon_contact.svg" alt=""> </a> </div>
    <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/sp_panel_bg.svg" alt="" class="bg"> </div>
</div>
<header class="l-header" id="header">
  <div class="l-header__inner">
    <div class="l-header__left"> <a href="<?php echo HOME;?>" class="l-header__txtarea">
      <h1 class="l-header__title"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/logo_title.svg" alt=""> </h1>
      <p class="l-header__lead"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/logo_lead.svg" alt=""> </p>
      </a> </div>
    <div class="l-header__right u-center sp-hidden">
      <div class="l-header__menu"> <a href="<?php echo HOME;?>#about" class="item"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/icon_book_o.svg" alt="" width="15.6px" height="24px">
        <p>当事務所について</p>
        </a> <a href="<?php echo HOME.'service';?>" class="item"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/icon_computer_o.svg" alt="" width="27px" height="24px">
        <p>業務内容</p>
        </a> <a href="<?php echo HOME.'profile';?>" class="item"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/icon_peng_o.svg" alt="" width="24px" height="24px">
        <p>代表紹介</p>
        </a> <a href="<?php echo HOME.'blog';?>" class="item"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/icon_bird_o.svg" alt="" width="25px" height="24px">
        <p>とりログ</p>
        </a> </div>
      <div class="l-header__contact u-bg-blue"> <a href="<?php echo HOME.'#contact';?>"> <img src="<?php echo T_DIRE_URI; ?>/assets/img/common/icon_mail_o.svg" alt="">
        <p class="u-color-white">お問合わせ</p>
        </a> </div>
    </div>
    <div class="sp-link pc-hidden">
      <div class="line"> <span></span> <span></span> <span></span> </div>
      <p class="txt">MENU</p>
    </div>
  </div>
</header>
