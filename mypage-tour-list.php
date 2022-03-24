<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap mypage">

  <div class="main-aside-wrap">

    <main class="main dashboard">
      <div class="main-header">
        <h2 class="main-header-title">あなたの旅行情報</h2>
        <p class="main-header-sort">すべて</p>
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

      <div class="pagination">
        <ul class="pagination-list">

          <li class="pagination-list-item pagination-list-item-prev">
            <a href="" class="pagination-list-item-link">前へ</a>
          </li>

          <li class="pagination-list-item current">
            <span class="pagination-list-item-text">1</span>
          </li>
          <li class="pagination-list-item">
            <a href='' class="pagination-list-item-link">2</a>
          </li>
          <li class="pagination-list-item">
            <a href='' class="pagination-list-item-link">3</a>
          </li>
          <li class="pagination-list-item">
            <a href='' class="pagination-list-item-link">4</a>
          </li>
          <li class="pagination-list-item">
            <a href='' class="pagination-list-item-link">5</a>
          </li>

          <li class="pagination-list-item pagination-list-item-omit">
            <span class="pagination-list-item-text">…</span>
          </li>

          <li class="pagination-list-item">
            <a href='' class="pagination-list-item-link">00</a>
          </li>

          <li class="pagination-list-item pagination-list-item-next">
            <a href="" class="pagination-list-item-link">次へ</a>
          </li>

        </ul>
      </div>

    </main>

    <?php include 'components/aside-mypage.php';?>
  </div>

</div>
<?php include 'footer-mypage.php';?>