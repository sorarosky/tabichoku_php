<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src="assets/js/mypage-profile.js" charset="UTF-8"></script>

<div class="contents-wrap mypage">

  <div class="main-aside-wrap">

    <main class="main dashboard">
      <div class="main-header">
        <h2 class="main-header-title">会員情報</h2>
      </div>

      
      <form action="" class="form h-adr">

        <?php //住所自動入力用のパラメータ ?>
        <span class="p-country-name" style="display:none;">Japan</span>
        <span class="p-region" style="display:none;">Reagion</span>

        <!-- SOF .form-box -->
        <div class="form-box">
          <div class="form-header">
            <p class="form-title-lg">お客様情報</p>
          </div>
        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">プロフィール写真</p>
          </div>

          <div class="form-content form-content-flex form-content-flex-aligh-top">
            <div class="form-content-item">
             <div class="form-content-item-img-preview">
              <img class="js-img-preview" src="assets/img/mypage-profile-no-image.svg" alt="">
             </div>
            </div>
            <div class="form-content-item">
              <p>最大アップロードサイズ : 2MB</p>
              <div class="form-content-item-file">
                <input class="js-file-input" type="file" id="file" name="" hidden>
                <label for="file" class="label-file">ファイルを選択</label>
              </div>
              <p class="form-content-img-delete js-file-delete">画像削除</p>
            </div>
          </div>

        </div>
        <!-- EOF .form-box -->
      
        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">お名前</p>
            <span class="require"></span>
          </div>

          <div class="form-content form-content-flex-even">
            <div class="form-content-item">
              <p class="form-content-item-title">姓</p>
              <div class="form-content-item-content">
                <input type="text" name="" id="" \>
              </div>
            </div>
            <div class="form-content-item">
              <p class="form-content-item-title">名</p>
              <div class="form-content-item-content">
                <input type="text" name="" id="" \>
              </div>
            </div>
          </div>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">フリガナ</p>
            <span class="require"></span>
          </div>

          <div class="form-content form-content-flex-even">
            <div class="form-content-item">
              <p class="form-content-item-title">セイ</p>
              <div class="form-content-item-content">
                <input type="text" name="" id="" \>
              </div>
            </div>
            <div class="form-content-item">
              <p class="form-content-item-title">メイ</p>
              <div class="form-content-item-content">
                <input type="text" name="" id="" \>
              </div>
            </div>
          </div>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">お名前ローマ字</p>
            <span class="require"></span>
          </div>

          <div class="form-content form-content-flex-even">
            <div class="form-content-item">
              <p class="form-content-item-title">姓：Family(Surname)</p>
              <div class="form-content-item-content">
                <input type="text" name="" id="" \>
              </div>
            </div>
            <div class="form-content-item">
              <p class="form-content-item-title">名：First（Given Name）</p>
              <div class="form-content-item-content">
                <input type="text" name="" id="" \>
              </div>
            </div>
          </div>
          <p class="form-note-text">※パスポート表記のローマ字スペル</p>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">性別</p>
            <span class="require"></span>
          </div>

          <div class="form-content form-content-flex">
            <div class="form-content-item">
              <input type="radio" name="sex" id="male" \>
              <label class="label-radio" for="male">男性</label>
            </div>
            <div class="form-content-item">
              <input type="radio" name="sex" id="female" \>
              <label class="label-radio" for="female">女性</label>
            </div>
            <div class="form-content-item">
              <input type="radio" name="sex" id="private" \>
              <label class="label-radio" for="private">非公開</label>
            </div>
          </div>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">生年月日</p>
            <span class="require"></span>
          </div>

          <div class="form-content form-content-flex">
            <div class="form-content-item">
              <input type="text" name="" id="" placeholder="1990/00/00">
            </div>
            <div class="form-content-item">
              <p>年齢：<span> </span>歳</p>
            </div>
          </div>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">国籍</p>
            <span class="require"></span>
          </div>

          <div class="form-content form-content-flex-even">
            <div class="form-content-item">
              <div class="form-content-item-content">
                <select name="area" id="area">
                  <option value="">アジア</option>
                </select>
              </div>
              <p class="form-note-text">※エリアを選択してください</p>
            </div>
            <div class="form-content-item">
              <div class="form-content-item-content">
                <select name="countory" id="countory">
                  <option value="">日本</option>
                </select>
              </div>
              <p class="form-note-text">※国名を選択してください</p>
            </div>
          </div>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">連絡先</p>
            <span class="require"></span>
          </div>

          <div class="form-content form-content">
            <div class="form-content-item">
              <input type="text" name="" id="">
            </div>
            <p class="form-note-text">※ハイフンなしで入力</p>
          </div>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">住所</p>
            <span class="require"></span>
          </div>

          <div class="form-content form-content-flex">
            <div class="form-content-item form-content-item-zipmark">〒</div>
            <div class="form-content-item">
              <input type="text" name="" id="" placeholder="1990/00/00" class="js-zip-personal">
            </div>
            <div class="form-content-item">
              <button type="button" class="btn btn-blue js-zip-personal-btn">自動入力</button>
            </div>
          </div>

          <div class="form-content form-content-flex">
            <div class="form-content-item">
              <select name="pref-personal" id="">
                <option value="">都道府県</option>
              </select>
            </div>
            <div class="form-content-item">
              <input type="text" name="addr-personal" id="" placeholder="市区町村">
            </div>
          </div>

          <div class="form-content form-content-flex">
            <div class="form-content-item">
              <input type="text" name="strt-personal">
            </div>
          </div>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">マイテーマ</p>
            <span class="require"></span>
          </div>

          <p class="form-description-blue">好きなテーマをチェックしてください（複数選択可能）</p>

          <div class="form-content form-content-flex">
            <div class="form-content-item">
              <input type="checkbox" name="mytheme" id="society" \>
              <label class="label-checkbox" for="society">持続可能な社会を創る旅</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="mytheme" id="sightseeing" \>
              <label class="label-checkbox" for="sightseeing">観光・送迎</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="mytheme" id="observation" \>
              <label class="label-checkbox" for="observation">視察・見学</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="mytheme" id="travel" \>
              <label class="label-checkbox" for="travel">趣味・体験</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="mytheme" id="education" \>
              <label class="label-checkbox" for="education">教育・研修</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="mytheme" id="hotel" \>
              <label class="label-checkbox" for="hotel">ホテル</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="mytheme" id="restaurant" \>
              <label class="label-checkbox" for="restaurant">レストラン・バー</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="mytheme" id="business" \>
              <label class="label-checkbox" for="business">ビジネス・イベント</label>
            </div>
          </div>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">マイエリア</p>
            <span class="require"></span>
          </div>

          <p class="form-description-blue">行きたいエリアをチェックしてください（複数選択可能）</p>

          <div class="form-content form-content-flex">
            <div class="form-content-item">
              <input type="checkbox" name="myarea" id="europe" \>
              <label class="label-checkbox" for="europe">ヨーロッパ</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="myarea" id="na" \>
              <label class="label-checkbox" for="na">北米</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="myarea" id="sa" \>
              <label class="label-checkbox" for="sa">中南米</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="myarea" id="hawaii" \>
              <label class="label-checkbox" for="hawaii">ハワイ</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="myarea" id="oceania" \>
              <label class="label-checkbox" for="oceania">大洋州</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="myarea" id="asia" \>
              <label class="label-checkbox" for="asia">アジア</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="myarea" id="middleeast" \>
              <label class="label-checkbox" for="middleeast">中東</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="myarea" id="africa" \>
              <label class="label-checkbox" for="africa">アフリカ</label>
            </div>
          </div>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">メルマガ</p>
            <span class="require"></span>
          </div>

          <p class="form-description">現地の最新情報やお得なモニター旅行などを配信します</p>

          <div class="form-content form-content-flex">
            <div class="form-content-item">
              <input type="checkbox" name="mailmagazine" id="mailmagazine" \>
              <label class="label-checkbox" for="mailmagazine">無料購読する</label>
            </div>
          </div>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">ご希望の連絡先</p>
            <span class="require"></span>
          </div>

          <p class="form-description">お電話での連絡が必要な場合の日中のご連絡先です、1つ以上選択してください。</p>

          <div class="form-content form-content-flex">
            <div class="form-content-item">
              <input type="checkbox" name="contact" id="tel" \>
              <label class="label-checkbox" for="tel">電話番号</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="contact" id="mobile" \>
              <label class="label-checkbox" for="mobile">携帯番号</label>
            </div>
            <div class="form-content-item">
              <input type="checkbox" name="contact" id="work" \>
              <label class="label-checkbox" for="work">勤務先</label>
            </div>
          </div>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">

          <div class="form-header">
            <p class="form-title">備考欄</p>
          </div>

          <div class="form-content">
            <div class="form-content-textarea-item">
              <textarea name="" id="" placeholder="事前に伝えたいことなどあればご記入ください"></textarea>
            </div>
          </div>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">
          <div class="form-header">
            <p class="form-title-lg">勤務先情報</p>
          </div>
        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">
          <div class="form-header">
            <p class="form-title">備考欄</p>
          </div>
          <div class="form-content">
            <div class="form-content-item">
              <input type="text" name="" id="" placeholder="企業名、法人名など入力ください">
              <p class="form-note-text">※ハイフンなしで入力</p>
            </div>
          </div>
        </div>
        <!-- EOF .form-box -->
        
        <!-- SOF .form-box -->
        <div class="form-box">
          <div class="form-header">
            <p class="form-title">部署・役職</p>
          </div>
          <div class="form-content">
            <div class="form-content-item">
              <input type="text" name="" id="" placeholder="営業部長">
            </div>
          </div>
        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">
          <div class="form-header">
            <p class="form-title">勤務先メールアドレス</p>
          </div>
          <div class="form-content">
            <div class="form-content-item">
              <input type="text" name="" id="" placeholder="tabichoku@example.com">
              <p class="form-note-text">※ハイフンなしで入力</p>
            </div>
          </div>
        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">
          <div class="form-header">
            <p class="form-title">勤務先電話番号</p>
          </div>
          <div class="form-content">
            <div class="form-content-item">
              <input type="text" name="" id="" placeholder="0000000000">
              <p class="form-note-text">※ハイフンなしで入力</p>
            </div>
          </div>
        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box">
          <div class="form-header">
            <p class="form-title">勤務先住所</p>
          </div>

          <div class="form-content form-content-flex">
            <div class="form-content-item form-content-item-zipmark">〒</div>
            <div class="form-content-item">
              <input type="text" name="" id="" placeholder="1234567" class="js-zip-work">
            </div>
            <div class="form-content-item">
              <button type="button" class="btn btn-blue js-zip-work-btn">自動入力</button>
            </div>
          </div>

          <div class="form-content form-content-flex">
            <div class="form-content-item">
              <select name="pref-work" id="">
                <option value="">都道府県</option>
              </select>
            </div>
            <div class="form-content-item">
              <input type="text" name="addr-work" id="" placeholder="市区町村">
            </div>
          </div>
          <div class="form-content form-content-flex form-content-flex-width-full">
            <input type="text" name="strt-work">
          </div>

        </div>
        <!-- EOF .form-box -->

        <!-- SOF .form-box -->
        <div class="form-box form-box-submit">
          <button type="submit" class="btn btn-blue">保存</button>
        </div>
        <!-- EOF .form-box -->

      </form>
      

    </main>

    <?php include 'components/aside-mypage.php';?>
  </div>

</div>
<?php include 'footer-mypage.php';?>