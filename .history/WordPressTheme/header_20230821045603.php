<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(); ?>
    <?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
    .header {
      margin-top: 32px;
    }
    </style>
    <?php endif; ?>
  </head>
  <body>

      <header class="header top-header js-header">
        <div class="header__inner">
          <h1 class="header__logo logo">
            <a href="index.html" class="logo__link">
              横浜珈琲
            </a>
          </h1>
          <button class="header__drawer hamburger js-hamburger">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div class="header__pc-nav pc-nav">
            <ul class="pc-nav__items">
              <li class="pc-nav__item"><a href="<?php echo esc_url(home_url('/news/')); ?>"><span>お知らせ</span></a></li>
              <li class="pc-nav__item"><a href="<?php echo esc_url(home_url('/content/')); ?>"><span>事業内容</span></a></li>
              <li class="pc-nav__item"><a href="<?php echo esc_url(home_url('/works/')); ?>"><span>取扱商品</span></a></li>
              <li class="pc-nav__item"><a href=<?php echo esc_url(home_url('/overview/')); ?>"><span>企業概要</span></a></li>
              <li class="pc-nav__item"><a href=<?php echo esc_url(home_url('/contact/')); ?>"><span>ブログ</span></a></li>
              <li class="pc-nav__item pc-nav__item--white"><a href="contact.html">お問い合わせ</a></li>
            </ul>
          </div>
          <nav class="header__sp-nav sp-nav js-drawer-menu">
            <div class="sp-nav__scroll">
              <ul class="sp-nav__items">
                <li class="sp-nav__item"><a href="#"><span>トップ</span></a></li>
                <li class="sp-nav__item"><a href="news.html"><span>お知らせ</span></a></li>
                <li class="sp-nav__item"><a href="content.html"><span>事業内容</span></a></li>
                <li class="sp-nav__item"><a href="main-works.html"><span>取扱商品</span></a></li>
                <li class="sp-nav__item"><a href="overview.html"><span>企業概要</span></a></li>
                <li class="sp-nav__item"><a href="main-blog.html"><span>ブログ</span></a></li>
                <li class="sp-nav__item"><a href="contact.html"><span>お問い合わせ</span></a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>

