<form action="">
	<div class="payment-form-content">
		
		<div class="box-input">
			<p class="box-input-name">カード番号</p>
			<div class="box-input-content">
				<input type="text" name="" id="" placeholder="0000111122223333">
			</div>
			<p class="box-input-note">スペースやハイフンを入れないでください</p>
		</div>

		<div class="box-input">
			<p class="box-input-name">有効期限</p>
			<div class="box-input-content expiredate">
				<div class="expiredate-item expiredate-month">
					<select name="month" id="month">
						<?php for($month=1;$month<=12;$month++) { ?>
						<option 
							value="<?php echo ($month < 10) ? '0'.$month : $month; ?>">
							<?php echo ($month < 10) ? '0'.$month : $month; ?>
						</option>
						<?php } ?>
					</select>
				</div>
				<div class="expiredate-item expiredate-slash"><img src="assets/img/mypage-payment-slash.svg" alt=""></div>
				<div class="expiredate-item expiredate-year">
					<select name="year" id="year">
						<?php for($year=1920;$year<=2022;$year++) { ?>
						<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<p class="box-input-note">カードの有効期限を入力してください</p>
		</div>

		<div class="box-input">
			<p class="box-input-name">カード名義人</p>
			<div class="box-input-content"><input type="text" name="" id="" placeholder="TARO YAMADA"></div>
			<p class="box-input-note">※ クレジットカード名義人氏名</p>
		</div>

		<div class="box-input">
			<p class="box-input-name">セキュリティコード</p>
			<div class="box-input-content"><input class="input-short" type="text" name="" id=""></div>
			<p class="box-input-note">カード背面4桁もしくは3桁の番号を入力してください</p>
		</div>

		<div class="box-input">
			<p><a href="">クレジットカード情報を削除する</a></p>
		</div>

		<div class="box-input box-input-right">
			<p><button type="button" class="btn btn-blue-line">キャンセル</button></p>
			<p><button type="submit" class="btn btn-blue">保存</button></p>
		</div>
		
	</div>
</form>