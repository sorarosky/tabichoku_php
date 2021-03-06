<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>

<div class="contents-wrap mypage mypage-email-edit">

  <div class="main-aside-wrap">

    <?php include 'components/aside-mypage.php';?>

    <main class="main dashboard">

      <div class="main-container">
        <div class="main-header">
          <h2 class="main-header-title">アカウント情報</h2>
        </div>

        <div class="paragraph">
          <h3>メールアドレス変更</h3>
          <p>メールアドレスの変更にはメールによる承認が必要となります。</p>
          <p>認証用URLが記載されたメールを送信しますので、変更後のアドレスを以下に入力してください。</p>
        </div>

        <form action="">
          <div class="list-account list-account-no-border">

            <div class="list-account-item">
              <div class="list-account-item-header">
                <div class="list-account-title">現在のメールアドレス</div>
                <div class="list-account-content">sample@example.jp</div>
              </div>
            </div>

            <div class="list-account-item">
              <div class="list-account-item-header">
                <div class="list-account-title">変更メールアドレス</div>
                <div class="list-account-content">
                  <input type="text" name="" value="sample@example.jp">
                </div>
              </div>
            </div>

            <div class="list-account-btn">
              <button class="btn btn-blue">認証メールを送信する</button>
            </div>
          </div>
        </form>
      </div>

    </main>

  </div>

</div>
<?php include 'footer-mypage.php';?>