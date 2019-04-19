<?php
/*
Template Name: credence
*/
?>
<?php get_header(); ?>

<main id="credence">
  <section class="page-title">
    <h1 class="page-title__heading">
      <span class="jp">雇用・採用・信用調査</span>
      <span class="en">CREDENCE</span>
    </h1>
  </section>

  <?php get_template_part('lib/breadcrumb'); ?>

  <section class="page-lead">
    <div class="l-container">
      <p class="page-lead__text">
        あなたの会社は大丈夫ですか？会社の資本とも言える人材の事、取引先や同業他社の情報など、<br class="u-md">
        豊富な調査実績を誇る当社へご相談ください。リスクマネジメントに寄与します。
      </p>
    </div>
  </section>

  <section class="survey-anchor">
    <div class="l-container">
      <div class="survey-anchor-list">
        <div class="survey-anchoor-list__item"><a href="#a1" data-anchor><span>オーウェルが<br class="u-sm__max">選ばれる理由</span></a></div>
        <div class="survey-anchoor-list__item"><a href="#a2" data-anchor><span>こんなこと<br class="u-sm__max">ありませんか</span></a></div>
        <div class="survey-anchoor-list__item"><a href="#a3" data-anchor><span>雇用・採用・信用調査<br class="u-sm__max">の事例</span></a></div>
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
          <div class="survey-point__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/item/survey-point__image.jpg"></div>
          <ul class="survey-point-list">
            <li class="survey-point-list__item"><span>健全な労務管理</span>を徹底したい</li>
            <li class="survey-point-list__item">今後<span>上場</span>を考えているが<br>取引先に<span>不安</span>がある</li>
            <li class="survey-point-list__item"><span>人材採用</span>の為の<span>参考資料</span>が欲しい</li>
            <li class="survey-point-list__item"><span>取締役や取引先など</span>の人物に<span>反社会勢力<br>に属している</span>人物がいないかを知りたい</li>
            <li class="survey-point-list__item"><span>学歴や退職理由</span>に<span>嘘</span>がないかを知りたい</li>
          </ul>
        </div>
        <div class="servery-point__ribon"><span>些細な悩みでも構いません。<br class="u-md__max">まずはお問い合わせください。</span></div>
      </div>
    </div>
  </section>

  <section id="a3" class="top-case">
    <div class="l-container">
      <h2 class="section-title">
        <div class="jp">雇用・採用・信用調査の事例</div>
        <div class="en">CASE STUDIES</div>
      </h2>
      <div class="top-case-list">
        <div class="top-case-list__item">
          <div class="m-case-number u-md__max"><span>CASE <small>01</small></span></div>
          <div class="top-case-list__top">
            <div class="top-case-list__person"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-case_12.jpg"></div>
            <div class="top-case-list__detail">
              <div class="m-case-number u-md"><span>CASE <small>01</small></span></div>
              <h3 class="top-case-list__heading">
                <div class="title">会社の未来へ向けてのリスク回避。<br class="u-md">小さな妥協が取り返しのつかない問題になる前に。</div>
                <div class="person">(東京都内 A社)</div>
              </h3>
              <div class="text u-md">東京の企業様からのご相談。依頼企業様は月に約20件の新規取引を行っており、今後株式上場を目指す上で取引先の信用調査は必須と判断し当社への依頼に至る。</div>
            </div>
          </div>
          <div class="text u-md__max">東京の企業様からのご相談。依頼企業様は月に約20件の新規取引を行っており、今後株式上場を目指す上で取引先の信用調査は必須と判断し当社への依頼に至る。</div>
          <div class="top-case-list__bottom">
            <div class="top-case-list__contents">
              <div class="title">調査内容</div>
              <p class="text">依頼企業様との面談の結果、毎月依頼企業様の判断で選んだ新規取引先数社の金銭トラブルの確認及び反社会勢力に属していないかを確認するための信用調査を行う事となる。調査を遂行する中で過去に金融事故の履歴がある代表者や取締役に席がある人物が反社会勢力に属しているという結果を依頼企業様へ報告する事もあり、大きなトラブルやリスクを未然に防げると当社のサービスに満足して頂き、継続的な調査を行う事となる。</p>
            </div>
            <div class="top-case-list__price top-case-list__price__small">
              <div class="title">金額</div>
              <div class="price"><small>毎月 ¥</small>100,000〜<br><small>¥</small>300,000</div>
            </div>
          </div>
        </div>
        
        <div class="top-case-list__item">
          <div class="m-case-number u-md__max"><span>CASE <small>02</small></span></div>
          <div class="top-case-list__top">
            <div class="top-case-list__person"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-case_9.jpg"></div>
            <div class="top-case-list__detail">
              <div class="m-case-number u-md"><span>CASE <small>02</small></span></div>
              <h3 class="top-case-list__heading">
                <div class="title">営業を担当する社員の勤務怠慢が発覚!?<br class="u-md">調査後、営業車全車両に走行履歴記録機能付きナビを完備。</div>
                <div class="person">(福井県 A社)</div>
              </h3>
              <div class="text u-md">対象者は営業を担当する50代男性。支社での営業を担当しているが、対象者が提出する日報に矛盾が見られる点から依頼企業様は対象者の勤務態度や社内評価に不安が募り、当社への相談に至る。</div>
            </div>
          </div>
          <div class="text u-md__max">対象者は営業を担当する50代男性。支社での営業を担当しているが、対象者が提出する日報に矛盾が見られる点から依頼企業様は対象者の勤務態度や社内評価に不安が募り、当社への相談に至る。</div>
          <div class="top-case-list__bottom">
            <div class="top-case-list__contents">
              <div class="title">調査内容</div>
              <p class="text">対象者は午前と夕方に約１時間ずつ出社する以外は毎日外回りをしていることから、対象者の車両位置確認調査及び現場確認調査を行う事が決定。調査開始後、対象者の車両は勤務先から少し離れた場所に位置する立体駐車場に駐車され、そのまま夕方まで動いていないのを確認。現場確認を行うと対象者は車内で睡眠をとっており同じ行動が勤務日５日間の内４日間続いた。調査結果を報告し、依頼企業様は対象者の措置と今後の営業業務の改善の必要性を再認識した。</p>
            </div>
            <div class="top-case-list__price">
              <div class="title">金額</div>
              <div class="price"><small>¥</small>86,000</div>
            </div>
          </div>
        </div>
        
        <div class="top-case-list__item">
          <div class="m-case-number u-md__max"><span>CASE <small>03</small></span></div>
          <div class="top-case-list__top">
            <div class="top-case-list__person"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-case_13.jpg"></div>
            <div class="top-case-list__detail">
              <div class="m-case-number u-md"><span>CASE <small>03</small></span></div>
              <h3 class="top-case-list__heading">
                <div class="title">資本となり得る人材のバックグラウンドチェック。<br class="u-md">コンスタントに必要だからこそ安値で正確な調査を。</div>
                <div class="person">(石川県 A社)</div>
              </h3>
              <div class="text u-md">依頼企業様は人材採用によるリスクの軽減を検討している中で、取引先のご紹介で当社への相談に至る。</div>
            </div>
          </div>
          <div class="text u-md__max">依頼企業様は人材採用によるリスクの軽減を検討している中で、取引先のご紹介で当社への相談に至る。</div>
          <div class="top-case-list__bottom">
            <div class="top-case-list__contents">
              <div class="title">調査内容</div>
              <p class="text">依頼企業様との面談の結果、新規採用・中途採用の判断材料としてバックグラウンドチェックを行う事を決定した。依頼企業様は過去に採用調査を他社で行った事があるがその際に支払った調査費用に調査報告が見合っていなった為、調査を中断していた。当社で行った調査では過去の退職理由や学歴確認は勿論、反社チェックや風評確認などを行い、調査結果報告書を提出した。依頼企業様には調査報告に満足していただきコンスタントに調査依頼を頂く事となった。</p>
            </div>
            <div class="top-case-list__price top-case-list__price__small">
              <div class="title">金額</div>
              <div class="price"><small>¥</small>125,000〜<br><small>¥</small>458,000</div>
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
        <div class="survey-price__default"><span><small>¥</small>45,000〜</span>税別</div>
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
              <h3 class="heading">警戒しているかもしれませんが大丈夫ですか？</h3>
            </div>
            <div class="survey-faq-list__text">
              大丈夫です。但し、対象者が警戒するに至った理由を正直にお話し下さい。日頃から警戒心の強い対象者や依頼者様が問い詰めて警戒心が強くなった、他社に依頼をしたことにより警戒心が強まったなど理由は様々ですが、その理由を必ず相談員にお伝え下さい。それにより、調査方法などが異なってきます。
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
