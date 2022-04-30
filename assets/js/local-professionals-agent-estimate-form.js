window.onload = function () {

	// ホテル、室条件・指定
	if ($('.js-switch-disabled').length) {

		let radioBtn = document.querySelectorAll('.js-switch-disabled-radio');
		radioBtn.forEach(function(elmn, index) {
			elmn.addEventListener('change', function(event) {
				let radioBtnId = this.getAttribute('id');
				let checkboxItem = document.querySelectorAll('.js-switch-disabled .item input[type="checkbox"]');
				if(radioBtnId == 'huey') {
					checkboxItem.forEach(function(elmn, index) {
						elmn.removeAttribute('disabled');
					});
				} else {
					checkboxItem.forEach(function(elmn, index) {
						elmn.setAttribute('disabled', true);
					});
				}
			});
		});
	}
}