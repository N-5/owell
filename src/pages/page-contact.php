<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
<main id="contact">
  <section class="page-title">
    <h1 class="page-title__heading">
      <span class="jp">お問い合わせ</span>
      <span class="en">CONTACT</span>
    </h1>
  </section>

  <?php get_template_part('lib/breadcrumb'); ?>
  
  <section class="page-lead">
    <div class="l-container">
      <p class="page-lead__text">
        オーウェルではフリーダイヤルの他、LINE@、下記お問い合わせメールフォームからのお問い合わせを受け付けております。<br class="u-md">
        また、個人情報の取扱についてはプライバシーポリシーをご覧下さい。
      </p>
    </div>
  </section>

  <section class="cta">
    <div class="l-container">
      <div class="cta-outer">
        <div class="cta-inner">
          <div class="cta-call">
            <h3 class="cta-call__title">お電話からのお問い合わせ</h3>
            <div class="cta-call__call">
              <div class="cta-call__time">24時間受付<br>年中無休</div>
              <div class="cta-call__number">
                <a href="tel:0120871877"><i class="m-icon m-icon__call"><?php get_template_part('lib/call-icon'); ?></i>0120-871-877</a>
              </div>
            </div>
          </div>
          <div class="cta-line">
            <div class="cta-line__link cta-btn">
              <a href="https://line.me/R/ti/p/%40ogb7100k" target="_blank"><i class="m-icon m-icon__line"><?php get_template_part('lib/line-icon'); ?></i><span>LINEでお問い合わせ</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-form">
    <div class="l-container">
     <div class="contact-form__outer">
       <?php while(have_posts()): the_post(); ?>
       <?php the_content(); ?>
       <?php endwhile; ?>
     </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
