<?php include 'header.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap">
  <main class="main password-reset">
    <section class="section-content">
      <div class="inner">
        <div class="head">パスワード再設定</div>
        <div class="sub-head">パスワード再設定を行います。</div>
        <div class="text">新しいパスワードを入力してください。<br>入力が終わったら「変更」をクリックしてください。</div>
        </div>
        
        <div class="form">
          <form action="">
            <div class="head">新しいパスワード</div>
            <input type="password">
            <div class="caption">※8～20文字以内、半角英数（0-9、a-z、A-Z）のみ</div>
            <div class="head">新しいパスワード（確認）</div>
            <input type="password">
            <div class="caption">※8～20文字以内、半角英数（0-9、a-z、A-Z）のみ</div>

            <div class="btn-wrap"><input class="button" type="button"  value="変更"></div>
          </form>
          <div class="link"><a href="">キャンセル</a></div>
        </div>

        <div class="contact">
          <div class="logo">
            <img src="/assets/img/logo02.svg" alt="">
          </div>
          <a href="" class="button">メールのお問い合わせはこちら</a>
        </div>
        <p class="link"><a href="">トップページへ戻る</a></p>
      </div>
    </section>
  </main>
</div>

<?php include 'footer.php';?>