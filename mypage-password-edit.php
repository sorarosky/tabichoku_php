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

      <div class="paragraph">
        <h3>パスワードを変更する</h3>
      </div>

      <form action="">
        <div class="account-password-edit">

          <div class="account-password-edit-item">
            <p>新しいパスワードを入力</p>
            <div><input type="password"></div>
          </div>

          <div class="account-password-edit-item">
            <p>新しいパスワードを再入力</p>
            <div><input type="password"></div>
          </div>

          <div class="account-password-edit-item-btn">
            <button class="btn btn-blue">保存</button>
          </div>
          
        </div>
      </form>

    </main>

    <?php include 'components/aside-mypage.php';?>
  </div>

</div>
<?php include 'footer-mypage.php';?>