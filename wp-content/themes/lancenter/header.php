<!DOCTYPE html>
<html lang="en">
<head <?php language_attributes(); ?>>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>Lancer</title>

  <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="navbar-area ">
  <div class="mobile-responsive-nav">
    <div class="container">

      <div class="mobile-responsive-menu">
        <div class="logo">
          <a href="<?= get_home_url()?>">
            <img src="<?= THEME_URI; ?>/images/logo.png" class="main-logo" alt="logo">
          </a>
        </div>

      </div>
    </div>
  </div>
  <div class="desktop-nav size">
    <div class="navbar navbar-expand-md">
      <a href="<?= get_home_url()?>" class="navbar-brand">
        <img src="<?= THEME_URI; ?>/images/logo.png" alt="logo" class="main-logo">
      </a>
      <div class="collapse navbar-collapse main-menu mean-menu" id="navbarSupportedContent">

        <?php
        wp_nav_menu([
          'theme_location' => 'menu-header',
          'menu_id' => 'primary-menu',
          'menu_class' => 'main-menu',
          'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav ms-auto">%3$s</ul>',
        ])
        ?>

        <div class="nav-button btn-lp">
          <a href="<?= home_url()?>#contact">
            無料相談・お問い合わせ
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
