<?php get_header(); ?>
<!-- メインビジュアル -->
<div class="sub-mv js-mv">
        <div class="sub-mv__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-blog-mv.jpg" alt="万年筆と紙">
        </div>
        <h2 class="sub-mv__title">
          ブログ
        </h2>
      </div>
      
      <!-- main-blog -->
      <section class="main-blog">
        <div class="main-blog__inner inner">
          <!-- パンくずリスト -->
            <div class="breadcrumbs sub-content__breadcrumbs">
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                }
                ?>
            </div>
          <div class="main-blog__tab tab">
            <!-- カテゴリー(ターム)を全部表示 -->
            <ul class="tab-list">
                  <li class="tab__item js-tab"<?php if ($current_tab === 'all') echo 'current'; ?>>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'blog' ) ); ?>">すべて</a>
                  </li>

                  <?php
                    $taxonomy_terms = get_terms( 'blog_item', array( 'hide_empty' => false ) );
                    foreach ( $taxonomy_terms as $taxonomy_term ) :
                  ?>
                  <li class="tab__item js-tab"<?php if ($current_tab === 'all') echo 'current'; ?>>
                    <a href="<?php echo esc_url( get_term_link( $taxonomy_term, 'blog_item' ) ); ?>">
                      <?php echo esc_html( $taxonomy_term->name ); ?>
                    </a>
                  </li>
                  <?php endforeach; ?>
              </ul>
            
            <div class="tab__group">
              <div class="tab__box js-content">
                <div class="blog__items cards main-blog__items">
                  <?php if(have_posts()):while (have_posts()):the_post(); ?>
                    <article class="cards__item card">
                      <a href="<?php the_permalink(); ?>" class="card__list">
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
                          <h3 class="card__title">
                          <?php the_title(); ?>
                          </h3>
                          <p class="card__text">
                          <?php the_excerpt(); ?>
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
                            <time class="card__date" datetime="<?php the_time('Y.n.j'); ?>"><?php the_time('Y.m.d'); ?>
                            </time>
                          </div>
                        </div>
                      </a>
                    </article>
                  <?php endwhile; endif; ?>
                </div>
              </div>
            </div>
            
          </div>
          <div class="main-blog__pagination pagination">
          <?php wp_pagenavi(); ?>
          </div>
        </div>
      </section>
<?php get_footer(); ?>