<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap mypage">

  <div class="main-aside-wrap">

    <?php include 'components/aside-mypage.php';?>

    <main class="main dashboard">
      <div class="main-container">

        <div class="main-header main-header-flex">
          <h2 class="main-header-title">現在進行中のツアー</h2>
          <div class=side><a href=""><button class="btn btn-blue-line">一覧を見る</button></a></div>
        </div>

        <ul class="list-tour">
          <?php for($i=0;$i<3;$i++) { ?>
          <li class="list-tour-item">
            <div class="content">
              <div class="box-flex">
                <p class="box-flex-item"><span>受付日</span>0000/00/00</p>
                <p class="box-flex-item"><span>ツアー番号</span>220001-001</p>
              </div>
              <h3 class="content-title">旅コンテンツタイトルが入る。</h3>
              <ul class="box-list">
                <li class="box-list-item">
                  <p class="box-list-item-title">ツアー名</p>
                  <p class="box-list-item-text">木村ロスツアー</p>
                </li>
                <li class="box-list-item">
                  <p class="box-list-item-title">現地パートナー</p>
                  <p class="box-list-item-text">エレファントツアー</p>
                </li>
              </ul>
            </div>
            <div class="side">
              <a href=""><button class="btn btn-blue">詳細をみる</button></a>
            </div>
          </li>

          <li class="list-tour-item">
            <div class="content">
              <div class="box-flex">
                <p class="box-flex-item"><span>受付日</span>0000/00/00</p>
                <p class="box-flex-item"><span>ツアー番号</span>220001-001</p>
              </div>
              <h3 class="content-title">旅コンテンツタイトルが入る。タイトルが入るタイトルが入る。タイトルが入るタイトルが入る。タイトルが入る</h3>
              <ul class="box-list">
                <li class="box-list-item">
                  <p class="box-list-item-title">ツアー名</p>
                  <p class="box-list-item-text">長い場合。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                </li>
                <li class="box-list-item">
                  <p class="box-list-item-title">現地パートナー</p>
                  <p class="box-list-item-text">長い場合。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                </li>
              </ul>
            </div>
            <div class="side">
              <a href=""><button class="btn btn-blue">詳細をみる</button></a>
            </div>
          </li>
          <?php } ?>

        </ul>

      </div>

    </main>

    
  </div>

</div>
<?php include 'footer-mypage.php';?>