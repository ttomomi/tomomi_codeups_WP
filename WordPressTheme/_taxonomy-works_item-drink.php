
<?php get_header(); ?>
<!-- メインビジュアル -->
<div class="sub-mv js-mv">
        <div class="sub-mv__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-works-mv.jpg"
                 alt="パソコンの写真">
        </div>
        <h2 class="sub-mv__title">
            取扱商品
        </h2>
    </div>

    <!-- works -->
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
                <?php
                $current_tab = isset($_GET['tab']) ? $_GET['tab'] : 'latte';
                
                $latte_term = get_term_by('slug', 'latte', 'works_item');
                $food_term = get_term_by('slug', 'food', 'works_item');
                $drink_term = get_term_by('slug', 'drink', 'works_item');
                ?>
                
                <li class="tab__item js-tab <?php if ($current_tab === 'latte') echo 'current'; ?>">
                <a href="<?php echo esc_url(get_term_link($latte_term, 'works_item')); ?>">ラテアート</a>
                </li>
                <li class="tab__item js-tab <?php if ($current_tab === 'food') echo 'current'; ?>">
                    <a href="<?php echo esc_url(add_query_arg('tab', 'food', get_term_link($food_term, 'works_item'))); ?>">食べ物</a>
                </li>
                <li class="tab__item js-tab <?php if ($current_tab === 'drink') echo 'current'; ?>">
                    <a href="<?php echo esc_url(add_query_arg('tab', 'drink', get_term_link($drink_term, 'works_item'))); ?>">ドリンク</a>
                </li>
            </ul>

            </div>
            <div class="tab__group">
              <div class="tab__box js-content">
                <div class="main-works__items inner">
                  <?php
                  $current_category = 'drink'; // タームのスラッグを指定
                  $args = array(
                      'post_type' => 'works', // カスタム投稿タイプ名に置き換える
                      'posts_per_page' => 6,
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'works_item', // タクソノミー名に置き換える
                              'field'    => 'slug',
                              'terms'    => $current_category,
                          ),
                      ),
                  );

                  $query = new WP_Query($args);
                  if ($query->have_posts()) {
                      while ($query->have_posts()) {
                          $query->the_post();
                          $taxonomy_terms = get_the_terms($post->ID, 'works_item'); 
                          $drink_category = false;
                          if ($taxonomy_terms) {
                              foreach ($taxonomy_terms as $term) {
                                  if ($term->slug === 'drink') {
                                      $drink_category = true;
                                      break;
                                  }
                              }
                          }
                          if ($drink_category):
                          ?>
              <a href="<?php the_permalink(); ?>" class="main-works__item">
                <div class="main-works__image">
                  <?php if (get_the_post_thumbnail()): ?>
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else: ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="noimage">
                  <?php endif; ?>
                  <?php
                  if ($taxonomy_terms) {
                      echo '<span class="main-works__category">' . $taxonomy_terms[0]->name . '</span>';
                  }
                  ?>
                </div>
                <div class="main-works__title">
                    <?php the_title(); ?>
                </div>
            </a>
            <?php
            endif;
        }
        wp_reset_postdata();
    }
    ?>
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
        </div>
    </section>
      
        <?php get_footer(); ?>