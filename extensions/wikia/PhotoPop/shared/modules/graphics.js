var exports = exports || {};

define.call(exports, ['modules/settings'], function(settings){

	var images = {},
	isApp = typeof Titanium != 'undefined',
	prefix = (isApp) ? '' : 'extensions/wikia/PhotoPop/',
	graphics = settings.images,
	preload, imagePath, ext;

	for(var prop in graphics){
		preload = new Image();
		imagePath = graphics[prop];
		ext = (imagePath.indexOf('.jpeg') >= 0 || imagePath.indexOf('.png') >= 0 || imagePath.indexOf('.gif') >= 0) ? '' : '.png';
		preload.src = images[prop] = prefix + "shared/images/" + graphics[prop] + ext;
	}

	return {
		getAsset: function(id) {
			return  images[id];
		},

		getPicture: function(path){
			if(Wikia.Platform.is('app')){
				return window.dataPath + '/' + path.replace(/[:\/%-]/g, '_');
			} else {
				return path;
			}
		}
	};
});