<?php
/*
Template Name: contactcomplete
*/
?>
<?php get_header(); ?>
<main id="contactcomplete">
  <section class="page-title">
    <h1 class="page-title__heading">
      <span class="jp">お問い合わせ</span>
      <span class="en">CONTACT</span>
    </h1>
  </section>

  <?php get_template_part('lib/breadcrumb'); ?>

  <section class="contact-complete">
    <div class="l-container">
      <div class="contact-complete__outer">
        <h3 class="contact-heading">この度はお問い合わせいただきまして、<br class="u-sm__max">誠にありがとうございます。</h3>
        <p class="contact-complete__text">
          お問い合わせ内容をメールでお送りさせていただきましたので、内容にお間違えが無いか今一度ご確認よろしくお願いいたします。
          ご返信については弊社スタッフより、3〜5営業日以内にご返信させていただきますので、今しばらくお待ち下さい。
        </p>
        <p class="contact-complete__caution">
          ※メールの設定やインターネット環境の状況により、弊社アカウントからのメールが「迷惑メールフォルダ」に移動されているケースがございます。
        </p>
        <div class="m-link m-link__border"><a href="<?php echo home_url(); ?>"><span>トップに戻る</span><i class="m-arrow m-arrow__grey"></i></a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
