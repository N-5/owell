<?php get_header(); ?>
<main id="error">
  <section class="page-title">
    <h1 class="page-title__heading">
      <span class="jp">ページが見つかりません</span>
      <span class="en">404 error</span>
    </h1>
  </section>
  
  <?php get_template_part('lib/breadcrumb'); ?>
  
  <section class="page-lead">
    <div class="l-container">
      <p class="page-lead__text">
        大変申し訳ございません。お客さまがお探しのページが見つかりませんでした。
      </p>
      <div class="m-link m-link__border"><a href="<?php echo home_url(); ?>"><span>トップへ戻る</span><i class="m-arrow m-arrow__grey"></i></a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
