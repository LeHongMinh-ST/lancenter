<?php
    $postsSlider = get_posts([
        'post_type' => 'post',
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
    ]);

?>

<?php if (count($postsSlider) > 0) {?>
<div class="slider-news">
    <div class="section-header-title slider-news-header text-center">
        ピックアップ
    </div>

    <div class="slider-content">
        <div class="news-list">
            <div class="swiper " id="mySwiperBlog">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php foreach ($postsSlider as $post){?>
                    <div class="swiper-slide">
                        <div class="single-blog-card">
                            <div class="news-image">

                                <a href="<?= get_the_permalink($post->ID) ?>">
                                    <img src="<?= get_the_post_thumbnail_url($post->ID) ?>" alt="<?= get_the_title($post->ID) ?>">
                                </a>
                            </div>
                            <div class="news-content">
                                <div class="news-content__header">
                                    <?= get_the_date('Y.m.d', $post->ID)?>
                                </div>
                                <a href="<?= get_the_permalink($post->ID) ?>" class="news-content__text">
                                    <?= get_the_title($post->ID) ?>
                                </a>
                            </div>
                            <?php $categories = get_the_category($post->ID); ?>
                            <div class="category">
                                <?php foreach ($categories as $category) { ?>
                                    <span class="news-badge">
                                        <?= $category->name?>
                                    </span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php }?>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>


                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>

        </div>
    </div>
</div>
<?php } ?>