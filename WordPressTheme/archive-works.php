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
                <li class="tab__item js-tab current">ラテアート</li>
                <li class="tab__item js-tab">食べ物</li>
                <li class="tab__item js-tab">ドリンク</li>
            </ul>
            
            <div class="tab__group">
                <div class="tab__box js-content">
                    <div class="main-works__items inner">
                        <?php 
                        if (have_posts()): while (have_posts()): the_post();
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
                                <a href="sub-works.html" class="main-works__item">
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
                            <?php endif;
                        endwhile; endif; ?>
                        
                      </div>
                      <!-- ページネーションの表示 -->
                      <div class="main-works__pagination pagination">
                          <div class="main-works__inner inner">
                              <?php wp_pagenavi(); ?>
                          </div>
                      </div>
                </div>
                
                <!-- 食べ物タブの内容 -->
                <div class="tab__box js-content">
                    <div class="main-works__items inner">
                        <?php if (have_posts()): while (have_posts()): the_post();
                            $taxonomy_terms = get_the_terms($post->ID, 'works_item'); 
                            $food_category = false;
                            if ($taxonomy_terms) {
                                foreach ($taxonomy_terms as $term) {
                                    if ($term->slug === 'food') {
                                        $food_category = true;
                                        break;
                                    }
                                }
                            }
                            if ($food_category):
                                ?>
                                <a href="sub-works.html" class="main-works__item">
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
                            <?php endif;
                        endwhile; endif; ?>
                        
                      </div>
                      <!-- ページネーションの表示 -->
                      <div class="main-works__pagination pagination">
                          <div class="main-works__inner inner">
                              <?php wp_pagenavi(); ?>
                          </div>
                      </div>
                </div>
                
                <!-- ドリンクタブの内容 -->
                <div class="tab__box js-content">
                    <div class="main-works__items inner">
                        <?php if (have_posts()): while (have_posts()): the_post();
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
                                <a href="sub-works.html" class="main-works__item">
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
                            <?php endif;
                        endwhile; endif; ?>
                        
                      </div>
                      <!-- ページネーションの表示 -->
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

    </main>
<?php get_footer(); ?>
