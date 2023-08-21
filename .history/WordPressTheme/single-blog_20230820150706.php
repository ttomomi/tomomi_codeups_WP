<?php get_header(); ?>
<section class="sub-blog bottom-sub-blog">
          <div class="sub-blog__inner inner">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
          </div>
          <div class="sub-blog__container inner">
            <div class="sub-blog__contents">
              <div class="sub-blog__content">
                <h1 class="sub-blog__title1">
                  <?php the_title(); ?>
                </h1>
                <div class="sub-blog__meta">
                  <time datetime="2020-06-13" class="sub-blog__date"><?php the_field('blog_date'); ?></time>
                  <?php
                $taxonomy_terms = get_the_terms($post->ID, 'blog_item');
                if ( $taxonomy_terms ) {
                  echo '<span class="sub-blog__category">'.$taxonomy_terms[0]->name.'</span>';
                }
              ?>
                </div>
                <?php if( get_field('blog_image'): ?>
                  <div class="sub-blog__image">
                    <img src="<?php the_field('blog_image'); ?>" alt="<?php the_title(); ?>">
                  </div>
                <?php endif; ?>
                <?php get_field('blog_text'): ?>
                  <p class="sub-blog__text">
                    <?php the_field('blog_text'); ?>
                  </p>
                <?php endif; ?>
              </div>
              <div class="sub-blog__content">
                <?php get_field('blog_title2'): ?>
                  <h2 class="sub-blog__title2">
                  <?php the_field('blog_title2'); ?>
                  </h2>
                <?php endif; ?>
                <?php get_field('blog_text2'): ?>
                <p class="sub-blog__text">
                  <?php the_field('blog_text2'); ?>
                </p>
                <?php endif; ?>
              </div>
              <div class="sub-blog__content">
                <?php get_field('blog_title3'): ?>
                <h3 class="sub-blog__title3">
                  <?php the_field('blog_title3'); ?>
                </h3>
                <?php endif; ?>
                <?php get_field('blog_text3'): ?>
                <p class="sub-blog__text">
                  <?php the_field('blog_text3'); ?>
                </p>
                <?php endif; ?>
                <?php get_field('blog_sub-image'): ?>
                <div class="sub-blog__image">
                  <img src="<?php the_field('blog_sub-image'); ?>" alt="<?php the_field('blog_title3'); ?>">
                </div>
                <?php endif; ?>
                <?php get_field('blog_list'): ?>
                <ul class="sub-blog__list">
                  
                  <?php 
                    $fieldData = explode("\n",get_post_meta($post->ID,'blog_list',true) );
                    $i = 0;
                    foreach ($fieldData as $value){
                      if ( $value ){
                        echo '<li class="sub-blog__item">' . $value . '</li>';
                      }
                      $i++;
                    }
                  ?>
                </ul>
                <?php endif; ?>
                <?php get_field('blog_num-list'): ?>
                <ol class="sub-blog__order">
                  
                  <?php 
                    $fieldData = explode("\n",get_post_meta($post->ID,'blog_num-list',true) );
                    $i = 0;
                    foreach ($fieldData as $value){
                      if ( $value ){
                        echo '<li class="sub-blog__item">' . $value . '</li>';
                      }
                      $i++;
                    }
                  ?>
                </ol>
                <?php endif; ?>
              </div>
            </div>
            <div class="sub-blog__link link">
            <?php 
                $prev = get_previous_post();
                $prev_url = get_permalink($prev->ID);
                $next = get_next_post();
                $next_url = get_permalink($next->ID);
                ?>
                <?php if($prev): ?>
                <a class="link__item" href="<?php echo $prev_url ?>">
                  prev
                </a>
                <?php endif; ?>
                <a class="link__item" href="<?php echo esc_url(home_url('/blog/'))?>">
                  一覧
                </a>
                <?php if($next): ?>
                <a class="link__item" href="<?php echo $next_url ?>">
                  next
                </a>
                  <?php endif; ?>
            </div>
          </div>
        
            <div class="sub-blog__article related-article inner">
              <h3 class="related-article__title">
                関連記事
              </h3>
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