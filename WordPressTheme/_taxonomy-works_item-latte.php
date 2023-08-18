<?php get_header(); ?>
    <?php
    $current_category = 'latte'; // タームのスラッグを指定
    $args = array(
        'post_type' => 'works', // カスタム投稿タイプ名に置き換える
        'posts_per_page' => -1,
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

        <?php get_footer(); ?>