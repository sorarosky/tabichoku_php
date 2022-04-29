<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>

<div class="contents-wrap mypage mypage-traveler-info">

  <div class="main-aside-wrap">

    <?php include 'components/aside-mypage.php';?>

    <main class="main dashboard">

      <div class="main-container">
        <div class="main-header">
          <h2 class="main-header-title">旅行者情報</h2>
        </div>

        <?php if($_GET['mode'] == 'edit') { ?>
          <div class="traveler-content-header traveler-content-header-no-border">
            <p class="title">お客様情報</p>
          </div>

          <?php include('components/mypage-traveler-form.php'); ?>

        <?php } else if($_GET['mode'] == 'add') { ?>
          <div class="traveler-content-header traveler-content-header-no-border">
            <p class="title">お客様情報</p>
          </div>

          <?php include('components/mypage-traveler-form.php'); ?>

        <?php } else { ?>

          <div class="traveler-content-header">
            <p class="title">旅行者パスポートデータ</p>
            <p class="button"><a href="?mode=add"><button class="btn btn-blue">＋新規追加</button></a></p>
            <p class="text">全旅行者のパスポートデータを追加してください。</p>
          </div>

          <div class="traveler-content">
            <?php if(!$_GET['is_traveler_exist']) { ?>
              <p>旅行者が登録されていません。</p>
              <p>「＋新規追加」より旅行者を追加してください。</p>
            <?php } else { ?>
              
              <div class="list-traveler">

                <?php for($i=0;$i<3;$i++) { ?>
                <div class="list-traveler-item">
                  <div class="content">
                    <p class="name">YAMADA<span>TARO</span></p>
                    <p class="date">1900/00/00</p>
                    <p class="sex">M</p>
                    <p class="number">MA123456789</p>
                  </div>
                  <div class="button">
                    <a href="?mode=edit"><button class="btn btn-blue">編集</button></a>
                  </div>
                </div>
                <?php } ?>  

              </div>
              
            <?php } ?>
          </div>
        <?php } ?>
      


      </div>

    </main>

  </div>

</div>
<?php include 'footer-mypage.php';?>