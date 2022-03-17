<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- bootstrap-grid.css -->
    <link href="assets/css/bootstrap-grid.min.css" rel="stylesheet">

    <!-- fontawesome.css -->
    <link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">
    <!-- googlefonts.css -->
    <!-- googlefonts.css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <!-- drawer.css -->
    <link rel="stylesheet" href="assets/css/drawer.min.css">
    <!-- swiper.css -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">

    <!-- jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- iScroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="">

</head>

<body class="drawer drawer--right">
    <header class="header">
        <div class="inner">
            <a href="" class="logo"><img src="assets/img/logo.svg" alt=""></a>
            <nav class="g-navi primary sp-pc pc">
                <ul class="links">
                    <li class="link">
                        <a href="">はじめての方</a>
                    </li>
                    <li class="link">
                        <a href="">旅を探す</a>
                    </li>
                    <li class="link">
                        <a href="">事業者を探す</a>
                    </li>
                    <li class="link">
                        <a href="">地図から探す</a>
                    </li>
                    <li class="link">
                        <a href="">現地通信</a>
                    </li>
                </ul>
            </nav>
            <nav class="g-navi secondary sp-pc pc">
                <ul class="links">
                    <li class="link login">
                        <a href="">ログイン</a>
                    </li>
                    <li class="link signin">
                        <a href="">新規登録</a>
                    </li>
                    <!-- <?php if($_GET['login']) { ?>
                    <li class="nav mypage">
                      <a href=""></a>
                    </li>
                    <?php } else { ?>
                    <li class="nav login">
                      <a href=""></a>
                    </li>
                    <?php } ?> -->
                </ul>
            </nav>
            <div class="search-toggle js-header-search-toggle">
                <img class="search" src="/assets/img/search-header.svg" alt="">
            </div>
            <button type="button" class="menu drawer-toggle drawer-hamburger">
              <!-- ハンバーガーボタン -->
              <img class="open" src="/assets/img/humburger-header-open.svg" alt="">
              <img class="close" src="/assets/img/humburger-header-close.svg" alt="">
            </button>
        </div>
    </header>

    <nav class="drawer-search js-drawer-search">
        <div class="search-menu">
            <div class="form">
                <div class="head">フリーワード検索</div>
                <form action="">
                    <div class="submit-wrap">
                        <input type="text" class="text" placeholder="行き先・ご希望の体験を入力">
                        <button class="submit" type="submit">検索</button>
                    </div>
                </form>
            </div>
            <ul class="row search-navi">
                <li class="col col-4"><a href=""><span>エリアから<br>さがす</span></a></li>
                <li class="col col-4"><a href=""><span>テーマから<br>さがす</span></a></li>
                <li class="col col-4"><a href=""><span>ハッシュタグから<br>さがす</span></a></li>
            </ul>
            <div class="area">
                <div class="head">エリアから探す</div>
                <div class="map-wrap">
                    <div class="map">
                        <img src="assets/img/map.svg" alt="">
                    </div>
                </div>

                <div class="swiper-container-search-navi-tab-wrapper">
                    <div class="swiper-container swiper-container-search-navi-tab">
                        <div class="swiper-wrapper tabs">
                            <a class="swiper-slide tab" href="javascript:void(0);">日本</a>
                            <a class="swiper-slide tab" href="javascript:void(0);">ハワイ</a>
                            <a class="swiper-slide tab" href="javascript:void(0);">北米</a>
                            <a class="swiper-slide tab" href="javascript:void(0);">中南米</a>
                            <a class="swiper-slide tab" href="javascript:void(0);">アジア</a>
                            <a class="swiper-slide tab" href="javascript:void(0);">大洋州</a>
                            <a class="swiper-slide tab" href="javascript:void(0);">ヨーロッパ</a>
                            <a class="swiper-slide tab" href="javascript:void(0);">中東</a>
                            <a class="swiper-slide tab" href="javascript:void(0);">アフリカ</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-container-search-navi-tab-contents-wrapper">
                    <div class="swiper-container swiper-container-search-navi-tab-contents">
                        <div class="swiper-wrapper tab-contents">
                            <li class="swiper-slide tab-content row">
                                <div class="col col-6">日本</div>
                                <div class="col col-6">日本</div>
                                <div class="col col-6">日本</div>
                                <div class="col col-6">日本</div>
                            </li>
                            <li class="swiper-slide tab-content row">
                                <div class="col col-6">ハワイ</div>
                                <div class="col col-6">ハワイ</div>
                                <div class="col col-6">ハワイ</div>
                                <div class="col col-6">ハワイ</div>
                            </li>
                            <li class="swiper-slide tab-content row">
                                <div class="col col-6">北米</div>
                                <div class="col col-6">北米</div>
                                <div class="col col-6">北米</div>
                                <div class="col col-6">北米</div>
                            </li>
                            <li class="swiper-slide tab-content row">
                                <div class="col col-6">中南米</div>
                                <div class="col col-6">中南米</div>
                                <div class="col col-6">中南米</div>
                                <div class="col col-6">中南米</div>
                            </li>
                            <li class="swiper-slide tab-content row">
                                <div class="col col-6">アジア</div>
                                <div class="col col-6">アジア</div>
                                <div class="col col-6">アジア</div>
                                <div class="col col-6">アジア</div>
                            </li>
                            <li class="swiper-slide tab-content row">
                                <div class="col col-6">大洋州</div>
                                <div class="col col-6">大洋州</div>
                                <div class="col col-6">大洋州</div>
                                <div class="col col-6">大洋州</div>
                            </li>
                            <li class="swiper-slide tab-content row">
                                <div class="col col-6">ヨーロッパ</div>
                                <div class="col col-6">ヨーロッパ</div>
                                <div class="col col-6">ヨーロッパ</div>
                                <div class="col col-6">ヨーロッパ</div>
                            </li>
                            <li class="swiper-slide tab-content row">
                                <div class="col col-6">中東</div>
                                <div class="col col-6">中東</div>
                                <div class="col col-6">中東</div>
                                <div class="col col-6">中東</div>
                            </li>
                            <li class="swiper-slide tab-content row">
                                <div class="col col-6">アフリカ</div>
                                <div class="col col-6">アフリカ</div>
                                <div class="col col-6">アフリカ</div>
                                <div class="col col-6">アフリカ</div>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="theme">
                <div class="head">テーマから探す</div>
                <div class="acordion-head js-acordion-head shown">持続可能な社会を創る旅</div>
                <ul class="row acordion-content">
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                </ul>
                <div class="acordion-head js-acordion-head">観光・送迎</div>
                <ul class="row acordion-content">
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                </ul>
                <div class="acordion-head js-acordion-head">視察・見学</div>
                <ul class="row acordion-content">
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                </ul>
                <div class="acordion-head js-acordion-head">趣味・教養</div>
                <ul class="row acordion-content">
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                </ul>
                <div class="acordion-head js-acordion-head">教育・研修</div>
                <ul class="row acordion-content">
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                </ul>
                <div class="acordion-head js-acordion-head">観光・送迎</div>
                <ul class="row acordion-content">
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                </ul>
                <div class="acordion-head js-acordion-head">ホテル</div>
                <ul class="row acordion-content">
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                </ul>
                <div class="acordion-head js-acordion-head">レストラン・バー</div>
                <ul class="row acordion-content">
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                </ul>
                <div class="acordion-head js-acordion-head">交通・乗物</div>
                <ul class="row acordion-content">
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                </ul>
                <div class="acordion-head js-acordion-head">グローバルパートナー</div>
                <ul class="row acordion-content">
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                    <li class="col col-6"><a href="">貧困をなくそう（000）</a></li>
                </ul>
            </div>
            <div class="hashtag">
                <div class="head">ハッシュタグから探す</div>
                <div class="hashtag_wrapper">
                    <ul class="tags hidden" style="height: 90px;">
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                        <li><a href="">新着案件</a></li>
                    </ul>
                    <div class="toggle show_hashtag"><span class="open">ハッシュタグをもっと見る</span></div>
                </div>
            </div>
            <div class="button js-header-search-toggle">閉じる</div>
        </div>
    </nav>

    <nav class="drawer-nav" role="navigation">
        <div class="drawer-menu">
            <ul class="row links account">
                <li class="col col-6"><a class="button login" href="">ログイン</a></li>
                <li class="col col-6"><a class="button signin" href="">新規登録</a></li>
            </ul>
            <div class="mypage">
                <div class="name-wrap">
                    <div class="name">ユーザー名が入るユーザー名が入る</div>さん</div>
                <a href="" class="button">マイページ</a>
            </div>
            <div class="head">マイページメニュー</div>
            <ul class="links mypage-navi">
                <li><a class="link" href="">あなたの旅行情報</a></li>
                <li><a class="link" href="">お客様情報</a></li>
                <li><a class="link" href="">旅行者情報</a></li>
                <li><a class="link" href="">お支払い情報</a></li>
                <li><a class="link" href="">アカウント情報</a></li>
                <li><a class="link" href="">テンプレート</a></li>
                <li><a class="link" href="">お気に入り</a></li>
            </ul>
            <div class="logout"><a href="">ログアウト</a></div>
            <div class="head">メニュー</div>
            <ul class="links g-navi">
                <li><a class="link" href="">旅を探す</a></li>
                <li><a class="link" href="">事業者を探す</a></li>
                <li><a class="link" href="">地図から探す</a></li>
                <li><a class="link" href="">現地通信</a></li>
            </ul>
            <div class="sub-navi">
              <div class="col col-6">
                <div class="head">たびチョク</div>
                <ul class="links">
                  <li class=""><a class="link" href="">たびチョクとは</a></li>
                  <li class=""><a class="link" href="">会社概要</a></li>
                  <li class=""><a class="link" href="">はじめての方</a></li>
                  <li class=""><a class="link" href="">よくある質問</a></li>
                  <li class=""><a class="link" href="">お問い合わせ</a></li>
                </ul>
                <div class="head">たびチョク</div>
                <ul class="links">
                  <li class=""><a class="link" href="">日程・見積をきく</a></li>
                </ul>
              </div>
              <div class="col col-6">
                <div class="head">ガイドライン</div>
                <ul class="links">
                  <li class=""><a class="link" href="">利用規約</a></li>
                  <li class=""><a class="link" href="">旅行業約款・条件書</a></li>
                  <li class=""><a class="link" href="">プライバシーポリシー </a></li>
                  <li class=""><a class="link" href="">特定商取引に基づく表記</a></li>
                </ul>
                <div class="head">インフォメーション</div>
                <ul class="links">
                  <li class=""><a class="link" href="">たびチョクからのお知らせ</a></li>
                  <li class=""><a class="link" href="">海外旅行の知恵袋</a></li>
                  <li class=""><a class="link" href="">現地パートナー募集</a></li>
                  <li class=""><a class="link" href="">広告掲載に関して</a></li>
                  <li class=""><a class="link" href="">リクルート</a></li>
                </ul>
              </div>
            </div>
        </div>
    </nav>