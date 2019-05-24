<!DOCTYPE html>
<html>
<head>
<title>株式会社ケーエムエス２</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="./css/kms2img/kms2_icon.png" />

<link rel="stylesheet" href="./css/jquery.mobile.structure-1.1.1.min.css" />
<link rel="stylesheet" href="./css/theme_kms2_20120927_03.min.css" />
<link rel="stylesheet" href="./css/custom.css"/>
<script src="./js/jquery-1.7.1.min.js"></script>
<script src="./js/config.js"></script>
<script src="./js/jquery.mobile-1.1.1.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true&language=ja"></script>
<script src="./js/custom.js"></script>

<?php
  // define
  define("DEF_PAGE_MENU"  , "p-menu"   );
  define("DEF_TITLE_MENU" , "メニュー" );

  define("DEF_PAGE_HOME"  , "p-home"   );
  define("DEF_TITLE_HOME" , "ホーム"   );

?>

<?php
  function setHeader( $prmTitle )
  {
    echo "    <div data-role=\"header\" data-position=\"fixed\">\n";
    echo "      <h2>kms2 ".$prmTitle."</h2>\n";

    if( $prmTitle != DEF_TITLE_MENU )
    {
      echo "      <a href=\"#".DEF_PAGE_MENU."\" data-role=\"button\" data-icon=\"grid\" data-iconpos=\"left\" data-transition=\"slide\" data-direction=\"reverse\">Menu</a>\n";
    }

    if( $prmTitle != DEF_TITLE_HOME )
    {
      echo "      <a href=\"#".DEF_PAGE_HOME."\" data-role=\"button\" data-icon=\"home\" data-iconpos=\"right\" data-transition=\"flip\" class=\"ui-btn-right\">Home</a>\n";
    }

    echo "    </div>\n";
  }

  function setFooter()
  {
    echo "    <div data-role=\"footer\" data-position=\"fixed\">\n";
    echo "      <h2>Copyright &copy; 2007 KMS2 Co.,Ltd.All Rights Reserved</h2>\n";
    echo "    </div>\n";
  }
?>


</head>
<body>



  <div data-role="page" id="<?php echo DEF_PAGE_HOME; ?>">
    <?php setHeader( DEF_TITLE_HOME ); ?>
    <div data-role="content">

      <ul data-role="listview">

        <li data-icon="false">
          <a href="#<?php echo DEF_PAGE_MENU; ?>" data-direction="reverse">
            <div class="css-kms2-top-header css-kms2-width-center">
              <img src="./css/kms2img/kms2_logo.png" />
            </div>
          </a>
        </li>

        <li data-role="list-divider">2012/05/24<br>異業種交流会でコリーデスの製品紹介実施</li>
          <li>
            <a href="http://www.gitechnos.com/globalTechnos/koleedes/products/koleedes.html" target="_blank">
              <div>
                <img src="./css/kms2img/koleedes_white.png" />
                <img src="./css/kms2img/koleedes_red.png"   />
                <img src="./css/kms2img/koleedes_black.png" />
              </div>
            </a>
          </li>

        <li data-role="list-divider">2012/05/14<br>コリーデス（ペーパークリップ）販売開始</li>
          <li>
            <a href="http://www.ns-drivingsystem.com/koleedes/index.html" target="_blank">
              <div>
                <p />
                <p>片手で簡単ペーパークリップ「コリーデス」</p>
              </div>
            </a>
          </li>

        <li data-role="list-divider">2011/11/01<br>親子で楽しいロボット教室（小伝馬町）</li>
          <li>
            <a href="http://www.kms2.co.jp/robo/">
              <div>
                <p>10月30日開催分（終了しました）</p>
                <img src="./css/kms2img/robot.png" />
              </div>
            </a>
          </li>

