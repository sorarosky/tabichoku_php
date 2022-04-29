<?php include 'header.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap">
  <main class="main contact-form">
    <section class="section-content">
      <div class="inner">
        <div class="head">お問い合わせ</div>
        <nav class="states">
          <ul class="points">
            <li class="point current">入力</li>
            <li class="point">確認・送信</li>
            <li class="point">送信完了</li>
          </ul>
        </nav>
        <div class="text">たびチョク事務局へのお問合せなどございましたら、下記よりお気軽にお問合せください。<br>ご返信にお時間がかかる場合がございます、ご了承のほどよろしくお願いいたします。</div>
        <div class="form">
          <table>
            <tr>
              <th class="reqired">お問い合わせ種類</th>
              <td>
              <div class="select-wrap">
                  <select name="" id="">
                    <option>ご旅行相談 Travel Consulting</optnion>
                    <option>現地パートナー契約 Local Partner’s application</optnion>
                    <option>その他 Others</optnion>
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
            <th>会社名</th>
              <td>
                <input type="text">
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