/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    myFonts = ['Lora', 'Ubuntu'];
    for(var i = 0; i<myFonts.length; i++){
        config.font_names = config.font_names+';'+myFonts[i];
        myFonts[i] = 'http://fonts.googleapis.com/css?family='+myFonts[i].replace(' ','+');
    }
    config.image2_captionedClass= ['image-captioned'];
    config.image2_alignClasses = ['image-left', 'image-center', 'image-right'];
    config.contentsCss = ['contents.css'].concat(myFonts);
    config.allowedContent = true;
    CKEDITOR.dtd.$removeEmpty.span = 0;
    CKEDITOR.dtd.$removeEmpty.blockquote = 0;
};
