<?php get_header(); ;?>


<?php if (is_home() && !is_front_page()) : ?>

  <!--Page Header Start-->
  <div class="breadcrumb-area size">
    <nav>
      <ul class="breadcrumb">
        <li class="breadcrumb__item">
          <a href="<?php echo home_url(); ?>">LANCETIER</a>
        </li>
        <li class="breadcrumb__item">
          <a href=""><?php single_post_title(); ?></a>
        </li>
      </ul>
    </nav>
  </div>
  <!--Page Header End-->
<?php endif; ?>

<div class="size page-content">
  <!--News Sidebar Start-->
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) :the_post(); ?>
      <!--Start Single Blog One-->
      <!--End Single Blog One-->
      <?php get_template_part('template-parts/content', get_post_type()); ?>

    <?php endwhile; ?>

    <div class="paginations">
      <?php the_posts_pagination(); ?>
    </div>
  <?php else :
    get_template_part('template-parts/content', 'none'); ?>
  <?php endif; ?>
</div>


<?php get_footer(); ?>

