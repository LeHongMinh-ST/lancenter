<div class="footer-area ">
  <div class="main-footer size">
    <div class="footer-logo">
      <a href="<?= get_home_url()?>">
        <img src="<?= THEME_URI; ?>/images/logo-footer.png" alt="logo-footer">
      </a>
    </div>
    <div class="sub-title-footer">
      お役立ち情報では、ネットワーク・ITソリューションに関わる全ての方のためのサイトです。安心・安全な環境を実現したい経営者様・担当者様、確かなシステムを提案されたいインテグレータ様に向けて、DXに関する施策や経営の加速の方法などをお届けしていきます。
    </div>
    <div class="menu-footer">
      <?php
      wp_nav_menu([
        'theme_location' => 'menu-footer',
        'menu_id' => 'menu-footer',
        'items_wrap' => '<ul id="%1$s" class="%2$s list-item">%3$s</ul>',
      ])
      ?>
    </div>
    <div class="copyright">
      <p>Copyright (C) Lancetier inc., All Rights Reserved.</p>
    </div>
  </div>
</div>

<div class="modal fade" id="modelDepartment">
  <div class="modal-dialog modal-lg modal-dialog-centered" >
    <img src="<?= THEME_URI; ?>/images/modal.png" alt="">

  </div>
</div>

</body>
<?php wp_footer()?>
</html>
