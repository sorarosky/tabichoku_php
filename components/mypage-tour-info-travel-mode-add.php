<div class="travel-content-add">
          
	<form action="">
		<div class="travel-form">
		
			<div class="travel-form-item">
				<div class="name">旅行者代表</div>
				<div class="detail">
					<div class="button-list">
						<div class="message">
						<p>代表者を選択してください</p>
						</div>
						<div class="button"><button type="button" class="btn btn-blue js-open-passenger-modal">代表者を追加</button></div>
					</div>
				</div>
			</div>

			<div class="travel-form-item">
				<div class="name">同行者</div>
				<div class="detail">
					<div class="button-list">
						<div class="message">
						<p>同行者を選択してください</p>
						</div>
						<div class="button"><button type="button" class="btn btn-blue js-open-passenger-modal">同行者を追加</button></div>
					</div>
					<div class="button-list">
						<div class="message">
						<p><a href="">テンプレート</a>よりダウンロードし、必要情報を記入して添付してください。</p>
						</div>
						<div class="button">
							<input class="js-file-input" type="file" id="file" name="" hidden>
							<label for="file" class="label-file btn btn-blue js-file">ファイルを添付</label>
						</div>
					</div>
				</div>
			</div>

			<div class="travel-form-item">
				<div class="name">出国便</div>
				<div class="detail">
					<p>出国便の情報を追加してください。</p>
					<div class="box-input">
						<p class="box-input-name">出発日</p>
						<div class="box-input-content box-input-content-datetime">
							<div class="datetime datetime-year">
								<select name="year" id="year">
									<?php for($year=1920;$year<=2022;$year++) { ?>
									<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="datetime datetime-month">
								<select name="month" id="month">
									<?php for($month=1;$month<=12;$month++) { ?>
									<option 
										value="<?php echo ($month < 10) ? '0'.$month : $month; ?>">
										<?php echo ($month < 10) ? '0'.$month : $month; ?>
									</option>
									<?php } ?>
								</select>
							</div>
							<div class="datetime datetime-day">
								<select name="day" id="day">
									<?php for($day=1;$day<32;$day++) { ?>
									<option 
										value="<?php echo ($day < 10) ? '0'.$day : $day; ?>">
										<?php echo ($day < 10) ? '0'.$day : $day; ?>
									</option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>

					<div class="box-input box-input-no-margin">
						<p class="box-input-name"></p>
						<div class="box-input-content box-input-content-datetime">
							<div class="datetime datetime-hour">
								<select name="hour" id="hour">
									<?php for($hour=0;$hour<=23;$hour++) { ?>
									<option 
										value="<?php echo ($hour < 10) ? '0'.$hour : $hour; ?>">
										<?php echo ($hour < 10) ? '0'.$hour : $hour; ?>
									</option>
									<?php } ?>
								</select>
							</div>
							<div class="datetime datetime-min">
								<select name="min" id="min">
									<?php for($min=0;$min<59;$min++) { ?>
									<option 
										value="<?php echo ($min < 10) ? '0'.$min : $min; ?>">
										<?php echo ($min < 10) ? '0'.$min : $min; ?>
									</option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>

					<div class="box-input">
						<p class="box-input-name">出発地</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>

					<div class="box-input">
						<p class="box-input-name">便名</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>

				</div>
			</div>

			<div class="travel-form-item">
				<div class="name">帰国便</div>
				<div class="detail">
					<p>帰国便の情報を追加してください。</p>
					<div class="box-input">
						<p class="box-input-name">帰国日</p>
						<div class="box-input-content box-input-content-datetime">
							<div class="datetime datetime-year">
								<select name="year" id="year">
									<?php for($year=1920;$year<=2022;$year++) { ?>
									<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="datetime datetime-month">
								<select name="month" id="month">
									<?php for($month=1;$month<=12;$month++) { ?>
									<option 
										value="<?php echo ($month < 10) ? '0'.$month : $month; ?>">
										<?php echo ($month < 10) ? '0'.$month : $month; ?>
									</option>
									<?php } ?>
								</select>
							</div>
							<div class="datetime datetime-day">
								<select name="day" id="day">
									<?php for($day=1;$day<32;$day++) { ?>
									<option 
										value="<?php echo ($day < 10) ? '0'.$day : $day; ?>">
										<?php echo ($day < 10) ? '0'.$day : $day; ?>
									</option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>

					<div class="box-input box-input-no-margin">
						<p class="box-input-name"></p>
						<div class="box-input-content box-input-content-datetime">
							<div class="datetime datetime-hour">
								<select name="hour" id="hour">
									<?php for($hour=0;$hour<=23;$hour++) { ?>
									<option 
										value="<?php echo ($hour < 10) ? '0'.$hour : $hour; ?>">
										<?php echo ($hour < 10) ? '0'.$hour : $hour; ?>
									</option>
									<?php } ?>
								</select>
							</div>
							<div class="datetime datetime-min">
								<select name="min" id="min">
									<?php for($min=1;$min<59;$min++) { ?>
									<option 
										value="<?php echo ($min < 10) ? '0'.$min : $min; ?>">
										<?php echo ($min < 10) ? '0'.$min : $min; ?>
									</option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>

					<div class="box-input">
						<p class="box-input-name">出発地</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>

					<div class="box-input">
						<p class="box-input-name">便名</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>
					
				</div>
			</div>

			<div class="travel-form-item">
				<div class="name">渡航情報備考欄</div>
				<div class="detail">
					<div class="box-textarea">
						<textarea name="" id=""></textarea>
					</div>
				</div>
			</div>

			<div class="travel-form-item js-hotel-parent">
				<div class="name name-flex">
					<p>海外宿泊先<p>
					<p class="js-only-parent"><button type="button" class="btn btn-blue">追加</button></p>
				</div>
				<div class="detail">
					<p class="js-only-parent">滞在宿泊先の情報を追加してください。</p>
					<p class="js-only-parent">複数ある場合は追加を押下し、項目を追加してください。</p>

					<div class="box-input box-input-no-margin">
						<p class="box-input-name">滞在日(イン)</p>
						<div class="box-input-content box-input-content-datetime">
							<div class="datetime datetime-year">
								<select name="year" id="year">
									<?php for($year=1920;$year<=2022;$year++) { ?>
									<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="datetime datetime-month">
								<select name="month" id="month">
									<?php for($month=1;$month<=12;$month++) { ?>
									<option 
										value="<?php echo ($month < 10) ? '0'.$month : $month; ?>">
										<?php echo ($month < 10) ? '0'.$month : $month; ?>
									</option>
									<?php } ?>
								</select>
							</div>
							<div class="datetime datetime-day">
								<select name="day" id="day">
									<?php for($day=1;$day<32;$day++) { ?>
									<option 
										value="<?php echo ($day < 10) ? '0'.$day : $day; ?>">
										<?php echo ($day < 10) ? '0'.$day : $day; ?>
									</option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>

					<div class="box-input">
						<p class="box-input-name">滞在日(アウト)</p>
						<div class="box-input-content box-input-content-datetime">
							<div class="datetime datetime-year">
								<select name="year" id="year">
									<?php for($year=1920;$year<=2022;$year++) { ?>
									<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="datetime datetime-month">
								<select name="month" id="month">
									<?php for($month=1;$month<=12;$month++) { ?>
									<option 
										value="<?php echo ($month < 10) ? '0'.$month : $month; ?>">
										<?php echo ($month < 10) ? '0'.$month : $month; ?>
									</option>
									<?php } ?>
								</select>
							</div>
							<div class="datetime datetime-day">
								<select name="day" id="day">
									<?php for($day=1;$day<32;$day++) { ?>
									<option 
										value="<?php echo ($day < 10) ? '0'.$day : $day; ?>">
										<?php echo ($day < 10) ? '0'.$day : $day; ?>
									</option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>

					<div class="box-input">
						<p class="box-input-name">滞在地</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>

					<div class="box-input">
						<p class="box-input-name">滞在先名</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>

				</div>
			</div>

			<div class="travel-form-item">
				<div class="name">海外用通信端末</div>
				<div class="detail">
					<div class="box-input">
						<p class="box-input-name">電話番号</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>
					<div class="box-input">
						<p class="box-input-name">メールアドレス</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>
				</div>
			</div>
			
			<div class="travel-form-item">
				<div class="name">旅行中連絡先</div>
				<div class="detail">
					<div class="box-input">
						<p class="box-input-name">氏名</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>
					<div class="box-input">
						<p class="box-input-name">続柄</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>
					<div class="box-input">
						<p class="box-input-name">電話番号</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>
					<div class="box-input">
						<p class="box-input-name">メールアドレス</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>
				</div>
			</div>

			<div class="travel-form-item">
				<div class="name">国内緊急連絡先</div>
				<div class="detail">
				<div class="box-input">
						<p class="box-input-name">氏名</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>
					<div class="box-input">
						<p class="box-input-name">続柄</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>
					<div class="box-input">
						<p class="box-input-name">電話番号</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>
					<div class="box-input">
						<p class="box-input-name">メールアドレス</p>
						<div class="box-input-content">
							<input type="text" name="" id="">
						</div>
					</div>
				</div>
			</div>
			
			<div class="travel-form-item travel-form-right">
				<div class="detail">
					<button type="button" class="btn btn-blue-line">キャンセル</button>
					<button type="submit" class="btn btn-blue">保存</button>
				</div>
			</div>

		</div>
	</form>

</div>