<?php get_header(); ?>

<main>
      <!-- メインビジュアル -->
      <div class="sub-mv js-mv">
        <div class="sub-mv__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-news-mv.jpg" alt="コーヒー豆の入った袋">
        </div>
        <h2 class="sub-mv__title">
          お知らせ
        </h2>
      </div>
      
      <!-- お知らせ一覧 -->
      <section class="sub-news bottom-sub-news">
        <div class="sub-news__inner inner"> 
          <?php get_template_part('parts/breadcrumbs') ?>
          <div class="sub-news__contents">

            <?php if(have_posts()):while (have_posts()):the_post(); ?>
              <div class="sub-news__content news-content">
                <div class="news-content__info">
                  <time class="news-content__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                  <?php $cat = get_the_category(); $cat = $cat[0]->cat_name ?>
                  <span class="news-content__category"><?php echo $cat ?></span>
                </div>
                <div class="news-content__block">
                  <a href="<?php the_permalink(); ?>" class="news-content__text news-content__text--bottom">
                    <?php the_title(); ?>
                  </a>
                </div>
              </div>
            <?php endwhile; endif; ?>

          </div>
          <div class="sub-news__pagination pagination">
            <?php wp_pagenavi(); ?>
          </div>
        </div>
      </section>
</main>
<?php get_footer(); ?>