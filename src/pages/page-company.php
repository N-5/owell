<?php
/*
Template Name: company
*/
?>
<?php get_header(); ?>

<main id="company">
  <section class="page-title">
    <h1 class="page-title__heading">
      <span class="jp">会社情報</span>
      <span class="en">COMPANY</span>
    </h1>
  </section>

  <?php get_template_part('lib/breadcrumb'); ?>

  <section class="company-overview">
    <div class="l-container">
      <div class="company-overview__outer">
        <h2 class="section-heading">
          <span class="section-heading__en">COMPANY OVERVIEW</span>
          <span class="section-heading__jp">会社概要</span>
        </h2>
        <div class="company-overview-information">
          <div class="table-list">
            <dl class="table-list__item">
              <dt class="table-list__heading">会社名</dt>
              <dd class="table-list__content">北陸総合興信所オーウェル</dd>
            </dl>
            <dl class="table-list__item">
              <dt class="table-list__heading">本社所在地</dt>
              <dd class="table-list__content">〒920-0901  <br class="u-sm__max">金沢市彦三町1-2-1 アソルティ金沢彦三</dd>
            </dl>
            <dl class="table-list__item">
              <dt class="table-list__heading">フリーダイヤル</dt>
              <dd class="table-list__content" x-ms-format-detection="none">0120-871-877</dd>
            </dl>
            <dl class="table-list__item">
              <dt class="table-list__heading">TEL</dt>
              <dd class="table-list__content" x-ms-format-detection="none">076-223-2487</dd>
            </dl>
            <dl class="table-list__item">
              <dt class="table-list__heading">FAX</dt>
              <dd class="table-list__content" x-ms-format-detection="none">076-223-2488</dd>
            </dl>
            <dl class="table-list__item">
              <dt class="table-list__heading">MAIL</dt>
              <dd class="table-list__content">info@owell-tantei.com</dd>
            </dl>
            <dl class="table-list__item">
              <dt class="table-list__heading">営業時間</dt>
              <dd class="table-list__content">年中無休 24時間受付</dd>
            </dl>
            <dl class="table-list__item">
              <dt class="table-list__heading">支店所在地</dt>
              <dd class="table-list__content">
                <h3>【七尾支店】</h3>
                〒926-0021 石川県七尾市本府中町二 35-1<br>
                <h3>【富山支店】</h3>
                〒930-0854 富山県富山市城北町21<br>
                〒930-0854 富山県魚津市前新町10-7<br>
                <h3>【福井支店】</h3>
                〒910-0006 福井県福井市中央2-1-15<br>
                〒915-0061 福井県越前市堀川町2-14
              </dd>
            </dl>
            <dl class="table-list__item">
              <dt class="table-list__heading">調査地域</dt>
              <dd class="table-list__content">石川県全域・福井県全域・富山県全域</dd>
            </dl>
            <dl class="table-list__item">
              <dt class="table-list__heading">探偵業届出番号</dt>
              <dd class="table-list__content">石川県公安委員会 第51180001号</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="company-gallery">
    <div class="l-container">
      <div class="company-gallery-list">
        <div class="company-gallery-list__item">
          <div class="company-gallery__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-gallery_1.jpg" alt="外観"></div>
          <div class="company-gallery__name">外観</div>
        </div>
        <div class="company-gallery-list__item">
          <div class="company-gallery__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-gallery_2.jpg" alt="エントランス"></div>
          <div class="company-gallery__name">エントランス</div>
        </div>
        <div class="company-gallery-list__item">
          <div class="company-gallery__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-gallery_3.jpg" alt="内観"></div>
          <div class="company-gallery__name">内観</div>
        </div>
        <div class="company-gallery-list__item">
          <div class="company-gallery__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-gallery_4.jpg" alt="相談室"></div>
          <div class="company-gallery__name">相談室</div>
        </div>
      </div>
    </div>
  </section>

  <section class="company-locations">
    <div class="l-container">
      <div class="company-locations__outer">
        <h2 class="section-heading">
          <span class="section-heading__en">LOCATIONS</span>
          <span class="section-heading__jp">アクセス</span>
        </h2>
        <div class="company-locations__access">
          <div class="table-list">
            <h3 class="block-title">北陸総合興信所オーウェル</h3>
            <dl class="table-list__item">
              <dt class="table-list__heading">所在地</dt>
              <dd class="table-list__content">〒920-0901<br>金沢市彦三町1-2-1 アソルティ金沢彦三</dd>
            </dl>
            <dl class="table-list__item">
              <dt class="table-list__heading">TEL</dt>
              <dd class="table-list__content">0120-871-877<br>076-223-2487</dd>
            </dl>
            <dl class="table-list__item">
              <dt class="table-list__heading">FAX</dt>
              <dd class="table-list__content">076-223-2488</dd>
            </dl>
          </div>
          <div class="company-locations__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1957.6869711756704!2d136.65595575944323!3d36.572371220747875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x50eba9172f4dc46d!2z5YyX6Zm457eP5ZCI6IiI5L-h5omA44Kq44O844Km44Kn44Or772c5rWu5rCX6Kq_5p-7!5e0!3m2!1sja!2sjp!4v1555898721137!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="company-privacy">
    <div class="l-container">
      <h2 class="section-heading">
        <span class="section-heading__en">PRIVACY POLICY</span>
        <span class="section-heading__jp">プライバシーポリシー</span>
      </h2>
      <div class="company-pricecy-contant">
        <div class="company-pricecy-contant__lead">
          個人情報とは、お客様ご本人に関する情報のことをいいます。北陸総合興信所オーウェル（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と仕組みを徹底させることにより、個人情報の保護を推進致します。
        </div>
        <div class="company-pricecy-contant__item">
          <h3 class="company-pricecy-contant__heading">個人情報の管理</h3>
          <div class="company-pricecy-contant__text">当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行います。</div>
        </div>
        <div class="company-pricecy-contant__item">
          <h3 class="company-pricecy-contant__heading">個人情報の利用目的</h3>
          <div class="company-pricecy-contant__text">お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用します。</div>
        </div>
        <div class="company-pricecy-contant__item">
          <h3 class="company-pricecy-contant__heading">個人情報の第三者への開示・提供の禁止</h3>
          <div class="company-pricecy-contant__text">当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</div>
          <ul class="company-pricecy-contant__list">
            <li>1.お客さまの同意がある場合</li>
            <li>2.お客さまが希望されるサービスを行うために当社が業務を委託する業者に対して開示する場合</li>
            <li>3.法令に基づき開示することが必要である場合</li>
          </ul>
        </div>
        <div class="company-pricecy-contant__item">
          <h3 class="company-pricecy-contant__heading">個人情報の安全対策</h3>
          <div class="company-pricecy-contant__text">当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</div>
        </div>
        <div class="company-pricecy-contant__item">
          <h3 class="company-pricecy-contant__heading">ご本人の照会</h3>
          <div class="company-pricecy-contant__text">お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</div>
        </div>
        <div class="company-pricecy-contant__item">
          <h3 class="company-pricecy-contant__heading">法令、規範の遵守と見直し</h3>
          <div class="company-pricecy-contant__text">当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('lib/cta-section'); ?>
</main>
<?php get_footer(); ?>
