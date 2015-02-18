/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	config.toolbar = [
    { name: 'source',       items: [ 'ShowBlocks', 'Source' ] },
    { name: 'clipboard',    items: [ 'Undo', 'Redo', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord'  ] },
    { name: 'editing',      items: [ 'Find', 'Replace', 'SelectAll', 'Scayt' ] },

    { name: 'p2',           items: [ 'Blockquote', 'Outdent', 'Indent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
    { name: 'links',        items: [ 'Link', 'Unlink', 'Anchor' ] },
    { name: 'paragraph',    items: [ 'NumberedList', 'BulletedList' ] },
    { name: 'insert',       items: [ 'CreatePlaceholder', 'CreateDiv', 'Image', 'Table', 'HorizontalRule', 'SpecialChar', 'Iframe' ] },

    //{ name: 'styles',         items: [ 'Styles', 'Format' ] },
    { name: 'basicstyles',  items: [ 'Bold', 'Italic', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
    { name: 'styles',       items: [ 'Format' ] },
    { name: 'morestyles',   items: [ 'Font', 'FontSize' ] },
    { name: 'colors',       items: [ 'BGColor', 'TextColor' ] }
];

// here is one custom toolbar
config.toolbar_mycustom1 = [
    { name: 'source',       items: [ 'ShowBlocks', 'Source' ] },
    { name: 'clipboard',    items: [ 'Undo', 'Redo', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord'  ] },
    { name: 'editing',      items: [ 'Find', 'Replace', 'SelectAll', 'Scayt' ] }
];

// here is another custom toolbar
config.toolbar_mycustom2 = [
    { name: 'styles',       items: [ 'Format' ] },
    { name: 'morestyles',   items: [ 'Font', 'FontSize' ] },
    { name: 'colors',       items: [ 'BGColor', 'TextColor' ] }
];

// ...other config vars here
};
