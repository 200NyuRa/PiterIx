import Module from './Module';

export default class ScrollModule extends Module {

	constructor(app) {
		super(app);
		this.body = document.getElementsByTagName('body')[0];
		this.bodyScrollTop = null;
		this.locked = false;
	}

	lockScroll() {
		if (!this.locked) {
			this.bodyScrollTop = (typeof window.pageYOffset !== 'undefined') ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
			this.body.classList.add('scroll-locked');
			this.body.style.top = `-${this.bodyScrollTop}px`;
			this.locked = true;
		};
	}

	unlockScroll() {
		if (this.locked) {
			this.body.classList.remove('scroll-locked');
			this.body.style.top = null;
			window.scrollTo(0, this.bodyScrollTop);
			this.locked = false;
		}
	}

}
