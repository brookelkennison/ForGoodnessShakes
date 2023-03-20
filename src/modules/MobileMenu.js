class MobileMenu {
	constructor() {
		this.menu = document.querySelector('.mobile-menu');
		this.openButton = document.querySelector('.mobile-menu-icon');
		this.body = document.body;
		this.events();
	}

	events() {
		this.openButton.addEventListener('click', () => this.openMenu());
		this.body.addEventListener('click', () => this.closeMenu());
	}

	openMenu() {
		this.body.classList.toggle('show-menu');
		this.menu.classList.toggle('show-menu');
		if (this.menu.classList.contains('show-menu')) {
			this.openButton.src = this.openButton.src.replace('assets/menu-rounded.png', 'assets/menu-close.png');
		} else {
			this.openButton.src = this.openButton.src.replace('assets/menu-close.png', 'assets/menu-rounded.png');
		}
	}

	closeMenu() {
		// don't allow for links
		if (event.target.tagName !== 'a' && event.target.tagName !== 'A') {
			if (event.target !== this.openButton && this.body.classList.contains('show-menu')) {
				if (!event.target.classList.contains('mobile-menu')) {
					this.menu.classList.remove('show-menu');
					this.body.classList.remove('show-menu');
					this.openButton.src = this.openButton.src.replace('assets/menu-close.png', 'assets/menu-rounded.png');
				}
			}
		}
	}
}

export default MobileMenu;
