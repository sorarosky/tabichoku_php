<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>

<div class="contents-wrap mypage mypage-template">

  <div class="main-aside-wrap">

    <?php include 'components/aside-mypage.php';?>

    <main class="main dashboard">

      <div class="main-container">
        <div class="main-header">
          <h2 class="main-header-title">テンプレート</h2>
        </div>

        <div class="list-template">
          <?php include('php-data/mypage-template-data.php'); ?>

          <?php foreach($arr_template_file as $template_file) { ?>
          <div class="list-template-item">
            <div class="list-template-item-header"><?php echo $template_file['file_name'];?></div>
            <div class="list-template-item-btn"><a href=""><button class="btn btn-blue"><?php echo $template_file['btn_name'];?></button></a></div>
          </div>
          <?php } ?>         

        </div>
      </div>

    </main>

  </div>

</div>
<?php include 'footer-mypage.php';?>