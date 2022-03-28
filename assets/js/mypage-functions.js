let mypageUserNavBtn = document.querySelector('.js-user-nav-btn');
mypageUserNavBtn.addEventListener('click', function() {
	let userNavElmn = this.parentNode;
	let isOpen = userNavElmn.getAttribute('data-is-open');
	
	if(isOpen == 'false') {
		userNavElmn.setAttribute('data-is-open', 'true');
	} else {
		userNavElmn.setAttribute('data-is-open', 'false');
	}
	
});