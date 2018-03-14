<?php
/**
 * Template Name: ENTRY DONE
 */
require_once( __DIR__ . '/lib/init.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<!--▽ヘッド▽-->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<meta name="description" content="IHSのWinActorお問い合わせフォームです。WinActorの導入をご検討中の方はこちらからお問い合わせください" />
<meta name="keywords" content="お問い合わせ" />
<!--自動的にキャッシュを削除-->
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<!--自動的にキャッシュを削除-->



<!--title-->
<title>WinActorお問い合わせ</title>

<!--favicon-->
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/image/common/favicons.png" />

<!--共通css-->
<link rel="stylesheet" type="text/css" href="/css/reset.css" />
<link rel="stylesheet" type="text/css" href="/css/common.css" />
<link rel="stylesheet" type="text/css" href="/css/bgImg.css" />
<link rel="stylesheet" media="screen and (max-width: 768px)" type="text/css" href="/css/common_smt.css" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:700" />
<link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notosansjapanese.css" />

<!--共通js-->
<script type="text/javascript" src="/js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="/js/common.js"></script>

<!--GoogleMap-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo1s_2S0zu6s3kTAwP7ls8a_XfWec0cFA"></script>
<script type="text/javascript" src="/js/jmapstyle.js"></script>

<!-- 以下は、TOPページ専用 -->


<!--[if lt IE 9]>
<script type="text/javascript" src="/js/html5.min.js"></script>
<![endif]-->

<!--- contact/done.php/inline-style.css --->
<style>
  #main div p {
    letter-spacing: .5px;
    line-height: 1.8;
  }
</style>
<!--△ヘッド△-->
</head>
<body>
        <!--▽ヘッダー▽-->
        <!--▽ヘッダー▽-->
<header class="siteHeader">
	<p class="slogan">ITインフラを支えるスペシャリスト IIMヒューマン・ソリューション</p>
	<div class="headerMainNav clearfix">
		<h1 class="siteLogo"><a href="/"><img src="/image/common/logo.png" alt="IIMヒューマン・ソリューション" width="113" height="27" /></a></h1>
		<nav id="gNav">
			<p id="Menu"><img src="/image/common/menu_smt.png" alt="メニュー" width="25" height="22" /></p>
			<div class="navWrap">
				<p id="close"><img src="/image/common/icon_close.png" alt="閉じる" width="20" height="19" /></p>
				<ul>
					<li>
						<a href="/services/">サービス・製品</a>
						<ul class="inNav services">
							<!--<li>
							<a href="/services/remote/">リモート運用</a>
							</li>
							-->
							<li>
							<a href="/services/operation/">インフラ運用</a>
							<ul>
								<li><span><a href="/services/operation/support/">運用支援サービス</a></span></li>
							</ul>
							</li>
							<li>
							<a href="/services/construction/">インフラ構築</a>
							<ul>
								<li><span><a href="/services/construction/win10-sccm/">Windows10によるトータルソリューションサービス</a></span></li>
								<li><span><a href="/services/construction/azure-migration/">Azure構築・移行サービス</a></span></li>
								<li><span><a href="/services/construction/DRaaS-with-Azure/">DRaaS with Azure</a></span></li>
							</ul>
							</li>
							<li>
							<a href="/services/webSystemOpt/">Webシステム最適化</a>
							<ul>
								<!--<li><span><a href="/services/webSystemOpt/azureMigration/">Azure移行サービス</a></span></li>-->
								<li><span><a href="/services/webSystemOpt/vulnerabilityScan/">脆弱性診断サービス</a>	</span></li>
							</ul>
							</li>
							<li>
							<a href="/services/security/">セキュリティ</a>
							<ul>
								<li><span><a href="/services/security/assetManagement/">IT資産管理サービス</a></span></li>
								<li><span><a href="/services/security/#productList">セキュリティ取扱製品一覧</a></span></li>
							</ul>
							</li>
							<li>
							<a href="/services/other/">その他のソリューション</a>
							<ul>
								<li><span><a href="/services/other/remote">リモート型<br>サポートサービス</a></span></li>
								<li><span><a href="/services/other/cloud">クラウド型<br>バックアップサービス</a></span></li>
								<li><span><a href="/services/other/winactor">WinActor</a></span></li>
							</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="/cases/">導入事例</a>
						<ul class="inNav">
						<!--リモート運用
							<li><a href="/cases/remote/">リモート運用</a></li>
						-->
							<li><a href="/cases/operation/">インフラ運用</a></li>
							<li><a href="/cases/construction/">インフラ構築</a></li>
							<!--<li><a href="#">Webシステム最適化</a></li>--><!-- ※導入事例の「Webシステム最適化」は一旦非表示 -->
							<li><a href="/cases/security/">セキュリティ</a></li>
						</ul>
					</li>
					<li>
						<a href="/topics/">トピックス</a>
						<ul class="inNav">

								<li><a href="/topics/services/">サービス・製品</a></li>


								<li><a href="/topics/cases/">事例紹介</a></li>


								<li><a href="/topics/reports/">技術レポート</a></li>


						</ul>
					</li>
					<li>
						<a href="/company/">会社情報</a>
						<ul class="inNav">
							<li><a href="/company/message/">社長メッセージ</a></li>
							<li><a href="/company/profile/">会社概要・組織図</a></li>
							<li><a href="/company/vision/">経営理念</a></li>
							<li><a href="/company/history/">沿革・主要取引先</a></li>
							<li><a href="/company/access/">アクセスマップ</a></li>
						</ul>
					</li>
					<li class="act">
						<a href="/contact/">お問い合わせ</a>
						<ul class="inNav">
                          <li><a href="https://www.iimhs.co.jp/contact/contact.html">総合お問い合わせ</a></li>
                          <li><a href="https://www.iimhs.co.jp/recruit/contact/contact.html">採用に関するお問い合わせ</a></li>
                          <li><a href="https://www.iimhs.co.jp/contact/mailmagazine.html">メールマガジン登録</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav><!--/#gNav-->

		<div id="scWrap">
			<ul>
				<li>J<span>A</span>P<span>ANESE</span></li>
				<li><a href="/english/">EN<span>GLISH</span></a></li>
			</ul>

			<div class="siteSearch siteSearch--header">
				<p id="scBtn">検索</p>
				<form class="siteSearchForm" name="seek" method="get" action="/search/">
					<input class="siteSearchBox" name="q" data-bind="value: searchQuery" type="text">
					<input class="siteSearchBtn" value="" type="submit">
				</form>
			</div>
		</div><!--/#scWrap-->
	</div><!--/.headerMainNav-->

	<ul id="infoLink">
		<li class="adop"><a href="/recruit/">採用情報</a></li>
      <li class="mail"><a href="https://www.iimhs.co.jp/contact/mailmagazine.html">メルマガ登録</a></li>
	</ul><!--/#infoLink-->
