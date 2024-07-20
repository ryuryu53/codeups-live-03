<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="p-sub-mv js-mv-height">
  <div class="p-sub-mv__title">   <!-- ← ↓ p-sub-mv__titleとc-section-headerを横に並べても意味としては同じ -->
    <div class="c-section-header c-section-header--white">
      <h1 class="c-section-header__engtitle">contact</h1>
      <p class="c-section-header__jatitle">お問い合わせ</p>
    </div>
  </div>
</div>

<?php get_template_part('breadcrumb'); ?>

<div class="l-page-contact p-page-contact">
  <div class="p-page-contact__inner l-inner">
    <p class="p-page-contact__text">Webサイトの制作のご依頼やお見積りなど、<br class="u-mobile">お気軽にご相談ください。</p>
    <div class="p-page-contact__content p-form">
    <?php echo do_shortcode('[contact-form-7 id="31b68b0" title="お問い合わせ"]'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>