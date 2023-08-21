<?php get_header(); ?>

<main>
      <!-- メインビジュアル -->
      <div class="sub-mv js-mv">
        <div class="sub-mv__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-mv.jpg" alt="光っている電球を持つ手">
        </div>
        <h2 class="sub-mv__title">
          事業内容
        </h2>
      </div>
      
      <!-- content -->
      <?php if ( is_page( array( "news","content","条件3" ) ) ) : ?>
  固定ページの条件1と条件2と条件3の処理
<?php else: ?>
  固定ページの条件1と条件2と条件3以外の処理
<?php endif; ?>
      <section class="sub-content bottom-content">
        <div class="sub-content__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
          <div class="sub-content__main">
            <h3 class="sub-content__head">
              企業理念
            </h3>
            <p class="sub-content__text">
              私たちのカフェは、心温まる空間とこだわりの味わいを提供し、人々の日常を特別なひとときで彩ることを大切にしています。お客様に笑顔と満足を届け、持続可能な方法で地域社会と協力し、共に成長することを使命としています。
            </p>
          </div>
          <div class="sub-content__items">
            <div class="sub-content__item">
              <div class="sub-content__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/bottom-content-image1.jpg" alt="女性と男性が話している">
              </div>
              <div class="sub-content__contents">
                <h4 class="sub-content__title">
                  企業理念１
                </h4>
                <p class="sub-content__content">
                  私たちのカフェは、人々が日常の喧騒から離れ、共感とつながりを感じる場所です。心温まるサービスと美味しい飲み物を通じて、コミュニティの一員としてお客様を迎えます。
                </p>
              </div>
            </div>
            <div class="sub-content__item">
              <div class="sub-content__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/bottom-content-image2.jpg" alt="コーヒー豆">
              </div>
              <div class="sub-content__contents">
                <h4 class="sub-content__title">
                  企業理念2
                </h4>
                <p class="sub-content__content">
                  私たちのカフェは、厳選した地元食材と世界のコーヒー文化を融合させ、お客様に新鮮な旅を提供します。持続可能な農業と環境への配慮を大切にし、美味しさと地球の未来を追求します。
                </p>
              </div>
            </div>
            <div class="sub-content__item">
              <div class="sub-content__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/bottom-content-image3.jpg" alt="ラテアート">
              </div>
              <div class="sub-content__contents">
                <h4 class="sub-content__title">
                  企業理念3
                </h4>
                <p class="sub-content__content">
                  私たちのカフェは、アートとコーヒーが交わる場所です。クリエイティブな空間と出会いを通じて、お客様にインスピレーションと喜びを提供し、アイデアとストーリーの共有を奨励します。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
    </main>
<?php get_footer(); ?>