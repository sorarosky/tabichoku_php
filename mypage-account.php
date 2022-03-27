<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>

<div class="contents-wrap mypage mypage-account">

  <div class="main-aside-wrap">

    <?php include 'components/aside-mypage.php';?>

    <main class="main dashboard">
      <div class="main-container">
        <div class="main-header">
          <h2 class="main-header-title">アカウント情報</h2>
        </div>

        <div class="list-account">

          <div class="list-account-item">
            <div class="list-account-item-header">
                <div class="list-account-title">メールアドレス</div>
                <div class="list-account-content">sample@example.jp</div>
            </div>
            <div class="list-account-item-btn"><a href=""><button class="btn btn-blue">変更</button></a></div>
          </div>

          <div class="list-account-item">
            <div class="list-account-item-header">
                <div class="list-account-title">パスワード</div>
                <div class="list-account-content">**********</div>
            </div>
            <div class="list-account-item-btn"><a href=""><button class="btn btn-blue">変更</button></a></div>
        </div>
        
      </div>
    </main>

  </div>

</div>
<?php include 'footer-mypage.php';?>