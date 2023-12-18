<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ;?>


<?php get_template_part('template-parts/home/banner')?>

<?php get_template_part('template-parts/home/department')?>

<?php get_template_part('template-parts/home/service')?>

<?php get_template_part('template-parts/home/why-choose-us')?>

<?php get_template_part('template-parts/home/tes')?>

<?php get_template_part('template-parts/home/section-about')?>

<?php get_template_part('template-parts/home/can-do')?>

<?php get_template_part('template-parts/home/company-comparison')?>

<?php get_template_part('template-parts/home/cost-comparison')?>

<?php get_template_part('template-parts/home/introduction-flow')?>

<?php get_template_part('template-parts/home/faq')?>


<div class="news-area">
  <div class="news-main size">
    <div class="section-header-title news-header text-center">
      お役立ち情報
    </div>
    <div class="news-content">
      <div class="news-list">
        <div class="single-blog-card">
          <div class="news-image">
            <a href="/">
              <img src="<?= THEME_URI; ?>/images/blog.png" alt="">
            </a>
          </div>
          <div class="news-content">
            <div class="news-content__header">
              2023.00.00
            </div>
            <a href="" class="news-content__text">
              ERPとは？基本的な意味を解説
            </a>
          </div>
          <div class="news-badge">
            用語解説
          </div>
        </div>
        <div class="single-blog-card">
          <div class="news-image">
            <a href="/">
              <img src="<?= THEME_URI; ?>/images/blog.png" alt="">
            </a>
          </div>
          <div class="news-content">
            <div class="news-content__header">
              2023.00.00
            </div>
            <a href="" class="news-content__text">
              ERPとは？基本的な意味を解説
            </a>
          </div>
          <div class="news-badge">
            用語解説
          </div>
        </div>
        <div class="single-blog-card">
          <div class="news-image">
            <a href="/">
              <img src="<?= THEME_URI; ?>/images/blog.png" alt="">
            </a>
          </div>
          <div class="news-content">
            <div class="news-content__header">
              2023.00.00
            </div>
            <a href="" class="news-content__text">
              ERPとは？基本的な意味を解説
            </a>
          </div>
          <div class="news-badge">
            用語解説
          </div>
        </div>
      </div>
      <div class="news-button btn-lp btn-lp-primary text-center">
        <a href="">
          お役立ち情報一覧
        </a>
      </div>
    </div>
  </div>
</div>

<div class="program-area">
  <div class="program-main size">
    <div class="section-header-title program-header text-center">
      Netsuite資料
    </div>
    <div class="program-content">
      <div class="program-list">
        <div class="single-program-card">
          <div class="program-image">
            <a href="/">
              <img src="<?= THEME_URI; ?>/images/blog.png" alt="">
            </a>
          </div>
        </div>
        <div class="single-program-card">
          <div class="program-image">
            <a href="/">
              <img src="<?= THEME_URI; ?>/images/blog.png" alt="">
            </a>
          </div>
        </div>
        <div class="single-program-card">
          <div class="program-image">
            <a href="/">
              <img src="<?= THEME_URI; ?>/images/blog.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="contact-area">
  <div class="contact-main size">
    <div class="section-header-title contact-header text-center">
      お問い合わせ
    </div>
    <div class="contact-content">
      <?php $formContact = get_theme_mod('contact_form')?>
      <?php if($formContact) {?>
      <?= do_shortcode($formContact) ?>
      <?php }?>

    </div>
  </div>
</div>

<?php get_footer(); ?>

