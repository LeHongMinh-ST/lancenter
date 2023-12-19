<?php
$postID = get_the_ID();

$postCategories = wp_get_post_categories($postID);

$agrs = [
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'category__in' => $postCategories,
    'post__not_in' => [$postID]
];

$postRelated = get_posts($agrs);
?>
<div class="news-area">
    <div class="news-main size">
        <div class="section-header-title news-header text-center">
            関連する記事
        </div>
        <div class="news-content">
            <div class="news-list">
                <?php foreach ($postRelated as $post){?>
                    <!--Start Single Blog One-->
                    <div class="single-blog-card">
                        <div class="news-image">
                            <a href="<?= get_the_permalink($post->ID) ?>">
                                <img src="<?= get_the_post_thumbnail_url($post->ID) ?>"
                                     alt="<?= get_the_title($post->ID) ?>">
                            </a>
                        </div>
                        <div class="news-content">
                            <div class="news-content__header">
                                <?= get_the_date('Y.m.d', $post->ID) ?>
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
                    <!--End Single Blog One-->
                <?php }?>
            </div>
        </div>
    </div>
</div>