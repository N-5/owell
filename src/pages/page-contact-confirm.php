<?php
/*
Template Name: contactconfirm
*/
?>
<?php get_header(); ?>
<main id="contactconfirm">
  <section class="page-title">
    <h1 class="page-title__heading">
      <span class="jp">お問い合わせ</span>
      <span class="en">CONTACT</span>
    </h1>
  </section>
  
  <?php get_template_part('lib/breadcrumb'); ?>

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
