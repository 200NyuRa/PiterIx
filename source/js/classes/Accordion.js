export default class Accordion {
	constructor($block, settings = {}) {
		this.$block = $block;
		this.settings = settings;
		this.$triggerExclusion = $block.find(`.${settings.triggerExclusionClass}`);
		this.$trigger = $block.find(`.${settings.triggerClass}`);
		this.$body = $block.find(`.${settings.bodyClass}`);
		this.$showItems = $block.find(`.${settings.showItem}`);
		this.$sibling = $block.siblings();
		this.isToTop = this.settings.toTop;
		this.isOpened = false;
		this.init();
	}

	init() {
		this.$trigger.on('click', (e) => {
           if(!$(e.target).closest(this.$triggerExclusion).length) {
               if (this.isOpened) {
                   this.close();
               } else {
                   this.open();
               }
		   }
		});
	}

	open() {
		this.isOpened = true;
		const isToTop = this.isToTop;
        const offsetTop = this.$block.offset().top;

		this.$body.slideDown(350);
		this.$body.addClass(`${this.settings.bodyClass}_active`);
		this.$trigger.addClass(`${this.settings.triggerClass}_active`);
		const triggerClass = this.settings.triggerClass;

		if(this.$sibling) {
			this.$sibling.each(function(i, siblingItem) {
                $(siblingItem).find(`.${triggerClass}_active`).trigger('click');
            });
        }

		if (this.settings.blockClass) {
			this.$block.addClass(`${this.settings.blockClass}_active`);
		}
		if (this.settings.showItem) {
			TweenMax.staggerFromTo(this.$showItems, 0.35, {
				opacity: 0,
				y: 10
			}, {
				opacity: 1,
				y: 0
			}, 0.05);
		}
	}

	close(faster = false) {
		this.isOpened = false;
		if (!faster) this.$body.slideUp(350);
		this.$body.removeClass(`${this.settings.bodyClass}_active`);
		this.$trigger.removeClass(`${this.settings.triggerClass}_active`);
		if (this.settings.blockClass) {
			this.$block.removeClass(`${this.settings.blockClass}_active`);
		}
		if (this.settings.showItem) {
			TweenMax.to(this.$showItems, 0.35, {
				opacity: 0
			});
		}
	}

	destroy() {
		this.$trigger.off('click');
		this.close(true);
		this.$body.attr('style', '');
	}
}