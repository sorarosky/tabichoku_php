<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap mypage mypage-favorite-partner-list">

  <div class="main-aside-wrap">

    <?php include 'components/aside-mypage.php';?>

    <main class="main dashboard">

      <div class="main-container">
        <div class="main-header">
          <h2 class="main-header-title">お気に入り</h2>
        </div>

        <div class="favorite-nav">
          <ul class="favorite-nav-list">
            <li class="favorite-nav-list-item"><a href="">旅コンテンツ</a></li>
            <li class="favorite-nav-list-item"><a href="">現地通信</a></li>
            <li class="favorite-nav-list-item current"><a href="">現地パートナー</a></li>
          </ul>
        </div>

        <ul class="list-favorite-tour">
          <?php for($i=0;$i<5;$i++) { ?>
            <li class="list-favorite-tour-item">

              <div class="content">
                <div class="thumbnail">
                  <img src="assets/img/mypage-favorite-news-dummy.png" alt="">
                </div>

                <div class="side">
                  <div class="content-title">エージェント名が入る、エージェント名が入る</div>
                  <div class="box-text">
                    <p>キャッチコピー（44文字）この文章はダミーです。文字の大きさ、量、字間、行間等12345</p>
                    <p>イタリア</p>
                    <p class="green">取り扱い国名が入る,取り扱い国名が入る,取り扱い国名が入る</p>
                    <p class="blue">得意分野が入る,得意分野が入る,得意分野が入る,得意分野が入る</p>
                  </div>
                </div>
                
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