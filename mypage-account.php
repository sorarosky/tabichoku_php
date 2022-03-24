<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src="assets/js/mypage-profile.js" charset="UTF-8"></script>

<div class="contents-wrap mypage">

  <div class="main-aside-wrap">

    <main class="main dashboard">
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

    <?php include 'components/aside-mypage.php';?>
  </div>

</div>
<?php include 'footer-mypage.php';?>