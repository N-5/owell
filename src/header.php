<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head prefix="og: http://ogp.me/ns#">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:700,800" rel="stylesheet">
    <?php get_template_part('lib/favicons'); ?>
    <?php wp_head() ?>
  </head>
  <body <?php body_class( $class ); ?>>
    <div class="l-wrapper">
      <header id="header" class="header">
        <div class="header-inner">
          <div class="header-logo">
            <a href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/header-logo.svg" alt="<?php bloginfo('name'); ?>"></a>
          </div>
          <nav class="header-navigation" data-menu-navigation>
            <ul class="header-navigation-list">
              <li class="header-navigation__item">
                <a href="<?php echo home_url(); ?>/servey/"><i class="m-arrow"></i><span>調査項目</span></a>
              </li>
              <li class="header-navigation__item">
                <a href="<?php echo home_url(); ?>/price/"><i class="m-arrow"></i><span>料金について</span></a>
              </li>
              <li class="header-navigation__item">
                <a href="<?php echo home_url(); ?>/company/"><i class="m-arrow"></i><span>会社情報</span></a>
              </li>
              <li class="header-navigation__item">
                <a href="<?php echo home_url(); ?>/contact/"><i class="m-arrow"></i><span>お問い合わせ</span></a>
              </li>
              <li class="header-navigation__item">
                <a href="<?php echo home_url(); ?>/faq/"><i class="m-arrow"></i><span>Q&amp;A</span></a>
              </li>
              <li class="header-navigation__item">
                <a href="<?php echo home_url(); ?>/blog/"><i class="m-arrow"></i><span>ブログ</span></a>
              </li>
            </ul>
            <div class="header-navigation__cta">
              <div class="header-navigation__call">
                <div class="call"><a href="tel:0120871877"><i class="m-icon m-icon__call"><?php get_template_part('lib/call-icon'); ?></i>0120-871-877</a></div>
                <div class="accept">24時間受付<br>年中無休</div>
              </div>
              <div class="header-navigation__contact">
                <a href="<?php echo home_url(); ?>/contact/"><i class="m-icon m-icon__mail"><?php get_template_part('lib/mail-icon'); ?></i>お問い合わせ</a>
              </div>
            </div>
            <div class="header-navigation__overlay"></div>
          </nav>
          <div class="header-cta">
            <div class="header-cta__call">
              <div class="call"><a href="tel:0120871877"><i class="m-icon m-icon__call"><?php get_template_part('lib/call-icon'); ?></i>0120-871-877</a></div>
              <div class="accept">24時間受付 年中無休</div>
            </div>
            <div class="header-cta__contact">
              <a href="<?php echo home_url(); ?>/contact/"><i class="m-icon m-icon__mail"><?php get_template_part('lib/mail-icon'); ?></i>お問い合わせ</a>
            </div>
          </div>
          <div class="header-hamburger" data-menu-hamburger>
            <div class="header-hamburger__inner">
              <span class="header-hamburger__item"></span>
              <span class="header-hamburger__item"></span>
              <span class="header-hamburger__item"></span>
            </div>
          </div>
        </div>
      </header>
