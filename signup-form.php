<?php include 'header.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap">
  <main class="main signup-form">
    <section class="section-content">
      <div class="inner">
        <div class="head">新規会員登録</div>
        <nav class="states">
          <ul class="points">
            <li class="point current">入力</li>
            <li class="point">確認・送信</li>
            <li class="point">送信完了</li>
          </ul>
        </nav>
        <div class="form">
          <div class="head">アカウント情報</div>
          <table>
            <tr>
               <th class="reqired"><span>メールアドレス</span></th>
              <td>
                <input type="text">
                <div class="caption">例：sample@example.jp（半角英数字で入力してください）</div>
              </td>
            </tr>
            <tr>
              <th class="reqired"><span>パスワード(半角英数字混合8文字以上)</span></th>
              <td>
                <input type="password">
                <div class="caption">※8～20文字以内、半角英数（0-9、a-z、A-Z）のみ</div>
              </td>
            </tr>
            <tr>
              <th class="reqired"><span>お名前</span></th>
              <td>
               <div class="row">
                 <div class="col col-6"><input type="text" placeholder="姓"></div>
                 <div class="col col-6"><input type="text" placeholder="名"></div>
               </div>
              </td>
            </tr>
            <tr>
              <th class="reqired"><span>ローマ字</span></th>
              <td>
               <div class="row">
                 <div class="col col-6"><input type="text" placeholder="Family(Surname)"></div>
                 <div class="col col-6"><input type="text" placeholder="First（Given Name）s"></div>
               </div>
              </td>
            </tr>
            <tr>
              <th class="reqired"><span>性別</span></th>
              <td class="input-with-initial">
                <input type="radio" name="" value="">男性 <input type="radio" name="" value="">女性 <input type="radio" name="" value="">非公開
              </td>
            </tr>
            <tr>
              <th class="reqired"><span>生年月日</span></th>
              <td class="input-with-initial">
              <input type="date">年齢：<span>00</span>歳
              </td>
            </tr>
            <tr>
              <th class="reqired"><span>電話番号</span></th>
              <td>
                <input type="text"　placeholder="0000000000">
                <span>※ハイフンなしで入力</span>
              </td>
            </tr>
            <tr>
              <th class="reqired"><span>住所</span></th>
              <td class="input-with-initial">
                〒<input type="text"><input class="button" type="button" value="自動入力">
                <div class="select-wrap">
                  <select name="" id="">
                    <option>0000</optnion>
                  </select>
                </div>
                <input type="text"　placeholder="市区町村">
                <input type="text">
              </td>
            </tr>
            <tr>
              <th>マイテーマ<br><span>好きなテーマをチェックしてください（複数選択可能）</span></th>
              <td class="checkboxs input-with-initial">
                <input type="checkbox" id="" name="" checked><label for="">持続可能な社会を創る旅</label>
                <input type="checkbox" id="" name=""><label for="">観光・送迎</label>
                <input type="checkbox" id="" name=""><label for="">視察・見学</label>
                <input type="checkbox" id="" name=""><label for="">趣味・体験</label>
                <input type="checkbox" id="" name=""><label for="">教育・研修</label>
                <input type="checkbox" id="" name=""><label for="">ホテル</label>
                <input type="checkbox" id="" name=""><label for="">レストラン・バー</label>
                <input type="checkbox" id="" name=""><label for="">ビジネス・イベント</label>
              </td>
            </tr>
            <tr>
              <th>マイエリア<br><span>行きたいエリアをチェックしてください（複数選択可能）</span></th>
              <td class="checkboxs input-with-initial">
                <input type="checkbox" id="" name="" checked><label for="">ヨーロッパ</label>
                <input type="checkbox" id="" name=""><label for="">北米</label>
                <input type="checkbox" id="" name=""><label for="">中南米</label>
                <input type="checkbox" id="" name=""><label for="">ハワイ</label>
                <input type="checkbox" id="" name=""><label for="">大洋州</label>
                <input type="checkbox" id="" name=""><label for="">中東</label>
                <input type="checkbox" id="" name=""><label for="">アフリカ</label>
              </td>
            </tr>
            <tr>
              <th class="reqired">メルマガ</th>
              <td class="checkboxs input-with-initial">
                <input type="checkbox" id="" name="" checked><label for="">無料購読する</label>
                現地の最新情報やお得なモニター旅行などを配信します
              </td>
            </tr>
          </table>
          <div class="condition">
            <div class="head">利用規約をご確認ください</div>
            <div class="text-wrap">
              <div class="text">日本トラベルコーディネート株式会社（以下、「当社」といいます）は、「たびチョク」（https://tabi-choku.com/）の管理・運営を行い、サービスのご利用に関して、以下の通り、たびチョク利用規約（以下、「本規約」といいます）を定めています。<br>
              <br>
              たびチョクをご利用いただいた場合は、本規約に同意したものとみなしますので、たびチョクのサービスをご利用いただきます際には、必ず本規約をお読みください。<br>
              <br>
              ＊個人情報の取り扱いについては、「プライバシーポリシー」をお読みください。<br>
              ＊本規約とは別に個別の旅行契約には「旅行業約款・条件書」をお読みください。</div>
            </div>
          </div>
          <div class="text">
          送信前に当社の<a href="">「プライバシーポリシー <i class="far fa-window-restore"></i>」</a>をご確認いただき、<br>
          同意していただける場合は下の[プライバシーポリシーに同意します]をチェックし、確認にお進みください。
          </div>
          <div class="agreement">
            <input type="checkbox" id="" name="" checked><label for=""><a href="">プライバシーポリシー</a>に同意します</label><br>
          </div>
          <div class="btn-wrap"><input class="button" type="button"  value="入力内容の確認に進む"></div>
          <div class="link"><a href="">戻る</a></div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php include 'footer-mypage.php';?>