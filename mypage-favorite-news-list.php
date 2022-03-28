<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap mypage mypage-favorite-news-list">

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
            <li class="favorite-nav-list-item current"><a href="">現地通信</a></li>
            <li class="favorite-nav-list-item"><a href="">現地パートナー</a></li>
          </ul>
        </div>

        <ul class="list-favorite-tour">
          <?php for($i=0;$i<5;$i++) { ?>
            <li class="list-favorite-tour-item">

              <div class="content content-pc">
                <div class="thumbnail">
                  <?php if( $i < 3 ) { ?>
                  <div class="label-new"></div>
                  <?php } ?>
                  <img src="assets/img/mypage-favorite-news-dummy.png" alt="">
                </div>

                <div class="side">
                  <div class="box-flex">
                    <p class="box-flex-item">2022/00/00</p>
                    <p class="box-flex-item box-flex-item-pc">|</p>
                    <p class="box-flex-item">
                      <span><img src="assets/img/mypage-favorite-list-view.svg" alt=""></span>00000
                    </p>
                    <p class="box-flex-item box-flex-item-pc">|</p>
                    <p class="box-flex-item box-flex-item-pc">イタリア(国)</p>
                    <p class="box-flex-item box-flex-item-sp">セントビンセント・グレナディーン</p>
                  </div>
                  <div class="content-title content-title-pc">
                    タイトルが入る。タイトルが入るタイトルが入る。タイトルが入るタイトルが入る。タイトルが入る
                  </div>
                  <div class="box-text box-text-pc">
                    <span><img src="assets/img/mypage-favorite-list-company.svg" alt=""></span>（仮）日本トラベルコーディネート株式会社
                  </div>

                  <div class="box-tag box-tag-pc">
                    <a href="">#ハッシュタグ</a>
                    <a href="">#ハッシュタグ</a>
                    <a href="">#タグ</a>
                    <a href="">#ハッシュタグハッシュタグハッシュタグ</a>
                    <a href="">#タグタグタグ</a>
                    <a href="">#タグ</a>
                  </div>

                </div>
              </div>

              <div class="content content-sp">
                <div class="content-title">
                  タイトルが入る。タイトルが入るタイトルが入る。タイトルが入るタイトルが入る。タイトルが入るタイトルが入る。タイトルが入るタイトルが入る。タイトルが入るタイトルが入る。タイトルが入る
                </div>
                <div class="box-text">
                  <span><img src="assets/img/mypage-favorite-list-company.svg" alt=""></span>（仮）日本トラベルコーディネート株式会社
                </div>
                <div class="box-tag">
                  <a href="">#ハッシュタグ</a>
                  <a href="">#ハッシュタグ</a>
                  <a href="">#タグ</a>
                  <a href="">#ハッシュタグハッシュタグハッシュタグ</a>
                  <a href="">#タグタグタグ</a>
                  <a href="">#タグ</a>
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