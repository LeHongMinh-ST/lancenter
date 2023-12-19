<div id="contact" class="contact-area">
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