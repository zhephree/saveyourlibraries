document.addEventListener('DOMContentLoaded', function(e){
	let mobileNavMenu = document.getElementById('mobile-nav-menu');
	let mobileNavScrim = document.getElementById('mobile-nav-scrim');
	let body = document.getElementsByTagName('body')[0];
	document.getElementById('mobile-nav-toggle').addEventListener('click', function(e){
		e.preventDefault();

		mobileNavMenu.classList.toggle('visible');
		mobileNavScrim.classList.toggle('visible');
		body.classList.toggle('no-scroll');
	});

	mobileNavScrim.addEventListener('click', function(e){
		mobileNavMenu.classList.remove('visible');
		mobileNavScrim.classList.remove('visible');
		body.classList.remove('no-scroll');
	})
})