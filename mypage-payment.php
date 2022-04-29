<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>

<div class="contents-wrap mypage mypage-payment">

  <div class="main-aside-wrap">

    <?php include 'components/aside-mypage.php';?>

    <main class="main dashboard">

      <div class="main-container">
        <div class="main-header">
          <h2 class="main-header-title">お支払い情報</h2>
        </div>

        <?php if($_GET['mode'] == 'edit') { ?>
          <div class="payment-content-header">
            <p class="title">クレジットカード情報</p>
          </div>

          <?php include('components/mypage-payment-edit.php'); ?>

        <?php } else { ?>

          <div class="payment-content-header">
            <p class="title">登録中のクレジットカード</p>
            <p class="button"><button class="btn btn-blue">＋新規追加</button></p>
          </div>

          <div class="payment-content">
            <?php if(!$_GET['is_payment_exist']) { ?>
              <p>ご登録のお支払い情報はありません。</p>
            <?php } else { ?>
              <div class="list-payment">

                <div class="list-payment-item">
                  <div class="content">
                    <p class="card-type">VISA(カード会社名)</p>
                    <p class="card-number">末尾0000</p>
                    <p class="card-expire">有効期限 00/00</p>
                    <p class="card-name">TABI TARO</p>
                  </div>
                  <div class="button">
                    <a href="?mode=add"><button class="btn btn-blue">編集</button></a>
                  </div>
                </div>
                
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      


      </div>

    </main>

  </div>

</div>
<?php include 'footer-mypage.php';?>