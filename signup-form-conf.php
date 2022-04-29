<?php include 'header-only-logo.php';?>
<div class="contents-wrap">
  <main class="main signup-form-conf">
    <section class="section-content">
      <div class="inner">
        <div class="head">新規会員登録</div>
        <nav class="states">
          <ul class="points">
            <li class="point current">入力</li>
            <li class="point current">確認・送信</li>
            <li class="point">送信完了</li>
          </ul>
        </nav>
        
        <div class="form">
          <table>
            <tr>
               <th class="reqired"><span>メールアドレス</span></th>
              <td>
              sample@example.jp
              </td>
            </tr>
            <tr>
              <th class="reqired"><span>パスワード(半角英数字混合8文字以上)</span></th>
              <td>
              ********
              </td>
            </tr>
            <tr>
              <th class="reqired"><span>お名前</span></th>
              <td>
               <div class="row">
                 <div class="col col-6">姓</div>
                 <div class="col col-6">名</div>
               </div>
              </td>
            </tr>
            <tr>
              <th class="reqired"><span>ローマ字</span></th>
              <td>
               <div class="row">
                 <div class="col col-6">Family(Surname)</div>
                 <div class="col col-6">First（Given Name）</div>
               </div>
              </td>
            </tr>
            <tr>
              <th class="reqired"><span>性別</span></th>
              <td class="input-with-initial">
              男性
              </td>
            </tr>
            <tr>
              <th class="reqired"><span>生年月日</span></th>
              <td class="input-with-initial">
              年月日 年齢：<span>00</span>歳
              </td>
            </tr>
            <tr>
            <th class="reqired"><span>国籍</span></th>
              <td>
               <div class="row">
                  <div class="col col-6">
                    日本 
                  </div>
                  <div class="col col-6">
                    日本
                  </div>
               </div>
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
              <td class="input-with-initial address">
                〒 000-0000 
                <div class="row">
                  <div class="col col-2">
                    都道府県
                  </div>
                  <div class="col col-10">
                    市区町村
                  </div>
                </div>
                番地番地番地番地
              </td>
            </tr>
            <tr>
              <th class="mine">マイテーマ</th>
              <td class="checkboxs input-with-initial">
              マイテーマ、マイテーマ、マイテーマ、マイテーマ
              </td>
            </tr>
            <tr>
              <th class="mine">マイエリア</th>
              <td class="checkboxs input-with-initial">
                マイエリア、マイエリア、マイエリア、マイエリア
              </td>
            </tr>
            <tr>
              <th class="reqired">メルマガ</th>
              <td class="checkboxs input-with-initial">
              無料購読する
              </td>
            </tr>
          </table>
          <br>
          <div class="agreement">
          <i class="fas fa-check"></i> <a href="">「プライバシーポリシー」</a>/<a href="">「利用規約」</a>に同意しました
          </div>
          <input class="button" type="button"  value="会員登録を確定する"><br>
          <a href="">会員登録を確定する</a>
        </div>
      </div>
    </section>
  </main>
  </div>

<?php include 'footer-mypage.php';?>