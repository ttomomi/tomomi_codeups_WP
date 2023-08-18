<?php get_header(); ?>
  <section class="sub-works bottom-sub-works">
    <div class="sub-works__block inner">
      <div class="breadcrumbs">
          <?php
          if (function_exists('bcn_display')) {
              bcn_display();
          }
          ?>
      </div>
    </div>
    
    <div class="sub-works__block">
      <div class="sub-works__inner inner">
        <!-- ループ開始 -->
        <?php if(have_posts()):while (have_posts()):the_post(); ?>
          <h1 class="sub-works__title">
            <?php the_title(); ?>
          </h1>
          <div class="sub-works__meta">
            <?php the_field('works_date'); ?>
            <?php
              $taxonomy_terms = get_the_terms($post->ID, 'works_item');
              if ( $taxonomy_terms ) {
                echo '<span class="sub-works__category">'.$taxonomy_terms[0]->name.'</span>';
              }
            ?>
          </div>
      
          <!-- swiper -->
          <div class="sub-works__container">
            <div class="sub-works__swiper swiper slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide sub-works__image-top">
                  <img src="<?php the_field('works_image1'); ?>">
                </div>
                <div class="swiper-slide sub-works__image-top">
                  <img src="./assets/images/common/sub-works1.jpg" alt="クリスマスリース">
                </div>
                <div class="swiper-slide sub-works__image-top">
                <img src="<?php the_field('works_image3'); ?>">
                </div>
                <div class="swiper-slide sub-works__image-top">
                  <img src="./assets/images/common/sub-works3.jpg" alt="美味しそうなクッキー">
                </div>
                <div class="swiper-slide sub-works__image-top">
                  <img src="./assets/images/common/sub-works4.jpg" alt="ホットラテ">
                </div>
                <div class="swiper-slide sub-works__image-top">
                  <img src="./assets/images/common/sub-works5.jpg" alt="キラキラな外観">
                </div>
                <div class="swiper-slide sub-works__image-top">
                  <img src="./assets/images/common/sub-works6.jpg" alt="冷たいスノーマンの可愛いラテ">
                </div>
                <div class="swiper-slide sub-works__image-top">
                  <img src="./assets/images/common/sub-works7.jpg" alt="ピカピカなりんご">
                </div>
              </div>
              <!-- 前後の矢印 -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
      
            <!-- サムネイル -->
            <div class="sub-works__swiperswiper slider-thumbnail">
              <div class="swiper-wrapper">
                <div class="swiper-slide sub-works__image-bottom">
                  <img src="./assets/images/common/main-works1.jpg" alt="りんごラテ" />
                </div>
                <div class="swiper-slide
                sub-works__image-bottom">
                  <img src="./assets/images/common/sub-works1.jpg" alt="クリスマスリース" />
                </div>
                <div class="swiper-slide sub-works__image-bottom">
                  <img src="./assets/images/common/sub-works2.jpg" alt="りんごとサンタ" />
                </div>
                <div class="swiper-slide sub-works__image-bottom">
                  <img src="./assets/images/common/sub-works3.jpg" alt="美味しそうなクッキー" />
                </div>
                <div class="swiper-slide sub-works__image-bottom">
                  <img src="./assets/images/common/sub-works4.jpg" alt="ホットラテ" />
                </div>
                <div class="swiper-slide sub-works__image-bottom">
                  <img src="./assets/images/common/sub-works5.jpg" alt="キラキラな外観" />
                </div>
                <div class="swiper-slide sub-works__image-bottom">
                  <img src="./assets/images/common/sub-works6.jpg" alt="冷たいスノーマンの可愛いラテ" />
                </div>
                <div class="swiper-slide sub-works__image-bottom">
                  <img src="./assets/images/common/sub-works7.jpg" alt="ピカピカなりんご" />
                </div>
              </div>
            </div>
          </div>
          <!-- .swiper -->
          <div class="sub-works__wrapper inner">
            <div class="sub-works__items">
              <div class="sub-works__item">
                <h2 class="sub-works__head">
                  味の特徴
                </h2>
                <p class="sub-works__text">
                  <?php the_field('works_point1'); ?>
                </p>
              </div>
              <div class="sub-works__item">
                <h2 class="sub-works__head">
                  ポイント
                </h2>
                <p class="sub-works__text">
                  <?php the_field('works_point2'); ?>
                </p>
              </div>
              <div class="sub-works__item">
                <h2 class="sub-works__head">
                  原材料
                </h2>
                <p class="sub-works__text">
                テキトが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
              </div>
              <?php endwhile; endif; ?>
              <!-- ループ終了 -->
              <!-- ページネーション -->
              <div class="sub-works__link link">
                <a class="link__item" href="#">
                  prev
                </a>
                <a class="link__item" href="#">
                  一覧
                </a>
                <a class="link__item" href="#">
                  next
                </a>
              </div>
            </div>
          </div>
      </div>
    </div>
            <div class="sub-works__article related-article inner">
              <h3 class="related-article__title">
                関連記事
              </h3>
              <div class="related-article__cards">
                <article class="related-article__card card">
                  <a href="#" class="related-article__list card__list">
                    <figure class="related-article__img card__img">
                      <img
                        src="./assets/images/common/top-blog-card1.jpg"
                        alt="ブログカード1"
                      />
                    </figure>
                    <div class="card__body">
                      <h3 class="card__title">
                        コーヒー教室の開催。
                      </h3>
                    </div>
                    <div class="card__info">
                      <div class="card__category">
                        カテゴリ
                      </div>
                      <time class="card__date" datetime="2021-07-20">
                        2021.07.20
                      </time>
                    </div>
                  </a>
                </article>
                <article class="related-article__card card">
                  <a href="#" class="related-article__list card__list">
                    <figure class="related-article__img card__img">
                      <img
                        src="./assets/images/common/top-blog-card2.jpg"
                        alt="ブログカード2"
                      />
                    </figure>
                    <div class="card__body">
                      <h3 class="card__title">
                        美味しいコーヒー豆入りました。
                      </h3>
                    </div>
                    <div class="card__info">
                      <div class="card__category">
                        カテゴリ
                      </div>
                      <time class="card__date" datetime="2021-07-20">
                        2021.07.20
                      </time>
                    </div>
                  </a>
                </article>
                <article class="related-article__card card">
                  <a href="#" class="related-article__list card__list">
                    <figure class="related-article__img card__img">
                      <img
                        src="./assets/images/common/top-blog-card3.jpg"
                        alt="ブログカード3"
                      />
                    </figure>
                    <div class="card__body">
                      <h3 class="card__title card__hover">
                        夜のコーヒーイベント。
                      </h3>
                    </div>
                    <div class="card__info">
                      <div class="card__category">
                        カテゴリ
                      </div>
                      <time class="card__date card__hover" datetime="2021-07-20">
                        2021.07.20
                      </time>
                    </div>
                  </a>
                </article>
                <article class="related-article__card card">
                  <a href="#" class="related-article__list card__list">
                    <figure class="related-article__img card__img">
                      <img
                        src="./assets/images/common/top-blog-card4.jpg"
                        alt="ブログカード3"
                      />
                    </figure>
                    <div class="card__body">
                      <h3 class="card__title card__hover">
                        コーヒーの魔法：カフェの隠された秘密
                      </h3>
                    </div>
                    <div class="card__info">
                      <div class="card__category">
                        カテゴリ
                      </div>
                      <time class="card__date card__hover" datetime="2021-07-20">
                        2021.07.20
                      </time>
                    </div>
                  </a>
                </article>
              </div>
            </div>
          </div>
      </section>
<?php get_footer(); ?>