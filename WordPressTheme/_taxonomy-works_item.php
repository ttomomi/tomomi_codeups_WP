<?php get_header(); ?>

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
                    if ($taxonomy_terms) {
                        echo '<span class="main-works__category">' . $taxonomy_terms[0]->name . '</span>';
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

<?php get_footer(); ?>