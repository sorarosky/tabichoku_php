<?php include 'header.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap">
  <div class="main-aside-wrap">
    <main class="main local-professionals-news-articles">
      <section class="section-content posts">
        <div class="inner">
          <div class="head">現地通信の記事一覧</div>
          <?php for( $i=0;$i<10;$i++ ) { ?>
            <div class="post">
            <div class="img">
              <img src="/assets/img/thumb-square.jpg" alt="">
            </div>
            <div class="info">
              <div class="meta">
                <div class="date">2022/00/00</div>
                <div class="num"><i class="far fa-eye"></i> 00000</div>
                <div class="country-name">国名が入る、国名が入る</div>
              </div>
              <div class="title">タイトルが入る。タイトルが入るタイトルが入る。タイトルが入るタイトルが入る。タイトルが入る</div>
              <div class="company-name"><i class="fas fa-user"></i> 事業者名が入る2行場合、テキストテキストテキスト</div>
              <ul class="tags">
                <li class="">ハッシュタグ</li>
                <li class="">ハッシュタグ</li>
                <li class="">タグ</li>
                <li class="">ハッシュタグハッシュタグハッシュタグ</li>
              </ul>
            </div>
          </div>
          <?php } ?>
          
          <?php include 'components/pager.php';?>
        </div>
      </section>
    </main>
    <?php include 'components/aside.php';?>
  </div>
</div>

<?php include 'footer.php';?>