/**
 * Nodes
 *
 * for NodesController
 */
var Slideshows = {};

/**
 * functions to execute when document is ready
 *
 * only for NodesController
 *
 * @return void
 */
Slideshows.documentReady = function() {
	Slideshows.changeItemType();
}

/**
 * Submits form for filtering Nodes
 *
 * @return void
 */
Slideshows.changeItemType = function() {
	$('#SlideshowItemType').change(function(elt) {

		var value = elt.target.value;

		var input;
		$("#SlideshowItemContent").remove();
		if ( value == 0 ) {
			console.log('image');
			input = '<input type="text" id="SlideshowItemContent" class="input-block-level chooser" required="required" name="data[SlideshowItem][content]"/>';
		}
		if ( value == 1 ) {
			console.log('youtube');
			input = '<input type="url" id="SlideshowItemContent" class="input-block-level" required="required" name="data[SlideshowItem][content]"/>';

		}
		if ( value == 2 ) {
			console.log('html');
			input = '<textarea required="required" id="SlideshowItemContent" rows="6" cols="30" class="input-block-level" name="data[SlideshowItem][content]" style="overflow: hidden; height: 137px;"></textarea>';
		}

		$(input).appendTo($('.slideshow-content'));
		return false;
	});
}

/**
 * document ready
 *
 * @return void
 */
$(document).ready(function() {
	if (Croogo.params.controller == 'slideshowitems') {
		Slideshows.documentReady();

	}

});

Croogo.Wysiwyg.choose = function(url, title, description) {
	//var params = window.location.href.split('?')[1].split('&');
	
console.log(url);
//	if (typeof paramsObj['CKEditorFuncNum'] != 'undefined') {
//		window.top.opener.CKEDITOR.tools.callFunction(paramsObj['CKEditorFuncNum'], Croogo.Wysiwyg.uploadsPath + url);
//		window.top.close();
//	}
};