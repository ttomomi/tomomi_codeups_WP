<?php wp_reset_query(); if ( !is_page('contact') && !is_page('contact-thanks') ) : ?>
<section class="contact bottom-contact">
    <div class="contact__inner inner">
        <div class="contact__title section-title">
            <h2 class="section-title__main">お問い合わせ</h2>
            <span class="section-title__sub section-title__sub--contact">Contact</span>
        </div>
        <div class="contact__text">
            <p>
                お問い合わせは下記のリンクへ
            </p>
        </div>
        <div class="contact__btn">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button button--contact">お問い合わせへ</a>
        </div>
    </div>
</section>
<?php endif; ?>

<footer class="footer top-footer">
      <div class="footer__inner">
        <nav class="footer__nav footer-nav">
          <div class="footer-nav__logo">
            <a href="#">横浜珈琲</a>
          </div>
          <ul class="footer-nav__items">
            <li class="footer-nav__item"><a href=""><span>トップ</span></a></li>
            <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/news/')); ?>"><span>お知らせ</span></a></li>
            <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/content/')); ?>"><span>事業内容</span></a></li>
            <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/works/')); ?>"><span>取扱商品</span></a></li>
            <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/overview/')); ?>"><span>企業概要</span></a></li>
            <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/blog/')); ?>"><span>ブログ</span></a></li>
            <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>"><span>お問い合わせ</span></a></li>
          </ul>
        </nav>
        <div class="footer__copyright">
          <small>&copy; 2021 CodeUps Inc.</small>
        </div>
      </div>
    </footer>
    <div class="page-top">
      <a href="<?php echo home_url( '/' );?>" class="">
        <div class="page-top__arrow"></div>
      </a>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
