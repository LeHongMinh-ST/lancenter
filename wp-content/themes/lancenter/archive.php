<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lancenter
 */

get_header();
?>
    <div class="breadcrumb-area size">
        <nav>
            <ul class="breadcrumb">
                <li class="breadcrumb__item">
                    <a href="<?php echo home_url(); ?>">LANCETIER</a>
                </li>
                <li class="breadcrumb__item">
                    <span><?= single_cat_title(); ?></span>
                </li>
            </ul>
        </nav>
    </div>

    <div class="news-area">
        <div class="news-main size">
            <div class="section-header-title news-header text-center">
                <?= single_cat_title(); ?>
            </div>
            <div class="news-content">
                <div class="news-list">

                    <!--News Sidebar Start-->
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) :the_post(); ?>
                            <!--Start Single Blog One-->
                            <div class="single-blog-card">
                                <div class="news-image">
                                    <a href="<?= get_the_permalink() ?>">
                                        <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>"
                                             alt="<?= get_the_title() ?>">
                                    </a>
                                </div>
                                <div class="news-content">
                                    <div class="news-content__header">
                                        <?= get_the_date('Y.m.d') ?>
                                    </div>
                                    <a href="<?= get_the_permalink() ?>" class="news-content__text">
                                        <?= get_the_title() ?>
                                    </a>
                                </div>
                                <?php $categories = get_the_category(get_the_ID()); ?>
                                <div class="category">
                                    <?php foreach ($categories as $category) { ?>
                                        <span class="news-badge">
                                        <?= $category->name ?>
                                    </span>
                                    <?php } ?>
                                </div>
                            </div>
                            <!--End Single Blog One-->


                        <?php endwhile; ?>

                    <?php else :
                        get_template_part('template-parts/content', 'none'); ?>
                    <?php endif; ?>
                </div>
                <div class="news-paginate">
                    <?php the_posts_pagination([
                        'prev_text' => '<img src="' . THEME_URI . '/images/pre.svg" alt="pre">',
                        'next_text' => '<img src="' . THEME_URI . '/images/next.svg" alt="next">',
                    ]); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_template_part('template-parts/home/categories') ?>

<?php
get_footer();
?>