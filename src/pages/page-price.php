<?php
/*
Template Name: price
*/
?>
<?php get_header(); ?>

<main id="price">
  <section class="page-title">
    <h1 class="page-title__heading">
      <span class="jp">料金表一覧</span>
      <span class="en">PRICE LIST</span>
    </h1>
  </section>

  <?php get_template_part('lib/breadcrumb'); ?>

  <secton class="price-about">
    <div class="l-container">
      <div class="price-about__outer">
        <h2 class="price-about__heading">相談、カウンセリング料について</h2>
        <div class="price-about__money"><small>¥</small>0</div>
        <div class="price-about__text">依頼者様にとって一番気になるのが調査費用だと思います。まず御理解頂きたいのが、調査費用は調査の難易度、必要調査員数、事前情報量などによって大幅に左右し、それらを十分に理解する為に打ち合わせを重ねた上でお見積もりを出させて頂きます。同じ浮気調査や素行調査でも、お客様の調べたい内容や状況が違うため、すべての調査を一律で設定できません。その為、お電話口でおいくらですと簡単に料金を提示することは難しいとお考えください。逆に言うと簡単に料金を提示してくる探偵社はあまり信用できないということです。当社では他社の見積書をお持ちいただいた依頼者様には同調査内容の場合、他社のお見積り額より低料金での調査をお約束致します。
        </div>
      </div>
    </div>
  </secton>

  <section class="price-charges">
    <div class="l-container">
      <h2 class="section-heading">
        <span class="section-heading__en">CHARGES AND EXPENSES</span>
        <span class="section-heading__jp">料金・費用について</span>
      </h2>
      <div class="price-charges-list">
        <div class="price-charges-list__item">
          <ul class="price-charges-option">
            <li class="price-charges-option__item">調査時間、日数</li>
            <li class="price-charges-option__item">報告書作成費</li>
            <li class="price-charges-option__item">調査員人数</li>
            <li class="price-charges-option__item">調査車両料金</li>
            <li class="price-charges-option__item">調査機材代</li>
            <li class="price-charges-option__item">諸経費</li>
          </ul>
          <div class="price-charges-list__result">調査費用</div>
        </div>
        <div class="price-charges-list__item">
          <div class="price-charges-list__result">追加料金は<span>０<small>円</small></span></div>
          <div class="price-charges-list__text">調査費用は全て最初の見積り時に<br>提示させて頂きます。<br>提示した以外の金額は<br>一切頂きません。</div>
        </div>
        <div class="price-charges-list__item">
          <div class="price-charges-list__result">事前調査費<span>０<small>円</small></span></div>
          <div class="price-charges-list__text">調査の結果に関わらず、<br>事前の下調べの<br>費用はかかりません。</div>
        </div>
      </div>
      <p class="price-charges__caution">
        当社では、交通費・現場までの移動時間・深夜・早朝料金・機材使用料・報告書作成費用・弁護士ご紹介料・カウンセリング費用　これらの諸経費を全て含んだ調査費用をお見積もりの際にご提案いたします。又他社で「お試し調査」などと称し低価格での調査を行なっておりますが当社では「事前調査」とし、無料で行なっております。
      </p>
    </div>
  </section>

  <section class="price-guarantee">
    <div class="l-container">
      <h2 class="section-heading">
        <span class="section-heading__en">SECURITY GUARANTEE</span>
        <span class="section-heading__jp">安心保証制度について</span>
      </h2>
      <div class="survey-guarantee-list">
        <div class="survey-guarantee-list__item">
          <h3 class="survey-guarantee-list__heading"><i><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/item/survey-point-check.png"></i><span>返金保証</span></h3>
          <p class="survey-guarantee-list__text">
            万が一の際に調査料金を全額返金する保証制度です。当社の過失により調査が継続不可となった場合、調査報告書に事実とは大きく異なる記載があった場合、裁判所に浮気証拠資料として否認された場合、それぞれに適用されます。
          </p>
        </div>
        <div class="survey-guarantee-list__item">
          <h3 class="survey-guarantee-list__heading"><i><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/item/survey-point-check.png"></i><span>空振り保証</span></h3>
          <p class="survey-guarantee-list__text">
            目的の調査結果が得られなかった際に、2回目以降の調査契約において時間制料金プランの調査料金を最大で 20％割引させていただく保証制度です。調査契約時間の合計により割引率が異なり、適応不可の調査もございます。
          </p>
        </div>
        <div class="survey-guarantee-list__item">
          <h3 class="survey-guarantee-list__heading"><i><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/item/survey-point-check.png"></i><span>剰余保証</span></h3>
          <p class="survey-guarantee-list__text">
            調査目的を達成し調査完了となった 時点で、当初契約の調査時間が残っている場合にその残り時間に応じた額をご返金する保証制度です。これにより割安な長時間パックプランも安心してご利用いただけます。
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="price-cooling">
    <div class="l-container">
      <h2 class="section-heading">
        <span class="section-heading__en">COOLING OFF</span>
        <span class="section-heading__jp">クーリングオフ制度について</span>
      </h2>
      <p class="price-cooling__text">
        探偵や興信所などで、例えば浮気調査を依頼し契約したものの、しばらくたってから思い直し、契約をキャンセルしたという場合もあるかと思います。もちろん、契約のキャンセル自体は可能ですが、おそらく多くの探偵興信所では契約を解除する際には、解約手数料というものを設定しているところが多いです。契約のキャンセルに関しては、契約時の契約書・重要事項説明書にも解約時の手数料の金額などを記載することになっており、こうした手順で契約したものであるので、契約の解除はできるものの、キャンセルと同時にその探偵興信所の定める解約手数料の金額を支払うこととなります。
      </p>
      <p class="price-cooling__text">
        しかしこういった契約の解除とは別にクーリングオフ制度があります。2008年の特定商取引法（旧訪問販売法）の改正により、政令指定商品制度が撤廃され原則業種にクーリングオフが適用されることになった結果、探偵事業が行う調査契約にもクーリングオフが適用されることになりました。つまり、探偵業者が依頼者（消費者）と契約するときに、特定商取引法の指定する「訪問販売」に該当するときには、クーリングオフ対応の契約書が必要となっています。北陸総合興信所オーウェルでは特定商取引法を遵守しクーリングオフ制度に対応した契約書を使用しています。
      </p>
    </div>
  </section>
  
  <section class="price-customer">
    <div class="l-container">
      <div class="price-customer__outer">
        <h2 class="section-heading">
          <span class="section-heading__en">CUSTOMER SERVICE</span>
          <span class="section-heading__jp">アフターサービスについて</span>
        </h2>
        <p class="price-customer__text">
         依頼者様にとって、調査が終了した段階ではまだ解決とは言えません。その調査結果をもとにどのような形で解決に向けてアプローチしていくのが最善な方法なのか、それを最後まで一緒に考えお手伝いさせて頂きます。
          また、探偵や興信所にとって法的な知識や法律事務所とのコネクションは必要不可欠だと考えております。私達オーウェルではその依頼者様に寄り添い最適な方法で解決するために提携している担当弁護士とともに勉強会を定期的に行っております。調査後のアドバイスは勿論、徹底したアフターサービスもお任せ下さい。
        </p>
      </div>
    </div>
  </section>

  <section class="price-plan">
    <?php get_template_part('lib/survey-plan'); ?>
  </section>
  
  <section class="price-survey">
    <div class="l-container">
      <div class="price-survery__outer">
        <h2 class="section-heading">
          <span class="section-heading__en">CHEATING SURVEY</span>
          <span class="section-heading__jp">浮気・不倫調査</span>
        </h2>
        <div class="price-survery__fee"><span class="number"><small>¥</small>5,500〜</span><br class="u-sm__max"><span class="u-md">/</span>1時間（調査員1名）税別</div>
        <div class="m-link"><a href="<?php echo home_url(); ?>/item/cheating/"><span>詳しくはこちら</span><i class="m-arrow m-arrow__grey"></i></a></div>
      </div>
    </div>
  </section>

  <section class="price-survey">
    <div class="l-container">
      <div class="price-survery__outer">
        <h2 class="section-heading">
          <span class="section-heading__en">PERSONAL SURVEY</span>
          <span class="section-heading__jp">婚前調査、身元・身辺調査</span>
        </h2>
        <div class="price-survery__fee"><span class="number"><small>¥</small>40,000〜</span>税別</div>
        <div class="m-link"><a href="<?php echo home_url(); ?>/item/personal/"><span>詳しくはこちら</span><i class="m-arrow m-arrow__grey"></i></a></div>
      </div>
    </div>
  </section>
  
  <section class="price-survey">
    <div class="l-container">
      <div class="price-survery__outer">
        <h2 class="section-heading">
          <span class="section-heading__en">LOCATION SURVEY</span>
          <span class="section-heading__jp">行方・所在調査</span>
        </h2>
        <div class="price-survery__fee"><span class="number"><small>¥</small>35,000〜</span>税別</div>
        <div class="m-link"><a href="<?php echo home_url(); ?>/item/location/"><span>詳しくはこちら</span><i class="m-arrow m-arrow__grey"></i></a></div>
      </div>
    </div>
  </section>
  
  <section class="price-survey">
    <div class="l-container">
      <div class="price-survery__outer">
        <h2 class="section-heading">
          <span class="section-heading__en">WIRETAP</span>
          <span class="section-heading__jp">盗聴、盗聴機の発見・除去</span>
        </h2>
        <div class="price-survery__fee"><span class="number"><small>¥</small>35,000〜</span>税別</div>
        <div class="m-link"><a href="<?php echo home_url(); ?>/item/wiretap/"><span>詳しくはこちら</span><i class="m-arrow m-arrow__grey"></i></a></div>
      </div>
    </div>
  </section>
  
  <section class="price-survey">
    <div class="l-container">
      <div class="price-survery__outer">
        <h2 class="section-heading">
          <span class="section-heading__en">HARASSMENT AND STALKING</span>
          <span class="section-heading__jp">嫌がらせ、ストーカー対策</span>
        </h2>
        <div class="price-survery__fee"><span class="number"><small>¥</small>45,000〜</span>税別</div>
        <div class="m-link"><a href="<?php echo home_url(); ?>/item/harassment/"><span>詳しくはこちら</span><i class="m-arrow m-arrow__grey"></i></a></div>
      </div>
    </div>
  </section>
  
  <section class="price-survey">
    <div class="l-container">
      <div class="price-survery__outer">
        <h2 class="section-heading">
          <span class="section-heading__en">CREDENCE</span>
          <span class="section-heading__jp">雇用・採用・信用調査</span>
        </h2>
        <div class="price-survery__fee"><span class="number"><small>¥</small>45,000〜</span>税別</div>
        <div class="m-link"><a href="<?php echo home_url(); ?>/item/credence/"><span>詳しくはこちら</span><i class="m-arrow m-arrow__grey"></i></a></div>
      </div>
    </div>
  </section>
  
  <section class="price-survey">
    <div class="l-container">
      <div class="price-survery__outer">
        <h2 class="section-heading">
          <span class="section-heading__en">APPRAISAL</span>
          <span class="section-heading__jp">各種鑑定調査</span>
        </h2>
        <div class="price-survey__diff">
          各種鑑定調査の料金につきましては、事前にお持ちの資料や鮮明度、<br>鑑定料などにより異なっておりますので、一度お問い合わせください
        </div>
        <div class="m-link"><a href="<?php echo home_url(); ?>/item/appraisal/"><span>詳しくはこちら</span><i class="m-arrow m-arrow__grey"></i></a></div>
      </div>
    </div>
  </section>
  
  <section class="price-survey">
    <div class="l-container">
      <div class="price-survery__outer">
        <h2 class="section-heading">
          <span class="section-heading__en">OTHER SURVEY</span>
          <span class="section-heading__jp">その他調査</span>
        </h2>
        <div class="price-survey__diff">
          その他の調査の料金につきましては、一度お問い合わせ下さい。
        </div>
        <div class="m-link"><a href="<?php echo home_url(); ?>/item/other/"><span>詳しくはこちら</span><i class="m-arrow m-arrow__grey"></i></a></div>
      </div>
    </div>
  </section>
  <?php get_template_part('lib/cta-section'); ?>
</main>
<?php get_footer(); ?>
