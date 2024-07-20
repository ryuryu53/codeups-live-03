<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="p-sub-mv js-mv-height">
  <div class="p-sub-mv__title">   <!-- ← ↓ p-sub-mv__titleとc-section-headerを横に並べても意味としては同じ -->
    <div class="c-section-header c-section-header--white">
      <h1 class="c-section-header__engtitle">news</h1>
      <p class="c-section-header__jatitle">お知らせ</p>
    </div>
  </div>
</div>

<?php get_template_part('breadcrumb'); ?>

<section class="p-company p-company--subPage">
  <div class="p-company__inner l-inner">
    <div class="p-company__title c-section-header">
      <h2 class="c-section-header__subpage">メッセージ</h2>
    </div>
    <div class="p-company__contents">
      <h3 class="p-company__subtitle"><span class="p-company__yellow">サイトのゴール =</span><br class="u-mobile"><span class="p-company__yellow">夢を叶えること</span></h3>
      <div class="p-company__content">
        <p class="p-company__text">
          お客様の夢を叶えること。<br>
          それがWebサイトのゴールであり、<br class="u-mobile">
          私たちが目指すことです。<br>
          だからこそちゃんと成果を出すサイトを<br class="u-mobile">
          全力でお作りします。<br>
          お客様の笑顔を見たい。<br>
          夢を実現する手助けをさせてください。
        </p>
      </div>
    </div>
    <div class="p-company__message">
      <div class="p-company__message-image">
        <img src="<?php echo get_template_directory_uri() ?>/images/common/message@2x.jpg" alt="" width="335" height="248">
      </div>
      <div class="p-company__message-text">
        <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        <p>代表取締役社長 猫山ポン太郎</p>
      </div>
    </div>
  </div>
</section>

<section class="l-company-info p-company-info">
  <div class="p-company-info__inner l-inner">
    <div class="p-company-info__title c-section-header">
      <h2 class="c-section-header__subpage">会社概要</h2>
    </div>
    <dl class="p-company-info__items">
      <div class="p-company-info__item">
        <dt>社名</dt>
        <dd>株式会社PON DESIGN</dd>
      </div>
      <div class="p-company-info__item">
        <dt>設立</dt>
        <dd>2016.02.10</dd>
      </div>
      <div class="p-company-info__item">
        <dt>代表取締役</dt>
        <dd>猫山ポン太郎</dd>
      </div>
      <div class="p-company-info__item">
        <dt>資本金</dt>
        <dd>1,000,000円</dd>
      </div>
      <div class="p-company-info__item">
        <dt>所在地</dt>
        <dd>〒555-5555 東京都千代田区 ポンビルディング 606</dd>
      </div>
    </dl>
    <div class="p-company-info__map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6560.213307356824!2d135.49337031163083!3d34.70248978300326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e68d95e3a70b%3A0x1baec822e859c84a!2z5aSn6Ziq6aeF!5e0!3m2!1sja!2sjp!4v1712412834795!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="p-company-info__map-link">
      <a href="https://maps.app.goo.gl/odkh1YH9nR4JUSXVA" target="_blank" rel="noopener noreferrer">Google mapで見る</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>