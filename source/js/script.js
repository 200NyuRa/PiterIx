import app from './app';
import * as plugins from 'glob:plugins/**/*.js';
app.plugins.registerMultiple(plugins);

$(function(){

	app.dom.$root.plugins([
		'participant',
		'form',
		'modal',
		'header',
		'table',
		'price',
		'slider-logo',
		'tooltip',
		'tabs'
	]);
});
