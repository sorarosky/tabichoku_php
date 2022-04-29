<?php include 'header.php';?>
<?php include 'components/travel-content-kv.php';?>
  <div class="contents-wrap">
  <div class="main-aside-wrap">
    <main class="main travel-content-category">
      <section class="section-content posts">
        <div class="inner">
          <div class="head"><span>旅コンテンツ</span>の一覧</div>
          <?php for( $i=0;$i<10;$i++ ) { ?>
            <div class="post">
              <div class="img">

              </div>
              <div class="info">
                <div class="meta">
                  <div class="num"><i class="far fa-eye"></i> 00000</div>
                  <div class="country-name">国名が入る、国名が入る</div>
                  <div class="theme-category"> 持続可能な社会を創る旅(テーマ) / すべての人に健康と福祉を(カテゴリー)</div>
                  <div class="theme-category"> 持続可能な社会を創る旅(テーマ) / すべての人に健康と福祉を(カテゴリー)</div>
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
    <?php include 'components/aside-travel-content.php';?>
  </div>
</div>
<?php include 'footer.php';?>