<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap mypage">

  <div class="main-aside-wrap">

    <main class="main dashboard">
      <div class="main-header main-header-flex">
        <h2 class="main-header-title">現在進行中のツアー</h2>
        <div class=side><a href=""><button class="btn btn-blue-line">一覧を見る</button></a></div>
      </div>

      <ul class="main-list-tour">
        <?php for($i=0;$i<3;$i++) { ?>
        <li class="main-list-tour-item">
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
            </ul>
          </div>
          <div class="side">
            <a href=""><button class="btn btn-blue">詳細をみる</button></a>
          </div>
        </li>
        <?php } ?>

      </ul>

    </main>

    <?php include 'components/aside-mypage.php';?>
  </div>

</div>
<?php include 'footer-mypage.php';?>