<?php get_header(); ;?>

<div class="breadcrumb-area size">
    <nav>
        <ul class="breadcrumb">
            <li class="breadcrumb__item">
                <a href="<?php echo home_url(); ?>">LANCETIER</a>
            </li>
            <li class="breadcrumb__item">
                <a href="<?= get_permalink( get_option( 'page_for_posts' )) ?>"><?= get_the_title( get_option('page_for_posts', true) ); ?></a>
            </li>
            <li class="breadcrumb__item">
                <span><?php single_post_title(); ?></span>
            </li>
        </ul>
    </nav>
</div>


<div class="news-details size">
    <div class="news-details__title">
        <?= get_the_title() ?>
    </div>
    <div class="news-details__thumbnail">
        <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>"
             alt="<?= get_the_title() ?>">
        <div class="list">
            <?php $categories = get_the_category(get_the_ID()); ?>
            <div class="category">
                <?php foreach ($categories as $category) { ?>
                    <span><?= $category->name?></span>
                <?php } ?>
            </div>

            <div class="date"><?= get_the_date('Y.m.d')?></div>
        </div>
    </div>
    <div class="news-details__content">
        <?= get_the_content() ?>
    </div>
</div>


<?php get_template_part('template-parts/post/related') ?>

<?php get_template_part('template-parts/post/recommend') ?>

<?php get_template_part('template-parts/home/categories') ?>

<?php get_footer(); ?>
