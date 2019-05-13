<?php
/*
Template Name: location
*/
?>
<?php get_header(); ?>

<main id="location">
  <section class="page-title">
    <h1 class="page-title__heading">
      <span class="jp">行方・所在調査</span>
      <span class="en">LOCATION SURVEY</span>
    </h1>
  </section>

  <?php get_template_part('lib/breadcrumb'); ?>

  <section class="page-lead">
    <div class="l-container">
      <p class="page-lead__text">
        会いたい人、探したい人、連絡を取りたいけど方法が見つからない…そんな相手はいませんか？<br class="u-md">
        家出人調査・所在調査は業界トップレベルの判明率を誇るオーウェルにお任せください。
      </p>
    </div>
  </section>

  <section class="survey-anchor">
    <div class="l-container">
      <div class="survey-anchor-list">
        <div class="survey-anchoor-list__item"><a href="#a1" data-anchor><span>オーウェルが<br class="u-sm__max">選ばれる理由</span></a></div>
        <div class="survey-anchoor-list__item"><a href="#a2" data-anchor><span>こんなこと<br class="u-sm__max">ありませんか</span></a></div>
        <div class="survey-anchoor-list__item"><a href="#a3" data-anchor><span>行方・所在調査<br class="u-sm__max">の事例</span></a></div>
        <div class="survey-anchoor-list__item"><a href="#a4" data-anchor>ご契約まで<br class="u-sm__max">の流れ</a></div>
        <div class="survey-anchoor-list__item"><a href="#a5" data-anchor><span>料金</span></a></div>
        <div class="survey-anchoor-list__item"><a href="#a6" data-anchor><span>Q&amp;A</span></a></div>
      </div>
    </div>
  </section>

  <section id="a1" class="survey-reason">
    <?php get_template_part('lib/survey-reason'); ?>  
  </section>

  <section id="a2" class="survey-point">
    <div class="servery-point__outer">
      <div class="l-container">
        <h2 class="survey-point__heading"><span>当てはまることありませんか？</span></h2>
        <div class="survey-point__inner">
          <div class="survey-point__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/item/survey-point__image.jpg" alt="当てはまることありませんか?"></div>
          <ul class="survey-point-list">
            <li class="survey-point-list__item">夫(妻)の<span>浮気相手</span>の住所が知りたい</li>
            <li class="survey-point-list__item"><span>家族</span>が家出をした</li>
            <li class="survey-point-list__item"><span>初恋の人</span>にもう一度会いたい</li>
            <li class="survey-point-list__item"><span>昔お世話になった人</span>にお礼を言いたい</li>
            <li class="survey-point-list__item"><span>連絡</span>を取りたい<span>人物</span>がいる</li>
          </ul>
        </div>
        <div class="servery-point__ribon"><span>些細な悩みでも構いません。<br class="u-md__max">まずはお問い合わせください。</span></div>
      </div>
    </div>
  </section>

  <section id="a3" class="top-case">
    <div class="l-container">
      <h2 class="section-title">
        <div class="jp">行方・所在調査の事例</div>
        <div class="en">CASE STUDIES</div>
      </h2>
      <div class="top-case-list">
        <div class="top-case-list__item">
          <div class="m-case-number u-md__max"><span>CASE <small>01</small></span></div>
          <div class="top-case-list__top">
            <div class="top-case-list__person"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-case_3.jpg" alt="CASE01"></div>
            <div class="top-case-list__detail">
              <div class="m-case-number u-md"><span>CASE <small>01</small></span></div>
              <h3 class="top-case-list__heading">
                <div class="title">未成年の息子が家出。当社独自の調査方法で<br class="u-md">短期間での発見、保護へ。</div>
                <div class="person">(関東地方 40代夫婦)</div>
              </h3>
              <div class="text u-md">依頼者様は関東に在住で未成年の息子が置き手紙を残し家出をした。息子の部屋に北陸地方のガイドブックがあったことやパソコンの検索履歴から石川県にいる可能性が高い事が判明し、依頼に至った。</div>
            </div>
          </div>
          <div class="text u-md__max">依頼者様は関東に在住で未成年の息子が置き手紙を残し家出をした。息子の部屋に北陸地方のガイドブックがあったことやパソコンの検索履歴から石川県にいる可能性が高い事が判明し、依頼に至った。</div>
          <div class="top-case-list__bottom">
            <div class="top-case-list__contents">
              <div class="title">調査内容</div>
              <p class="text">依頼者様から頂いた情報を元に推測すると、宿泊施設を利用している可能性は極めて低いと判断。まずは各種データ調査を行い、防犯カメラの映像やATMの出金情報から滞在しているであろう地域を絞ることに成功した。その後、調査員を総動員し、聞き込み調査と捜索を行い捜索開始翌日に家電量販店で対象者と対象者の彼女の姿を発見。調査員は既に被害届を受理していた警察に連絡を入れ、対象者を保護した。</p>
            </div>
            <div class="top-case-list__price">
              <div class="title">金額</div>
              <div class="price"><small>¥</small>350,000</div>
            </div>
          </div>
        </div>
        
        <div class="top-case-list__item">
          <div class="m-case-number u-md__max"><span>CASE <small>02</small></span></div>
          <div class="top-case-list__top">
            <div class="top-case-list__person"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-case_5.jpg" alt="CASE02"></div>
            <div class="top-case-list__detail">
              <div class="m-case-number u-md"><span>CASE <small>02</small></span></div>
              <h3 class="top-case-list__heading">
                <div class="title">お金を借りて逃げた相手の捜索。<br class="u-md">情報が少なく他社には依頼を断られたが...</div>
                <div class="person">(富山県 40歳前後男性)</div>
              </h3>
              <div class="text u-md">依頼者様は趣味である釣りで知り合った男性にお金を貸して欲しいと頼まれ、借用書を交わさずに数回にわたり合計約150万円のお金を対象者に貸したが、対象者と連絡が取れなくなり接触も困難となった為依頼を決断。</div>
            </div>
          </div>
          <div class="text u-md__max">依頼者様は趣味である釣りで知り合った男性にお金を貸して欲しいと頼まれ、借用書を交わさずに数回にわたり合計約150万円のお金を対象者に貸したが、対象者と連絡が取れなくなり接触も困難となった為依頼を決断。</div>
          <div class="top-case-list__bottom">
            <div class="top-case-list__contents">
              <div class="title">調査内容</div>
              <p class="text">依頼者様が持っていた対象者の情報は極めて少なく、他社には依頼を断られていた。当社ではまず、判っていた情報を元に聞き込み調査を行い、新たな対象者の情報を得ることに成功。その後、データ調査を駆使し、対象者の現住所・実家住所・家族構成・勤務先を割り出すことに成功した。その後、当社相談員アドバイスの元、依頼者様と対象者は借用書を交わし解決に至った。</p>
            </div>
            <div class="top-case-list__price">
              <div class="title">金額</div>
              <div class="price"><small>¥</small>190,000</div>
            </div>
          </div>
        </div>
        
        <div class="top-case-list__item">
          <div class="m-case-number u-md__max"><span>CASE <small>03</small></span></div>
          <div class="top-case-list__top">
            <div class="top-case-list__person"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-case_7.jpg" alt="CASE03"></div>
            <div class="top-case-list__detail">
              <div class="m-case-number u-md"><span>CASE <small>03</small></span></div>
              <h3 class="top-case-list__heading">
                <div class="title">夫の浮気相手の所在調査。<br class="u-md">結果が出なければ0円の成功報酬制の調査を決行。</div>
                <div class="person">(福井県 30代女性)</div>
              </h3>
              <div class="text u-md">依頼者様の夫の不貞行為が発覚。夫とは離婚をせずに相手の女性とは妥当な慰謝料を支払うという約束で終わったのだが、相手の女性から慰謝料の支払いが無いまま連絡も取れなくなる。夫も対象者の女性とは連絡が取れず、この時点で判っていたのは対象者の氏名と携帯番号のみ。</div>
            </div>
          </div>
          <div class="text u-md__max">依頼者様の夫の不貞行為が発覚。夫とは離婚をせずに相手の女性とは妥当な慰謝料を支払うという約束で終わったのだが、相手の女性から慰謝料の支払いが無いまま連絡も取れなくなる。夫も対象者の女性とは連絡が取れず、この時点で判っていたのは対象者の氏名と携帯番号のみ。</div>
          <div class="top-case-list__bottom">
            <div class="top-case-list__contents">
              <div class="title">調査内容</div>
              <p class="text">相談を受けた時点での対象者の情報が少なく、所在判明が困難と判断し、当社相談員との面談で判明しなかった場合に基本報酬含め調査費用０円の完全成功報酬での契約となる。当社独自のネットワークを駆使し、データ調査も行った結果、対象者の所在特定に成功。対象者は石川県に引っ越しており、当社カウンセラーアドバイスの元、内容証明を作成し判明した対象者の住所に送付。解決に至る。</p>
            </div>
            <div class="top-case-list__price">
              <div class="title">金額</div>
              <div class="price"><small>¥</small>300,000</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('lib/cta-section'); ?>
  </section>

  <section id="a4" class="survey-flow">
    <?php get_template_part('lib/survey-flow'); ?>
  </section>

  <section id="a5" class="survey-price">
    <div class="l-container">
      <div class="survey-price__outer">
        <h2 class="section-title">
          <div class="jp">料金</div>
          <div class="en">FEES</div>
        </h2>
        <div class="survey-price__default"><span>¥35,000〜</span>税別</div>
        <?php get_template_part('lib/survey-price'); ?>
      </div>
    </div>
  </section>

  <section class="survey-guarantee">
    <?php get_template_part('lib/survey-guarantee'); ?>
  </section>

  <section class="survey-plan">
    <?php get_template_part('lib/survey-plan'); ?>
  </section>

  <section id="a6" class="survey-faq">
    <div class="l-container">
      <div class="survey-faq__outer">
        <h2 class="section-title">
          <div class="jp">よくある質問</div>
          <div class="en">QUESTIONS</div>
        </h2>
        <div class="survey-faq-list">
          <div class="survey-faq-list__item">
            <div class="survey-faq-list__heading">
              <div class="question"><span>Q</span></div>
              <h3 class="heading">調査で途中経過の連絡はして頂けますか？</h3>
            </div>
            <div class="survey-faq-list__text">
              はい。弊社ではなるべく調査時間内において依頼者様には連絡が取れるようにして頂いております。理由として、予期せぬ事態が起こった際に依頼者様の判断が必要になったり、無駄な費用をかけないために必要に応じて調査の中断要請を仰ぐことがあるからです。
            </div>
          </div>
          <div class="survey-faq-list__item">
            <div class="survey-faq-list__heading">
              <div class="question"><span>Q</span></div>
              <h3 class="heading">依頼をするつもりはないのですが相談だけでも電話しても大丈夫ですか？</h3>
            </div>
            <div class="survey-faq-list__text">
              大丈夫です。勿論弊社はボランティアなどではなく、営利目的で依頼をお受けしております。しかし、お電話でのアドバイス等で少しでも解決への糸口が見つかるのであれば我々探偵の冥利に尽きます。
            </div>
          </div>
        </div>
        <div class="m-link m-link__en"><a href="<?php echo home_url(); ?>/faq/"><span>READ MORE</span><i class="m-arrow m-arrow__grey"></i></a></div>
      </div>
    </div>
  </section>
  <?php get_template_part('lib/cta-section'); ?>
</main>
<?php get_footer(); ?>
