<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico" />

  <!-- fontawesome.css -->
  <link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">
  <!-- googlefonts.css -->
  <!-- googlefonts.css -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="">
</head>

<body class="mypage-form-cancel">

  <header class="header-no-nav">
    <div class="logo"><a href=""><img src="assets/img/logo-large.svg" alt=""></a></div>
  </header>

  <div class="contents-wrap mypage mypage-suggestion">

    <main class="main">
      
      <div class="inner">

        <div class="suggestion-title">
          <p>ご旅行提案書</p>
        </div>

        <div class="suggestion-warning">
          <p>ご旅行提案書をご確認いただき、回答お願いいたします。</p>
        </div>

        <div class="suggestion-message">
          <p>この度はお問合せありがとうございます。</p>
          <p>ご旅行提案書ご案内いたします、内容をご確認ください。</p>
        </div>

        <div class="suggestion-block suggestion-info">
          <div class="created-date">
            <p><span>作成日</span>2022年00月00日</p>
          </div>

          <div class="suggestion-info-block-flex">
            <div class="suggestion-info-block-flex-item user">
              <p class="user-name">
                <span>木村</span><span>たくや</span>様
              </p>
              <p class="user-name-detail">
                <span>旅行代表者名：</span><span>木村</span><span>たくや</span>様
              </p>

              <p class="tour-number">
                <span>ツアー番号</span>220001-001
              </p>

              <p class="tour-title">Kimura Family Las Vegas Tour 2024/12/24、会員が任意で入れたツアー名が反映、長い場合は改行される</p>
              <p class="tour-area"><img src="assets/img/mypage-cancel-area-icon.svg" alt="">北米(エリア) / アメリカ(国) / ロサンゼルス(地域)</p>
            </div>

            <div class="suggestion-info-block-flex-item company">
              <div class="company-license">
                <p><span>旅行取扱業者<span></p>
                <p>東京都知事登録旅行業第3-8133号</p>
              </div>

              <p class="company-name">日本トラベルコーディネート株式会社</p>

              <div class="company-adoress">
                <p>東京都練馬区関町南4丁目1番地25号</p>
                <p>電話：03-4361-4505</p>
                <p>総合旅行業務取扱管理者：松村宏一</p>
              </div>

              <div class="company-local-partner">
                <p><span>現地パートナー</span></p>
                <p>Singapore Travel Service</p>
              </div>
              
            </div>
          </div>

          <div class="suggestion-info-block">
            <p class="plan-id">ID:000000000</p>
            <p class="plan-title">グローバルシチズンシップ体験（タイトルが入るタイトル）</p>
            <p class="plan-menu">メニュー：A セダン付き（メニューが入るメニュー）</p>

            <div class="plan-detail">

              <div class="plan-index">
                <div class="plan-index-flex datetime">
                  <div class="plan-index-flex-item">利用開始日</div>
                  <div class="plan-index-flex-item">2022年00月00日</div>
                  <div class="plan-index-flex-item">利用開始時刻</div>
                  <div class="plan-index-flex-item">00時00分</div>
                </div>

                <div class="plan-index-flex datetime">
                  <div class="plan-index-flex-item">利用終了日</div>
                  <div class="plan-index-flex-item">2022年00月00日</div>
                  <div class="plan-index-flex-item">利用終了時刻</div>
                  <div class="plan-index-flex-item">00時00分</div>
                </div>

                <div class="plan-index-flex">
                  <div class="plan-index-flex-item">出発場所</div>
                  <div class="plan-index-flex-item">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</div>
                </div>

                <div class="plan-index-flex">
                  <div class="plan-index-flex-item">終了場所</div>
                  <div class="plan-index-flex-item">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</div>
                </div>
              </div>


              <div class="plan-estimate">

               <div class="plan-estimate-block-flex">
                 <p>大人（12歳以上）</p>
                 <p><span>100</span>名</p>
               </div>

               <div class="plan-estimate-block-flex">
                 <p>小人（6-11歳）</p>
                 <p><span>00</span>名</p>
               </div>

               <div class="plan-estimate-block-flex">
                 <p>幼児（0-5歳）</p>
                 <p><span>100</span>名</p>
               </div>

               <div class="plan-estimate-block-flex total">
                 <p>合計</p>
                 <p><span>0000</span>名</p>
               </div>

              </div>

            </div>
            <!-- EOF plan-detail -->

          </div>
          <!-- EOF suggestion-info -->


          <div class="suggestion-block suggestion-service">
            <p class="suggestion-block-title">サービス</p>

            <div class="suggestion-block-content">
              <table>
                <tr>
                  <th class="order">項番</th>
                  <th class="date">年月日</th>
                  <th class="content">手配内容</th>
                  <th class="result">手配結果</th>
                </tr>
                <?php for($i=0;$i<5;$i++) { ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td>2022/00/00</td>
                  <td class="content">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</td>
                  <td>予約可能</td>
                </tr>
                <?php } ?>
              </table>
            </div>

          </div>
          <!-- EOF suggestion-service -->

          <div class="suggestion-block suggestion-estimate">
            <p class="suggestion-block-title">見積書</p>

            <div class="estimate-total">
              <p>お見積金額</p>
              <p><span>0,000,000</span>円</p>
            </div>

            <div class="estimate-document">
              <p class="estimate-document-title">見積明細書</p>
              <div class="estimate-document-dl-link">
                <p><span>見積明細書</span><a href=""><button class="btn btn-blue"><span>PDFをダウンロード</span><img src="assets/img/mypage-suggestion-dl-icon.svg" alt=""></button></a></p>
                <p><span>旅行条件書</span><a href=""><button class="btn btn-blue"><span>PDFをダウンロード</span><img src="assets/img/mypage-suggestion-dl-icon.svg" alt=""></button></a></p>
              </div>
            </div>

          </div>

          <div class="suggestion-block suggestion-memo">
            <p class="suggestion-block-title">通信欄</p>
            <div class="memo-content">
              <p>入力した内容が反映される。<br\>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。<br\>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
            </div>
          </div>

          <div class="suggestion-block suggestion-memo">
            <p class="suggestion-block-title">見積に含まれないもの</p>
            <div class="memo-content">
              <p>ガイド・ドライバーのチップ、食事中のドリンク代金、Wi-Fi通信量、リゾートフィー</p>
            </div>
          </div>

          <div class="suggestion-block suggestion-memo">
            <p class="suggestion-block-title">取消変更条件</p>
            <div class="memo-content">
              <ul>
                <li>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</li>
                <li>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</li>
                <li>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</li>
                <li>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</li>
              </ul>
            </div>
          </div>

          <div class="suggestion-block suggestion-blue-line">
            <?php if( $_GET['mode'] == 'expired') { ?>
              <p class="text">2022.00.00  有効期限が切れました</p>
              <div class="btns-flex">
                <button class="btn btn-gray-line">保留</button>
                <button class="btn btn-gray">手配申込</button>
              </div>
            <?php } else if( $_GET['mode'] == 'applied') { ?>
              <p class="text">2022.00.00  手配申し込みが完了しました</p>
              <div class="btns-flex">
                <button class="btn btn-gray-line">保留</button>
                <button class="btn btn-blue">手配申込</button>
              </div>
              <p class="link"><a href="">ご旅行の「取消」については申請が必要です。情報を入力して申請してください。</a></p>
            <?php } else { ?>
              <p class="text">ご提案内容に対して当てはまる回答を選択してください</p>
              <div class="btns-flex">
                <button class="btn btn-blue-line">保留</button>
                <button class="btn btn-blue">手配申込</button>
              </div>
            <?php } ?>

          </div>

        </div>

      </div>

    </main>

  </div>

  <?php include 'footer-mypage.php';?>