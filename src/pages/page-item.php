<?php
/*
Template Name: item
*/
?>
<?php get_header(); ?>
<main id="survey">
  <section class="page-title">
    <h1 class="page-title__heading">
      <span class="jp">調査項目一覧</span>
      <span class="en">SURVEY</span>
    </h1>
  </section>

  <?php get_template_part('lib/breadcrumb'); ?>

  <section class="page-lead">
    <div class="l-container">
      <p class="page-lead__text">
        私達オーウェルは、浮気調査は勿論、その他様々な調査をご依頼頂いております。<br class="u-md">
        自分では解決できない悩みや人には相談出来ない事、他社に断られた調査など、1人で抱え込まずに一度ご相談ください。<br class="u-md">
        相談は24時間で承っております。
      </p>
    </div>
  </section>
  
  <section class="survey-menu">
    <div class="l-container">
      <div class="survey-menu-list">
        <div class="survey-menu-list__item">
          <div class="survey-menu-list__inner">
            <div class="survey-menu-list__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/item/survey-menu_1.jpg">
            </div>
            <div class="survey-menu-list__detail">
              <h2 class="survey-menu__heading"><i class="m-icon"><?php get_template_part('lib/list-icon'); ?></i>浮気・不倫調査</h2>
              <p class="survey-menu__text">
                当社への相談で最も多い浮気調査。だからこそ依頼者様に満足のできる調査結果を報告する為、調査力の向上やアフターサービスの徹底、弁護士事務所との連携などに力を入れ、費用面でも他社より1円でも安くをモットーに日々努めております。当社では調査結果報告は通過点だと考えております。本当の意味での解決まで最後まで全力でお手伝いさせて頂きます。
              </p>
            </div>
          </div>
          <div class="m-link"><a href="<?php echo home_url(); ?>/item/cheating/"><span>浮気・不倫調査の詳細</span><i class="m-arrow m-arrow__grey"></i></a></div>
        </div>

        <div class="survey-menu-list__item">
          <div class="survey-menu-list__inner">
            <div class="survey-menu-list__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/item/survey-menu_2.jpg">
            </div>
            <div class="survey-menu-list__detail">
              <h2 class="survey-menu__heading"><i class="m-icon"><?php get_template_part('lib/list-icon'); ?></i>婚前調査、身元・身辺調査</h2>
              <p class="survey-menu__text">
                近年増加している婚前調査は結婚を控える女性の親からの依頼が過半数を占めています男性側に借金はないのか、危ない人間との関わりがないか、など不安要素は様々ですが結婚は今後の人生を左右する大きな節目です。解消できる不安は取り除きましょう。
              </p>
            </div>
          </div>
          <div class="m-link"><a href="<?php echo home_url(); ?>/item/personal/"><span>婚前調査、身元・身辺調査の詳細</span><i class="m-arrow m-arrow__grey"></i></a></div>
        </div>

        <div class="survey-menu-list__item">
          <div class="survey-menu-list__inner">
            <div class="survey-menu-list__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/item/survey-menu_3.jpg">
            </div>
            <div class="survey-menu-list__detail">
              <h2 class="survey-menu__heading"><i class="m-icon"><?php get_template_part('lib/list-icon'); ?></i>行方・所在調査</h2>
              <p class="survey-menu__text">
                家出人がお金を目的に犯罪に手を染めるケースやトラブルに巻き込まれる事は少なくありません。当社では他社には無い調査方法やネットワークを駆使し、家出人、所在調査の判明率ナンバーワンを自負しております。手遅れになる前に一度お問い合わせ下さい。
              </p>
            </div>
          </div>
          <div class="m-link"><a href="<?php echo home_url(); ?>/item/location/"><span>行方・所在調査の詳細</span><i class="m-arrow m-arrow__grey"></i></a></div>
        </div>

        <div class="survey-menu-list__item">
          <div class="survey-menu-list__inner">
            <div class="survey-menu-list__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/item/survey-menu_4.jpg">
            </div>
            <div class="survey-menu-list__detail">
              <h2 class="survey-menu__heading"><i class="m-icon"><?php get_template_part('lib/list-icon'); ?></i>盗聴、盗聴器の発見・除去</h2>
              <p class="survey-menu__text">
                盗聴器等を仕掛ける理由もライバル社の情報収集や単なる嫌がらせなど様々ですが大きな被害を受けてからではもう手遅れです。少しでも違和感を感じたり怪しいと思った時は当社にお任せください。最新の盗聴器発見機材を使用し発見・除去までお手伝いさせて頂きます。
              </p>
            </div>
          </div>
          <div class="m-link"><a href="<?php echo home_url(); ?>/item/wiretap/"><span>盗聴、盗聴器の発見・除去の詳細</span><i class="m-arrow m-arrow__grey"></i></a></div>
        </div>

        <div class="survey-menu-list__item">
          <div class="survey-menu-list__inner">
            <div class="survey-menu-list__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/item/survey-menu_5.jpg">
            </div>
            <div class="survey-menu-list__detail">
              <h2 class="survey-menu__heading"><i class="m-icon"><?php get_template_part('lib/list-icon'); ?></i>嫌がらせ、ストーカー対策</h2>
              <p class="survey-menu__text">
                近年ストーカー被害が増加する中でストーカー行為がエスカレートし殺人に繋がる事件が多発しております。警察に行ってもまともに対応してもらえず困っている方も多いのでは無いでしょうか？誰にも言えないストーカー被害や嫌がらせの悩み。抱え込まずにまずはお問い合わせ下さい。近隣トラブルやパワハラ等当社では様々なトラブルを解決へと導いております。
              </p>
            </div>
          </div>
          <div class="m-link"><a href="<?php echo home_url(); ?>/item/harassment/"><span>嫌がらせ、ストーカー対策の詳細</span><i class="m-arrow m-arrow__grey"></i></a></div>
        </div>

        <div class="survey-menu-list__item">
          <div class="survey-menu-list__inner">
            <div class="survey-menu-list__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/item/survey-menu_6.jpg">
            </div>
            <div class="survey-menu-list__detail">
              <h2 class="survey-menu__heading"><i class="m-icon"><?php get_template_part('lib/list-icon'); ?></i>雇用・採用、信用調査</h2>
              <p class="survey-menu__text">
                近年、社員による横領、情報流出等や取引先とのトラブルがあとを絶たずそれらを未然に防ぐ為当社にもたくさんの企業様からご依頼を頂いております。個人の信用調査は勿論、企業においても決算内容を始めとする財務関係はもとより代表者・役員の素行や交遊関係の把握中心に問題点を明確にし、取引企業等の将来の方向性を導き出す判断材料とします。
              </p>
            </div>
          </div>
          <div class="m-link"><a href="<?php echo home_url(); ?>/item/credence/"><span>雇用・採用、信用調査の詳細</span><i class="m-arrow m-arrow__grey"></i></a></div>
        </div>

        <div class="survey-menu-list__item">
          <div class="survey-menu-list__inner">
            <div class="survey-menu-list__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/item/survey-menu_7.jpg">
            </div>
            <div class="survey-menu-list__detail">
              <h2 class="survey-menu__heading"><i class="m-icon"><?php get_template_part('lib/list-icon'); ?></i>各種鑑定調査</h2>
              <p class="survey-menu__text">
                当社ではDNA鑑定をはじめ陰影鑑定・筆跡鑑定・指紋鑑定・声紋鑑定等が可能となっております。それぞれの分野に特化したプロの鑑定士が鑑定を行い、鑑定結果報告書も法的に有効な精度の高いものとなっております。
              </p>
            </div>
          </div>
          <div class="m-link"><a href="<?php echo home_url(); ?>/item/appraisal/"><span>各種鑑定調査の詳細</span><i class="m-arrow m-arrow__grey"></i></a></div>
        </div>

        <div class="survey-menu-list__item">
          <div class="survey-menu-list__inner">
            <div class="survey-menu-list__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/item/survey-menu_8.jpg">
            </div>
            <div class="survey-menu-list__detail">
              <h2 class="survey-menu__heading"><i class="m-icon"><?php get_template_part('lib/list-icon'); ?></i>その他調査</h2>
              <p class="survey-menu__text">
                当社の強みの一つとしてその可能な調査数があります。当社には各資格保有者も在籍しており、弁護士事務所との連携も強く、その独自のネットワークを駆使し数多くのお悩みを解決へと導いてきました。他社に断られた依頼は勿論、諦める前に一度お問い合わせ下さい。
              </p>
            </div>
          </div>
          <div class="m-link"><a href="<?php echo home_url(); ?>/item/other/"><span>その他調査の詳細</span><i class="m-arrow m-arrow__grey"></i></a></div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('lib/cta-section'); ?>
</main>
<?php get_footer(); ?>
