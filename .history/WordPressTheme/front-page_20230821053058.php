<?php get_header(); ?>


    <main>
      <!-- メインビジュアル -->
      <section class="mv top-mv js-mv">
        <div class="mv__inner">
          <div class="swiper js-mv-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="mv__swiper-img">
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-image1.jpg"
                      alt="3つのコーヒー"
                    />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="mv__swiper-img">
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-image2.jpg"
                    alt="カフェの外観"
                  />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="mv__swiper-img">
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-image3.jpg"
                    alt="カフェの内観"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="mv__header">
            <h2 class="mv__title">あなたに寄り添う1杯を</h2>
            <p class="mv__subtitle">a cup to be by your side</p>
          </div>
        </div>
      </section>
      <!-- ./メインビジュアル -->

      <!-- news -->
      <div class="news top-news">
        <div class="news__inner inner">
        <?php /* 取得する投稿の条件 */ ?>
              <?php
                $args = array(
                'post_type' => 'news', /* 取得したい投稿名を入れる */
                'posts_per_page' => 1, /* 表示したい投稿の数 (すべての取得したい場合は「-1」) */
                );
                $the_query = new WP_Query($args); /* クエリの作成と発行をし、取得したデータを「$the_query」に格納 */
              ?>

              <?php /* 取得した投稿の表示 */ ?>
                <?php if ($the_query->have_posts()): /* もし、投稿がある場合 */ ?>
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); /* 投稿のループ開始 */ ?>
          <div class="news__content news-content">
            <div class="news-content__info">
              <time class="news-content__date" datetime="2020-07-20">2020.07.20</time>
              <span class="news-content__category">お知らせ</span>
            </div>
            <div class="news-content__block">
              <a href="<?php echo esc_url(home_url('/news/')); ?>#" class="news-content__text">
                美味しいコーヒーの淹れ方を教える教室始めました。
              </a>
            </div>
            ?php endwhile; /* 投稿のループ終了 */ ?>
                <?php else: /* もし、投稿がない場合 */ ?>
                  <p>まだ投稿がありません。</p>
                <?php endif; /* 投稿の条件分岐を終了 */ ?>

                <?php wp_reset_postdata(); /* クエリ(サブループ)のリセット */ ?>
          </div>
            <div class="news-content__btn">
              <a class="button button--news" href="<?php echo esc_url(home_url('/news/')); ?>">すべて見る</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.news -->

      <!-- content -->
      <section class="content top-content">
        <div class="content__inner inner">
          <div class="content__title section-title">
            <h2 class="section-title__main">事業内容</h2>
            <span class="section-title__sub">Content</span>
          </div>
        </div>
        <div class="content__block content-block">
          <a href="<?php echo esc_url(home_url('/content/')); ?>" class="content-block__item">
            <div class="content-block__image">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-content-image1.jpg"
                  alt="コーヒーと植物"
                />
            </div>
            <p class="content-block__text">経営理念ページへ</p>
          </a>
          <a href="<?php echo esc_url(home_url('/content/')); ?>" class="content-block__item">
            <div class="content-block__image">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-content-image2.jpg"
                  alt="綺麗なカフェアート"
                />
            </div>
            <p class="content-block__text">理念1へ</p>
          </a>
          <a href="<?php echo esc_url(home_url('/content/')); ?>" class="content-block__item">
            <div class="content-block__image">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-content-image3.jpg"
                  alt="美味しいコーヒー豆"
                />
            </div>
            <p class="content-block__text">理念2へ</p>
          </a>
          <a href="<?php echo esc_url(home_url('/content/')); ?>" class="content-block__item">
            <div class="content-block__image">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-content-image4.jpg"
                  alt="カフェの内観"
                />
            </div>
            <p class="content-block__text">理念3へ</p>
          </a>
        </div>

      </section>

      <!-- ./content -->

      <!-- works -->
      <section class="works top-works">
        <div class="works__inner inner">
          <div class="works__title section-title">
              <h2 class="section-title__main">取扱商品</h2>
            <span class="section-title__sub section-title__sub--right">Works</span>
          </div>
        </div>
        <div class="works__wrapper">
          <div class="works__contents inner">
            <div class="works__contents-img">
              <div class="swiper js-works-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="works__img">
                        <img
                          src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-works-image1.jpg"
                          alt="工場と男のひと"
                        />
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="works__img">
                        <img
                          src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-works-image2.jpg"
                          alt="コーヒー豆"
                        />
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="works__img">
                        <img
                          src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-works-image3.jpg"
                          alt="工場でコーヒー豆を焙煎"
                        />
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination js-works-pagination"></div>
            </div>
            <div class="works__content works-content">
              <h3 class="works-content__title">
                私たちの熱い想い
              </h3>
              <p class="works-content__text">
                私たちは、世界中から最上の豆を選び、それぞれが厳格な品質基準を満たすことを保証します。豆が選ばれた瞬間から、独自の風味と香りを引き出す緻密な焙煎プロセスを経ています。
              </p>
              <div class="works-content__btn">
                <a href="<?php echo esc_url(home_url('/works/')); ?>" class="button">詳しく見る</a>
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- /.works -->

      <!-- Overview -->
      <section class="overview top-overview">
        <div class="overview__inner inner">
          <div class="overview__title section-title">
            <h2 class="section-title__main">企業概要</h2>
            <span class="section-title__sub">Overview</span>
          </div>
        </div>
          <div class="overview__wrapper">
            <div class="overview__contents inner">
              <div class="overview__contents-img">
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-overview-image1.jpg"
                    alt="コーヒーを持って談笑"
                  />
              </div>
              <div class="overview__content overview-content">
                <h3 class="overview-content__title">
                  コーヒーを通じて繋がりを築く
                </h3>
                <p class="overview-content__text">
                  私たちはコーヒーを、単なる飲み物以上のものとして捉えています。それは会話や交流のきっかけであり、新しい友人や仲間との素晴らしい出会いを可能にします。
                </p>
                <div class="overview-content__btn">
                  <a href="<?php echo esc_url(home_url('/overview/')); ?>" class="button">詳しく見る</a>
                </div>
              </div>
            </div>
          </div>

      </section>

      <!-- /.Overview -->

      <!-- blog -->
      <section class="blog top-blog">
        <div class="blog__inner inner">
          <div class="blog__title section-title">
            <h2 class="section-title__main">ブログ</h2>
            <span class="section-title__sub section-title__sub--right">Blog</span>
          </div>
          <div class="blog__items cards">
            <?php /* 取得する投稿の条件 */ ?>
              <?php
                $args = array(
                'post_type' => 'blog', /* 取得したい投稿名を入れる */
                'posts_per_page' => 3, /* 表示したい投稿の数 (すべての取得したい場合は「-1」) */
                );
                $the_query = new WP_Query($args); /* クエリの作成と発行をし、取得したデータを「$the_query」に格納 */
              ?>

              <?php /* 取得した投稿の表示 */ ?>
                <?php if ($the_query->have_posts()): /* もし、投稿がある場合 */ ?>
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); /* 投稿のループ開始 */ ?>
                    <article class="cards__item card">
                      <a href="<?php the_permalink(); ?>" class="card__list">
                        <!-- 投稿のパーマリンク取得  -->
                        <?php if (get_the_post_thumbnail()): ?>
                        <figure class="card__img">
                              <img
                                src="<?php the_post_thumbnail_url('full'); ?>"
                                alt="<?php the_title(); ?>のアイキャッチ画像"
                              />
                              <?php else: ?>
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="noimage">
                            <?php endif; ?>
                        </figure>
                         <div class="card__body">
                            <h3 class="card__title card__title--bottom"><?php the_title(); /* 投稿タイトルの表示 */ ?></h3>
                            <p class="card__text"><?php the_excerpt(); ?>
                            </p>
                            <div class="card__info">
                              <div class="card__category">
                              <?php
                                    $taxonomy_terms = get_the_terms($post->ID, 'blog_item'); 
                                    if ( $taxonomy_terms ) {
                                      echo '<span>'.$taxonomy_terms[0]->name.'</span>';
                                    }
                                  ?>
                              </div>
                              <time class="card__date" datetime="<?php the_time('Y-m-d');?>">
                              <?php the_time('Y.m.d'); ?></time>
                            </div>
                        </div>
                      </a>
                      </article>
                  <?php endwhile; /* 投稿のループ終了 */ ?>
                <?php else: /* もし、投稿がない場合 */ ?>
                  <p>まだ投稿がありません。</p>
                <?php endif; /* 投稿の条件分岐を終了 */ ?>

                <?php wp_reset_postdata(); /* クエリ(サブループ)のリセット */ ?>
          </div>
          <div class="blog__btn">
            <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="button">詳しく見る</a>
          </div>
        </div>
      </section>
      <!-- //blog -->


    </main>

    <?php get_footer(); ?>