<?php get_header(); ?>
<main>
      <!-- メインビジュアル -->
      <div class="sub-mv js-mv">
        <div class="sub-mv__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-mv.jpg" alt="光っている電球を持つ手">
        </div>
        <h2 class="sub-mv__title">
          お問い合わせ
        </h2>
      </div>
      
      <!-- contact -->
      <section class="sub-contact bottom-main-contact">
        <div class="sub-contact__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
        </div>
        <div class="sub-contact__wrapper inner">
          <form action="" method="post" id="" class="sub-contact__form form js-form">
            <span class="form__error"></span>
            <dl class="form__item">
              <dt>※会社名</dt>
              <dd>
                <input type="text" name="company" value="" placeholder="テキストがはいります" class="form__company js-text" required />
              </dd>
            </dl>
            <dl class="form__item">
              <dt>※お名前</dt>
              <dd>
                <input type="text" name="your_name" value="" placeholder="テキストがはいります"  required />
              </dd>
            </dl>
            <dl class="form__item">
              <dt>※ふりがな</dt>
              <dd>
                <input type="text" name="your_kana" value="" placeholder="テキストがはいります"  required />
              </dd>
            </dl>
            <dl class="form__item">
              <dt>※メールアドレス</dt>
              <dd>
                <input type="email" name="your_mail" value="" placeholder="テキストがはいります"  required />
              </dd>
            </dl>
            <dl>
              <dt>※お問い合わせ内容 </dt>
              <dd>
                <textarea name="contents" placeholder="テキストがはいります" required ></textarea>
              </dd>
            </dl>
            <div class="form__btn">
              <input type="submit" class="form__btn js-btn" value="送信"/>
            </div>
          </form>
      </div>
      </section>

    </main>
<?php get_footer(); ?>