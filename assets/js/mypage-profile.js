window.onload = function () {

	let addressAutoFillPersonalBtn = document.querySelector('.js-zip-personal-btn');
	addressAutoFillPersonalBtn.addEventListener('click', function(event) {
		let inputZip = document.querySelector('.js-zip-personal');
		if( inputZip.value != '' ) {
			AjaxZip3.zip2addr( inputZip, '', 'pref-personal', 'addr-personal', 'strt-personal');
		}
	});

	let addressAutoFillWorkBtn = document.querySelector('.js-zip-work-btn');
	addressAutoFillWorkBtn.addEventListener('click', function(event) {
		let inputZip = document.querySelector('.js-zip-work');
		if( inputZip.value != '' ) {
			AjaxZip3.zip2addr( inputZip, '', 'pref-work', 'addr-work', 'strt-work');
		}
	});

	
	let defaultNoImgSrc = 'assets/img/mypage-profile-no-image.svg';
	let inputFile = document.querySelector('.js-file-input');
	inputFile.addEventListener('change', function() {
		let previewImgElmn = document.querySelector('.js-img-preview');
		if( this.files[0] ) {
			let previewSrc = URL.createObjectURL(this.files[0]);
			previewImgElmn.src = previewSrc;
		} else {
			previewImgElmn.src = defaultNoImgSrc;
		}
	});

	let inputFileDeleteBtn = document.querySelector('.js-file-delete');
	inputFileDeleteBtn.addEventListener('click', function() {
		let inputFile = document.querySelector('.js-file-input');
		let previewImgElmn = document.querySelector('.js-img-preview');
		inputFile.value = '';
		previewImgElmn.src = defaultNoImgSrc;
	});

	let birthDateInput = document.querySelector('.js-input-birthdate');
	birthDateInput.addEventListener('change', function() {
		let regex = new RegExp('(19|20)[0-9][0-9]\/[0-9][0-9]\/[0-9][0-9]$');
		let regexResult = regex.exec(this.value);

		if( regexResult ) {
			let arrBirthDate = regexResult[0].split('/');
			let birthYear = arrBirthDate[0];
			let birthMonth = arrBirthDate[1];
			let birthDay = arrBirthDate[2];

			let today = new Date();
			let currentYear = today.getFullYear();
			let currentMonth = today.getMonth() + 1;
			let currentDay = today.getDate();

			let age = currentYear - birthYear;
			age = (currentMonth < birthMonth && currentDay < birthDay) ? age - 1 : age;

			document.querySelector('.js-age').innerHTML = age;
		}
	
	});

}