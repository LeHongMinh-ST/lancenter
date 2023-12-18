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
      <div class="contact-item">
        <div class="item-line">
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="item-main">
          <div class="contact-label">
            会社名 <span class="required">※必須</span>
          </div>
          <div class="contact-input">
            <input type="text" placeholder="山田株式会社" name="company_name">
          </div>
        </div>
        <div class="item-line">
          <div class="left"></div>
          <div class="right"></div>
        </div>
      </div>
      <div class="contact-item">
        <div class="item-main">
          <div class="contact-label">
            ご担当者名 <span class="required">※必須</span>
          </div>
          <div class="contact-input">
            <input type="text" placeholder="山田　太郎" name="user_name">
          </div>
        </div>
        <div class="item-line">
          <div class="left"></div>
          <div class="right"></div>
        </div>
      </div>
      <div class="contact-item">
        <div class="item-main">
          <div class="contact-label">
            ふりがな <span class="required">※必須</span>
          </div>
          <div class="contact-input">
            <input type="text" placeholder="やまだ　たろう" name="furigana">
          </div>
        </div>
        <div class="item-line">
          <div class="left"></div>
          <div class="right"></div>
        </div>
      </div>
      <div class="contact-item">
        <div class="item-main">
          <div class="contact-label">
            メールアドレス <span class="required">※必須</span>
          </div>
          <div class="contact-input">
            <input type="text" placeholder="example@gmail.co.jp" name="email">
          </div>
        </div>
        <div class="item-line">
          <div class="left"></div>
          <div class="right"></div>
        </div>
      </div>
      <div class="contact-item">
        <div class="item-main">
          <div class="contact-label">
            お電話番号 <span class="required">※必須</span>
          </div>
          <div class="contact-input">
            <input type="text" placeholder="090-0000-0000" name="phone">
          </div>
        </div>
        <div class="item-line">
          <div class="left"></div>
          <div class="right"></div>
        </div>
      </div>
      <div class="contact-item">
        <div class="item-main">
          <div class="contact-label">
            連絡希望手段 <span class="required">※必須</span>
          </div>
          <div class="contact-input">
            <div class="contact-checkbox">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio"> Option 1
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio"> Option 1
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio"> Option 1
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio"> Option 1
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="item-line">
          <div class="left"></div>
          <div class="right"></div>
        </div>
      </div>
      <div class="contact-item">
        <div class="item-main">
          <div class="contact-label">
            当社を知ったきっかけ <span class="required">※必須</span>
          </div>
          <div class="contact-input">
            <input type="text" placeholder="選択してください" name="why">
          </div>
        </div>
        <div class="item-line">
          <div class="left"></div>
          <div class="right"></div>
        </div>
      </div>
      <div class="contact-item">
        <div class="item-main">
          <div class="contact-label">
            当社を知ったきっかけ <span class="required">※必須</span>
          </div>
          <div class="contact-input">
            <select name="">
              <option value="">選択してください</option>
              <option value="">選択してください</option>
              <option value="">選択してください</option>
            </select>
          </div>
        </div>
        <div class="item-line">
          <div class="left"></div>
          <div class="right"></div>
        </div>
      </div>
      <div class="contact-item">
        <div class="item-main">
          <div class="contact-label">
            お問い合わせ種別 <span class="required">※必須</span>
          </div>
          <div class="contact-input">
            <select name="">
              <option value="">選択してください</option>
              <option value="">選択してください</option>
              <option value="">選択してください</option>
            </select>
          </div>
        </div>
        <div class="item-line">
          <div class="left"></div>
          <div class="right"></div>
        </div>
      </div>
      <div class="contact-item">
        <div class="item-main align-items-md-start">
          <div class="contact-label">
            お問い合わせ内容 <span class="required">※必須</span>
          </div>
          <div class="contact-input">
            <textarea>
            </textarea>
          </div>
        </div>
        <div class="item-line">
          <div class="left"></div>
          <div class="right"></div>
        </div>
      </div>
      <div class="contact-item text-center contact-confirm">
        <label for="confirm" class="form-check-label">
          <input type="checkbox" name="confirm" class="form-check-input"
                 id="confirm">
          弊社プライバシーポリシーに同意する
        </label>
      </div>

      <div class="contact-item text-center">
        <div class="contact-btn btn-lp">
          <a href="">お問い合わせ</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

