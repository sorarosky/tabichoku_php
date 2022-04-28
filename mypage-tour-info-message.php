<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap mypage mypage-tour-info">

  <div class="main-aside-wrap">

    <?php include 'components/aside-mypage.php';?>

    <main class="main dashboard">

      <div class="main-container">
        <div class="main-header">
          <h2 class="main-header-title">あなたの旅行情報</h2>
        </div>

        <div class="box-latest-tour">
          <div class="content">
            <div class="box-flex">
              <p class="box-flex-item"><span>受付日</span>0000/00/00</p>
              <p class="box-flex-item"><span>ツアー番号</span>220001-001</p>
            </div>
            <h3 class="content-title">旅コンテンツタイトルが入る。タイトルが入るタイトルが入る。タイトルが入るタイトルが入る。タイトルが入る</h3>
            <ul class="box-list">
              <li class="box-list-item">
                <p class="box-list-item-title">ツアー名</p>
                <p class="box-list-item-text">木村ロスツアー</p>
              </li>
              <li class="box-list-item">
                <p class="box-list-item-title">現地パートナー</p>
                <p class="box-list-item-text">エレファントツアー</p>
              </li>

              <li class="box-list-item box-list-item-status">
                <p class="box-list-item label label-red">手配申込完了</p>
                <p class="box-list-item-text"><a href="">ご旅行の取り消しについてはこちら</a></p>
              </li>
            </ul>
          </div>
        </div>
        

        <div class="tour-info-nav">
          <ul class="tour-info-nav-list">
            <li class="tour-info-nav-list-item current"><a href="">メッセージ</a></li>
            <li class="tour-info-nav-list-item"><a href="">申し込み内容</a></li>
            <li class="tour-info-nav-list-item"><a href="">渡航情報</a></li>
          </ul>
        </div>

        <div class="tour-info-status">
          <p class="tour-info-status-label label label-red">手配申込完了</p>
          <p class="tour-info-status-link"><a href="">ご旅行の取り消しについてはこちら</a></p>
        </div>

        <?php if( $_GET['is_apply'] ) { ?>
        <div class="block tour-application-status-block">
          <h3 class="block-title">申込状況</h3>

          <div class="application-list">

            <div class="application-list-header">
              <p class="header-item header-date">日本時刻</p>
              <p class="header-item header-title">件名</p>
              <p class="header-item header-status">申込状況</p>
            </div>

            <ul class="application-list-content">

              <!-- 入金待ち：赤線ラベル 日時：赤字 -->
              <li class="application-list-content-item">
                <p class="application-list-content-item-date pc">2020/00/00,00:00</p>
                <div class="application-list-content-item-title">
                  <p class="application-list-content-item-date sp">2020/00/00,00:00</p>
                  <p class="title"><a href="">請求書名が入る （例）予約確定内金請求書</a></p>
                </div>
                <div class="application-list-content-item-status">
                  <p class="label label-red-line">入金待ち</p>
                  <p class="text text-red">有効期限：2022.00.00</p>
                </div>
              </li>

              <!-- 入金済み：青ラベル　日時：黒字 -->
              <li class="application-list-content-item">
                <p class="application-list-content-item-date pc">2020/00/00,00:00</p>
                <div class="application-list-content-item-title">
                  <p class="application-list-content-item-date sp">2020/00/00,00:00</p>
                  <p class="title"><a href="">ご旅行提案書.ver2</a></p>
                </div>
                <div class="application-list-content-item-status">
                  <p class="label label-blue">入金済み</p>
                  <p class="text">有効期限：2022.00.00</p>
                </div>
              </li>

              <!-- 取消済み：灰ラベル　日時：灰字 -->
              <li class="application-list-content-item">
                <p class="application-list-content-item-date pc">2020/00/00,00:00</p>
                <div class="application-list-content-item-title">
                  <p class="application-list-content-item-date sp">2020/00/00,00:00</p>
                  <p class="title"><a href="">請求書名が入る （例）予約確定内金請求書</a></p>
                </div>
                <div class="application-list-content-item-status">
                  <p class="label label-gray">取消済み</p>
                  <p class="text text-gray">有効期限：2022.00.00</p>
                </div>
              </li>

              <!-- 要回答：灰ラベル　日時：灰字 -->
              <li class="application-list-content-item">
                <p class="application-list-content-item-date pc">2020/00/00,00:00</p>
                <div class="application-list-content-item-title">
                  <p class="application-list-content-item-date sp">2020/00/00,00:00</p>
                  <p class="title"><a href="">請求書名が入る （例）予約確定内金請求書</a></p>
                </div>
                <div class="application-list-content-item-status">
                  <p class="label label-gray">要回答</p>
                  <p class="text text-gray">期限切れ：2022.00.00</p>
                </div>
              </li>

              <!-- 保留：青線ラベル　日時：赤字 -->
              <li class="application-list-content-item">
                <p class="application-list-content-item-date pc">2020/00/00,00:00</p>
                <div class="application-list-content-item-title">
                  <p class="application-list-content-item-date sp">2020/00/00,00:00</p>
                  <p class="title"><a href="">請求書名が入る （例）予約確定内金請求書</a></p>
                </div>
                <div class="application-list-content-item-status">
                  <p class="label label-blue-line">保留</p>
                  <p class="text text-red">有効期限：2022.00.00</p>
                </div>
              </li>

              <!-- 保留：灰ラベル　日時：灰字 -->
              <li class="application-list-content-item">
                <p class="application-list-content-item-date pc">2020/00/00,00:00</p>
                <div class="application-list-content-item-title">
                  <p class="application-list-content-item-date sp">2020/00/00,00:00</p>
                  <p class="title"><a href="">請求書名が入る （例）予約確定内金請求書</a></p>
                </div>
                <div class="application-list-content-item-status">
                  <p class="label label-gray">保留</p>
                  <p class="text text-gray">有効期限：2022.00.00</p>
                </div>
              </li>

              <!-- 手配申込：青ラベル　日時：黒字 -->
              <li class="application-list-content-item">
                <p class="application-list-content-item-date pc">2020/00/00,00:00</p>
                <div class="application-list-content-item-title">
                  <p class="application-list-content-item-date sp">2020/00/00,00:00</p>
                  <p class="title"><a href="">ご旅行提案書.ver2</a></p>
                </div>
                <div class="application-list-content-item-status">
                  <p class="label label-blue">手配申込</p>
                  <p class="text">有効期限：2022.00.00</p>
                </div>
              </li>

              <!-- 入金待ち：灰ラベル　日時：灰字 -->
              <li class="application-list-content-item">
                <p class="application-list-content-item-date pc">2020/00/00,00:00</p>
                <div class="application-list-content-item-title">
                  <p class="application-list-content-item-date sp">2020/00/00,00:00</p>
                  <p class="title"><a href="">請求書名が入る （例）予約確定内金請求書</a></p>
                </div>
                <div class="application-list-content-item-status">
                  <p class="label label-gray">入金待ち</p>
                  <p class="text text-gray">有効期限：2022.00.00</p>
                </div>
              </li>

            </ul>

          </div>
          <?php } ?>
          
          <div class="block tour-message-block">

            <h3 class="block-title">メッセージ</h3>

            <div class="textarea-wrap">
              <textarea name="" id="" placeholder="ここにメッセージ内容を入力"></textarea>
            </div>
            <div class="message-controll">
              <div>
                <input type="file" id="file" name="" hidden>
                <label for="file" class="label-file-text-icon">
                  <img src="assets/img/mypage-message-file-attached.svg" alt="">ファイルを添付する
                </label>
              </div>
              <div>
                <button class="btn btn-blue">送信</button>
              </div>
            </div>

            <div class="message-window">

              <div class="message-window-wrap">

                <?php for($i=0;$i<2;$i++) { ?>
                <div class="box-message box-message-company">

                  <div class="campany-flex">

                    <div class="company-portrait"><img src="assets/img/mypage-portrait-no-image.svg" alt=""></div>
                    <div class="message-wrap">
                      <p class="info pc"><span>0000/00/00 00:00</span> <span>アラビアンエクスプレス,パートナー名</span></p>
                      <p class="info sp"><span>0000/00/00 00:00</span><br \><span>アラビアンエクスプレス,パートナー名</span></p>
                      <div class="bubble pc">
                        <p>メッセージ本文テキストが入る。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                        <p class="attached-file"><a href=""><img src="assets/img/mypage-message-file-attached.svg" alt="">ファイル名.jpg</a></p>
                        <p class="attached-file"><a href=""><img src="assets/img/mypage-message-file-attached.svg" alt="">ファイル名.jpg</a></p>
                      </div>
                    </div>

                  </div>

                  <div class="bubble sp">
                    <p>メッセージ本文テキストが入る。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                    <p class="attached-file"><a href=""><img src="assets/img/mypage-message-file-attached.svg" alt="">ファイル名.jpg</a></p>
                    <p class="attached-file"><a href=""><img src="assets/img/mypage-message-file-attached.svg" alt="">ファイル名.jpg</a></p>
                  </div>

                </div>

                <div class="box-message box-message-user">
                  
                  <div class="message-wrap">
                    <p class="info"><span>0000/00/00 00:00</span></p>
                    <div class="bubble">
                      <p>メッセージ本文テキストが入る。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                      <p class="attached-file"><a href=""><img src="assets/img/mypage-message-file-attached.svg" alt="">ファイル名.jpg</a></p>
                      <p class="attached-file"><a href=""><img src="assets/img/mypage-message-file-attached.svg" alt="">ファイル名.jpg</a></p>
                    </div>
                  </div>

                </div>
                <?php } ?>

              </div>

            </div>

          </div>

        </div>

    </main>

  </div>

</div>
<?php include 'footer-mypage.php';?>