</header>
<!--△ヘッダー△-->

        <!--△ヘッダー△-->

         <!--▽コンテンツ▽-->
        <article>
            <section>
                <!--▼キービジュアル▼-->
                                <!--▼キービジュアル▼-->
                <div id="Contact" class="ttl">
                    <p>お問い合わせ<span>Contact</span></p>
                </div>
                <!--▲キービジュアル▲-->
                <!--▲キービジュアル▲-->
                <!--▼パンくずリスト▼-->



  <ul id="tpcpth" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <li>
      <a href="/" itemprop="url"><span itemprop="title">ホーム</span></a>
    </li>







    <!-- パンくずリストアイテムの繰り返し -->



      <!-- トップページの場合処理を終了 -->



      <!-- トップページの場合処理を終了 -->


      <!-- SEO -->


      <li property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" href="/contact/">
        <span property="name">サービス・製品</span>
        </a>
        <meta property="position" content="1" />
      </li>



      <!-- トップページの場合処理を終了 -->


      <!-- SEO -->
    <li property="itemListElement" typeof="ListItem">
      <a property="item" typeof="WebPage" href="/services/other/">
        <span property="name">その他のソリューション</span>
      </a>
      <meta property="position" content="2" />
    </li>
    <li property="itemListElement" typeof="ListItem">
      <a property="item" typeof="WebPage" href="/services/other/winactor/">
        <span property="name">業務向けRPAツールWinActor</span>
      </a>
      <meta property="position" content="3" />
    </li>
    <li property="itemListElement" typeof="ListItem">
      <span property="name">WinActorお問い合わせ</span>
      <meta property="position" content="4" />
    </li>
  </ul>



                <!--▲パンくずリスト▲-->

                <div class="wrap">
                    <div id="main">

                    <section>
	<div class="">





                <h1>送信完了しました</h1>
                <p>お問い合わせ頂き、誠にありがとうございました。<br>
                担当者より折り返しご連絡をいたしますので、今しばらくお待ちください。</p>





	</div>
</section>


                    </div><!--/.main-->

                    <div id="sideMenu">
                    <nav>
    <dl>
        <dt class="act"><a href="/contact/">お問い合わせ</a></dt>
        <dd>
            <ul>
              <li><a href="https://www.iimhs.co.jp/contact/contact.html">総合お問い合わせ</a></li>
              <li><a href="https://www.iimhs.co.jp/recruit/contact/contact.html">採用に関するお問い合わせ</a></li>
              <li><a href="https://www.iimhs.co.jp/contact/mailmagazine.html">メールマガジン登録</a></li>
            </ul>
        </dd>
    </dl>
</nav>


    <aside id="bnr">
        <ul>

<li class="case"><a href="/cases/">導入事例</a></li>


            <!--
