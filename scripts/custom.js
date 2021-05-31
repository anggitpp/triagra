const navIndex = document.querySelector('#fixedmenuindex');

if(navIndex === null) {
	document.body.classList.add('hilang');
	const nav = document.querySelector('#fixedmenu');
	const navTop = nav.offsetTop;

	function stickyNavigation() {
		console.log('navTop = ' + navTop);
		console.log('scrollY = ' + window.scrollY);

		if (window.scrollY != 0) {
			document.body.classList.remove('hilang');
			document.body.classList.add('fixed-nav');
		} else {
			document.body.classList.remove('fixed-nav');
			document.body.classList.add('hilang');
		}
	}

	window.addEventListener('scroll', stickyNavigation);
}else {
	const navTopIndex = navIndex.offsetTop;

	function stickyNavigationIndex() {
		console.log('navTop = ' + navTopIndex);
		console.log('scrollY = ' + window.scrollY);

		if (window.scrollY >= navTopIndex) {
			document.body.classList.add('fixed-nav');
		} else {
			document.body.classList.remove('fixed-nav');
		}
	}
	window.addEventListener('scroll', stickyNavigationIndex);
}


