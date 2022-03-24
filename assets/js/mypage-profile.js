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
}