<?php include 'header.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap">
  <main class="main password-reset-form">
    <section class="section-content">
      <div class="inner">
        <div class="head">パスワード再設定</div>
        <div class="sub-head">パスワード再設定を行います。</div>
        <div class="text">新しいパスワードを入力してください。<br>入力が終わったら「変更」をクリックしてください。</div>
        <div class="form">
          <form action="">
            <div class="head">新しいパスワード</div>
            <input type="password" placeholder="新しいパスワードを入力してください">
            <div class="caption">※8～20文字以内、半角英数（0-9、a-z、A-Z）のみ</div>
            <br>
            <div class="head">新しいパスワード（確認）</div>
            <input type="password" placeholder="新しいパスワードを入力してください">
            <div class="caption">※8～20文字以内、半角英数（0-9、a-z、A-Z）のみ</div>

            <div class="btn-wrap"><input class="button" type="button"  value="変更"></div>
          </form>
          <div class="link"><a href="">キャンセル</a></div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php include 'footer.php';?>