	window.onscroll = checkscroll;

	function checkscroll() {
		topbar = document.getElementsByClassName("navbar")[0];
		if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
			topbar.className = topbar.className.replace(" scroll", "") + " scroll";
		} else {
			topbar.className = topbar.className.replace(" scroll", "");
		}
	}