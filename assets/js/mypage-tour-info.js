window.onload = function () {

	let openModalBtn = document.querySelectorAll('.js-open-passenger-modal');
	openModalBtn.forEach(function(elmn, index) {
		elmn.addEventListener('click', function(event) {
			let modal = document.querySelector('.js-modal-window');
			modal.setAttribute('data-is-open', 'true');
		});
	});

	let modalCloseBtn = document.querySelector('.js-modal-close');
	modalCloseBtn.addEventListener('click', function(event) {
		let modal = document.querySelector('.js-modal-window');
		modal.setAttribute('data-is-open', 'false');
	});
}
