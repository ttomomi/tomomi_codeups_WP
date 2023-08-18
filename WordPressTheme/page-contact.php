<?php get_header(); ?>
<main>
      <!-- メインビジュアル -->
      <div class="sub-mv js-mv">
        <div class="sub-mv__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-mv.jpg" alt="光っている電球を持つ手">
        </div>
        <h2 class="sub-mv__title">
          お問い合わせ
        </h2>
      </div>
      
      <!-- contact -->
      <section class="sub-contact bottom-main-contact">
        <div class="sub-contact__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="97af707" title="お問い合わせ"]'); ?>
      </section>

    </main>
<?php get_footer(); ?>