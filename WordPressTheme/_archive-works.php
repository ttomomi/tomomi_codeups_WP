<?php get_header(); ?>

    <!-- メインビジュアル -->
    <div class="sub-mv js-mv">
        <div class="sub-mv__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-works-mv.jpg"
                  alt="コーヒー豆が落ちてる">
        </div>
        <h2 class="sub-mv__title">
            取扱商品
        </h2>
    </div>
    <section class="main-works bottom-main-works">
        <div class="main-works__inner inner">
            <div class="breadcrumbs">
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                }
                ?>
            </div>
            <div class="main-works__tab tab">
              <ul class="tab-list">
                  
                  <li class="tab__item js-tab"<?php if ($current_tab === 'all') echo 'current'; ?>>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>">すべて</a>
                  </li>

                  <?php
                    $taxonomy_terms = get_terms( 'works_item', array( 'hide_empty' => false ) );
                    foreach ( $taxonomy_terms as $taxonomy_term ) :
                  ?>
                  <li class="tab__item js-tab"<?php if ($current_tab === 'all') echo 'current'; ?>>
                  <a href="<?php echo esc_url( get_term_link( $taxonomy_term, 'works_item' ) ); ?>">
                    <?php echo esc_html( $taxonomy_term->name ); ?>
                  </a>
                  </li>
                  <?php endforeach; ?>
              </ul>
            </div>
            <div class="tab__group">
            <div class="tab__box js-content">
              <div class="main-works__items">
                  <?php if(have_posts()):while (have_posts()):the_post(); ?>
                      <a href="<?php the_permalink(); ?>" class="main-works__item">
                          <div class="main-works__image">
                              <?php if (get_the_post_thumbnail()): ?>
                                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                              <?php else: ?>
                                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="noimage">
                              <?php endif; ?>
                              <?php
                                $taxonomy_terms = get_the_terms($post->ID,'works_item');
                                foreach( $taxonomy_terms as $taxonomy_term ) {
                                  if ( !in_array( $taxonomy_term->slug, array( 'latte','food','drink') ) )
                                  continue;
                                  echo '<span class="main-works__category'.$taxonomy_term->slug.'">'.$taxonomy_term->name.'</span>';
                                }
                              ?>
                          </div>
                          <div class="main-works__title">
                              <?php the_title(); ?>
                          </div>
                      </a>
                  <?php endwhile; endif; ?>
              </div>
              </div>
              <div class="main-works__pagination pagination">
                  <div class="main-works__inner inner">
                  <?php wp_pagenavi(); ?>
                  </div>
              </div>

              </div>
          </div>
              </div>
<?php get_footer(); ?>