<?php
/*
Template Name: appraisal
*/
?>
<?php get_header(); ?>

<main id="appraisal">
  <section class="page-title">
    <h1 class="page-title__heading">
      <span class="jp">各種鑑定調査</span>
      <span class="en">APPRAISAL</span>
    </h1>
  </section>

  <?php get_template_part('lib/breadcrumb'); ?>

  <section class="page-lead">
    <div class="l-container">
      <p class="page-lead__text">
        当社では各鑑定機関と提携し、確実な鑑定結果であなたの不安を取り除きます。
      </p>
    </div>
  </section>

  <section class="survey-anchor">
    <div class="l-container">
      <div class="survey-anchor-list">
        <div class="survey-anchoor-list__item"><a href="#a1" data-anchor><span>オーウェルが<br class="u-sm__max">選ばれる理由</span></a></div>
        <div class="survey-anchoor-list__item"><a href="#a2" data-anchor><span>こんなこと<br class="u-sm__max">ありませんか</span></a></div>
        <div class="survey-anchoor-list__item"><a href="#a3" data-anchor><span>各種鑑定調査<br class="u-sm__max">の事例</span></a></div>
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
            <li class="survey-point-list__item">自分と子供の顔が<span>似ていない</span></li>
            <li class="survey-point-list__item">遺言書に<span>不審な点</span>がある</li>
            <li class="survey-point-list__item"><span>イタズラ電話</span>に悩んでいる</li>
            <li class="survey-point-list__item"><span>嫌がらせ</span>に悩んでいる</li>
            <li class="survey-point-list__item">妻（彼女）が<span>妊娠</span>したが<br><span>浮気</span>をしていた可能性がある</li>
          </ul>
        </div>
        <div class="servery-point__ribon"><span>些細な悩みでも構いません。<br class="u-md__max">まずはお問い合わせください。</span></div>
      </div>
    </div>
  </section>

  <section id="a3" class="top-case">
    <div class="l-container">
      <h2 class="section-title">
        <div class="jp">各種鑑定調査の事例</div>
        <div class="en">CASE STUDIES</div>
      </h2>
      <div class="top-case-list">
        <div class="top-case-list__item">
          <div class="m-case-number u-md__max"><span>CASE <small>01</small></span></div>
          <div class="top-case-list__top">
            <div class="top-case-list__person"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-case_14.jpg" alt="CASE01"></div>
            <div class="top-case-list__detail">
              <div class="m-case-number u-md"><span>CASE <small>01</small></span></div>
              <h3 class="top-case-list__heading">
                <div class="title">子供が自分に似ていない。<br class="u-md">不安を取り除くためにDNA鑑定を決断。</div>
                <div class="person">(福井県 30歳前後男性)</div>
              </h3>
              <div class="text u-md">依頼者様の妻には不倫をしていた過去があり、その事実を許し平穏に過ごしていたが、自分の子供が大きくなるにつれ自分には似ていないと思うようになった。</div>
            </div>
          </div>
          <div class="text u-md__max">依頼者様の妻には不倫をしていた過去があり、その事実を許し平穏に過ごしていたが、自分の子供が大きくなるにつれ自分には似ていないと思うようになった。</div>
          <div class="top-case-list__bottom">
            <div class="top-case-list__contents">
              <div class="title">調査内容</div>
              <p class="text">依頼者様との面談の結果、依頼者様と子供のDNA鑑定を行う事となった。後日、3歳になる子供と依頼者様に改めて接触し、依頼者様と子供の口内の粘膜を摂取。その後、鑑定に回し約１０日で調査結果が届いた。報告書内には鑑定の結果、「依頼者様の実子である可能性が極めて高い」となり、その根拠を含め依頼者様に報告。依頼者様の不安を取り除く結果となり、無事調査は終了した。</p>
            </div>
            <div class="top-case-list__price">
              <div class="title">金額</div>
              <div class="price"><small>¥</small>75,000</div>
            </div>
          </div>
        </div>
        
        <div class="top-case-list__item">
          <div class="m-case-number u-md__max"><span>CASE <small>02</small></span></div>
          <div class="top-case-list__top">
            <div class="top-case-list__person"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-case_10.jpg" alt="CASE02"></div>
            <div class="top-case-list__detail">
              <div class="m-case-number u-md"><span>CASE <small>02</small></span></div>
              <h3 class="top-case-list__heading">
                <div class="title">違和感を感じる遺言書。<br class="u-md">故人の遺志を私欲で蔑ろにさせないために！</div>
                <div class="person">(石川県 50代男性)</div>
              </h3>
              <div class="text u-md">依頼者様の父親が亡くなり、遺産相続の話になったが、残された遺言書には父親の意思とは思えない内容が記載されていた。依頼者様自身は財産や金銭を目的としている訳ではないが、取り返しのつかない事になるのを恐れ当社への相談を決断する。</div>
            </div>
          </div>
          <div class="text u-md__max">依頼者様の父親が亡くなり、遺産相続の話になったが、残された遺言書には父親の意思とは思えない内容が記載されていた。依頼者様自身は財産や金銭を目的としている訳ではないが、取り返しのつかない事になるのを恐れ当社への相談を決断する。</div>
          <div class="top-case-list__bottom">
            <div class="top-case-list__contents">
              <div class="title">調査内容</div>
              <p class="text">依頼者様との面談の結果、残された遺言書が父親本人が書いたものかを調べるための筆跡鑑定を行う事となった。遺言書を鑑定資料とし、生前に父親が書いていた日記や残っていた手紙を対象として鑑定を開始。約20日後、鑑定結果報告書が届く。鑑定結果は筆圧等を理由に父親の筆跡である可能性は低いとなった。鑑定結果報告書を依頼者様に提出し鑑定内容を説明。依頼者様は鑑定結果報告書を元に当社が紹介した弁護士と今後の対応を練る流れとなった。</p>
            </div>
            <div class="top-case-list__price">
              <div class="title">金額</div>
              <div class="price"><small>¥</small>120,000</div>
            </div>
          </div>
        </div>
        
        <div class="top-case-list__item">
          <div class="m-case-number u-md__max"><span>CASE <small>03</small></span></div>
          <div class="top-case-list__top">
            <div class="top-case-list__person"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-case_8.jpg" alt="CASE03"></div>
            <div class="top-case-list__detail">
              <div class="m-case-number u-md"><span>CASE <small>03</small></span></div>
              <h3 class="top-case-list__heading">
                <div class="title">嫌がらせの電話の犯人は…？声紋鑑定で犯人の特定へ。</div>
                <div class="person">(福井県 50代女性)</div>
              </h3>
              <div class="text u-md">依頼者様は飲食店を経営しており、1ヶ月程前から頻繁に店舗にかかってくる嫌がらせの電話に頭を抱えていた。お店には多数の女性が勤めており、女性従業員への脅しなどが続き、解決策が見つからず当社への依頼を決断。</div>
            </div>
          </div>
          <div class="text u-md__max">依頼者様は飲食店を経営しており、1ヶ月程前から頻繁に店舗にかかってくる嫌がらせの電話に頭を抱えていた。お店には多数の女性が勤めており、女性従業員への脅しなどが続き、解決策が見つからず当社への依頼を決断。</div>
          <div class="top-case-list__bottom">
            <div class="top-case-list__contents">
              <div class="title">調査内容</div>
              <p class="text">依頼者様との面談の結果、録音していた通話内容と犯人と思われる人物との通話内容で声紋鑑定を行う事となった。鑑定の結果、鑑定物と対象資料の声紋は同一人物となり、鑑定結果報告書を依頼者様に提出。電話口の相手はライバル店のオーナーにあたる女性の交際相手であることが判明した。その結果を元に当社カウンセラーが付き添い、ライバル店オーナーの女性との話し合いの場が設けられ、女性は非を認め示談での解決となった。</p>
            </div>
            <div class="top-case-list__price">
              <div class="title">金額</div>
              <div class="price"><small>¥</small>180,000</div>
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
        <div class="survey-price__default">各種鑑定調査料金につきましては、<br class="u-sm__max">事前にお持ちの資料や鮮明度、<br>
          鑑定資料数などにより<br class="u-sm__max">異なっておりますので、<br class="u-sm__max">一度お問い合わせください</div>
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
              <h3 class="heading">調査後、法的手続きなど、わからないことだらけなのですがアドバイスは頂けますか？</h3>
            </div>
            <div class="survey-faq-list__text">
              はい、勿論です。私達の調査はあくまで解決へのきっかけ作りだと考えております。調査結果を元に解決するためのお手伝いを最後までさせて頂きます。必要書類の作成方法や慰謝料請求のやり方など、相談内容によって解決へのアプローチの仕方は様々ですが各依頼者様に適した方法をご提案させて頂き、最後までお手伝いさせて頂きます。
            </div>
          </div>
          <div class="survey-faq-list__item">
            <div class="survey-faq-list__heading">
              <div class="question"><span>Q</span></div>
              <h3 class="heading">調査がバレてしまうのではないかと心配です。</h3>
            </div>
            <div class="survey-faq-list__text">
              実際に調査期間内で調査依頼のことを知っている人物（対象者を除く家族や依頼者様などの身内）が感情的になり対象者に調査依頼のことを言ってしますケースが稀にあります。そうならないように相談員から依頼者様に起こりうるリスク説明や対処法などの説明はさせて頂きます。また、弊社の過失により調査がバレることはありません。なぜバレないかは調査方法により、こちらで説明することは出来ませんがお問い合わせ頂き、調査方法ご提案の際にしっかりとご説明させて頂きます。
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
