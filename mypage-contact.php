<?php include 'header-mypage.php';?>
<?php include 'breadcrumb.php';?>
<div class="contents-wrap mypage mypage-contact">

  <div class="main-aside-wrap">

    <?php include 'components/aside-mypage.php';?>

    <main class="main dashboard">

		<div class="main-container">

			<div class="main-header">
				<h2 class="main-header-title">たびチョクに旅の相談</h2>
			</div>

			<div class="contact-note">
				<ul class="note-list-square">
					<li>■ 万一、変更・取消が発生した場合は速やかにメッセージをお送りください。</li>
					<li>■ すでにお問い合わせいただいている件については、ツアー名または受付番号を件名にご記入ください。</li>
					<li>■ メッセージをご利用の際は、<a href="">利用規約</a>にご留意ください。</li>
				</ul>
				<ul class="note-list-sub">
					<li>プライバシーの権利を侵害する行為</li>
					<li>名誉権その他の権利または利益を侵害する行為</li>
					<li>ご自身の旅行以外の目的で行う営業行為</li>
				</ul>
			</div>

			<div class="block tour-message-block">

				<div class="textarea-wrap">
					<textarea name="" id="" placeholder="ここにメッセージ内容を入力"></textarea>
				</div>
				<div class="message-controll">
					<div>
						<input type="file" id="file" name="" hidden>
						<label for="file" class="label-file-text-icon">
							<img src="assets/img/mypage-message-file-attached.svg" alt="">ファイルを添付する
						</label>
					</div>
					<div>
						<button class="btn btn-blue">送信</button>
					</div>
				</div>

				<div class="message-window">

					<div class="message-window-wrap">

					<?php for($i=0;$i<2;$i++) { ?>
					<div class="box-message box-message-company">

						<div class="campany-flex">

							<div class="company-portrait"><img src="assets/img/mypage-portrait-no-image.svg" alt=""></div>
							<div class="message-wrap">
								<p class="info sp"><span>0000/00/00 00:00</span><br \><span>たびチョク事務局</span></p>
								<div class="bubble pc">
									<p>メッセージ本文テキストが入る。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
									<p class="attached-file"><a href=""><img src="assets/img/mypage-message-file-attached.svg" alt="">ファイル名.jpg</a></p>
									<p class="attached-file"><a href=""><img src="assets/img/mypage-message-file-attached.svg" alt="">ファイル名.jpg</a></p>
								</div>
								<p class="info pc"><span>0000/00/00 00:00</span> <span>アラビアンエクスプレス,パートナー名</span></p>
							</div>

						</div>

						<div class="bubble sp">
							<p>メッセージ本文テキストが入る。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
							<p class="attached-file"><a href=""><img src="assets/img/mypage-message-file-attached.svg" alt="">ファイル名.jpg</a></p>
							<p class="attached-file"><a href=""><img src="assets/img/mypage-message-file-attached.svg" alt="">ファイル名.jpg</a></p>
						</div>

					</div>

					<div class="box-message box-message-user">
						
						<div class="message-wrap">
							<p class="info sp"><span>0000/00/00 00:00</span></p>
							<div class="bubble">
								<p>メッセージ本文テキストが入る。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
								<p class="attached-file"><a href=""><img src="assets/img/mypage-message-file-attached.svg" alt="">ファイル名.jpg</a></p>
								<p class="attached-file"><a href=""><img src="assets/img/mypage-message-file-attached.svg" alt="">ファイル名.jpg</a></p>
							</div>
							<p class="info pc"><span>0000/00/00 00:00</span></p>
						</div>

					</div>
					<?php } ?>

					</div>

				</div>

			</div>

		</div>

    </main>

  </div>

</div>
<?php include 'footer-mypage.php';?>