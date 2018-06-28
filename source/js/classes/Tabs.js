export default class Tabs {

	constructor($block, options = {}) {
		this.options = options;
		this.changeTabCB = options.changeTabCB;
		this.listClass = options.listClass;
		this.itemClass = options.itemClass;
		this.contentListClass = options.contentListClass;
		this.contentItemClass = options.contentItemClass;
		this.autoHeight = options.autoHeight;
		this.hasSelect = options.hasSelect;
		this.$block = $block;
		this.$list = $block.find('.' + this.listClass);
		this.$item = $block.find('.' + this.itemClass);
		this.$contentList = $block.find('.' + this.contentListClass);
		this.$contentItems = $block.find('.' + this.contentItemClass);
		this.activeIndex = 0;
		this.$item.each((index, item) => {
			if ($(item).hasClass(this.itemClass + '_active')) {
				this.activeIndex = index;
			}
		});
		this.init();
	}

	init() {
		var self = this;
		this.setItem(this.activeIndex);

		this.$item.on('click', function () {
			var index = $(this).index();
			self.activeIndex = index;
			self.setItem(self.activeIndex);
			if(self.changeTabCB) {
				self.changeTabCB(index);
			}
		});
		if (this.hasSelect && app.device.isPhone) {
			this.$list.css('display', 'none');
			var $selectList = $('<select class="tabs__list_select" />').prependTo(this.$block);
			this.$item.each((index, item) => {
				const title = $(item).text();
				const $selectItem = $('<option class="tabs__list_select" />').text(title).appendTo($selectList);
				$selectItem.attr('value', index);
			});
			$selectList.niceSelect();
			$selectList.on('change', (e) => {
				const index = $selectList.val();
				self.activeIndex = index;
				self.setItem(self.activeIndex);
			});
		}
	}

	setHeight() {
		var height = this.$contentItems.eq(this.activeIndex).height();
		this.$contentList.height(height);
	}

	setItem(index) {
		if (this.autoHeight) this.setHeight(index);
		this.$item.removeClass(this.itemClass + '_active');
		this.$contentItems.removeClass(this.contentItemClass + '_active');
		this.$item.eq(index).addClass(this.itemClass + '_active');
		this.$contentItems.eq(index).addClass(this.contentItemClass + '_active');
	}

}
