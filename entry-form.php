<?php include 'header.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap">
  <main class="main entry-form">
    <section class="section-content">
      <div class="inner">
        <div class="head">エントリーフォーム</div>
        <nav class="states">
          <ul class="points">
            <li class="point current">ご入力</li>
            <li class="point">確認・送信</li>
            <li class="point">送信完了</li>
          </ul>
        </nav>
        <div class="text">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</div>
        <div class="form">
          <table>
            <tr>
            <th class="reqired">お問い合わせ種類</th>
              <td>
              <div class="select-wrap">
                  <select name="" id="">
                    <option>選択肢</optnion>
                    <option>選択肢</optnion>
                    <option>選択肢</optnion>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
            <th class="reqired">お名前</th>
              <td>
                <div class="row">
                  <div class="col col-6"><input type="text" placeholder="姓"></div>
                  <div class="col col-6"><input type="text" placeholder="名"></div>
                </div>
              </td>
            </tr>
            <tr>
            <th class="reqired">フリガナ</th>
              <td>
              <div class="row">
                  <div class="col col-6"><input type="text" placeholder="セイ"></div>
                  <div class="col col-6"><input type="text" placeholder="メイ"></div>
                </div>
              </td>
            </tr>
            <tr>
            <th class="reqired">メールアドレス</th>
              <td><input type="text"></td>
            </tr>
            <tr>
            <th class="reqired">電話番号</th>
              <td><input type="text"></td>
            </tr>
            <tr>
              <th>お問い合わせ内容</th>
              <td>
              <textarea name="" id="" cols="30" rows="10"></textarea>
              </td>
            </tr>
          </table>
          <div class="text">
          送信前に当社の<a href="">「プライバシーポリシー <i class="far fa-window-restore"></i>」</a>をご確認いただき、<br>
          同意していただける場合は下の[プライバシーポリシーに同意します]をチェックし、確認にお進みください。
          </div>
          <div class="privacy">
            <input type="checkbox" id="" name="" checked><label for=""><a href="">プライバシーポリシー</a>に同意します</label>
          </div>
          <div class="btn-wrap"><input class="button" type="button"  value="入力内容の確認に進む"></div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php include 'footer.php';?>