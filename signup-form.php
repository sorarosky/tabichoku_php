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
          <!-- <table>
            <tr>
              <th>会員お名前</th>
              <td>
                  木村 たくや
              </td>
            </tr>
            <tr>
              <th class="reqired">利用見込度</th>
              <td class="has-selecter">
              <div class="select-wrap">
                  <select name="" id="">
                    <option>【A】必ず実施したい</optnion>
                    <option>【B】日程は確実だが、実施を迷っている</optnion>
                    <option>【C】日程は未定だが、機会があれば実施したい</optnion>
                    <option>【D】興味があるので参考までに聞きたい</optnion>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <th class="reqired">ツアー名</th>
              <td class="has-selecter">
                現地スタッフにもわかるように英文で、「旅行者名」「方面」「出発時期」などをご記入ください。
                <input type="text">
              </td>
            </tr>
            <tr>
              <th class="reqired">利用開始日</th>
              <td class="has-selecter">
                <div class="select-wrap">
                  <select name="" id="">
                    <option>2022</optnion>
                  </select>
                </div>
                年
                <div class="select-wrap">
                  <select name="" id="">
                    <option>00</optnion>
                  </select>
                </div>
                月
                <div class="select-wrap">
                  <select name="" id="">
                    <option>00</optnion>
                  </select>
                </div>
                日
              </td>
            </tr>
            <tr>
              <th class="reqired">利用開始時刻</th>
              <td class="has-selecter">
                <div class="select-wrap">
                  <select name="" id="">
                    <option>00</optnion>
                  </select>
                </div>
                時
                <div class="select-wrap">
                  <select name="" id="">
                    <option>00</optnion>
                  </select>
                </div>
                分
              </td>
            </tr>
            <tr>
              <th class="reqired">出発場所</th>
              <td>
                出発希望場所を入力してください（空港、ホテル、駅など）
                <input type="text">
              </td>
            </tr>
            <tr>
              <th class="reqired">出発場所</th>
              <td>
                出発希望場所を入力してください（空港、ホテル、駅など）
                <input type="text">
              </td>
            </tr>
            <tr>
              <th class="reqired">利用終了日</th>
              <td class="has-selecter">
                <div class="select-wrap">
                  <select name="" id="">
                    <option>2022</optnion>
                  </select>
                </div>
                年
                <div class="select-wrap">
                  <select name="" id="">
                    <option>00</optnion>
                  </select>
                </div>
                月
                <div class="select-wrap">
                  <select name="" id="">
                    <option>00</optnion>
                  </select>
                </div>
                日
              </td>
            </tr>
            <tr>
              <th class="reqired">利用終了時刻</th>
              <td class="has-selecter">
                <div class="select-wrap">
                  <select name="" id="">
                    <option>00</optnion>
                  </select>
                </div>
                時
                <div class="select-wrap">
                  <select name="" id="">
                    <option>00</optnion>
                  </select>
                </div>
                分
              </td>
            </tr>
            <tr>
              <th class="reqired">人数</th>
              <td>
              <table>
                    <tr>
                      <th>大人（12歳以上）</th>
                    <td><input type="text"> 名</td>
                  </tr>
                  <tr>
                    <th>小人（6-11歳）</th>
                    <td><input type="text"> 名</td>
                  </tr>
                  <tr>
                    <th>幼児（0-5歳）</th>
                    <td><input type="text"> 名</td>
                  </tr>
                  <tr>
                    <th>合計</th>
                    <td><span>0000</span> 名</td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <th class="reqired">旅行目的</th>
              <td>
                <input type="checkbox" id="" name="" checked><label for=""><a href="">プライバシーポリシー</a>に同意します</label>
              </td>
            </tr>
            <tr>
              <th class="reqired">訪問の目的</th>
              <td>
                <textarea name="" id="" cols="30" rows="10"></textarea>
              </td>
            </tr>
            <tr>
              <th>本人希望記入欄</th>
              <td>
              <textarea name="" id="" cols="30" rows="10"></textarea>
              </td>
            </tr>
          </table> -->
          <div class="text">
          送信前に当社の<a href="">「プライバシーポリシー <i class="far fa-window-restore"></i>」</a>をご確認いただき、<br>
          同意していただける場合は下の[プライバシーポリシーに同意します]をチェックし、確認にお進みください。
          </div>
          <div class="agreement">
            <input type="checkbox" id="" name="" checked><label for=""><a href="">プライバシーポリシー</a>に同意します</label><br>
            <input type="checkbox" id="" name="" checked><label for=""><a href="">プライバシーポリシー</a>に同意します</label><br>
            <input type="checkbox" id="" name="" checked><label for=""><a href="">プライバシーポリシー</a>に同意します</label>
          </div>
          <div class="btn-wrap"><input class="button" type="button"  value="内容を確認する"></div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php include 'footer-mypage.php';?>