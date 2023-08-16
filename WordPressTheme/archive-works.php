<?php get_header(); ?>


<main>
      <!-- メインビジュアル -->
      <div class="sub-mv js-mv">
        <div class="sub-mv__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-works-mv.jpg" alt="パソコンの写真">
        </div>
        <h2 class="sub-mv__title">
          取扱商品
        </h2>
      </div>
      
      <!-- works -->
      <section class="main-works bottom-main-works">
        <div class="main-works__innner inner">
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
        $terms = get_terms('works_item'); // タクソノミー名に置き換える
        if ($terms) {
            foreach ($terms as $term) {
                echo '<li class="tab__item js-tab" data-category="' . $term->slug . '">' . $term->name . '</li>';
            }
        }
        ?>
    </ul>
</div>

<div class="tab__group">
    <?php
    if ($terms) {
        foreach ($terms as $term) {
            echo '<div class="tab__box js-content" data-category="' . $term->slug . '">';
            echo '<div class="main-works__items inner">';

            $args = array(
                'post_type' => 'works', // カスタム投稿タイプ名に置き換える
                'posts_per_page' => -1, // 全ての投稿を表示
                'tax_query' => array(
                    array(
                        'taxonomy' => 'works_item', // タクソノミー名に置き換える
                        'field'    => 'slug',
                        'terms'    => $term->slug,
                    ),
                ),
            );

            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $taxonomy_terms = get_the_terms($post->ID, 'works_item');
                    $latte_category = false;
                    if ($taxonomy_terms) {
                        foreach ($taxonomy_terms as $term) {
                            if ($term->slug === 'latte') {
                                $latte_category = true;
                                break;
                            }
                        }
                    }
                    if ($latte_category):
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
            }
            wp_reset_postdata();

            echo '</div>';
            echo '</div>';
        }
    }
    ?>
</div>

              
            </div>
          </div>
        </div>
        <div class="main-works__pagination pagination">
          <div class="main-works__inner inner">
            <?php wp_pagenavi(); ?>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
