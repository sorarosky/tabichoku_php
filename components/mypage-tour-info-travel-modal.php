<div class="modal-passenger js-modal-window" data-is-open="false">


	<div class="modal-content">

		<div class="close js-modal-close">
			<img src="assets/img/mypage-modal-close-button.svg" alt="">
		</div>
		
		<div class="list-wrap">

			<div class="list-passenger">
				<div class="list-passenger-header">
					<p class="name">名前</p>
					<p class="birthdate">生年月日</p>
					<p class="sex">性別</p>
					<p class="passport">パスポート</p>
					<p class="spacer"></p>
				</div>
				
				<?php for($i=0;$i<6;$i++) { ?>
				<div class="list-passenger-item">
					
					<div class="list-passenger-item-header">
						<div class="name">
							<p>名前</p>
							<p>&nbsp;</p>
						</div>
						<p class="birthdate">生年月日</p>
						<p class="sex">性別</p>
						<p class="passport">パスポート</p>
						<p class="spacer"></p>
					</div>
					<div class="list-passenger-item-content">
						<div class="name">
							<p class="kanji">山田<span>太郎</span></p>
							<p class="furigana">YAMADA<span>TARO</span></p>
						</div>
						<div class="birthdate">
							<p>1900/00/00</p>
						</div>
						<div class="sex">
							<p>M</p>
						</div>
						<div class="passport">
							<p>MA123456789</p>
						</div>
						<div class="status">
							<p><button class="btn btn-blue-line">選択済</button></p>
						</div>
					</div>
					<div class="list-passenger-item-status">
						<p><button class="btn btn-blue-line">選択済</button></p>
					</div>
					
				</div>

				<div class="list-passenger-item">
					
					<div class="list-passenger-item-header">
						<div class="name">
							<p>名前</p>
							<p>&nbsp;</p>
						</div>
						<p class="birthdate">生年月日</p>
						<p class="sex">性別</p>
						<p class="passport">パスポート</p>
						<p class="spacer"></p>
					</div>
					<div class="list-passenger-item-content">
						<div class="name">
							<p class="kanji">山田<span>太郎</span></p>
							<p class="furigana">YAMADA<span>TARO</span></p>
						</div>
						<div class="birthdate">
							<p>1900/00/00</p>
						</div>
						<div class="sex">
							<p>M</p>
						</div>
						<div class="passport">
							<p>MA123456789</p>
						</div>
						<div class="status">
							<p><button class="btn btn-blue">選択</button></p>
						</div>
					</div>
					<div class="list-passenger-item-status">
						<p><button class="btn btn-blue">選択</button></p>
					</div>
					
				</div>

				
				<?php } ?>

			</div>

		</div>

		<div class="panel">
			<div class="total">
				<p>大人 <span>00</span>名</p>
				<p>小人 <span>00</span>名</p>
				<p>幼児 <span>00</span>名</p>
				<p>合計 <span>00</span>名</p>
			</div>

			<div class="submit">
				<p><button class="btn btn-blue-line">キャンセル</button></p>
				<p><button class="btn btn-blue">保存</button></p>
			</div>
		</div>

	</div>

</div>