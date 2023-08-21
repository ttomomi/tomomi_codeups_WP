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
          <div class="sub-works__top inner">
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
          </div>
      
          <!-- swiper -->
          <div class="sub-works__container">
            <div class="sub-works__swiper swiper slider">
              <div class="swiper-wrapper">
              <?php if( get_field('blog_num-list')): ?>
                <div class="swiper-slide sub-works__image-top">
                  <img src="<?php the_field('works_image1'); ?>" alt="限定ラテ">
                </div>
                <div class="swiper-slide sub-works__image-top">
                  <img src="<?php the_field('works_image2'); ?>" alt="コーヒー豆">
                </div>
                <div class="swiper-slide sub-works__image-top">
                <img src="<?php the_field('works_image3'); ?>" alt="クリスマスっぽいリンゴの装飾">
                </div>
                <div class="swiper-slide sub-works__image-top">
                  <img src="<?php the_field('works_image4'); ?>" alt="コーヒー豆の実">
                </div>
                <div class="swiper-slide sub-works__image-top">
                  <img src="<?php the_field('works_image5'); ?>" alt="スノーマンケーキ">
                </div>
                <div class="swiper-slide sub-works__image-top">
                  <img src="<?php the_field('works_image6'); ?>" alt="ラテ">
                </div>
                <div class="swiper-slide sub-works__image-top">
                  <img src="<?php the_field('works_image7'); ?>" alt="綺麗な夜の外観">
                </div>
                <div class="swiper-slide sub-works__image-top">
                  <img src="<?php the_field('works_image8'); ?>" alt="クリスマスリース">
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
                  <img src="<?php the_field('works_image2-1'); ?>" alt="りんごラテ" />
                </div>
                <div class="swiper-slide
                sub-works__image-bottom">
                  <img src="<?php the_field('works_image2-2'); ?>" alt="クリスマスリース" />
                </div>
                <div class="swiper-slide sub-works__image-bottom">
                  <img src="<?php the_field('works_image2-3'); ?>" alt="クリスマスっぽいリンゴの装飾" />
                </div>
                <div class="swiper-slide sub-works__image-bottom">
                  <img src="<?php the_field('works_image2-4'); ?>" alt="コーヒー豆の実" />
                </div>
                <div class="swiper-slide sub-works__image-bottom">
                  <img src="<?php the_field('works_image2-5'); ?>" alt="スノーマンケーキ" />
                </div>
                <div class="swiper-slide sub-works__image-bottom">
                  <img src="<?php the_field('works_image2-6'); ?>" alt="ラテ" />
                </div>
                <div class="swiper-slide sub-works__image-bottom">
                  <img src="<?php the_field('works_image2-7'); ?>" alt="綺麗な夜の外観" />
                </div>
                <div class="swiper-slide sub-works__image-bottom">
                  <img src="<?php the_field('works_image2-8'); ?>" alt="クリスマスリース" />
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
                <?php the_field('works_point3'); ?>
                </p>
              </div>
            </div>
              
              <!-- ページネーション -->
              <div class="sub-works__link link">
                  <?php 
                  $prev = get_previous_post();
                  $prev_url = esc_url(get_permalink($prev->ID));
                  $next = get_next_post();
                  $next_url = esc_url(get_permalink($next->ID));
                  ?>
                  <?php if($prev): ?>
                  <a class="link__item" href="<?php echo esc_attr($prev_url); ?>">
                      prev
                  </a>
                  <?php endif; ?>
                  <a class="link__item" href="<?php echo esc_url(home_url('/works/')); ?>">
                      一覧
                  </a>
                  <?php if($next): ?>
                  <a class="link__item" href="<?php echo esc_attr($next_url); ?>">
                      next
                  </a>
                  <?php endif; ?>
              </div>
          </div>

          <?php endwhile; endif; ?>
              <!-- ループ終了 -->
      </div>
    </div>

    <div class="sub-works__article related-article inner">
      <h3 class="related-article__title">関連記事</h3>
        <div class="related-article__cards">
        <!-- サブループ -->

        <?php /* 取得する投稿の条件 */ ?>
          <?php
            $args = array(
            'post_type' => 'blog', /* 取得したい投稿名を入れる */
            'posts_per_page' => 4, /* 表示したい投稿の数 (すべての取得したい場合は「-1」) */
            );
            $the_query = new WP_Query($args); /* クエリの作成と発行をし、取得したデータを「$the_query」に格納 */
          ?>

        <?php /* 取得した投稿の表示 */ ?>
          <?php if ($the_query->have_posts()): /* もし、投稿がある場合 */ ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); /* 投稿のループ開始 */ ?>
              <article class="related-article__card card">
                <a href="<?php the_permalink(); ?>" class="related-article__list card__list">
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
                      <?php the_time('Y.m.d'); ?>
                        </time>
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
    </div>
  </section>
<?php get_footer(); ?>