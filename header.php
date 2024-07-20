<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<?php
$home = esc_url( home_url( '/' ) );
$news = esc_url( home_url( '/news/' ) );
$service = esc_url( home_url( '/service/' ) );
$works = esc_url( home_url( '/works/' ) );
$company = esc_url( home_url( '/company/' ) );
$recruit = esc_url( home_url( '/recruit/' ) );
$contact = esc_url( home_url( '/contact/' ) );
?>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header">
    <div class="p-header__inner">
      <?php if(is_front_page()): ?>
      <h1 class="p-header__logo">
      <?php else :?>
      <div class="p-header__logo">
      <?php endif; ?>
        <a href="<?php echo $home; ?>" class="p-header__logoLink">CodeUps</a>
      <?php if(is_front_page()): ?>
      </h1>
      <?php else :?>
      </div>
      <?php endif; ?>
      <div class="p-header__drawer c-hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="p-header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo $news; ?>">NEWS</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $service; ?>">SERVICE</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $works; ?>">WORKS</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $company; ?>">COMPANY</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $recruit; ?>">RECRUIT</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $contact; ?>">CONTACT</a>
          </li>
        </ul>
      </nav>
      <nav class="p-header__sp-nav sp-nav js-sp-nav">
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="<?php echo $home; ?>">HOME</a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $works; ?>">WORKS</a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $works; ?>">WORKS</a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $company; ?>">COMPANY</a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $recruit; ?>">RECRUIT</a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $contact; ?>">CONTACT</a>
          </li>
        </ul>

      </nav>
    </div>
  </header>