<!-- one of list {
        <li data-role="list-divider">YYYY/MM/DD<br>XXXタイトルXXX</li>
          <li>
            <div>
              <p />
              <p>XXXコンテンツXXX</p>
              <p>XXXコンテンツXXX</p>
              <p>XXXコンテンツXXX</p>
            </div>
          </li>
} one of list -->

      </ul>

    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="<?php echo DEF_PAGE_MENU; ?>">
    <?php setHeader( DEF_TITLE_MENU ); ?>
    <div data-role="content">

      <div data-role="collapsible-set">
        <div data-role="collapsible" data-collapsed="false">
          <h3>会社案内</h3>
          <ul data-role="listview">
            <li><a href="#p-president-message"    >代表挨拶</a></li>
            <li><a href="#p-concept"              >企業理念</a></li>
            <li><a href="#p-business-introduction">事業紹介</a></li>
            <li><a href="#p-corporate-guidance"   >会社概要</a></li>
          </ul>
        </div>

        <div data-role="collapsible">
          <h3>採用情報</h3>
          <ul data-role="listview">
            <li>
              <p />
              <p>ケーエムエス２の求める基本的な人材要件は、次の３点です。 </p>
              <div class="css-kms2-indent-list">
                <p>・積極的に自ら学ぶ姿勢のあること</p>
                <p>・一人で業務が完遂できる技術者であること</p>
                <p>・集団の中では更に大きな力を発揮できる技術者であること</p>
              </div>
              <div class="css-kms2-width-right">
                <a href="#p-recruit-comment-all" data-role="button" data-icon="info" data-mini="true" data-inline="true">全文を読む</a>
              </div>
            </li>
            <li><a href="#p-recruit-new"            >新卒採用</a></li>
            <li><a href="#p-recruit-career"         >中途採用</a></li>
            <li><a href="#p-recruit-contract-worker">契約社員</a></li>
          </ul>
        </div>

        <div data-role="collapsible">
          <h3>お問い合わせ</h3>
          <ul data-role="listview">
            <li><a href="#p-contact">お電話・メールによるお問い合わせを受け付けております。</a></li>
          </ul>
        </div>

      </div>

      <div class="css-kms2-width-center">
        <a href="#p-privacy-policy" data-role="button" data-icon="alert" data-mini="true" data-inline="true">プライバシーポリシー</a>
      </div>

    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-president-message">
    <?php setHeader( "代表挨拶" ); ?>
    <div data-role="content">
      <p>
        弊社は、社員個々の知識・スキル・技術力、業務ノウハウを組織として蓄積、お客様に会社全体の総合力としてご提案し情報システムの構築をお手伝いすることにより、社会貢献が出来る企業体質を作りたいと考えており、企業名をケーエムエス２( <span class="css-kms2-is-word">K</span>nowledge <span class="css-kms2-is-word">M</span>anagement <span class="css-kms2-is-word">S</span>ystem & <span class="css-kms2-is-word">S</span>ervice : KMS2 )と名付けました。
      </p>
      <img src="./css/kms2img/building.jpg" class="css-kms2-img-right css-kms2-img-shadow" />
      <p>
        社員も、個々の人柄と技術の裏づけによりお客様から信頼される技術者を目指しております。
        又、経験の浅い若手社員は上級技術者及び社外講師による厳しい社会人研修及び技術教育・研修を潜り抜けた後に、
        お客さまと仕事を一緒にさせて頂いております。しかし、個々のノウハウ、スキルのご提案では、
        「弊社としての総合力は何処に？」と自問自答の連続です。弊社は個々の力量を一層高め総合力として、業務ノウハウ、
        開発スキルをご提案できる企業として、お客様又社員と共に発展したいと考えて、技術の集約化を図る所存です。
      </p>
      <p>
        会社として人ありきですが、継続した教育・研修と相互刺激により、社会人としての言動はもとより技術も品質も向上させた企業活動の結果として社会貢献をして行きます。
      </p>
      <p class="css-kms2-img-clear"></p>

      <div class="css-kms2-width-center">
        <a href="#p-concept" data-role="button" data-iconpos="right" data-icon="arrow-r" data-inline="true">企業理念</a>
      </div>

    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-concept">
    <?php setHeader( "企業理念" ); ?>
    <div data-role="content">
      <ul data-role="listview">

        <li data-role="list-divider">(1)我々は企業の存続の為3つの向上を目指します。</li>
        <li>・お客様満足度の向上</li>
        <li>・社員満足度の向上</li>
        <li>・技術・品質の向上</li>
        <li>企業名に由来する Knowledge Management System の考えに基づき、社内蓄積された技術・知識・サービスを、お客様に提供し、信用・信頼を得られるように、経営者と社員が一体となり活動します。　福利厚生を充実させ、達成感のある活動が出来る環境を提供します。積極的な投資で社員の技術力、品質を向上させ、社員一人一人が自立した技術者となるように教育・研修の場を提供します。</li>

        <li data-role="list-divider">(2)我々は経営指針として3つの目標を掲げます。</li>
        <li>・継続的な発展と利益の確保</li>
        <li>・法令の遵守</li>
        <li>・社員を尊重した求心力の強化</li>
        <li>着実で継続的な組織・営業規模の拡大と利益の確保を目指します。　社員及び社外の有識者（弁護士、会計士、社外取締役等）の参加を得た倫理規定管理委員会の下、商取引、機密保持、個人情報保護等の法令を遵守し企業活動を行います。　個々の経営参画意識の向上及び福利厚生の一貫として社員の持株奨励等により、求心力のある経営体質を創ります。</li>

      </ul>

      <p />
      <div class="css-kms2-width-center">
        <a href="#p-president-message"     data-role="button" data-iconpos="left"  data-icon="arrow-l" data-inline="true" data-direction="reverse">代表挨拶</a>
        <a href="#p-business-introduction" data-role="button" data-iconpos="right" data-icon="arrow-r" data-inline="true"                         >事業紹介</a>
      </div>

    </div>

    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-business-introduction">
    <?php setHeader( "事業紹介" ); ?>
    <div data-role="content">

      <ul data-role="listview">

        <li data-role="list-divider">組織・技術者で経験のあるコンサルティング・開発</li>
          <li>
            <h3>業務アプリケーション開発</h3>
            <p>人事関連システム / 各種ワークフローシステム / 製造業向け受発注システム / 生産管理システム / 図書館システム / 医療団体健康診断管理システム / 公共団体事務システム / 金融関連格付けシステム</p>
          </li>
          <li>
            <h3>業務アプリケーション開発</h3>
            <p>人事関連システム / 各種ワークフローシステム / 製造業向け受発注システム / 生産管理システム / 図書館システム / 医療団体健康診断管理システム / 公共団体事務システム / 金融関連格付けシステム</p>
          </li>
          <li>
            <h3>Webシステム設計 / 開発</h3>
            <p>放送局Webシステム / 自社構築</p>
          </li>
          <li>
            <h3>ネットワーク・セキュリティ関連システムの開発</h3>
            <p>ネットワーク切断|切替ハードウェア/ソフトウェア開発 / ホームページ修復システム</p>
          </li>
          <li>
            <h3>組み込み系システム開発</h3>
            <p>CAD/CAMシステム組み込み設計/開発/運用 / スマートフォン(iPhone,Android)設計/開発/販売 / 無線システム（ワイヤレス温度計）設計/開発/販売</p>
          </li>

        <li data-role="list-divider">開発技術</li>
          <li>
            <h3>環境(OS)</h3>
            <p>Windows / Solaris / Linux(RedHat/TurboLinux) / Mac(OSX)</p>
          </li>
          <li>
            <h3>ツール</h3>
            <p>VisualC++ / VisualBasic / Access / Excel / Delphi / Notes / Eclips / FastHelp3 / EBS(R10/11) / Forms / Cadds5</p>
          </li>
          <li>
            <h3>言語</h3>
            <p>VBA / VB6 / Java / JavaScripts / Perl / PHP / Ruby / HTML / XML / C / VC / ProC / SQL / PL/SQL / FORTRAN / COBOL / Assembler</p>
          </li>
          <li>
            <h3>データベース</h3>
            <p>Oracle / DB2 / MySQL / PostgreSQL / FileMakerPro9</p>
          </li>

        <li data-role="list-divider">製品販売</li>
          <li>
            <h3>LED製品</h3>
            <p>照明ランプ・光源 / LEDランプ / LEDダウンライト / LED蛍光灯 / キャノピーライト</p>
          </li>

          <li>
            <a href="http://www.ns-drivingsystem.com/koleedes/index.html" target="_blank">
              <h3>文具製品</h3>
              <p>片手で簡単ペーパークリップ「コリーデス」</p>
            </a>
          </li>

      </ul>

      <p />
      <div class="css-kms2-width-center">
        <a href="#p-concept"            data-role="button" data-iconpos="left"  data-icon="arrow-l" data-inline="true" data-direction="reverse">企業理念</a>
        <a href="#p-corporate-guidance" data-role="button" data-iconpos="right" data-icon="arrow-r" data-inline="true"                         >会社概要</a>
      </div>

    </div>

    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-corporate-guidance">
    <?php setHeader( "会社概要" ); ?>
    <div data-role="content">

      <ul data-role="listview">

        <li data-role="list-divider">会社名</li>
          <li>
            <p />
            <p>株式会社ケーエムエス２</p>
            <p>( <span class="css-kms2-is-word">K</span>nowledge <span class="css-kms2-is-word">M</span>anagement <span class="css-kms2-is-word">S</span>ystem & <span class="css-kms2-is-word">S</span>ervice )</p>
          </li>

        <li data-role="list-divider">所在地</li>
          <li>
            <a href="#p-map">
              <p>〒103-0001</p>
              <p>東京都中央区日本橋小伝馬町15-16 大竹ビル3階</p>
            </a>
          </li>

        <li data-role="list-divider">設立年月日</li>
          <li>
            <p />
            <p>2007（平成19）年10月01日</p>
          </li>

        <li data-role="list-divider">資本金</li>
          <li>
            <p />
            <p>700万円</p>
          </li>

        <li data-role="list-divider">社員構成</li>
          <li>
            <p />
            <p>正社員:12名 / 契約社員:3名</p>
          </li>

        <li data-role="list-divider">役員構成</li>
          <li>
            <p />
            <p>代表取締役 室屋俊裕</p>
            <p>代表取締役 片山啓多</p>
          </li>

        <li data-role="list-divider">連絡先</li>
          <li>
            <p />
            <p>03-3661-7121</p>
          </li>

        <li data-role="list-divider">認可・許可</li>
          <li>
            <p />
            <p>特定派遣事業者</p>
            <p>届出番号：特13-307423（届出日:2007年11月07日）</p>
          </li>

        <li data-role="list-divider">お取引先</li>
          <li>
            <p />
            <p>ＴＤＣソフトウェアエンジニアリング株式会社</p>
            <p>菱化システム株式会社</p>
            <p>東海ソフト株式会社</p>
            <p>株式会社クリエーション・ビュー</p>
            <p>その他、ＳＩ会社及びソフトウェア会社</p>
            <p>※敬称略</p>
          </li>

        <li data-role="list-divider">取引先銀行</li>
          <li>
            <p />
            <p>三菱東京ＵＦＪ銀行（大伝馬町支店）</p>
            <p>みずほ銀行（横山町支店）</p>
            <p>りそな銀行（室町支店）</p>
          </li>

      </ul>

      <p />
      <div class="css-kms2-width-center">
        <a href="#p-business-introduction" data-role="button" data-iconpos="left"  data-icon="arrow-l" data-inline="true" data-direction="reverse">事業紹介</a>
      </div>

    </div>

    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-map">
    <?php setHeader( "地図" ); ?>
    <div data-role="content">
      <div class="css-kms2-width-center">
        <a href="" data-role="button" data-iconpos="left"  data-icon="back" data-inline="true" data-direction="reverse" data-rel="back">戻る</a>
      </div>
      <p />
      <div id="id-map"></div>
    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-recruit-comment-all">
    <?php setHeader( "採用情報" ); ?>
    <div data-role="content">

      <ul data-role="listview">

        <li data-role="list-divider">ケーエムエス２の求める基本的な人材要件は、次の３点です。</li>
        <li>・積極的に自ら学ぶ姿勢のあること</li>
        <li>・一人で業務が完遂できる技術者であること</li>
        <li>・集団の中では更に大きな力を発揮できる技術者であること</li>

        <li>
          <p />
          <p>当然のことながら、自己満足の世界ではありません。協調性を持ちながら自立出来、向上心のある人です。私たちは、個々に力量が高く、仲間との相乗効果でさらに高い技術レベルを求める技術者集団になろうとしています。</p>
          <p>そのためには先輩、同僚とも積極的な支援体制をとっております。協調性は必要ですが、依存心の強い仲良し集団ではなく、互いに磨きあう技術者集団を目指しています。</p>
          <p>未経験の方は弊社で教育・指導の結果業務に従事することになります。但し、受身ではなく、積極的に自ら学ぶ姿勢のある方が伸びる教育・研修となっています。厳しいと感じられるとは思いますが、仕事を開始したときには良かったと感じるはずです。</p>
          <p>弊社は雇用形態（正社員、契約社員）、年齢を問わず通年採用をしております。</p>
        </li>

        <li><a href="#p-recruit-new"            >新卒採用</a></li>
        <li><a href="#p-recruit-career"         >中途採用</a></li>
        <li><a href="#p-recruit-contract-worker">契約社員</a></li>

      </ul>

      <p />
      <div class="css-kms2-width-center">
        <a href="" data-role="button" data-iconpos="left"  data-icon="back" data-inline="true" data-direction="reverse" data-rel="back">戻る</a>
      </div>

    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-recruit-new">
    <?php setHeader( "新卒採用" ); ?>
    <div data-role="content">

      <ul data-role="listview">

        <li><a href="#p-recruit-new-applicant"  >募集要項</a></li>
        <li><a href="#p-recruit-new-explanation">会社説明</a></li>
        <li><a href="#p-recruit-new-faq"        >ＦＡＱ</a></li>

        <li>
          <p />
          <p>システムエンジニアとは？プログラマとは？ＩＴ業界の中でどんな役割なのか、中々理解されていません。弊社は全員の方にシステムエンジニアになって頂きたいと採用の基準を設けています。新卒者・未経験者向けに作られた教育・研修のカリキュラムに従い研修受講後、業務に従事して頂いています。</p>
          <p>システムエンジニアはお客様或いは自らが要望するシステム（目的とされる結果を導きだす仕組み）を作り出す仕事です。その道具としてＩＴ機器（コンピュータ、通信機器等）を使用しています。自分で考え、仕組みを作って行かなければならないので大変かも知れません。しかし、新しいものを作り出して期待通りに動いたとき、又、お客様に使われて社会貢献が出来たときには大きな喜びがあります。</p>
          <p>弊社の教育・研修は２ケ月～６ケ月に渡って行われます。カリキュラムは個々のＩＴスキルの習得状況により色々なバリエーションがあります。挫けずに学習して頂ければ技術は習得出来ます。尚、弊社の適性検査と面接に合格したのであれば必ずＩＴ技術者としての資質があります。</p>
          <p>教育・研修の環境はありますが、自分の身に付くかどうかは姿勢次第です。まず学び取る姿勢を持ってください。弊社は技術者の育成事業も将来計画としてあります。近々に事業化のための準備も開始されます。</p>
          <p class="css-kms2-width-right"><a href="#p-contact">お問い合わせはこちら</a></p>
        </li>

      </ul>

      <p />
      <div class="css-kms2-width-center">
        <a href="" data-role="button" data-iconpos="left"  data-icon="back" data-inline="true" data-direction="reverse" data-rel="back">戻る</a>
      </div>

    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-recruit-new-applicant">
    <?php setHeader( "募集要項" ); ?>
    <div data-role="content">

      <table class="css-kms2-table">
        <tr>
           <th>応募資格</th>
           <td>全学部、全学科</td>
        </tr>
        <tr>
           <th>募集職種</th>
           <td>システムエンジニア、プログラマ</td>
        </tr>
        <tr>
           <th>初任給</th>
           <td>初任給（2007年4月実績、住宅手当を含む）<br>大学院卒（修士) 210，000円<br>大卒 200，000円<br>短大、専門卒 190，000円</td>
        </tr>
        <tr>
           <th>諸手当</th>
           <td>住宅手当、通勤手当（全額支給）</td>
        </tr>
        <tr>
           <th>昇給、賞与</th>
           <td>昇給　年1回、賞与　年2回（計3ケ月）</td>
        </tr>
        <tr>
           <th>勤務地</th>
           <td>本社、首都圏（東京、千葉、神奈川、埼玉）等</td>
        </tr>
        <tr>
           <th>勤務時間</th>
           <td>9:00～17:30（フレックス制度有）</td>
        </tr>
        <tr>
           <th>休日休暇</th>
           <td>完全週休2日制（土・日）、祝日、年末年始（30日～3日）<br>その他（有休、慶弔休暇、育児休暇、産前産後休暇）</td>
        </tr>
        <tr>
           <th>各種保険</th>
           <td>雇用保険、労災保険、健康保険、厚生年金保険</td>
        </tr>
        <tr>
           <th>福利厚生</th>
           <td>退職金制度</td>
        </tr>
        <tr>
           <th>募集人数</th>
           <td>５名程度</td>
        </tr>
        <tr>
           <th>会社説明会</th>
           <td>随時　電話：03-3661-7121(室屋、片山まで)</td>
        </tr>
        <tr>
           <th>試験日</th>
           <td>随時</td>
        </tr>
        <tr>
           <th>応募方法</th>
           <td>電話連絡後以下の書類を郵送してください。</td>
        </tr>
        <tr>
           <th>提出書類</th>
           <td>履歴書(市販可)、成績証明書又は卒業見込証明書</td>
        </tr>
        <tr>
           <th>選考方法</th>
           <td>書類審査、適正試験、面接</td>
        </tr>
        <tr>
           <th>選考場所</th>
           <td>本社(中央区日本橋)</td>
        </tr>
      </table>


      <div class="css-kms2-note">
        <p>※個人情報について<br>応募に際し、お預かりした皆さまの個人情報は、採用目的以外に使用することはありません。</p>
      </div>

      <div class="css-kms2-width-center">
        <a href="#p-recruit-new"             data-role="button" data-iconpos="left"  data-icon="arrow-l" data-inline="true" data-direction="reverse">新卒採用</a>
        <a href="#p-recruit-new-explanation" data-role="button" data-iconpos="right" data-icon="arrow-r" data-inline="true"                         >会社説明</a>
      </div>

    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-recruit-new-explanation">
    <?php setHeader( "会社説明" ); ?>
    <div data-role="content">
      <ul data-role="listview">

        <li data-role="list-divider">私たちはこんな事業をしています。</li>
        <li>基本的にはお客様先へ出向き、開発技術支援やコンサルティングをおこなっております。開発に関しては、業務アプリケーション開発や、WEBシステム開発、各種制御システム開発と様々です。お客様の要望に沿ったコンピュータのソフトウェア開発に従事しております。</li>

        <li data-role="list-divider">皆さんにはこんな仕事をしていただきます。</li>
        <li>入社して２～６ヶ月間での基本研修にてIT技術の基本を学んでいただきます。その後は、プログラマやテスターとして現場での業務を学んでいただきます。いずれはSE（システムエンジニア）やPM（プロジェクトマネージャー）などになって現場で活躍できる人材になっていただきます。</li>

        <li data-role="list-divider">社内の雰囲気はこんな感じ。</li>
        <li>普段協力して仕事をする機会が少ないので、会社で会うと現場で学んだいろいろな情報を交換し合ってお互いの技術力を高め合っています。人材紹介業で問題視される「社内の雰囲気」、「人間関係」に関しては、月に一度の月例会の日に全員で昼食をとったり、飲み会を催したりと、社員数が少ないからこそ出来ることをおこなっております。</li>

        <li data-role="list-divider">私たちはこんな人材を募集しています。</li>
        <li>第一に重要なのは、「自ら進んで学ぼうとする姿勢のある人」です。これがなくては、技術者としては高みを望めません。</li>

      </ul>

      <p />
      <div class="css-kms2-width-center">
        <a href="#p-recruit-new-applicant" data-role="button" data-iconpos="left"  data-icon="arrow-l" data-inline="true" data-direction="reverse">募集要項</a>
        <a href="#p-recruit-new-faq"       data-role="button" data-iconpos="right" data-icon="arrow-r" data-inline="true"                         >ＦＡＱ</a>
      </div>

    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-recruit-new-faq">
    <?php setHeader( "FAQ" ); ?>
    <div data-role="content">

      <ul data-role="listview">

        <li data-role="list-divider">Ｑ.私は文系なのですが、私でも活躍できる仕事でしょうか？</li>
        <li>Ａ.情報システムは理系だけの知識で出来るわけではありません。会計の知識、デザイン、使い勝手とシステムを作るときには色々な知識・観点が必要です。その上で良いシステムとなります。必要なコンピュータの知識は教育・研修の過程で覚えて頂ければ大丈夫です。</li>

        <li data-role="list-divider">Ｑ.浪人や留年はハンデになってしまいますか？</li>
        <li>Ａ.浪人や留年は今までの過去の結果です。これから自分はなにをどのようにするのかが大切です。しかし、なぜ浪人、留年したのか、自分で原因をはっきりさせて同様の停滞を再発させないような気構えが必要です。</li>

        <li data-role="list-divider">Ｑ.プログラマは残業時間が多いと聞いたのですが実際はどうですか？</li>
        <li>Ａ.残業は業務により或いは時期等により異なります。しかし、弊社の技術者は無駄な残業はしていません。効率的な仕事で成果を出すことが必要で、単に時間を経過させる技術者はいません。</li>

        <li data-role="list-divider">Ｑ.必要な資格ってありますか？</li>
        <li>Ａ.世の中には色々な資格があります。ＩＴ関連の資格を持っていればアピールは出来ます。しかし、資格を持っているから仕事が出来るということではありません。当社の技術者も色々な資格にチャレンジしています。チャレンジ元年ですが、これが必ず必要という限定された資格はありません。</li>

        <li data-role="list-divider">Ｑ.夏などスーツでは暑いときでも服装はやはりスーツですか？</li>
        <li>Ａ.当社の本社で業務に従事しているものは、服装は自由です。社会常識を踏まえた服装出勤務して頂ます。又、お客様先では当然お客様先の規定に従って頂きます。</li>

      </ul>

      <p />
      <div class="css-kms2-width-center">
        <a href="#p-recruit-new-explanation" data-role="button" data-iconpos="left"  data-icon="arrow-l" data-inline="true" data-direction="reverse">会社説明</a>
        <a href="#p-contact"                 data-role="button" data-iconpos="right" data-icon="arrow-r" data-inline="true"                         >問い合せ</a>
      </div>

    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-recruit-career">
    <?php setHeader( "中途採用" ); ?>
    <div data-role="content">
      <ul data-role="listview">

        <li data-role="list-divider">(1)経験者の方</li>
        <li>
          <p />
          <p>転職は今や当たり前の時代、でも自分に合った作業環境、仕事内容でなければ貴方の技術力は伸びません、貴方の経験を生かす事が出来る我社にまずは応募してみてください。</p>
        </li>

        <li data-role="list-divider">(2)未経験者の方</li>
        <li>
          <p />
          <p>まったくの未経験でも我社の適性試験を受けてみてください、合格ラインに達すれば間違いなくソフト業界に適応性有りと判断出来ます。</p>
          <p>入社後は新卒採用とほぼ同じ内容（”ほうれんそう”＋ソフト技術スキル）を2～6ヶ月かけて教育します、無事終了すれば間違いなく貴方に自信がつきます。ただし貴方に当初から強いやる気が無い場合は応募はしないでください。</p>
        </li>

      </ul>

      <p />
      <div class="css-kms2-width-center">
        <a href="" data-role="button" data-iconpos="left"  data-icon="back" data-inline="true" data-direction="reverse" data-rel="back">戻る</a>
        <a href="#p-recruit-career-applicant" data-role="button" data-iconpos="right" data-icon="arrow-r" data-inline="true">募集内容はこちら</a>
      </div>

    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-recruit-career-applicant">
    <?php setHeader( "募集要項" ); ?>
    <div data-role="content">

      <table class="css-kms2-table">

        <tr>
          <th>募集職種</th>
          <td>システムエンジニア、プログラマ</td>
        </tr>
        <tr>
          <th>勤務地</th>
          <td>本社（東京都中央区）、首都圏（東京、千葉、神奈川、埼玉）等</td>
        </tr>
        <tr>
          <th>待遇</th>
          <td>前職を考慮の上、優遇します</td>
        </tr>
        <tr>
          <th>勤務時間</th>
          <td>9:00～17:30（フレックス制度有）</td>
        </tr>
        <tr>
          <th>休日休暇</th>
          <td>完週休2日制（土・日）、祝日、年末年始（30日～3日）<br>その他（有休休暇、慶弔休暇、育児休暇、産前産後休暇）</td>
        </tr>
        <tr>
          <th>各種保険</th>
          <td>雇用保険、労災保険、健康保険、厚生年金保険</td>
        </tr>
        <tr>
          <th>福利厚生</th>
          <td>退職金制度</td>
        </tr>
        <tr>
          <th>会社説明会</th>
          <td>随時　電話：03-3661-7121(室屋、片山まで)</td>
        </tr>
        <tr>
          <th>応募方法</th>
          <td>電話連絡後以下の書類を郵送してください。</td>
        </tr>
        <tr>
          <th>提出書類</th>
          <td>履歴書、経歴書</td>
        </tr>

      </table>

      <div class="css-kms2-note">
        <p>※個人情報について<br>応募に際し、お預かりした皆さまの個人情報は、採用目的以外に使用することはありません。</p>
      </div>

      <div class="css-kms2-width-center">
        <a href="" data-role="button" data-iconpos="left"  data-icon="back" data-inline="true" data-direction="reverse" data-rel="back">戻る</a>
        <a href="#p-contact" data-role="button" data-iconpos="right" data-icon="arrow-r" data-inline="true"                            >問い合せ</a>
      </div>

    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-recruit-contract-worker">
    <?php setHeader( "契約社員" ); ?>
    <div data-role="content">
      <ul data-role="listview">

        <li data-role="list-divider">契約社員を募集しております。</li>
        <li>
          <h3>皆様からのエントリーをお待ちしております。</h3>
          <p>業務ノウハウ或いは各分野に特化した技術をお持ちの方々、どのような業務・技術の分野をご希望かをお問合せ下さい。</p>
          <p>弊社のお客様も様々な分野で技術者を探しておられます。弊社の技術者だけでは、お客様のご期待に沿えない状況です。場所、勤務条件等をご提示頂き、弊社お客様方と業務をいくつか挙げてご提案させて頂ければ、ご希望にあった業務の選択が出来ると思います。又、新たな分野の知識、技術等幅を広げたい方もご相談下さい。私共の中心業務から逸れた業務に於いてもお客様のご要望がありますので、汎用機等の業務、運用管理、ネットワーク管理の希望でも対応は可能です。</p>
        </li>

      </ul>

      <p />
      <div class="css-kms2-width-center">
        <a href="" data-role="button" data-iconpos="left"  data-icon="back" data-inline="true" data-direction="reverse" data-rel="back">戻る</a>
        <a href="#p-contact" data-role="button" data-iconpos="right" data-icon="arrow-r" data-inline="true"                            >問い合せ</a>
      </div>

    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-contact">
    <?php setHeader( "お問い合わせ" ); ?>
    <div data-role="content">

      <ul data-role="listview">

        <li data-role="list-divider">お電話によるお問い合わせ</li>
          <li>
            <h3>03-3661-7121（担当：室屋、片山）</h3>
            <p>話中の場合は時間を置いておかけ直しいただくか、下記メールアドレスをお使いいただきお問い合わせくださいますよう、お願いいたします。</p>
          </li>

        <li data-role="list-divider">メールによるお問い合わせ</li>
          <li>
            <h3>業務に関するお問い合わせは mail_info(at)kms2.co.jp</h3>
            <h3>採用に関するお問い合わせは recruit(at)kms2.co.jp</h3>
            <p>上記宛にメールをお送りいただくことで、当社よりメールにてご回答いたします。</p>
            <p>※メールアドレスの(at)を @ に変えて送信してください。</p>
            <div class="css-kms2-indent-list">
              <p>・土・日曜日、祝日など当社休業日は、翌営業日以降のご回答となります。</p>
              <p>・内容によりましては回答にお時間をいただく場合があります。</p>
              <p>・当社からご回答させていただく内容は、お客様個人宛にお送りするものです。</p>
              <p> 内容の一部、または全てを転用する事はご遠慮ください。</p>
            </div>
            <p>お客様の個人情報は、お問い合わせへの回答および対応上必要な手続きにのみ使用させていただきます。これらの個人情報は適切な安全対策の下に管理し、事前にお客様の同意なく第三者への開示・提供はいたしません。</p>
            <p>その他、お客様の個人情報の取扱いについては、<a href="#p-privacy-policy">プライバシーポリシー</a>をご参照ください。</p>
          </li>
      </ul>

      <p />
      <div class="css-kms2-width-center">
        <a href="" data-role="button" data-iconpos="left"  data-icon="back" data-inline="true" data-direction="reverse" data-rel="back">戻る</a>
      </div>

    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-privacy-policy">
    <?php setHeader( "プライバシーポリシー" ); ?>
    <div data-role="content">
      <ul data-role="listview">

        <li data-role="list-divider">1.個人情報の定義</li>
          <li>
            <p />
            <p>ケーエムエス２は、個人情報とは、個人情報の保護に関する法律に規定される生存する個人に関する情報（氏名、生年月日、その他の特定の個人を識別することができる情報）、ならびに特定の個人と結びついて使用されるメールアドレス、ユーザーＩＤ、パスワード、クレジットカードなどの情報、および個人情報と一体となった趣味、家族構成、年齢その他の個人に関する属性情報であると認識しています。</p>
          </li>

        <li data-role="list-divider">2.クッキー・IPアドレス情報</li>
          <li>
            <p />
            <p>クッキー及びＩＰアドレス情報については、それら単独では特定の個人を識別することができないため、個人情報とは考えておりません。ただしこれら情報と個人情報が一体となって使用される場合にはこれら情報も個人情報とみなします。ケーエムエス２の運営するメディアにおいては、たとえ特定の個人を識別することができなくとも、クッキー及びＩＰアドレス情報を利用する場合には、その目的と方法を開示します。また、クッキー情報については、ブラウザの設定で拒否することが可能です。クッキーを拒否するとサービスが受けられない場合は、その旨も公表します。</p>
          </li>

        <li data-role="list-divider">3.個人情報利用目的の特定</li>
          <li>
            <p />
            <p>ケーエムエス２は、個人情報を取り扱うにあたって、その利用の目的を出来る限り特定します。</p>
          </li>

        <li data-role="list-divider">4.個人情報利用の制限</li>
          <li>
            <p />
            <p>ケーエムエス２は、あらかじめご本人の同意を得ず、利用目的の達成に必要な範囲を超えて個人情報を取扱うことはありません。合併その他の理由により個人情報を取得した場合にも、あらかじめご本人の同意を得ないで、承継前の利用目的の範囲を超えて取扱うことはありません。ただし、次の場合はこの限りではありません。</p>
            <div class="css-kms2-indent-list">
              <p>・法令に基づく場合</p>
              <p>・人の生命、身体または財産の保護のために必要がある場合であって、ご本人の同意を得ることが困難であるとき</p>
              <p>・公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって、ご本人の同意を得ることが困難であるとき</p>
              <p>・国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、ご本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき</p>
            </div>
          </li>

        <li data-role="list-divider">5.個人情報の適正な取得</li>
          <li>
            <p />
            <p>ケーエムエス２は、適正に個人情報を取得し、偽りその他不正の手段により取得することはありません。また、15歳未満の子供から親権者の同意なく個人に関する情報をみだりに収集しないよう留意します。</p>
          </li>

        <li class="css-kms2-width-right">
          <p />
          <p>以上</p>
          <p />
          <p>株式会社ケーエムエス２</p>
          <p>代表取締役　室屋　俊裕</p>
          <p>代表取締役　片山　啓　</p>
        </li>

      </ul>

      <p />
      <div class="css-kms2-width-center">
        <a href="" data-role="button" data-iconpos="left"  data-icon="back" data-inline="true" data-direction="reverse" data-rel="back">戻る</a>
      </div>

    </div>
    <?php setFooter(); ?>
  </div>



  <div data-role="page" id="p-xxxxxxxx">
    <?php setHeader( "ＸＸＸＸＸＸＸＸ" ); ?>
    <div data-role="content">
      <p>XXXXXXXX</p>
      <p>XXXXXXXX</p>
      <p>XXXXXXXX</p>
    </div>
    <?php setFooter(); ?>
  </div>



</body>
</html>