<li class="report"><a href="/topics/reports/">技術レポート</a></li>
-->


            <li class="contact">

<p>製品・サービスのお問い合わせ<br />はお電話<span>でも承ります。</span></p>
<p class="tel"><a href="tel:0356846840">03-5684-6840</a><span>9:00～17:45（土日、祝日を除く）</span></p>
<aside>弊社営業部が対応させていただきます</aside>
</li>

        </ul>
    </aside>

                    </div><!--/#sideMenu-->

                </div><!--/.wrap-->
            </section>
        </article>
        <!--△コンテンツ△-->

        <!--▽フッター▽-->
        		<footer>
			<div id="pageTop">
				<p>PAGE TOP</p>
			</div>

			<div class="footTop">
				<p><a href="/">ホーム</a></p>
				<div class="tbWrap">
					<dl>
						<dt><a href="/services/">サービス・製品</a></dt>
						<dd>
							<ul>
								<!--<li><a href="/services/remote/">リモート運用</a></li>
								-->
								<li><a href="/services/operation/">インフラ運用</a></li>
								<li><a href="/services/construction/">インフラ構築</a></li>
								<li><a href="/services/webSystemOpt/">Webシステム最適化</a></li>
								<li><a href="/services/security/">セキュリティ</a></li>
								<li><a href="/services/other/">その他のソリューション</a></li>
							</ul>
						</dd>
					</dl>

					<dl>
						<dt><a href="/cases/">導入事例</a></dt>
						<dd>
							<ul>
							<!--リモート運用
								<li><a href="/cases/remote/">リモート運用</a></li>
							-->
								<li><a href="/cases/operation/">インフラ運用</a></li>
								<li><a href="/cases/construction/">インフラ構築</a></li>
								<!--<li><a href="#">Webシステム最適化</a></li>--><!-- ※導入事例の「Webシステム最適化」は一旦非表示 -->
								<li><a href="/cases/security/">セキュリティ</a></li>
							</ul>
						</dd>
					</dl>

					<dl>
						<dt><a href="/company/">会社情報</a></dt>
						<dd>
							<ul>
								<li><a href="/company/message/">社長メッセージ</a></li>
								<li><a href="/company/profile/">会社概要・組織図</a></li>
								<li><a href="/company/vision/">経営理念</a></li>
								<li><a href="/company/history/">沿革・主要取引先</a></li>
								<li><a href="/company/access/">アクセスマップ</a></li>
							</ul>
						</dd>
					</dl>

					<dl>
						<dt><a href="/topics/">トピックス</a></dt>
						<dd>
							<ul>
									<li><a href="/topics/services/">サービス・製品</a></li>
									<li><a href="/topics/cases/">事例紹介</a></li>
									<li><a href="/topics/reports/">技術レポート</a></li>
							</ul>
						</dd>
						<p><a href="/contact/">お問い合わせ</a></p>
					</dl>

					<dl>
						<dt><a href="/recruit/">採用情報</a></dt>
						<dd>
							<ul>
								<li><a href="/recruit/info/session.html">会社説明会（中途・新卒）</a></li>
								<li><a href="/recruit/info/guideline.html">募集要項（中途・新卒）</a></li>
							</ul>
						</dd>
					</dl>
				</div><!--/.tbWrap-->
			</div><!--/.footTop-->

			<div class="footBot">
				<ul>
					<li><a href="/privacy/policy.html">個人情報保護方針</a></li>
					<li><a href="/privacy/sitePolicy.html">サイトポリシー</a></li>
					<li><a href="/siteMap.html">サイトマップ</a></li>
					<!--<li class="outLink"><a href="http://www.iim.co.jp/" target="_blank">株式会社 アイ・アイ・エム</a></li>-->
				</ul>

				<!-- GlobalSign SSL Seal. Do not edit.  -->
								<!--
				<div id="sign">
					<span id="ss_gmo_img_wrapper_115-57_image_ja">
						<a href="https://jp.globalsign.com/" target="_blank" rel="nofollow">
							<img alt="SSL　GMOグローバルサインのサイトシール" border="0" id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_115-57_ja.gif">
						</a>
					</span>
					<script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gmogs_image_115-57_ja.js" defer="defer"></script>
					<span class="pm"><a href="http://privacymark.jp/" target="_blank"><img src="/image/common/privacy_mark.gif" width="55" height="55" /></a></span>
				</div>
								-->
				<!-- END of GlobalSign SSL Seal. -->

				<p class="cp"><small>©2017 IIM Human Solution Corp.</small></p>
			</div><!--/.footBot-->
		</footer>

        <!--△フッター△-->

<?php if(DEBUG==FALSE): ?>
<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4316056-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '762868397257361');
  fbq('track', 'PageView');
  fbq('track', 'CompleteRegistration');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=762868397257361&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?php endif;?>

</body>

</html>
