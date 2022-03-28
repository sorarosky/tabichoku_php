<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap mypage mypage-tour-list">

  <div class="main-aside-wrap">

    <?php include 'components/aside-mypage.php';?>

    <main class="main dashboard">

      <div class="main-container">
        <div class="main-header">
          <h2 class="main-header-title">あなたの旅行情報</h2>
          <p class="main-header-sort">すべて</p>
        </div>

        <ul class="list-tour">
          <?php for($i=0;$i<5;$i++) { ?>
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

        <div class="pagination-pc">
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
        
        <div class="pagination-sp">
          <div class="pagination-list-item-prev">
            <a href="" class="pagination-list-item-link">前へ</a>
          </div>
          <div class="pagination-list-item-page">
            <select name="" id="">
              <option value="">1/ 00</option>
              <option value="">2 / 00</option>
              <option value="">3 / 00</option>
              <option value="">4 / 00</option>
              <option value="">5 / 00</option>
            </select>
          </div>
          <div class="pagination-list-item-next">
            <a href="" class="pagination-list-item-link">次へ</a>
          </div>
        </div>
        
      </div>

    </main>

  </div>

</div>
<?php include 'footer-mypage.php';?>