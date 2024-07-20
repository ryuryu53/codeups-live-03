<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="p-sub-mv js-mv-height">
  <div class="p-sub-mv__title">   <!-- ← ↓ p-sub-mv__titleとc-section-headerを横に並べても意味としては同じ -->
    <div class="c-section-header c-section-header--white">
      <h1 class="c-section-header__engtitle">works</h1>
      <p class="c-section-header__jatitle">制作実績</p>
    </div>
  </div>
</div>

<?php get_template_part('breadcrumb'); ?>

<section class="p-page-recruit">
  <div class="p-page-recruit__inner l-inner">
    <div class="p-page-recruit__title">
      <h2 class="p-page-recruit__main">Enjoy Creation for Client</h2>
      <p class="p-page-recruit__sub">楽しむ心が良いモノを生む</p>
    </div>
    <p class="p-page-recruit__text">
      心を弾ましながら<br>
      夢いっぱいのサイトを作ろう！<br>
      お客様も自分もみんなが幸せになれるように
    </p>
    <div class="p-page-recruit__image">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/images/common/recruit_1-pc@2x.png" width="1440" height="780">
        <img src="<?php echo get_template_directory_uri() ?>/images/common/recruit_1@2x.png" alt="女性たちの写真" width="375" height="290">
      </picture>
    </div>

    <div class="p-page-recruit__recruit">
      <div class="p-page-recruit__title c-section-header">
        <h2 class="c-section-header__subPage">募集中の職種</h2>
      </div>
      <div class="p-page-recruit__items">
        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php $show = get_field('show'); ?>
        <div class="p-page-recruit__item">
          <?php if(!$show): ?>
          <div class="c-hidden-recruit">募集終了</div>
          <?php endif; ?>

          <h3 class="p-page-recruit__job-title"><?php the_title(); ?></h3>
          <dl class="p-page-recruit__lists p-common-lists">
            <?php
            $text1 = get_field('text1');
            $text2 = get_field('text2');
            $text3 = get_field('text3');
            $text4 = get_field('text4');
            $text5 = get_field('text5');
            $link = get_field('link');
            // var_dump($text4);
            ?>  <!-- ↓ ifと変数だけでなんで行けるのか？ ↑ 情報をgetした場合、中身の情報があったらtrueで返す、そうでなかったらfalseで返す。なので、ifの中に変数を入れるだけで条件分岐が成立する -->
            <?php if($text1): ?>
            <div class="p-common-lists__list">
              <dt>雇用形態</dt>
              <dd><?php echo $text1; ?></dd>
            </div>
            <?php endif; ?>
            <?php if($text2): ?>
            <div class="p-common-lists__list">
              <dt>給与</dt>
              <dd><?php echo $text2; ?></dd>
            </div>
            <?php endif; ?>
            <?php if($text3): ?>
            <div class="p-common-lists__list">
              <dt>仕事内容</dt>
              <dd><?php echo $text3; ?></dd>
            </div>
            <?php endif; ?>
            <?php if($text4): ?>
            <div class="p-common-lists__list">
              <dt>勤務時間</dt>
              <dd><?php echo $text4; ?></dd>
            </div>
            <?php endif; ?>
            <?php if($text5): ?>
            <div class="p-common-lists__list">
              <dt>応募資格</dt>
              <dd><?php echo $text5; ?></dd>
            </div>
            <?php endif; ?>
          </dl>
          <div class="p-page-recruit__apply">
            <a href="<?php echo $link; ?>" class="c-button">応募する</a>
            <p>求人サイトへ遷移します</p>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
    <div class="p-page-recruit__movies">
      <div class="p-page-recruit__title c-section-header">
        <h2 class="c-section-header__subPage">社内ムービー</h2>
      </div>
      <div class="p-page-recruit__movie">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/HGbYK0knjhM?si=i21tAwdkdGdj2bYE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>