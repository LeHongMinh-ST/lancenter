<?php
$categories = get_categories();
?>
<div class="categories-area">
    <div class="categories-main size">
        <div class="section-header-title categories-header text-center">
            カテゴリから記事を探す
        </div>
        <div class="categories-content">
            <?php foreach ($categories as $category) {  ?>
                <div class="categories-item">
                    <?php  $categoryLink = get_category_link($category->cat_ID);?>
                    <a href="<?= esc_url($categoryLink) ?>"><?= $category->name  ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>