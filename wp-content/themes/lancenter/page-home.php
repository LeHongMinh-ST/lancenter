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

<?php get_template_part('template-parts/home/news')?>

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

<?php get_template_part('template-parts/home/contact')?>

<?php get_footer(); ?>

